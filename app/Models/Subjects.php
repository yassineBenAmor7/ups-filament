<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subjects extends Model
{
    protected $table = 'subjects';

    protected $fillable = [
        'designation_fr',
        'designation_en',
        'designation_ar',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
        'slug',
        'publier',
        'max_absence_nb',
    ];

    public $timestamps = false;

    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
