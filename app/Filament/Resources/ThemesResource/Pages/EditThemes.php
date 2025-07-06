<?php

namespace App\Filament\Resources\ThemesResource\Pages;

use App\Filament\Resources\ThemesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditThemes extends EditRecord
{
    protected static string $resource = ThemesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
