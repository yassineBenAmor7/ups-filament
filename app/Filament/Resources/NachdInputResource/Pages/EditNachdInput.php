<?php

namespace App\Filament\Resources\NachdInputResource\Pages;

use App\Filament\Resources\NachdInputResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNachdInput extends EditRecord
{
    protected static string $resource = NachdInputResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
