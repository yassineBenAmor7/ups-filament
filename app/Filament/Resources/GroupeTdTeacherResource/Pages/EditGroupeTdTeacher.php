<?php

namespace App\Filament\Resources\GroupeTdTeacherResource\Pages;

use App\Filament\Resources\GroupeTdTeacherResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGroupeTdTeacher extends EditRecord
{
    protected static string $resource = GroupeTdTeacherResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
