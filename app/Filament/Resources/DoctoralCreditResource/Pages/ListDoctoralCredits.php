<?php

namespace App\Filament\Resources\DoctoralCreditResource\Pages;

use App\Filament\Resources\DoctoralCreditResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDoctoralCredits extends ListRecords
{
    protected static string $resource = DoctoralCreditResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
