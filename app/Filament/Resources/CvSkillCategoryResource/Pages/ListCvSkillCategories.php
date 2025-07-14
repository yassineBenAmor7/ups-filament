<?php

namespace App\Filament\Resources\CvSkillCategoryResource\Pages;

use App\Filament\Resources\CvSkillCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCvSkillCategories extends ListRecords
{
    protected static string $resource = CvSkillCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
