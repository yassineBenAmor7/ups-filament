<?php

namespace App\Filament\Resources\OffersTypesResource\Pages;

use App\Filament\Resources\OffersTypesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOffersTypes extends EditRecord
{
    protected static string $resource = OffersTypesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
