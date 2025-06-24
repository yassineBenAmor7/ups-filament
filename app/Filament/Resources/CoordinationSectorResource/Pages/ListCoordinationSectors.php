<?php

namespace App\Filament\Resources\CoordinationSectorResource\Pages;

use App\Filament\Resources\CoordinationSectorResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCoordinationSectors extends ListRecords
{
    protected static string $resource = CoordinationSectorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
