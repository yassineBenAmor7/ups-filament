<?php

namespace App\Filament\Resources\HomeWidgetResource\Pages;

use App\Filament\Resources\HomeWidgetResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHomeWidgets extends ListRecords
{
    protected static string $resource = HomeWidgetResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
