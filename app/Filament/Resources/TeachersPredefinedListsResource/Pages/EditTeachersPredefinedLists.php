<?php

namespace App\Filament\Resources\TeachersPredefinedListsResource\Pages;

use App\Filament\Resources\TeachersPredefinedListsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTeachersPredefinedLists extends EditRecord
{
    protected static string $resource = TeachersPredefinedListsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
