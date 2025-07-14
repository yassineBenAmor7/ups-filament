<?php

namespace App\Filament\Resources\BookingConfigResource\Pages;

use App\Filament\Resources\BookingConfigResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBookingConfigs extends ListRecords
{
    protected static string $resource = BookingConfigResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
