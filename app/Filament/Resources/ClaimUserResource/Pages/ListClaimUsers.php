<?php

namespace App\Filament\Resources\ClaimUserResource\Pages;

use App\Filament\Resources\ClaimUserResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListClaimUsers extends ListRecords
{
    protected static string $resource = ClaimUserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
