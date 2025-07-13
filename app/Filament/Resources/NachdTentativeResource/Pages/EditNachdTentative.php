<?php

namespace App\Filament\Resources\NachdTentativeResource\Pages;

use App\Filament\Resources\NachdTentativeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNachdTentative extends EditRecord
{
    protected static string $resource = NachdTentativeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
