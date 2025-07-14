<?php

namespace App\Filament\Resources\CvEducationTypeResource\Pages;

use App\Filament\Resources\CvEducationTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCvEducationTypes extends ListRecords
{
    protected static string $resource = CvEducationTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
