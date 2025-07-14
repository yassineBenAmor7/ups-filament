<?php

namespace App\Filament\Resources\CvSkillUserResource\Pages;

use App\Filament\Resources\CvSkillUserResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCvSkillUser extends EditRecord
{
    protected static string $resource = CvSkillUserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
