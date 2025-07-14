<?php

namespace App\Filament\Resources\CvLanguageResource\Pages;

use App\Filament\Resources\CvLanguageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCvLanguage extends EditRecord
{
    protected static string $resource = CvLanguageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
