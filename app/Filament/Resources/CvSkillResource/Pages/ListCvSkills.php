<?php

namespace App\Filament\Resources\CvSkillResource\Pages;

use App\Filament\Resources\CvSkillResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCvSkills extends ListRecords
{
    protected static string $resource = CvSkillResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
