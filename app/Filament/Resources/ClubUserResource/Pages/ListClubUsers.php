<?php

namespace App\Filament\Resources\ClubUserResource\Pages;

use App\Filament\Resources\ClubUserResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListClubUsers extends ListRecords
{
    protected static string $resource = ClubUserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
