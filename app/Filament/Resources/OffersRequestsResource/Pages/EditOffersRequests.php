<?php

namespace App\Filament\Resources\OffersRequestsResource\Pages;

use App\Filament\Resources\OffersRequestsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOffersRequests extends EditRecord
{
    protected static string $resource = OffersRequestsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
