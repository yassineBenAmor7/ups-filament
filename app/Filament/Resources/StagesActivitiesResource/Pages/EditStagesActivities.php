<?php

namespace App\Filament\Resources\StagesActivitiesResource\Pages;

use App\Filament\Resources\StagesActivitiesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStagesActivities extends EditRecord
{
    protected static string $resource = StagesActivitiesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
