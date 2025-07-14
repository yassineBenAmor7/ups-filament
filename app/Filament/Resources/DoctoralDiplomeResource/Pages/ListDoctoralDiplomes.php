<?php

namespace App\Filament\Resources\DoctoralDiplomeResource\Pages;

use App\Filament\Resources\DoctoralDiplomeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDoctoralDiplomes extends ListRecords
{
    protected static string $resource = DoctoralDiplomeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
