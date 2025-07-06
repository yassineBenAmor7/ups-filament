<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Years extends Model
{
    protected $table = 'years';

    protected $fillable = [
        'designation',
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
