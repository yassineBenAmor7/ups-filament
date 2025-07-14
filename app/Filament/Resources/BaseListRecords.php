<?php

namespace App\Filament\Resources;

use App\ImportationExel;
use Filament\Resources\Pages\ListRecords;
use Asmit\ResizedColumn\HasResizableColumn;
use Filament\Actions;
use pxlrbt\FilamentExcel\Actions\Pages\ExportAction;

class BaseListRecords extends ListRecords
{
    use HasResizableColumn;
    use ImportationExel;
    protected static string $resource = "";

    protected static string $view = "";

    protected function getHeaderActions(): array
    {
        $modelClass = method_exists($this, 'getModel') ? $this->getModel() : null;
        $instance = new $modelClass;
        $table = $instance->getTable();

        $actions = [
            ExportAction::make(),
            $this->importationExel(),
            Actions\CreateAction::make(),
        ];

        $path = storage_path('app/public/excel/' . $table . '.xlsx');
        if (file_exists($path)) {
            array_unshift($actions, Actions\Action::make('download')
                ->label('Download model excel')
                ->icon('heroicon-o-arrow-down-tray')
                ->color('primary')
                ->action(function () use ($table) {
                    $path = storage_path('app/public/excel/' . $table . '.xlsx');
                    if (!file_exists($path)) {
                        abort(404, 'File not found.');
                    }
                    return response()->download($path);
                }));
        }

        return $actions;
    }
}
