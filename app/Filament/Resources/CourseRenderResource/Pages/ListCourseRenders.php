<?php

namespace App\Filament\Resources\CourseRenderResource\Pages;

use App\Filament\Resources\CourseRenderResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCourseRenders extends ListRecords
{
    protected static string $resource = CourseRenderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
