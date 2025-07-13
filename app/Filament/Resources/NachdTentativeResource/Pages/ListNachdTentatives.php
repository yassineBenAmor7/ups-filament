<?php

namespace App\Filament\Resources\NachdTentativeResource\Pages;

use App\Filament\Resources\NachdTentativeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNachdTentatives extends ListRecords
{
    protected static string $resource = NachdTentativeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
