<?php

namespace App\Filament\Resources\RessourceReservationResource\Pages;

use App\Filament\Resources\RessourceReservationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRessourceReservations extends ListRecords
{
    protected static string $resource = RessourceReservationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
