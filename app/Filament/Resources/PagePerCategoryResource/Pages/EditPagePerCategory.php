<?php

namespace App\Filament\Resources\PagePerCategoryResource\Pages;

use App\Filament\Resources\PagePerCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPagePerCategory extends EditRecord
{
    protected static string $resource = PagePerCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
