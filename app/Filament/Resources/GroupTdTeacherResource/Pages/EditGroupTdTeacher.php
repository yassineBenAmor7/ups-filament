<?php

namespace App\Filament\Resources\GroupTdTeacherResource\Pages;

use App\Filament\Resources\GroupTdTeacherResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGroupTdTeacher extends EditRecord
{
    protected static string $resource = GroupTdTeacherResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
