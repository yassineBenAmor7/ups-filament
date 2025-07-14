<?php

namespace App\Filament\Resources\BuzzVideoResource\Pages;

use App\Filament\Resources\BuzzVideoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBuzzVideo extends EditRecord
{
    protected static string $resource = BuzzVideoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
