<?php

namespace App\Filament\Resources\RessourceSupplierResource\Pages;

use App\Filament\Resources\RessourceSupplierResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRessourceSuppliers extends ListRecords
{
    protected static string $resource = RessourceSupplierResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
