<?php

namespace App\Filament\Resources\HomeShortcutResource\Pages;

use App\Filament\Resources\HomeShortcutResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHomeShortcuts extends ListRecords
{
    protected static string $resource = HomeShortcutResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
