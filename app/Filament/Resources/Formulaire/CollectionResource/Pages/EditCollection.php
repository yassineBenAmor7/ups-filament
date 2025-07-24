<?php

namespace App\Filament\Resources\Formulaire\CollectionResource\Pages;

use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\Formulaire\CollectionResource;
use App\Filament\Resources\Formulaire\CollectionResource\Widgets\EditCollectionWarning;

class EditCollection extends EditRecord
{
    protected static string $resource = CollectionResource::class;

    protected function getHeaderWidgets(): array
    {
        return [
            EditCollectionWarning::class,
        ];
    }
}
