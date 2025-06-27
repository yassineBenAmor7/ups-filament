<?php

namespace App\Filament\Resources\GroupTpResource\Pages;

use App\Filament\Resources\GroupTpResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGroupTp extends EditRecord
{
    protected static string $resource = GroupTpResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
