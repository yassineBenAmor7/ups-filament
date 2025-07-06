<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StageCategories extends Model
{
    protected $table = 'stage_categories';

    protected $fillable = [
        'designation_fr',
        'designation_ar',
        'designation_en',
        'created_at',
        'updated_at',
        'created_by',
        'updated_by',
        'slug',
    ];

    public $timestamps = false;

    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
