<?php

namespace App\Filament\Resources\users\PersonalResource\Pages;

use App\Filament\Resources\users\PersonalResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPersonals extends ListRecords
{
    protected static string $resource = PersonalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
