<?php

namespace App\Filament\Resources\CvExperienceTypeResource\Pages;

use App\Filament\Resources\CvExperienceTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCvExperienceType extends EditRecord
{
    protected static string $resource = CvExperienceTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
