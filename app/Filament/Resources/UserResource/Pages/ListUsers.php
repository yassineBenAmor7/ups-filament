<?php

namespace App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\BaseListRecords;
class ListUsers extends BaseListRecords
{

    protected static string $resource = UserResource::class;
        protected static string $view = 'filament.resources.user-resource.pages.list-users';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            \EightyNine\ExcelImport\ExcelImportAction::make()
                ->color("primary")->acceptedFileTypes([
                    'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                    'application/vnd.ms-excel',
                    'text/csv',
                ]),
        ];
    }



}
