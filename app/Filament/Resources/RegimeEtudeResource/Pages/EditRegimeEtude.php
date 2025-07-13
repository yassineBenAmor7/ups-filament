<?php

namespace App\Filament\Resources\RegimeEtudeResource\Pages;

use App\Filament\Resources\RegimeEtudeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRegimeEtude extends EditRecord
{
    protected static string $resource = RegimeEtudeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
