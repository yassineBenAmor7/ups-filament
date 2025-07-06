<?php

namespace App\Filament\Resources\StageCategoriesResource\Pages;

use App\Filament\Resources\StageCategoriesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStageCategories extends EditRecord
{
    protected static string $resource = StageCategoriesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
