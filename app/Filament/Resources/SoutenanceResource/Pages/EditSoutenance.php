<?php

namespace App\Filament\Resources\SoutenanceResource\Pages;

use App\Filament\Resources\SoutenanceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSoutenance extends EditRecord
{
    protected static string $resource = SoutenanceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
