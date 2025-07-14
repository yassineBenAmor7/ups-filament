<?php

namespace App\Filament\Resources\DoctoralValidationLogResource\Pages;

use App\Filament\Resources\DoctoralValidationLogResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDoctoralValidationLogs extends ListRecords
{
    protected static string $resource = DoctoralValidationLogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
