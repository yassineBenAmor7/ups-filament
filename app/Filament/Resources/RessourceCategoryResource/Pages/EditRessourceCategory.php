<?php

namespace App\Filament\Resources\RessourceCategoryResource\Pages;

use App\Filament\Resources\RessourceCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRessourceCategory extends EditRecord
{
    protected static string $resource = RessourceCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
