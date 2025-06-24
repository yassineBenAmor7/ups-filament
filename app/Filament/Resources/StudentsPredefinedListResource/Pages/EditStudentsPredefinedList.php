<?php

namespace App\Filament\Resources\users\students\StudentsPredefinedListResource\Pages;

use App\Filament\Resources\users\students\StudentsPredefinedListResource;
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
