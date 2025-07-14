<?php

namespace App\Jobs;

use App\ImportationExel;
use Filament\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Throwable;

class ProcessExcelImport implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels,ImportationExel;

    /**
     * Create a new job instance.
     */
    public Collection $rows;
    public string $modelClass;
    public array $relations = [];
    public array   $unique = [];




    public function __construct(Collection $rows, string $modelClass, array $relations = [], array $unique = [])
    {
        $this->modelClass=$modelClass;
        $this->rows = $rows;
        $this->relations = $relations;
        $this->unique = $unique;


    }

    /**
     * Execute the job.
     * @throws \Throwable
     */
    public function handle(): void
    {

        $this->createOrUpdateDataBase($this->unique,$this->rows,$this->modelClass,$this->relations);
        Notification::make()
            ->title('Import Complete')
            ->body("Finished importing " . $this->rows->count() . " rows.")
            ->success()
            ->persistent()
            ->send();
    }

}
