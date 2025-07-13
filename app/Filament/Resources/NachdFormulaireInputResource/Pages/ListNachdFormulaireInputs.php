<?php

namespace App\Filament\Resources\NachdFormulaireInputResource\Pages;

use App\Filament\Resources\NachdFormulaireInputResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNachdFormulaireInputs extends ListRecords
{
    protected static string $resource = NachdFormulaireInputResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
