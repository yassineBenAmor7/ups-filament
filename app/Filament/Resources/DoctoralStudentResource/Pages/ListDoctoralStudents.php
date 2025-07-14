<?php

namespace App\Filament\Resources\DoctoralStudentResource\Pages;

use App\Filament\Resources\DoctoralStudentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDoctoralStudents extends ListRecords
{
    protected static string $resource = DoctoralStudentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
