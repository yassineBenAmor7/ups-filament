<?php

namespace App\Filament\Resources\SectorTypeResource\Pages;

use App\Filament\Resources\SectorTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSectorTypes extends ListRecords
{
    protected static string $resource = SectorTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
