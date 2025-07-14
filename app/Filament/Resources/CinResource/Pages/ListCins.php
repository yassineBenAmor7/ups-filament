<?php

namespace App\Filament\Resources\CinResource\Pages;

use App\Filament\Resources\CinResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCins extends ListRecords
{
    protected static string $resource = CinResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
