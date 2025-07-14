<?php

namespace App\Filament\Resources\LaureateResource\Pages;

use App\Filament\Resources\LaureateResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLaureate extends EditRecord
{
    protected static string $resource = LaureateResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
