<?php

namespace App\Filament\Resources\EducationStudentResource\Pages;

use App\Filament\Resources\EducationStudentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEducationStudents extends ListRecords
{
    protected static string $resource = EducationStudentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
