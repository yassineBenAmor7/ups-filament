<?php

namespace App\Filament\Resources\CoursesGroupTdResource\Pages;

use App\Filament\Resources\CoursesGroupTdResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCoursesGroupTd extends EditRecord
{
    protected static string $resource = CoursesGroupTdResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
