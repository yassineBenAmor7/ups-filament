<?php

namespace App\Filament\Resources\ConfigKeywordResource\Pages;

use App\Filament\Resources\ConfigKeywordResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditConfigKeyword extends EditRecord
{
    protected static string $resource = ConfigKeywordResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
