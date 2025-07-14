<?php

namespace App\Filament\Resources\HomeShortcutResource\Pages;

use App\Filament\Resources\HomeShortcutResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHomeShortcut extends EditRecord
{
    protected static string $resource = HomeShortcutResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
