<?php

namespace App\Filament\Resources\EventsTypeResource\Pages;

use App\Filament\Resources\EventsTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEventsTypes extends ListRecords
{
    protected static string $resource = EventsTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
