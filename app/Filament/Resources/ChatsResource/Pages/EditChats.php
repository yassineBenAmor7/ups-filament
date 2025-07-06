<?php

namespace App\Filament\Resources\ChatsResource\Pages;

use App\Filament\Resources\ChatsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditChats extends EditRecord
{
    protected static string $resource = ChatsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
