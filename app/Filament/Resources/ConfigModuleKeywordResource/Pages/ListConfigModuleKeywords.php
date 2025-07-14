<?php

namespace App\Filament\Resources\ConfigModuleKeywordResource\Pages;

use App\Filament\Resources\ConfigModuleKeywordResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListConfigModuleKeywords extends ListRecords
{
    protected static string $resource = ConfigModuleKeywordResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
