<?php

namespace App\Filament\Resources\EventPerTypeResource\Pages;

use App\Filament\Resources\EventPerTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEventPerTypes extends ListRecords
{
    protected static string $resource = EventPerTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
