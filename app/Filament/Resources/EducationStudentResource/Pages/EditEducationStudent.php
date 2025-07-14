<?php

namespace App\Filament\Resources\EducationStudentResource\Pages;

use App\Filament\Resources\EducationStudentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEducationStudent extends EditRecord
{
    protected static string $resource = EducationStudentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
