<?php

namespace App\Filament\Resources\OfferUserResource\Pages;

use App\Filament\Resources\OfferUserResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOfferUser extends EditRecord
{
    protected static string $resource = OfferUserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
