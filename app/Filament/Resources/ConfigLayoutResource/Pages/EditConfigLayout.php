<?php

namespace App\Filament\Resources\ConfigLayoutResource\Pages;

use App\Filament\Resources\ConfigLayoutResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditConfigLayout extends EditRecord
{
    protected static string $resource = ConfigLayoutResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
