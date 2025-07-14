<?php

namespace App\Filament\Resources\ClubUserResource\Pages;

use App\Filament\Resources\ClubUserResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditClubUser extends EditRecord
{
    protected static string $resource = ClubUserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
