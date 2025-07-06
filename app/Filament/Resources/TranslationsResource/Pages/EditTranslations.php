<?php

namespace App\Filament\Resources\TranslationsResource\Pages;

use App\Filament\Resources\TranslationsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTranslations extends EditRecord
{
    protected static string $resource = TranslationsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
