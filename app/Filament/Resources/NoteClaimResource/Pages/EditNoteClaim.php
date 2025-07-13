<?php

namespace App\Filament\Resources\NoteClaimResource\Pages;

use App\Filament\Resources\NoteClaimResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNoteClaim extends EditRecord
{
    protected static string $resource = NoteClaimResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
