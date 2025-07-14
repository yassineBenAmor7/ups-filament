<?php

namespace App\Filament\Resources\DoctoralCommissionUserResource\Pages;

use App\Filament\Resources\DoctoralCommissionUserResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDoctoralCommissionUsers extends ListRecords
{
    protected static string $resource = DoctoralCommissionUserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
