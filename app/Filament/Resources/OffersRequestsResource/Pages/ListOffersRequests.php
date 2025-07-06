<?php

namespace App\Filament\Resources\OffersRequestsResource\Pages;

use App\Filament\Resources\OffersRequestsResource;
use Filament\Actions;
use App\Filament\Resources\BaseListRecords;

class ListOffersRequests extends BaseListRecords
{
    protected static string $resource = OffersRequestsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
