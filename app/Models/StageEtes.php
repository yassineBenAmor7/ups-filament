<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StageEtes extends Model
{
    use SoftDeletes;

    protected $table = 'stage_etes';

    protected $fillable = [
        'test',
        'created_at',
        'updated_at',
        'deleted_at',
        'description',
    ];

    public $timestamps = false;

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
