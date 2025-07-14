<?php

namespace App\Filament\Resources\CvEducationResource\Pages;

use App\Filament\Resources\CvEducationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCvEducation extends EditRecord
{
    protected static string $resource = CvEducationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
