<?php

namespace App\Filament\Resources\NewsUserResource\Pages;

use App\Filament\Resources\NewsUserResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNewsUsers extends ListRecords
{
    protected static string $resource = NewsUserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
