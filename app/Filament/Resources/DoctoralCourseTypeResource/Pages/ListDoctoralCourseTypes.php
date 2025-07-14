<?php

namespace App\Filament\Resources\DoctoralCourseTypeResource\Pages;

use App\Filament\Resources\DoctoralCourseTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDoctoralCourseTypes extends ListRecords
{
    protected static string $resource = DoctoralCourseTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
