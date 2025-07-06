<?php

namespace App\Filament\Resources\OffersUsersResource\Pages;

use App\Filament\Resources\OffersUsersResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOffersUsers extends EditRecord
{
    protected static string $resource = OffersUsersResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
