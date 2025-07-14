<?php

namespace App\Filament\Resources\ForumSubjectResource\Pages;

use App\Filament\Resources\ForumSubjectResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListForumSubjects extends ListRecords
{
    protected static string $resource = ForumSubjectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
