<?php

namespace App\Filament\Resources\RessourceCategoryResource\Pages;

use App\Filament\Resources\RessourceCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRessourceCategories extends ListRecords
{
    protected static string $resource = RessourceCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
