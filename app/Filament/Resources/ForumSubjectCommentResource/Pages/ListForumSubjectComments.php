<?php

namespace App\Filament\Resources\ForumSubjectCommentResource\Pages;

use App\Filament\Resources\ForumSubjectCommentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListForumSubjectComments extends ListRecords
{
    protected static string $resource = ForumSubjectCommentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
