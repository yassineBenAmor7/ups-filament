<?php

namespace App\Filament\Resources\NachdFormulaireGroupementResource\Pages;

use App\Filament\Resources\NachdFormulaireGroupementResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNachdFormulaireGroupements extends ListRecords
{
    protected static string $resource = NachdFormulaireGroupementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
