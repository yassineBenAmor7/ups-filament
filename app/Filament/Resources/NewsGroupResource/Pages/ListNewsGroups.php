<?php

namespace App\Filament\Resources\NewsGroupResource\Pages;

use App\Filament\Resources\NewsGroupResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNewsGroups extends ListRecords
{
    protected static string $resource = NewsGroupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
