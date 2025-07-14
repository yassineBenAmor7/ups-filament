<?php

namespace App\Filament\Resources\AbsenceSettingResource\Pages;

use App\Filament\Resources\AbsenceSettingResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAbsenceSettings extends ListRecords
{
    protected static string $resource = AbsenceSettingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
