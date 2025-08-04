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
           
            ->withPivot('ordre')
             ->orderByPivot('ordre');
    }
//     public function approvals()
// {
//     return $this->hasManyThrough(ResponseApproval::class, Response::class);
// }
public function roles()
{
    return $this->belongsToMany(Role::class, config('zeus-bolt.table-prefix').'form_permissions');
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
}
}