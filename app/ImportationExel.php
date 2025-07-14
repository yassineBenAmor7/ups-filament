<?php

namespace App;

use App\Jobs\ProcessExcelImport;
use Filament\Actions;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\FileUpload;
use Filament\Notifications\Notification;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use EightyNine\ExcelImport\ExcelImportAction;
use Maatwebsite\Excel\Facades\Excel;
use Throwable;

trait ImportationExel
{
    /**
     * Configure and return an Excel import action.
     */


    public function importationExel(array $options = []): ExcelImportAction
    {
        $modelClass = method_exists($this, 'getModel') ? $this->getModel() : null;
        $instance = new $modelClass;
        $table = $instance->getTable();
        $database = DB::getDatabaseName();

        $uniqueConstraints = DB::select("
                            SELECT
                                s.COLUMN_NAME,
                                s.INDEX_NAME
                            FROM
                                information_schema.STATISTICS s
                            WHERE
                                s.TABLE_SCHEMA = ?
                                AND s.TABLE_NAME = ?
                                AND s.NON_UNIQUE = 0
                                AND s.INDEX_NAME != 'PRIMARY'
                        ", [$database, $table]);

        $uniqueConstraints=array_column($uniqueConstraints,'COLUMN_NAME');
        $requiredColumns = DB::select("
                            SELECT
                                COLUMN_NAME
                            FROM
                                information_schema.COLUMNS
                            WHERE
                                TABLE_SCHEMA = ?
                                AND TABLE_NAME = ?
                                AND IS_NULLABLE = 'NO'
                        ", [$database, $table]);

        $requiredColumns = array_column($requiredColumns, 'COLUMN_NAME');
        $requiredColumns=array_filter($requiredColumns,function ($colum){
            return $colum !== 'id';
        });
        $requiredColumns = array_fill_keys($requiredColumns, 'required');

        $unique=array_fill_keys($uniqueConstraints,null);




        $defaults = [
            'add_if_not_found'    => false,
            'delete_and_replace'  => false,
            'onRow'               => null,
            'onComplete'          => null,
            'color'               => 'primary',
        ];
        $opts = array_merge($defaults, $options);


        return ExcelImportAction::make()
            ->label('Upload Excel & Import')
            ->color($opts['color'])
            ->beforeImport(function (?array $data) use (&$opts) {
                $opts = array_merge($opts, array_filter($data, fn($v, $k) => in_array($k, ['add_if_not_found', 'delete_and_replace']), ARRAY_FILTER_USE_BOTH));
            })
            ->processCollectionUsing(function (string $modelClass, Collection $collection) use ($unique, &$opts,$table) {
                $mappingFile = base_path('app/Filament/dictionary.php');
                $fieldMap    = file_exists($mappingFile) ? include $mappingFile : [];
                $collection=$collection->map(function($items) {
                    return collect($items)->filter(function($item, $key) {
                        return is_string($key);
                    });
                });

                // prepare rows and relations
                [$rows, $relations] = $this->prepareRowsAndRelations(
                    $collection,
                    $fieldMap,
                    $opts['add_if_not_found']
                );

                // resolve FK ids
                $rows = $this->resolveForeignKeys($modelClass, $rows,$opts['add_if_not_found']);

                if ($opts['delete_and_replace']) {
                    (new $modelClass)->newQuery()->truncate();
                }
                $statusQueue = config('app.queue_status');


                $unique= array_intersect_key($unique,$rows->first->toArray()->toArray());
                if ($statusQueue=="true"){
                    $rows->chunk(500)->each(function ($chunk) use ($modelClass, $relations,$unique) {
                        ProcessExcelImport::dispatch($chunk, $modelClass, $relations,$unique);
                    });
                }
                else{
                    $rows->chunk(500)->each(function ($chunk) use ($modelClass, $relations,$unique) {
                        $this->createOrUpdateDataBase($unique,$chunk,$modelClass,$relations);

                    });

                }




                return $rows;


            })
            ->afterUploadField([Checkbox::make('delete_and_replace')
                ->label('Delete All Existing Data and Import New Ones')
                ->helperText('Warning: This will delete all current records before importing.'),
                Checkbox::make('add_if_not_found')
                ->label('Add Records If Not Found'),
                    ]
            )





            ->validateUsing($requiredColumns);

    }

    /**
     * Extract clean data and relation IDs.
     *
     * @return array{0: Collection<array>,1: array<int, Collection<int>>}
     */
    protected function prepareRowsAndRelations(Collection $collection, array $map, bool $addIfNotFound): array
    {
        $cache      = [];
        $mappedRows = $collection->map(fn($row) => collect($row)
            ->mapWithKeys(fn($value, $key) => [$map[$key] ?? $key => $value])
        );

        $relations = [];
        $clean     = [];

        foreach ($mappedRows as $i => $row) {
            $relData  = collect();
            $cleanRow = collect();

            foreach ($row as $key => $value) {
                $base = Str::before($key, '_');
                if (Str::plural($base) === $base && $base !== 'is') {
                    [$table, $col] = explode('_', $key, 2) + [$base, 'name'];
                    $titles         = array_filter(array_map('trim', explode(',', $value)));

                    $ids = collect($titles)
                        ->map(fn($title) => $this->lookupId($table, $col, $title, $cache, $addIfNotFound))
                        ->filter();

                    $relData->put($table, $ids);
                } else {
                    $cleanRow->put($key, $value);
                }
            }

            $relations[$i] = $relData;
            $clean[]       = $cleanRow;
        }

        return [collect($clean), $relations];
    }

    /**
     * Replace FK-like values with real IDs.
     */
    protected function resolveForeignKeys(string $modelClass, Collection $rows,$addIfNotFound): Collection
    {
        $instance = new $modelClass;
        $fks      = $this->getForeignKeyColumns($instance->getTable());
        $cache    = [];

        return $rows->map(fn($row)  => collect($row)
            ->mapWithKeys(fn($val, $col) => [
                $col => in_array($col, $fks, true)
                    ? $this->lookupId(Str::plural(Str::before($col, '_')), Str::after($col, '_'), $val, $cache,$addIfNotFound)
                    : $val
            ])
        );
    }

    /**
     * Get columns ending with _id or _cin.
     */
    protected function getForeignKeyColumns(string $table): array
    {
        $rows = DB::select("SELECT COLUMN_NAME FROM information_schema.COLUMNS
            WHERE TABLE_NAME = ? AND TABLE_SCHEMA = DATABASE()
            AND (COLUMN_NAME LIKE '%\\_id' OR COLUMN_NAME LIKE '%\\_cin')", [$table]);

        return array_column($rows, 'COLUMN_NAME');
    }

    /**
     * Lookup or create an ID, with caching.
     */
    protected function lookupId(string $table, string $column, mixed $value, array &$cache, bool $addIfNotFound = false): ?int
    {
        $key = "$table|$column|$value";
        if (isset($cache[$key])) {
            return $cache[$key];
        }

        $id = DB::table($table)->where($column, $value)->value('id');

        if (is_null($id) && $addIfNotFound) {
           if ($column==="designation_fr"||$column==="designation_ar"||$column==="designation_en"){
               $slug= Str::slug($value);
               $id = DB::table($table)->insertGetId([$column => $value,"slug"=>$slug]);
           }else{
               $id = DB::table($table)->insertGetId([$column => $value]);  // student,teacher
           }
        }

        return $cache[$key] = $id;
    }


    /**
     * @throws Throwable
     */
    public function createOrUpdateDataBase($unique, $rows, $modelClass, $relations): void
    {

        $uniqueCollect=collect($unique);

        foreach ($rows as $index => $rowData)  {
            DB::beginTransaction();
            try {
                $uniqueArray= $uniqueCollect->mapWithKeys(function ($value, $key) use ($rowData) {
                    return [$key=>$rowData[$key]];
                })->toArray();
                $model = $modelClass;
                $instance = $model::updateOrCreate(
                    $uniqueArray,
                    $rowData->toArray()
                );

                // sync relations
                if (!empty($relations[$index])) {
                    foreach ($relations[$index] as $relationName => $ids) {
                        if (method_exists($instance, $relationName)) {
                            $instance->$relationName()->syncWithoutDetaching($ids->all());
                        }
                    }
                }

                Log::info("Processed row: {$instance->id}");

                DB::commit();



            } catch (Throwable $e) {
                DB::rollBack();
                Log::error('Excel import failed: ' . $e->getMessage(), ['exception' => $e]);
                Notification::make()
                    ->title('Import Failed')
                    ->body("Error importing row: " . $e->getMessage())
                    ->danger()
                    ->persistent()
                    ->send();
            }
        }


    }

}


