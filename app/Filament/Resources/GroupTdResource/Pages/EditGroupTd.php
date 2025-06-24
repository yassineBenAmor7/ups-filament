<?php

namespace App\Filament\Resources\GroupTdResource\Pages;

use App\Filament\Resources\GroupTdResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGroupTd extends EditRecord
{
    protected static string $resource = GroupTdResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
