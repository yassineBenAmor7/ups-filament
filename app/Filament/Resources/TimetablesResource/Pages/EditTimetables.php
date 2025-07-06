<?php

namespace App\Filament\Resources\TimetablesResource\Pages;

use App\Filament\Resources\TimetablesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTimetables extends EditRecord
{
    protected static string $resource = TimetablesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
