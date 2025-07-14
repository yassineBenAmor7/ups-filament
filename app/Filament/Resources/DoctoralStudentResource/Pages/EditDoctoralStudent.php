<?php

namespace App\Filament\Resources\DoctoralStudentResource\Pages;

use App\Filament\Resources\DoctoralStudentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDoctoralStudent extends EditRecord
{
    protected static string $resource = DoctoralStudentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
