<?php

namespace App\Filament\Resources\RessourceReservationResource\Pages;

use App\Filament\Resources\RessourceReservationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRessourceReservation extends EditRecord
{
    protected static string $resource = RessourceReservationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
