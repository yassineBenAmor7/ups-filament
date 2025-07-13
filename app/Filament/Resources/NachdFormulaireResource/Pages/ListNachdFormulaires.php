<?php

namespace App\Filament\Resources\NachdFormulaireResource\Pages;

use App\Filament\Resources\NachdFormulaireResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNachdFormulaires extends ListRecords
{
    protected static string $resource = NachdFormulaireResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
