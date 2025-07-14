<?php

namespace App\Filament\Resources\DoctoralDiplomeResource\Pages;

use App\Filament\Resources\DoctoralDiplomeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDoctoralDiplome extends EditRecord
{
    protected static string $resource = DoctoralDiplomeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
