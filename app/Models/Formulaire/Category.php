<?php

namespace App\Models\Formulaire;

use Illuminate\Database\Eloquent\Model;
use LaraZeus\Bolt\Models\Category as BaseCategory;
class Category extends BaseCategory
{
   protected $fillable = [
    'name',
    'slug',
    'is_active',
    'description',
    'logo',
    'ordering',
    'created_by',
    'updated_by',
];

protected $casts = [
    'is_active' => 'boolean',
    'ordering' => 'integer',
];

    public function creator()
    {
        return $this->belongsTo(config('auth.providers.users.model'), 'created_by');
    }

    public function updater()
    {
        return $this->belongsTo(config('auth.providers.users.model'), 'updated_by');
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
