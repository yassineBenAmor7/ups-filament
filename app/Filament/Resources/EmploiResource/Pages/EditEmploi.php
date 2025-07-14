<?php

namespace App\Filament\Resources\EmploiResource\Pages;

use App\Filament\Resources\EmploiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEmploi extends EditRecord
{
    protected static string $resource = EmploiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
