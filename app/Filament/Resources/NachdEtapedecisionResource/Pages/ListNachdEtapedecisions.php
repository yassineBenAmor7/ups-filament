<?php

namespace App\Filament\Resources\NachdEtapedecisionResource\Pages;

use App\Filament\Resources\NachdEtapedecisionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNachdEtapedecisions extends ListRecords
{
    protected static string $resource = NachdEtapedecisionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
