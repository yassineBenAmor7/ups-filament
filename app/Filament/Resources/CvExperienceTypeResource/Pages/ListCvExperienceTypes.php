<?php

namespace App\Filament\Resources\CvExperienceTypeResource\Pages;

use App\Filament\Resources\CvExperienceTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCvExperienceTypes extends ListRecords
{
    protected static string $resource = CvExperienceTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
