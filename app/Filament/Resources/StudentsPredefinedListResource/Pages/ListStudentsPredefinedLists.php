<?php

namespace App\Filament\Resources\users\students\StudentsPredefinedListResource\Pages;

use App\Filament\Resources\users\students\StudentsPredefinedListResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStudentsPredefinedLists extends ListRecords
{
    protected static string $resource = StudentsPredefinedListResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
