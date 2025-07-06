<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usefullinks extends Model
{
    protected $table = 'usefullinks';

    protected $fillable = [
        'designation_fr',
        'designation_en',
        'designation_ar',
        'link',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
        'logo',
    ];

    public $timestamps = false;

    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
