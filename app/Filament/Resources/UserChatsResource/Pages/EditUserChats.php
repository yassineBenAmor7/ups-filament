<?php

namespace App\Filament\Resources\UserChatsResource\Pages;

use App\Filament\Resources\UserChatsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUserChats extends EditRecord
{
    protected static string $resource = UserChatsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
