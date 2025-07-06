<?php

namespace App\Filament\Resources\ChatsResource\Pages;

use App\Filament\Resources\ChatsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\BaseListRecords;

class ListChats extends BaseListRecords
{
    protected static string $resource = ChatsResource::class;
}
