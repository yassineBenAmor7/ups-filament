<?php

namespace App\Filament\Resources\DoctoralThesisResource\Pages;

use App\Filament\Resources\DoctoralThesisResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDoctoralTheses extends ListRecords
{
    protected static string $resource = DoctoralThesisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
