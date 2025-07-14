<?php

namespace App\Filament\Resources\ConfigKeywordResource\Pages;

use App\Filament\Resources\ConfigKeywordResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListConfigKeywords extends ListRecords
{
    protected static string $resource = ConfigKeywordResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
