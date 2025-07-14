<?php

namespace App\Filament\Resources\CvLanguageUserResource\Pages;

use App\Filament\Resources\CvLanguageUserResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCvLanguageUsers extends ListRecords
{
    protected static string $resource = CvLanguageUserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
