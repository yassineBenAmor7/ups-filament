<?php

namespace App\Filament\Resources\NoteClaimResource\Pages;

use App\Filament\Resources\NoteClaimResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNoteClaims extends ListRecords
{
    protected static string $resource = NoteClaimResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
