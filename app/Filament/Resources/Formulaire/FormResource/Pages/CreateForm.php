<?php

namespace App\Filament\Resources\Formulaire\FormResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use App\BoltPlugin;
use App\Filament\Resources\Formulaire\FormResource;

class CreateForm extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = FormResource::class;

    public function areFormActionsSticky(): bool
    {
        return BoltPlugin::get()->isFormActionsAreSticky();
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
        ];
    }
}
