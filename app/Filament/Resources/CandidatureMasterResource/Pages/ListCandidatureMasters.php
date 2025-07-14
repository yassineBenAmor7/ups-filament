<?php

namespace App\Filament\Resources\CandidatureMasterResource\Pages;

use App\Filament\Resources\CandidatureMasterResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCandidatureMasters extends ListRecords
{
    protected static string $resource = CandidatureMasterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
