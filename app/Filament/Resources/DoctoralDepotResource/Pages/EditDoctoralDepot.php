<?php

namespace App\Filament\Resources\DoctoralDepotResource\Pages;

use App\Filament\Resources\DoctoralDepotResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDoctoralDepot extends EditRecord
{
    protected static string $resource = DoctoralDepotResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
