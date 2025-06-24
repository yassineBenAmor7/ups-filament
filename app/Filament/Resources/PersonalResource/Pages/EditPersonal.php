<?php

namespace App\Filament\Resources\users\PersonalResource\Pages;

use App\Filament\Resources\users\PersonalResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPersonal extends EditRecord
{
    protected static string $resource = PersonalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
