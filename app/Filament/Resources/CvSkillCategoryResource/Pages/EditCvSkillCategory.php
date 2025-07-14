<?php

namespace App\Filament\Resources\CvSkillCategoryResource\Pages;

use App\Filament\Resources\CvSkillCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCvSkillCategory extends EditRecord
{
    protected static string $resource = CvSkillCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
