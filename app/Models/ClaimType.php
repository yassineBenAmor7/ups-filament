<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class ClaimType extends Model
{
    protected $fillable = [
        'id',
        'designation_fr',
        'designation_en',
        'designation_ar',
        'publier',
        'order',
        'module',
        'responsible_id',
        'claim_destination_id',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
    ];
}
