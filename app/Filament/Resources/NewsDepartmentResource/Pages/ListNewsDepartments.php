<?php

namespace App\Filament\Resources\NewsDepartmentResource\Pages;

use App\Filament\Resources\NewsDepartmentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNewsDepartments extends ListRecords
{
    protected static string $resource = NewsDepartmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
