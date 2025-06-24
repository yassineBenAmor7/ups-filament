<?php

namespace App\Filament\Resources\StudentsPredefinedListResource\Pages;

use App\Filament\Resources\StudentsPredefinedListResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStudentsPredefinedList extends EditRecord
{
    protected static string $resource = StudentsPredefinedListResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
