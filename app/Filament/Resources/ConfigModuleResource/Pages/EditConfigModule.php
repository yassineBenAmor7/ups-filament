<?php

namespace App\Filament\Resources\ConfigModuleResource\Pages;

use App\Filament\Resources\ConfigModuleResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditConfigModule extends EditRecord
{
    protected static string $resource = ConfigModuleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
