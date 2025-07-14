<?php

namespace App\Filament\Resources\ForumSubjectResource\Pages;

use App\Filament\Resources\ForumSubjectResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditForumSubject extends EditRecord
{
    protected static string $resource = ForumSubjectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
