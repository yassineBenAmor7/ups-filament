<?php

namespace App\Filament\Resources\DoctoralCourseResource\Pages;

use App\Filament\Resources\DoctoralCourseResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDoctoralCourse extends EditRecord
{
    protected static string $resource = DoctoralCourseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
