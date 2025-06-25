@php
    use Filament\Support\Enums\Alignment;
    use Filament\Support\Enums\VerticalAlignment;
    use Filament\Support\Facades\FilamentView;
    use Filament\Tables\Columns\Column;
    use Filament\Tables\Columns\ColumnGroup;
    use Filament\Tables\Enums\ActionsPosition;
    use Filament\Tables\Enums\FiltersLayout;
    use Filament\Tables\Enums\RecordCheckboxPosition;
    use Illuminate\Support\Str;

    $actions = $getActions();
    $flatActionsCount = count($getFlatActions());
    $actionsAlignment = $getActionsAlignment();
    $actionsPosition = $getActionsPosition();
    $actionsColumnLabel = $getActionsColumnLabel();
    $activeFiltersCount = $getActiveFiltersCount();
    $columns = $getVisibleColumns();
    $collapsibleColumnsLayout = $getCollapsibleColumnsLayout();
    $columnsLayout = $getColumnsLayout();
    $content = $getContent();
    $contentGrid = $getContentGrid();
    $contentFooter = $getContentFooter();
    $filterIndicators = $getFilterIndicators();
    $hasColumnGroups = $hasColumnGroups();
    $hasColumnsLayout = $hasColumnsLayout();
    $hasSummary = $hasSummary();
    $header = $getHeader();
    $headerActions = array_filter(
        $getHeaderActions(),
        fn (\Filament\Tables\Actions\Action | \Filament\Tables\Actions\BulkAction | \Filament\Tables\Actions\ActionGroup $action): bool => $action->isVisible(),
    );
    $headerActionsPosition = $getHeaderActionsPosition();
    $heading = $getHeading();
    $group = $getGrouping();
    $bulkActions = array_filter(
        $getBulkActions(),
        fn (\Filament\Tables\Actions\BulkAction | \Filament\Tables\Actions\ActionGroup $action): bool => $action->isVisible(),
    );
    $groups = $getGroups();
    $description = $getDescription();
    $isGroupsOnly = $isGroupsOnly() && $group;
    $isReorderable = $isReorderable();
    $isReordering = $isReordering();
    $areGroupingSettingsVisible = (! $isReordering) && count($groups) && (! $areGroupingSettingsHidden());
    $isGroupingDirectionSettingHidden = $isGroupingDirectionSettingHidden();
    $isColumnSearchVisible = $isSearchableByColumn();
    $isGlobalSearchVisible = $isSearchable();
    $isSearchOnBlur = $isSearchOnBlur();
    $isSelectionEnabled = $isSelectionEnabled() && (! $isGroupsOnly);
    $selectsCurrentPageOnly = $selectsCurrentPageOnly();
    $recordCheckboxPosition = $getRecordCheckboxPosition();
    $isStriped = $isStriped();
    $isLoaded = $isLoaded();
    $hasFilters = $isFilterable();
    $filtersLayout = $getFiltersLayout();
    $filtersTriggerAction = $getFiltersTriggerAction();
    $hasFiltersDialog = $hasFilters && in_array($filtersLayout, [FiltersLayout::Dropdown, FiltersLayout::Modal]);
    $hasFiltersAboveContent = $hasFilters && in_array($filtersLayout, [FiltersLayout::AboveContent, FiltersLayout::AboveContentCollapsible]);
    $hasFiltersAboveContentCollapsible = $hasFilters && ($filtersLayout === FiltersLayout::AboveContentCollapsible);
    $hasFiltersBelowContent = $hasFilters && ($filtersLayout === FiltersLayout::BelowContent);
    $hasColumnToggleDropdown = $hasToggleableColumns();
    $hasHeader = $header || $heading || $description || ($headerActions && (! $isReordering)) || $isReorderable || $areGroupingSettingsVisible || $isGlobalSearchVisible || $hasFilters || count($filterIndicators) || $hasColumnToggleDropdown;
    $hasHeaderToolbar = $isReorderable || $areGroupingSettingsVisible || $isGlobalSearchVisible || $hasFiltersDialog || $hasColumnToggleDropdown;
    $pluralModelLabel = $getPluralModelLabel();
    $records = $isLoaded ? $getRecords() : null;
    $searchDebounce = $getSearchDebounce();
    $allSelectableRecordsCount = ($isSelectionEnabled && $isLoaded) ? $getAllSelectableRecordsCount() : null;
    $columnsCount = count($columns);
    $reorderRecordsTriggerAction = $getReorderRecordsTriggerAction($isReordering);
    $toggleColumnsTriggerAction = $getToggleColumnsTriggerAction();
    $page = $this->getTablePage();
    $defaultSortOptionLabel = $getDefaultSortOptionLabel();

    if (count($actions) && (! $isReordering)) {
        $columnsCount++;
    }

    if ($isSelectionEnabled || $isReordering) {
        $columnsCount++;
    }

    if ($group) {
        $groupedSummarySelectedState = $this->getTableSummarySelectedState($this->getAllTableSummaryQuery(), modifyQueryUsing: fn (\Illuminate\Database\Query\Builder $query) => $group->groupQuery($query, model: $getQuery()->getModel()));
    }

    $getHiddenClasses = function (Column | ColumnGroup $column): ?string {
        if ($breakpoint = $column->getHiddenFrom()) {
            return match ($breakpoint) {
                'sm' => 'sm:hidden',
                'md' => 'md:hidden',
                'lg' => 'lg:hidden',
                'xl' => 'xl:hidden',
                '2xl' => '2xl:hidden',
            };
        }

        if ($breakpoint = $column->getVisibleFrom()) {
            return match ($breakpoint) {
                'sm' => 'hidden sm:table-cell',
                'md' => 'hidden md:table-cell',
                'lg' => 'hidden lg:table-cell',
                'xl' => 'hidden xl:table-cell',
                '2xl' => 'hidden 2xl:table-cell',
            };
        }

        return null;
    };
        $resourceName = $this->getResource()::getSlug();
@endphp
<!-- <pre>{{ var_dump($records) }}</pre> -->
<link href="{{ asset('kendo/all.css') }}" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('kendo/all.js') }}"></script>


@if ($records && count($records) && count($columns))
    @php
     $kendoColumns = [];
        
        if ($isSelectionEnabled) {
            $kendoColumns[] = [
                'selectable' => true,
                'width' => 50,
                'attributes' => [
                    "class" => "checkbox-align",
                ],
                'headerAttributes' => [
                    "class" => "checkbox-align",
                ]
            ];
        }
        // Add actions column
        $kendoColumns[] = [
            'field' => 'actions',
            'title' => 'Actions',
            'width' => 200,
            'template' => '
                <div class="action-buttons">
                    <a href="/admin/'.$resourceName.'/#=id#/edit" class="k-button k-button-md k-rounded-md k-button-solid k-button-solid-tertiary">
                        Edit
                    </a>
                    <a href="/admin/'.$resourceName.'/#=id#/delete" class="k-button k-button-md k-rounded-md k-button-solid k-button-solid-primary" onclick="return confirm(\'Are you sure?\')">
                         Delete
                    </a>
                </div>',
            'filterable' => false,
            'sortable' => false,
            'groupable'=>false,
        ];
        foreach ($columns as $column) {
            $fieldName = $column->getName();
            $columnConfig = [
                'field' => $fieldName,
                'title' => $column->getLabel(),
                'width' => 180,
            ];
            
            // Special handling for certain field types
            if (Str::contains(strtolower($fieldName), ['image', 'avatar', 'photo'])) {
                $columnConfig['template'] = "<div class='customer-photo' style='background-image: url(/images/avatar/#:data.id#.jpg);'></div>";
                $columnConfig['width'] = 80;
            } elseif (Str::contains(strtolower($fieldName), ['name', 'title'])) {
                $columnConfig['template'] = "<div class='customer-name'>#: $fieldName #</div>";
                $columnConfig['width'] = 250;
            } elseif (Str::contains(strtolower($fieldName), ['email'])) {
                $columnConfig['template'] = "<a href='mailto:#: $fieldName #' class='email-link'>#: $fieldName #</a>";
            } elseif (Str::contains(strtolower($fieldName), ['price', 'amount', 'total'])) {
                $columnConfig['format'] = "{0:c}";
                $columnConfig['attributes'] = ['style' => 'text-align: right;'];
            } elseif (Str::contains(strtolower($fieldName), ['date', 'created_at', 'updated_at'])) {
                $columnConfig['format'] = "{0:yyyy-MM-dd}";
            }
            
            $kendoColumns[] = $columnConfig;
        }
        

       $kendoData = [];
foreach ($records as $record) {
    $row = [];
    foreach ($columns as $column) {
        $fieldName = $column->getName();

        // Check if the field is a relation method and if it's loaded
        if (method_exists($record, $fieldName)) {
            $relation = $record->$fieldName();

            if ($relation instanceof \Illuminate\Database\Eloquent\Relations\Relation) {
                // Load relation if not loaded
                if (! $record->relationLoaded($fieldName)) {
                    $record->load($fieldName);
                }

                // Get related models
                $related = $record->$fieldName;

                // Handle collections (hasMany, belongsToMany)
                if ($related instanceof \Illuminate\Support\Collection) {
                    $row[$fieldName] = $related->pluck('name')->join(', ');
                } 
                // Handle single relations (belongsTo, hasOne)
                elseif ($related) {
                    $row[$fieldName] = $related->name ?? (string) $related;
                } else {
                    $row[$fieldName] = '';
                }

                continue;
            }
        }

        // Default: use attribute value
        $row[$fieldName] = $record->{$fieldName};
    }
    $kendoData[] = $row;
}

    @endphp

    <div id="kendoGrid" class="k-grid-layout k-rounded-lg "></div>


        <script>
    // Use jQuery.noConflict() to avoid conflicts with other libraries
    var jq = jQuery.noConflict();
    function renderKendoGrid() {
        jq("#kendoGrid").empty();
        jq("#kendoGrid").kendoGrid({
           
            dataSource: {
                data: {!! json_encode($kendoData) !!},
                pageSize: 20,
                
            },
            columns: {!! json_encode($kendoColumns) !!},
             pageable: {
                pageSizes: [10, 20, 50, 100],
               
               
            },
            batch: true,
             autoSync: true,
            sortable: true,
            filterable: true,
            resizable: true,
            groupable: true,
            
             scrollable: true,
             selectable: true,
            
            reorderable:true,
            toolbar: [
                    { 
                         name: "search", 
                    text: 'Search...',
                        template: '<div class="k-toolbar k-grid-toolbar"><span class="k-input k-input-md k-rounded-md k-input-solid"><input class="k-input-inner" placeholder="Search..." id="gridSearch"/></span></div>'
                    },
                    { 
                        name: "excel", 
                        text: 'Export to Excel',
                        className: "k-button k-button-md k-rounded-md k-button-solid k-button-solid-tertiary" 
                    },
                    { 
                        name: "pdf", 
                        text: 'Export to PDF',
                        className: "k-button k-button-md k-rounded-md k-button-solid k-button-solid-tertiary" 
                    }
                ],
                excel: { 
                    fileName: "export.xlsx",
                    allPages: true,
                    filterable: true
                },
                pdf: { 
                    allPages: true,
                    fileName: "export.pdf",
                    avoidLinks: true,
                    paperSize: "A4",
                    margin: { top: "2cm", left: "1cm", right: "1cm", bottom: "2cm" }
                },
                noRecords: {
                    template: '<div class="k-grid-norecords k-text-center k-p-4">No records available</div>'
                }
            
        });
         
        
       
    }
    document.addEventListener("DOMContentLoaded", renderKendoGrid);
    document.addEventListener("livewire:update", renderKendoGrid);
</script>
 <style type="text/css">
        /* Grid styling */
        .k-grid {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            overflow: hidden;
        }
        
        .k-grid-header {
            background-color: #f5f5f5;
            border-bottom: 2px solid #e0e0e0;
        }
        
        .k-grid-header th {
            font-weight: 600;
            color: #333;
            padding: 12px 15px;
        }
        
        .k-grid td {
            padding: 10px 15px;
            border-color: #f0f0f0;
            vertical-align: middle;
        }
        
        .k-grid tr:hover {
            background-color: #f9f9f9;
        }
        
        .k-grid tr.k-alt {
            background-color: #fafafa;
        }
        
        /* Photo styling */
        .customer-photo {
            display: inline-block;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        
        /* Name styling */
        .customer-name {
            font-weight: 500;
            color: #333;
        }
        
        /* Action buttons */
        .action-buttons {
            display: flex;
            gap: 6px;
        }
        
        .action-buttons .k-button {
            min-width: 0;
            padding: 6px 10px;
        }
        
        /* Email links */
        .email-link {
            color: #1976d2;
            text-decoration: none;
        }
        
        .email-link:hover {
            text-decoration: underline;
        }
        
        /* Toolbar styling */
        .k-grid-toolbar {
            padding: 12px;
            background: #f5f5f5;
            border-bottom: 1px solid #e0e0e0;
        }
        
        .k-grid-toolbar .k-input {
            width: 300px;
        }
        
        /* Checkbox alignment */
        .checkbox-align {
            text-align: center;
            vertical-align: middle;
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .k-grid {
                font-size: 14px;
            }
            
            .k-grid td, .k-grid th {
                padding: 8px 10px;
            }
            
            .action-buttons {
                flex-direction: column;
                gap: 4px;
            }
            
            .action-buttons .k-button {
                width: 100%;
            }
            
            .k-grid-toolbar .k-input {
                width: 100%;
            }
        }
    </style>

@endif


   

    <x-filament-actions::modals />
</div>
