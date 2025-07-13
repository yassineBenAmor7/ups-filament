<?php

namespace App\Filament\Resources\NewsUserResource\Pages;

use App\Filament\Resources\NewsUserResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNewsUser extends EditRecord
{
    protected static string $resource = NewsUserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
