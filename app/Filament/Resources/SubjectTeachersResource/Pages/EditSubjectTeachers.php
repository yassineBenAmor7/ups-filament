<?php

namespace App\Filament\Resources\SubjectTeachersResource\Pages;

use App\Filament\Resources\SubjectTeachersResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSubjectTeachers extends EditRecord
{
    protected static string $resource = SubjectTeachersResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
