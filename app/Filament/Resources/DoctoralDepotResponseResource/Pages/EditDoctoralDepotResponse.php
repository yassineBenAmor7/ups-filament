<?php

namespace App\Filament\Resources\DoctoralDepotResponseResource\Pages;

use App\Filament\Resources\DoctoralDepotResponseResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDoctoralDepotResponse extends EditRecord
{
    protected static string $resource = DoctoralDepotResponseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
