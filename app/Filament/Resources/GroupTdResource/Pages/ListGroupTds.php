<?php

namespace App\Filament\Resources\GroupTdResource\Pages;

use App\Filament\Resources\GroupTdResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGroupTds extends ListRecords
{
    protected static string $resource = GroupTdResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
