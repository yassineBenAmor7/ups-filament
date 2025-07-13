<?php

namespace App\Filament\Resources\RegimeEtudeResource\Pages;

use App\Filament\Resources\RegimeEtudeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRegimeEtudes extends ListRecords
{
    protected static string $resource = RegimeEtudeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
