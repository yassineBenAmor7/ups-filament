<?php

namespace App\Filament\Resources\TendersSubmissionsResource\Pages;

use App\Filament\Resources\TendersSubmissionsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTendersSubmissions extends EditRecord
{
    protected static string $resource = TendersSubmissionsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
