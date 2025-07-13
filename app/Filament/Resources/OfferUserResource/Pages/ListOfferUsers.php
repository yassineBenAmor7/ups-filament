<?php

namespace App\Filament\Resources\OfferUserResource\Pages;

use App\Filament\Resources\OfferUserResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOfferUsers extends ListRecords
{
    protected static string $resource = OfferUserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
