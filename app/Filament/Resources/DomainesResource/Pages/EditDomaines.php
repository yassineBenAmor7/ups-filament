<?php

namespace App\Filament\Resources\DomainesResource\Pages;

use App\Filament\Resources\DomainesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDomaines extends EditRecord
{
    protected static string $resource = DomainesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
