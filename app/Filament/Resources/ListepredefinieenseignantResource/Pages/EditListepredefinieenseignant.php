<?php

namespace App\Filament\Resources\ListepredefinieenseignantResource\Pages;

use App\Filament\Resources\ListepredefinieenseignantResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditListepredefinieenseignant extends EditRecord
{
    protected static string $resource = ListepredefinieenseignantResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
