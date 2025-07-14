<?php

namespace App\Filament\Resources\CourseRenderUserResource\Pages;

use App\Filament\Resources\CourseRenderUserResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCourseRenderUsers extends ListRecords
{
    protected static string $resource = CourseRenderUserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
