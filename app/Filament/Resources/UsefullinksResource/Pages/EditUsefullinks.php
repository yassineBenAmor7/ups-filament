<?php

namespace App\Filament\Resources\UsefullinksResource\Pages;

use App\Filament\Resources\UsefullinksResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUsefullinks extends EditRecord
{
    protected static string $resource = UsefullinksResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
