<?php

namespace App\Filament\Resources\GroupTdTeacherResource\Pages;

use App\Filament\Resources\GroupTdTeacherResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGroupTdTeachers extends ListRecords
{
    protected static string $resource = GroupTdTeacherResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
