<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OffersTypes extends Model
{
    protected $table = 'offer_types';

    protected $fillable = [
        'designation_fr',
        'designation_en',
        'designation_ar',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
        'cover_fr',
        'cover_en',
        'cover_ar',
        'publier',
    ];

    public $timestamps = false;

    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
