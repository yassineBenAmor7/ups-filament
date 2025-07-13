<?php

namespace App\Filament\Resources\RessourceSupplierResource\Pages;

use App\Filament\Resources\RessourceSupplierResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRessourceSupplier extends EditRecord
{
    protected static string $resource = RessourceSupplierResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
