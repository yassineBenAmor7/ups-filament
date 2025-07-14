<?php

namespace App\Filament\Resources\BookingConfigResource\Pages;

use App\Filament\Resources\BookingConfigResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBookingConfig extends EditRecord
{
    protected static string $resource = BookingConfigResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
