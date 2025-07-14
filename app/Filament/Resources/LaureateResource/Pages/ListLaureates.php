<?php

namespace App\Filament\Resources\LaureateResource\Pages;

use App\Filament\Resources\LaureateResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLaureates extends ListRecords
{
    protected static string $resource = LaureateResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
