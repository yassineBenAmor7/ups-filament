<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Themes extends Model
{
    protected $table = 'themes';

    protected $fillable = [
        'designation_fr',
        'designation_en',
        'designation_ar',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
        'publier',
    ];

    public $timestamps = false;

    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
