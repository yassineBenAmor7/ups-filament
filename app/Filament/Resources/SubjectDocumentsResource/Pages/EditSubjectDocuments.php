<?php

namespace App\Filament\Resources\SubjectDocumentsResource\Pages;

use App\Filament\Resources\SubjectDocumentsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSubjectDocuments extends EditRecord
{
    protected static string $resource = SubjectDocumentsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
