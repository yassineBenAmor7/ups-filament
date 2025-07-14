<?php

namespace App\Filament\Resources\DoctoralEstablishmentResource\Pages;

use App\Filament\Resources\DoctoralEstablishmentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDoctoralEstablishment extends EditRecord
{
    protected static string $resource = DoctoralEstablishmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
