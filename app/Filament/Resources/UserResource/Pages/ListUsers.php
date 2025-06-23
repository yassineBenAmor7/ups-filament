<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Asmit\ResizedColumn\HasResizableColumn;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Builder;
use Bostos\ReorderableColumns\Concerns\HasReorderableColumns;
class ListUsers extends ListRecords
{
    use HasResizableColumn,HasReorderableColumns;
    
    protected static string $resource = UserResource::class;
        protected static string $view = 'filament.resources.user-resource.pages.list-users';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
    
protected function paginateTableQuery(Builder $query): Paginator
{
    return $query->simplePaginate(
        $this->getTableRecordsPerPage() === 'all' ? $query->count() : $this->getTableRecordsPerPage()
    );
}
}
