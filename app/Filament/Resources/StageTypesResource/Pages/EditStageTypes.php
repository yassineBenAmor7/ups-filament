<?php

namespace App\Filament\Resources\StageTypesResource\Pages;

use App\Filament\Resources\StageTypesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStageTypes extends EditRecord
{
    protected static string $resource = StageTypesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
