<?php

namespace App\Filament\Resources\UsefullinksPerCategoriesResource\Pages;

use App\Filament\Resources\UsefullinksPerCategoriesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUsefullinksPerCategories extends EditRecord
{
    protected static string $resource = UsefullinksPerCategoriesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
