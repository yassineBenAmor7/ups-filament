<?php

namespace App\Filament\Resources\ClaimTypeResource\Pages;

use App\Filament\Resources\ClaimTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListClaimTypes extends ListRecords
{
    protected static string $resource = ClaimTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
