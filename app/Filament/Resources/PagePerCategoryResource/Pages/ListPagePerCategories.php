<?php

namespace App\Filament\Resources\PagePerCategoryResource\Pages;

use App\Filament\Resources\PagePerCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPagePerCategories extends ListRecords
{
    protected static string $resource = PagePerCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
