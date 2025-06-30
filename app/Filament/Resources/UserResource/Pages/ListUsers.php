<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use App\Filament\Resources\BaseListRecords;
use Filament\Actions;
use EightyNine\ExcelImport\ExcelImportAction;

class ListUsers extends BaseListRecords
{
    protected static string $resource = UserResource::class;

    protected static string $view = 'filament.resources.user-resource.pages.list-users';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
         
        ];
    }
}
