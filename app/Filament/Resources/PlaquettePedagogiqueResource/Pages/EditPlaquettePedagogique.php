<?php

namespace App\Filament\Resources\PlaquettePedagogiqueResource\Pages;

use App\Filament\Resources\PlaquettePedagogiqueResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPlaquettePedagogique extends EditRecord
{
    protected static string $resource = PlaquettePedagogiqueResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
