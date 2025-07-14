<?php

namespace App\Filament\Resources\FormFicheRenseignementResource\Pages;

use App\Filament\Resources\FormFicheRenseignementResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFormFicheRenseignement extends EditRecord
{
    protected static string $resource = FormFicheRenseignementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
