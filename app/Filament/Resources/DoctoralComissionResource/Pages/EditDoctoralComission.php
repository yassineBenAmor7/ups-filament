<?php

namespace App\Filament\Resources\DoctoralComissionResource\Pages;

use App\Filament\Resources\DoctoralComissionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDoctoralComission extends EditRecord
{
    protected static string $resource = DoctoralComissionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
