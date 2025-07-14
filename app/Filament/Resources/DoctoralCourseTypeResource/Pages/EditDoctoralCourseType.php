<?php

namespace App\Filament\Resources\DoctoralCourseTypeResource\Pages;

use App\Filament\Resources\DoctoralCourseTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDoctoralCourseType extends EditRecord
{
    protected static string $resource = DoctoralCourseTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
