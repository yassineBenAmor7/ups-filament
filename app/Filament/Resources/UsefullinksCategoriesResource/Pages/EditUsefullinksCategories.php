<?php

namespace App\Filament\Resources\UsefullinksCategoriesResource\Pages;

use App\Filament\Resources\UsefullinksCategoriesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUsefullinksCategories extends EditRecord
{
    protected static string $resource = UsefullinksCategoriesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
