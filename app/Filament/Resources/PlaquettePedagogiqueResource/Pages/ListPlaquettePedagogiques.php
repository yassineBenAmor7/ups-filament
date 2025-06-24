<?php

namespace App\Filament\Resources\PlaquettePedagogiqueResource\Pages;

use App\Filament\Resources\PlaquettePedagogiqueResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPlaquettePedagogiques extends ListRecords
{
    protected static string $resource = PlaquettePedagogiqueResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
