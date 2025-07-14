<?php

namespace App\Filament\Resources\CourseRenderUserResource\Pages;

use App\Filament\Resources\CourseRenderUserResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCourseRenderUser extends EditRecord
{
    protected static string $resource = CourseRenderUserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
