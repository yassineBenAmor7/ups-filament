<?php

namespace App\Filament\Resources\NachdEtapedecisionFormulaireResource\Pages;

use App\Filament\Resources\NachdEtapedecisionFormulaireResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNachdEtapedecisionFormulaires extends ListRecords
{
    protected static string $resource = NachdEtapedecisionFormulaireResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
