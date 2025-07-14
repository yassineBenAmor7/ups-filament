<?php

namespace App\Filament\Resources\ClaimDestinationResource\Pages;

use App\Filament\Resources\ClaimDestinationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditClaimDestination extends EditRecord
{
    protected static string $resource = ClaimDestinationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
