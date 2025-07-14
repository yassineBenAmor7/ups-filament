<?php

namespace App\Filament\Resources\DoctoralDepotResponseResource\Pages;

use App\Filament\Resources\DoctoralDepotResponseResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDoctoralDepotResponses extends ListRecords
{
    protected static string $resource = DoctoralDepotResponseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
