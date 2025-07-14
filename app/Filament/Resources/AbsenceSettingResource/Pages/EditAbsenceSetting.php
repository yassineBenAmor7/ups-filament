<?php

namespace App\Filament\Resources\AbsenceSettingResource\Pages;

use App\Filament\Resources\AbsenceSettingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAbsenceSetting extends EditRecord
{
    protected static string $resource = AbsenceSettingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
