<?php

namespace App\Filament\Resources\CvSkillResource\Pages;

use App\Filament\Resources\CvSkillResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCvSkill extends EditRecord
{
    protected static string $resource = CvSkillResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
