<?php

namespace App\Filament\Resources\InaiResource\Pages;

use App\Filament\Resources\InaiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInai extends EditRecord
{
    protected static string $resource = InaiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
