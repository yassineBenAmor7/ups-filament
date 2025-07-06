<?php

namespace App\Filament\Resources\StageEtesResource\Pages;

use App\Filament\Resources\StageEtesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStageEtes extends EditRecord
{
    protected static string $resource = StageEtesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
