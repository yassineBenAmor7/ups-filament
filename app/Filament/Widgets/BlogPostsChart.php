<?php

namespace App\Filament\Widgets;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Get;
use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class BlogPostsChart extends ApexChartWidget
{
    /**
     * Chart Id
     *
     * @var string
     */
    protected static ?string $chartId = 'blogPostsChart';

    /**
     * Widget Title
     *
     * @var string|null
     */
    protected static ?string $heading = 'BlogPostsChart';

    /* -------------------------------------------------------------------------
     |  FILTER FORM
     * ---------------------------------------------------------------------- */

    /**
     * Build the filter form (model + group‑by).
     * Switching either select automatically refreshes the chart.
     */
    protected function getFormSchema(): array
    {
        return [
            Select::make('model')
                ->label('Model')
                ->options($this->getModelOptions())
                ->reactive()
                ->afterStateUpdated(fn() => $this->updateOptions()),

            Select::make('group_by')
                ->label('Group By')
                ->options(function (Get $get) {
                    return $this->getGroupOptions($get('model'));
                })
                ->reactive()
                ->afterStateUpdated(fn() => $this->updateOptions()),
            Select::make('chart_type')
                ->label('Chart Type')
                ->options([
                    'pie' => 'Pie',
                    'bar' => 'Bar',
                ])
                ->default('pie')
                ->reactive()
                ->afterStateUpdated(fn() => $this->updateOptions()),
        ];
    }

    /**
     * Return "App\Models\ClassName" => "ClassName" for every model that has a
     * created_at column (makes sure date grouping works).
     */
    protected function getModelOptions(): array
    {
        $options = [];
        foreach (File::files(app_path('Models')) as $file) {
            $class = 'App\\Models\\' . $file->getFilenameWithoutExtension();

            if (class_exists($class)) {
                try {
                    $instance = new $class();
                    if (Schema::hasColumn($instance->getTable(), 'created_at')) {
                        $options[$class] = class_basename($class);
                    }
                } catch (\Throwable) {
                    // Skip abstract or mis‑configured models
                }
            }
        }

        return $options;
    }

    /**
     * Return label array for the columns of the chosen model.
     */
    protected function getGroupOptions(?string $modelClass): array
    {
        if (!$modelClass || !class_exists($modelClass)) {
            return [];
        }

        try {
            $instance = new $modelClass();
            $columns = Schema::getColumnListing($instance->getTable());

            return collect($columns)
                ->reject(fn($c) => in_array($c, ['id', 'password', 'remember_token']))
                ->mapWithKeys(fn($c) => [$c => ucfirst(str_replace('_', ' ', $c))])
                ->toArray();
        } catch (\Throwable) {
            return [];
        }
    }

    /* -------------------------------------------------------------------------
     |  FALLBACK WHEN NO DATA / ERROR
     * ---------------------------------------------------------------------- */

    protected function noDataOptions(string $message = 'No data available'): array
    {
        return [
            'chart' => ['type' => 'pie', 'height' => 300],
            'series' => [],
            'labels' => [],
            'noData' => ['text' => $message],
        ];
    }

    /* -------------------------------------------------------------------------
     |  CHART OPTIONS
     * ---------------------------------------------------------------------- */

    /**
     * Core chart logic — runs every time the form state changes.
     */
    protected function getOptions(): array
    {
        $modelClass = $this->form->getState()['model'] ?? null;
        $groupBy = $this->form->getState()['group_by'] ?? null;
        $chartType = $this->form->getState()['chart_type'] ?? 'pie';

        if (!$modelClass || !$groupBy || !class_exists($modelClass)) {
            return $this->noDataOptions('Select a model and a group field.');
        }

        try {
            $instance = new $modelClass();
            $table = $instance->getTable();

            if (!Schema::hasColumn($table, $groupBy)) {
                return $this->noDataOptions('Invalid group field.');
            }

            /* -- 1. DATE‑based grouping (created_at / updated_at) ------------ */
            if (in_array($groupBy, ['created_at', 'updated_at'])) {
                $data = $modelClass::query()
                    ->selectRaw("MONTH($groupBy) as month, COUNT(*) as count")
                    ->whereYear($groupBy, now()->year)
                    ->groupBy('month')
                    ->orderBy('month')
                    ->pluck('count', 'month');

                $labels = [];
                $series = [];
                foreach (range(1, 12) as $m) {
                    $labels[] = date('M', mktime(0, 0, 0, $m, 1));
                    $series[] = $data[$m] ?? 0;
                }
            }
            /* -- 2. CATEGORY‑based grouping (status, role, etc.) ------------- */ else {
                $data = $modelClass::query()
                    ->selectRaw("$groupBy as label, COUNT(*) as count")
                    ->groupBy('label')
                    ->orderBy('count', 'desc')
                    ->pluck('count', 'label');

                $labels = $data->keys()->map(fn($l) => (string) $l)->toArray();
                $series = $data->values()->toArray();
            }

            /* -- Return ApexCharts config ----------------------------------- */
            if ($chartType === 'pie') {
                return [
                    'chart' => ['type' => 'pie', 'height' => 300],
                    'series' => $series,
                    'labels' => $labels,
                    'noData' => [
                        'text' => array_sum($series) ? 'Loading…' : 'No data available',
                    ],
                    'dataLabels' => ['enabled' => false],
                    'legend' => ['labels' => ['fontFamily' => 'inherit']],
                ];
            }
            return [
                'chart' => ['type' => 'bar', 'height' => 300],
                'series' => [
                    [
                        'name' => 'Count',
                        'data' => $series,
                    ],
                ],
                'xaxis' => [
                    'categories' => $labels,
                ],
                'noData' => [
                    'text' => array_sum($series) ? 'Loading…' : 'No data available',
                ],
                'dataLabels' => ['enabled' => false],
                'legend' => ['labels' => ['fontFamily' => 'inherit']],
            ];
        } catch (\Throwable) {
            return $this->noDataOptions('Unable to load chart data.');
        }
    }
}
