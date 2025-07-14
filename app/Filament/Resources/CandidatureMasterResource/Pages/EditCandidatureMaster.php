<?php

namespace App\Filament\Resources\CandidatureMasterResource\Pages;

use App\Filament\Resources\CandidatureMasterResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCandidatureMaster extends EditRecord
{
    protected static string $resource = CandidatureMasterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
