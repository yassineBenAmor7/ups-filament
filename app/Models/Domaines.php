<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Domaines extends Model
{
    protected $table = 'domaines';

    protected $fillable = [
        'designation_fr',
        'designation_en',
        'designation_ar',
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
