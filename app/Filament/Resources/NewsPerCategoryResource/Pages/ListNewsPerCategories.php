<?php

namespace App\Filament\Resources\NewsPerCategoryResource\Pages;

use App\Filament\Resources\NewsPerCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNewsPerCategories extends ListRecords
{
    protected static string $resource = NewsPerCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
