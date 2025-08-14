<?php

namespace App\Models\Formulaire;

use LaraZeus\Bolt\Models\Form as BaseForm;
use Spatie\Permission\Models\Role;
use Spatie\Translatable\HasTranslations;

class Form extends BaseForm
{  

     use HasTranslations;
   

    public array $translatable = ['name', 'description'];

    protected $fillable = [
    'name',
    'slug',
    'description',
    'is_active',
    'ordering',
    'action',
    'method',
    'accept_files',
    'has_decision',
    'form_for',
    
    'start_date',
    'end_date',
    'header',
    'footer',
   
    'response_template',
    'response_header',
    'response_footer',
    'user_id',
    'category_id',
    'created_by',
    'updated_by',
    'options',
    'workflow_config',
];

protected $casts = [
    'is_active' => 'boolean',
    'ordering' => 'integer',
    'accept_files' => 'boolean',
    'has_decision' => 'boolean',
    
    'response_template' => 'array',
    'start_date' => 'datetime',
    'end_date' => 'datetime',
    'user_id' => 'integer',
    'category_id' => 'integer',
     'options' => 'array',
    'workflow_config'=>'array',

];
   
     public function creator()
    {
        return $this->belongsTo(config('auth.providers.users.model'), 'created_by');
    }

    public function updater()
    {
        return $this->belongsTo(config('auth.providers.users.model'), 'updated_by');
    }

    public function workflowSteps()
    {
        return $this->belongsToMany(WorkflowStep::class, 
            config('zeus-bolt.table-prefix').'form_workflow','form_id','workflow_step_id')
           
            ->withPivot(['ordre','role_id'])
             ->withTimestamps();
    }

public function roles()
{
    return $this->belongsToMany(Role::class, config('zeus-bolt.table-prefix').'form_permissions')
                   ->withPivot('created_by', 'updated_by')
                ->withTimestamps() ;
}
public function rolePermissions()
{
    return $this->belongsToMany(\Spatie\Permission\Models\Permission::class,  config('zeus-bolt.table-prefix').'form_permissions')
                ->withPivot('role_id', 'created_by', 'updated_by')
                ->withTimestamps();
}






     protected static function booted(): void
{
    static::creating(function ($model) {
        $model->created_by = auth()->id();
        $model->updated_by = auth()->id();
    });

    static::updating(function ($model) {
        $model->updated_by = auth()->id();
    });
    static::saving(function ($model) {
        // Normalize workflow_config before saving
       if (!$model->has_decision) {
            $model->workflow_config = null;
        } elseif (is_array($model->workflow_config)) {
            // Clean up workflow_config IDs before saving
            $model->workflow_config = collect($model->workflow_config)->map(function ($item) {
                if (is_array($item['workflow_step_id']) && isset($item['workflow_step_id']['id'])) {
                    $item['workflow_step_id'] = $item['workflow_step_id']['id'];
                }
                return $item;
            })->filter(fn ($item) => !is_null($item['workflow_step_id']))->toArray();
        }
    });
     static::saved(function ($form) {
        $form->syncWorkflowSteps();
         
    });
}
 
public function syncWorkflowSteps(): void
{
    if (!$this->has_decision || empty($this->workflow_config)) {
        // If there's no decision, or no steps — clear the pivot table
        $this->workflowSteps()->detach();
        return;
    }
    $config = $this->workflow_config ?? [];

    $syncData = [];

    foreach ($config as $item) {
        $stepId = $item['workflow_step_id'] ?? null;

        if (!$stepId) {
            continue;
        }

        $syncData[$stepId] = [
            'role_id' => $item['role_id'],
            'ordre' => $item['ordre'],
            'created_by' => auth()->id(),
            'updated_by' => auth()->id(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }

    $this->workflowSteps()->sync($syncData);
}



}