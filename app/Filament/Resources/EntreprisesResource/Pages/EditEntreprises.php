<?php

namespace App\Filament\Resources\EntreprisesResource\Pages;

use App\Filament\Resources\EntreprisesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEntreprises extends EditRecord
{
    protected static string $resource = EntreprisesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
