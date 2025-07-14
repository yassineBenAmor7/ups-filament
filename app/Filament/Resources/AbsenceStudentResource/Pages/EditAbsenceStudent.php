<?php

namespace App\Filament\Resources\AbsenceStudentResource\Pages;

use App\Filament\Resources\AbsenceStudentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAbsenceStudent extends EditRecord
{
    protected static string $resource = AbsenceStudentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
