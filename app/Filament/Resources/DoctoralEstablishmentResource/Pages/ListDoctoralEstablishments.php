<?php

namespace App\Filament\Resources\DoctoralEstablishmentResource\Pages;

use App\Filament\Resources\DoctoralEstablishmentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDoctoralEstablishments extends ListRecords
{
    protected static string $resource = DoctoralEstablishmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
