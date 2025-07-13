<?php

namespace App\Filament\Resources\MasterEstablishmentResource\Pages;

use App\Filament\Resources\MasterEstablishmentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMasterEstablishment extends EditRecord
{
    protected static string $resource = MasterEstablishmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
