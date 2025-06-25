<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Enums\ActionsPosition;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Columns\Column;
use Filament\Tables\Columns\TextColumn;
abstract class BaseResource extends Resource
{
    /**
     * A helper to quickly create a searchable/sortable column.
     */
    protected static function CustomTextColumn(string $name, string $label = null): TextColumn
    {
        return Tables\Columns\TextColumn::make($name)
            ->label($label ?? Str::headline($name))
            ->searchable()
            ->sortable()
            ;
    }
   

    /**
     * Get the base actions that all resources should have
     */
    protected static function getBaseActions(): array
    {
        return [
            ActionGroup::make([
                ViewAction::make(),
                EditAction::make()->openUrlInNewTab(),
                DeleteAction::make(),
            ])->tooltip("Actions")
           
            
        ];
    }

    /**
     * Get the base bulk actions that all resources should have
     */
    protected static function getBaseBulkActions(): array
    {
        return [
            Tables\Actions\BulkActionGroup::make([
                Tables\Actions\DeleteBulkAction::make(),
                 ExportBulkAction::make()
            ]),
        ];
    }

   
   
   


    /**
     * Dynamically generate filters for all columns
     */
    protected static function getDynamicFilters(): array
{
    $model = static::getModel();
    $instance = new $model;

    // Get all TextColumns from the table
    $textColumns = collect(static::getExtraColumns())
        ->filter(fn($column) => $column instanceof TextColumn)
        ->map(fn($column) => $column->getName())
        ->toArray();

    // Get names of all extra filters to avoid duplicates
    $extraFilterNames = collect(static::getExtraFilters())
        ->map(fn($filter) => $filter->getName())
        ->toArray();

    $excluded = array_merge([
        'id',
        'created_at',
        'updated_at',
        'deleted_at',
        'password',
        'remember_token',
    ], $extraFilterNames);

    $filters = [];

    foreach ($textColumns as $column) {
        if (in_array($column, $excluded) || Str::endsWith($column, '_id')) {
            continue;
        }

        $filters[] = Tables\Filters\Filter::make($column)
            ->form([
                Forms\Components\TextInput::make($column)
                    ->label(Str::headline($column))
            ])
            ->query(function ($query, array $data) use ($column) {
                if (!empty($data[$column])) {
                    $query->where($column, 'like', "%{$data[$column]}%");
                }
            });
    }

    return $filters;
}
// Add a hook so children can add columns and filters
protected static function getExtraColumns(): array
{
    return [];
}

protected static function getExtraFilters(): array
{
    return [];
}

    

   

    /**
     * Configure the base table with common settings
     */
    public static function table(Table $table): Table
    {
        return $table
            ->columns(static::getExtraColumns())
            ->filters( array_merge(
                    static::getDynamicFilters(),
                    static::getExtraFilters(),
                ), layout: FiltersLayout::Modal)
            ->actions(static::getBaseActions(), position: ActionsPosition::BeforeCells)
            ->bulkActions(static::getBaseBulkActions())
            
            ->striped()
            ->searchable() 
            
            ->paginated([10, 25, 50, 100]);
    }

   


    
}

