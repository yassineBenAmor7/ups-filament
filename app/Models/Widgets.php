<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Widgets extends Model
{
    protected $table = 'widgets';

    protected $fillable = [
        'designation_fr',
        'designation_en',
        'designation_ar',
        'order',
        'created_at',
        'updated_at',
        'deleted_at',
        'icon',
        'link',
        'color',
        'align',
        'model_name',
        'created_by',
        'updated_by',
    ];

    public $timestamps = false;

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
