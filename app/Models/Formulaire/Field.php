<?php

namespace App\Models\Formulaire;

use Illuminate\Database\Eloquent\Model;
use LaraZeus\Bolt\Models\Field as BaseField;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Translatable\HasTranslations;

class Field extends BaseField
{
    use HasTranslations;
     public array $translatable = ['label'];
    protected $fillable = [
    'name',
    'type',
    'label',
    'placeholder',
    'options',
    'default_value',
   
   
    'section_id',
    'is_required',
    'is_disabled',
    'is_visible',
    'ordering',
     'is_required',
    'is_disabled' ,
    'is_visible',
    'ordering' ,
];

 protected $casts = [
        'options' => 'array',
        'is_required' => 'boolean',
        'is_disabled' => 'boolean',
        'is_visible' => 'boolean',
    ];
     public function creator()
    {
        return $this->belongsTo(config('auth.providers.users.model'), 'created_by');
    }

    public function updater()
    {
        return $this->belongsTo(config('auth.providers.users.model'), 'updated_by');
    }

   

    public function section():BelongsTo
    {
        return $this->belongsTo(Section::class, 'section_id');
    }
    
}
