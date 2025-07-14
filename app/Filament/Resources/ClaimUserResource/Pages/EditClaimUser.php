<?php

namespace App\Filament\Resources\ClaimUserResource\Pages;

use App\Filament\Resources\ClaimUserResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditClaimUser extends EditRecord
{
    protected static string $resource = ClaimUserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
