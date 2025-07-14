<?php

namespace App\Filament\Resources\DefaultCoverResource\Pages;

use App\Filament\Resources\DefaultCoverResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDefaultCover extends EditRecord
{
    protected static string $resource = DefaultCoverResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
