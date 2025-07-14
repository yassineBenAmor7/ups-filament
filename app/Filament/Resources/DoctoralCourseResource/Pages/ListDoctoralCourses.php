<?php

namespace App\Filament\Resources\DoctoralCourseResource\Pages;

use App\Filament\Resources\DoctoralCourseResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDoctoralCourses extends ListRecords
{
    protected static string $resource = DoctoralCourseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
