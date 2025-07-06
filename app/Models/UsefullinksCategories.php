<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsefullinksCategories extends Model
{
    protected $table = 'usefullink_categories';

    protected $fillable = [
        'designation_fr',
        'designation_en',
        'designation_ar',
        'publier',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
    ];

    public $timestamps = false;

    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
