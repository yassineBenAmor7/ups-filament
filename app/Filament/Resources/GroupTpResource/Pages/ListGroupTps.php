<?php

namespace App\Filament\Resources\GroupTpResource\Pages;

use App\Filament\Resources\GroupTpResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGroupTps extends ListRecords
{
    protected static string $resource = GroupTpResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
