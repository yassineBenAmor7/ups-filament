<?php

namespace App\Filament\Resources\MasterSpecialityResource\Pages;

use App\Filament\Resources\MasterSpecialityResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMasterSpeciality extends EditRecord
{
    protected static string $resource = MasterSpecialityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
