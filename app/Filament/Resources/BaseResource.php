<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Year;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Illuminate\Support\Collection;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\Column;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Filament\Forms\Components\Select;
use Illuminate\Support\Facades\Schema;
use Filament\Tables\Actions\BulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Model;
use Filament\Notifications\Notification;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Enums\ActionsPosition;
use BezhanSalleh\FilamentShield\Traits\HasPageShield;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;
use BezhanSalleh\FilamentShield\Contracts\HasShieldPermissions;


abstract class BaseResource extends Resource implements HasShieldPermissions
{
      /**
     * Get permission prefixes for all resources
     */
    public static function getPermissionPrefixes(): array
    {
        return [
            'view',
            'view_any',
            'create',
            'update',
            'delete',
            'delete_any',
            'restore',
            'restore_any',
            'force_delete',
            'force_delete_any',
            'replicate',
            'reorder',
            'validate',
            'publish',
        ];
    }






    /**
     * A helper to quickly create a searchable/sortable column.
     */
    protected static function CustomTextColumn(string $name, string $label = null): TextColumn
    {
        return Tables\Columns\TextColumn::make($name)
            ->label($label ?? Str::headline($name))
            ->searchable()
            ->sortable()
            ->toggleable()
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

            ])->tooltip("Actions"),


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
                 ExportBulkAction::make(),
                  static::getGenericStatusBulkAction('validate', 'is_validated'),
            static::getGenericStatusBulkAction('publish', 'publier'),
            //static::getEmailPreviewBulkAction(),
            static::getBulkEmailSendAction(),
            ]),
        ];
    }

   protected static function getGenericStatusBulkAction(string $action, string $field): ?Tables\Actions\BulkAction
{
    $model = static::getModel();
    $table=(new $model)->getTable();


    return Tables\Actions\BulkAction::make($action)
        ->label(ucfirst($action).' Selected')
        ->icon(match($action) {
            'validate' => 'heroicon-o-check-circle',
            'publish' => 'heroicon-o-arrow-up-tray',
            default => null,
        })
        ->color(match($action) {
            'validate' => 'success',
            'publish' => 'primary',
            default => null,
        })
        ->requiresConfirmation()
        ->modalHeading(ucfirst($action).' Selected Records')
        ->modalDescription("Are you sure you want to {$action} these records?")
        ->modalSubmitActionLabel("Yes, {$action} them")
       ->action(function (iterable $records) use ($field) {
            collect($records)->each(function (Model $record) use ($field) {
                $record->update([$field => true]);
            });
        })
        ->deselectRecordsAfterCompletion()
        ->visible(fn (): bool =>
            Schema::hasColumn($table, $field) &&
            auth()->user()->can("{$action}_" . strtolower(class_basename($model)))
        );
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

protected static function getExtraColumns():array
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
            ->filters(static::getAutoFilters(), layout: FiltersLayout::Modal)
            ->actions(static::getBaseActions(), position: ActionsPosition::BeforeCells)
            ->bulkActions(static::getBaseBulkActions())

            ->striped()
            ->searchable()

            ->paginated([10, 25, 50, 100]);
    }


protected static function getBulkEmailSendAction(): ?BulkAction
{
    $model = static::getModel();
    $table = (new $model)->getTable();

    return BulkAction::make('send_email')
        ->label('Send Email')
        ->icon('heroicon-o-envelope')
        ->color('info')
        ->requiresConfirmation()
        ->modalHeading('Send Email to Selected')
        ->form(fn (BulkAction $action): array => [
            Select::make('selected_emails')
                ->label('Choose Emails')
                ->multiple()
                ->searchable()
                ->preload()
                ->getSearchResultsUsing(function (string $search) use ($model) {
                    return $model::query()
                        ->where('email', 'like', "%{$search}%")
                        ->pluck('email', 'email')
                        ->toArray();
                })
                ->default(fn () => $action->getRecords()
                    ->pluck('email')
                    ->filter()
                    ->unique()
                    ->values()
                    ->toArray()
                )
                ->required(),

            RichEditor::make('email_content')
                ->label('Email Content')
                ->required(),
        ])
        ->action(function (Collection $records, array $data) {
            $emails = $data['selected_emails'] ?? [];
            $content = $data['email_content'] ?? '';

            foreach ($emails as $email) {
                Mail::html($content, function ($message) use ($email) {
                    $message->to($email)
                        ->subject('Message from Admin');
                });
            }

            Notification::make()
                ->title('Emails Sent')
                ->body(count($emails) . ' emails have been sent successfully.')
                ->success()
                ->send();
        })
        ->modalSubmitActionLabel('Send')
        ->modalCancelActionLabel('Cancel')
        ->deselectRecordsAfterCompletion()
        ->visible(fn (): bool => Schema::hasColumn($table, 'email'));
}


public static function getAutoYearFilter(string $column = 'year_id', string $label = 'Year'): ?SelectFilter
{
    $model = static::getModel();
    $table = (new $model)->getTable();

    if (!Schema::hasColumn($table, $column)) {
        return null;
    }

    return SelectFilter::make($column)
        ->label($label)
        ->options(fn () => Year::pluck('designation', 'id'))
        ->default(fn () => Year::where('designation', now()->year)->value('id'));
}

protected static function getAutoFilters(): array
{
    $filters = array_merge(
        static::getDynamicFilters(),
        static::getExtraFilters()
    );

    if ($yearFilter = static::getAutoYearFilter()) {
        $filters[] = $yearFilter;
    }

    return array_filter($filters);
}

}

