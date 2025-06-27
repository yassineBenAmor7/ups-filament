<?php

namespace App\Filament\Resources\CoordinationSectorResource\Pages;

use App\Filament\Resources\CoordinationSectorResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCoordinationSector extends EditRecord
{
    protected static string $resource = CoordinationSectorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
