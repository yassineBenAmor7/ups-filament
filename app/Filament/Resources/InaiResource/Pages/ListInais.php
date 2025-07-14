<?php

namespace App\Filament\Resources\InaiResource\Pages;

use App\Filament\Resources\InaiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInais extends ListRecords
{
    protected static string $resource = InaiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
