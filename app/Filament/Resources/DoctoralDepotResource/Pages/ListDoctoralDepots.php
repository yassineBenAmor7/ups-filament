<?php

namespace App\Filament\Resources\DoctoralDepotResource\Pages;

use App\Filament\Resources\DoctoralDepotResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDoctoralDepots extends ListRecords
{
    protected static string $resource = DoctoralDepotResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
