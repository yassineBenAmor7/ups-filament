<?php

namespace App\Models\Formulaire;

use LaraZeus\Bolt\Models\Form as BaseForm;

class Form extends BaseForm
{  

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
    'target',
    'single_submission',
    'start_date',
    'end_date',
    'header',
    'footer',
    'supplementary_image_1',
    'supplementary_image_2',
    'image_1_position',
    'image_2_position',
    'response_template',
    'response_header',
    'response_footer',
    'user_id',
    'category_id',
    'created_by',
    'updated_by',
];

protected $casts = [
    'is_active' => 'boolean',
    'ordering' => 'integer',
    'accept_files' => 'boolean',
    'has_decision' => 'boolean',
    'single_submission' => 'boolean',
    'response_template' => 'array',
    'start_date' => 'datetime',
    'end_date' => 'datetime',
    'user_id' => 'integer',
    'category_id' => 'integer',
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
            config('zeus-bolt.table-prefix').'form_workflow')
            ->withPivot('ordre');
    }
    public function approvals()
{
    return $this->hasManyThrough(ResponseApproval::class, Response::class);
}
    
}