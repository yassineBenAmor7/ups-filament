<?php

namespace App\Filament\Resources\NewsPerCategoryResource\Pages;

use App\Filament\Resources\NewsPerCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNewsPerCategory extends EditRecord
{
    protected static string $resource = NewsPerCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
