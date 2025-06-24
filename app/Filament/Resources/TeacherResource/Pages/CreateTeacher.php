<?php

namespace App\Filament\Resources\users\TeacherResource\Pages;

use App\Filament\Resources\users\TeacherResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTeacher extends CreateRecord
{
    protected static string $resource = TeacherResource::class;
}
