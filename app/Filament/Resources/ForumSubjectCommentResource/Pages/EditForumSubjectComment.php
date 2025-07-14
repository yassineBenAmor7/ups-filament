<?php

namespace App\Filament\Resources\ForumSubjectCommentResource\Pages;

use App\Filament\Resources\ForumSubjectCommentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditForumSubjectComment extends EditRecord
{
    protected static string $resource = ForumSubjectCommentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
