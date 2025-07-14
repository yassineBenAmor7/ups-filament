<?php

namespace App\Filament\Resources\ClaimTypeResource\Pages;

use App\Filament\Resources\ClaimTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditClaimType extends EditRecord
{
    protected static string $resource = ClaimTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
