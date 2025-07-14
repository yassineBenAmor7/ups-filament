<?php

namespace App\Filament\Resources\DoctoralDirectionResource\Pages;

use App\Filament\Resources\DoctoralDirectionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDoctoralDirection extends EditRecord
{
    protected static string $resource = DoctoralDirectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
