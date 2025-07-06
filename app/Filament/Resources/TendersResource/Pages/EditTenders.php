<?php

namespace App\Filament\Resources\TendersResource\Pages;

use App\Filament\Resources\TendersResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTenders extends EditRecord
{
    protected static string $resource = TendersResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
