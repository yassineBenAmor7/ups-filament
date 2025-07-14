<?php

namespace App\Filament\Resources\DoctoralSoutenanceResource\Pages;

use App\Filament\Resources\DoctoralSoutenanceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDoctoralSoutenance extends EditRecord
{
    protected static string $resource = DoctoralSoutenanceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
