<?php

namespace App\Filament\Resources\EventPerCategoryResource\Pages;

use App\Filament\Resources\EventPerCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEventPerCategories extends ListRecords
{
    protected static string $resource = EventPerCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
