<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GroupTp extends Model
{
    protected $fillable = [
        'id',
        'groupe_td_id',
        'designation_fr',
        'designation_en',
        'designation_ar',
        'publier',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at'

    ];

}
