<?php

namespace App\Filament\Resources\CvEducationResource\Pages;

use App\Filament\Resources\CvEducationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCvEducation extends ListRecords
{
    protected static string $resource = CvEducationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
