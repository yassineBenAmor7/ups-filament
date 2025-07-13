<?php

namespace App\Filament\Resources\NewsSectorResource\Pages;

use App\Filament\Resources\NewsSectorResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNewsSector extends EditRecord
{
    protected static string $resource = NewsSectorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
