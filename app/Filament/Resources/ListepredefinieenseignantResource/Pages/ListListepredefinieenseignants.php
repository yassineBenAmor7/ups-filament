<?php

namespace App\Filament\Resources\ListepredefinieenseignantResource\Pages;

use App\Filament\Resources\ListepredefinieenseignantResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListListepredefinieenseignants extends ListRecords
{
    protected static string $resource = ListepredefinieenseignantResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
