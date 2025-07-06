<?php

namespace App\Filament\Resources\StageDocumentTypesResource\Pages;

use App\Filament\Resources\StageDocumentTypesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStageDocumentTypes extends EditRecord
{
    protected static string $resource = StageDocumentTypesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
