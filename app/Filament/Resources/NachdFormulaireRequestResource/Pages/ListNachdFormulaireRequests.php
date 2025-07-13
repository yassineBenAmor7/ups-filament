<?php

namespace App\Filament\Resources\NachdFormulaireRequestResource\Pages;

use App\Filament\Resources\NachdFormulaireRequestResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNachdFormulaireRequests extends ListRecords
{
    protected static string $resource = NachdFormulaireRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
