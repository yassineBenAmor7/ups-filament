<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tenders extends Model
{
    protected $table = 'tenders';

    protected $fillable = [
        'designation_fr',
        'designation_en',
        'designation_ar',
        'description_fr',
        'description_en',
        'description_ar',
        'publier',
        'files',
        'cdc',
        'resultat',
        'avis',
        'start_date',
        'end_date',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
        'slug',
        'consultation_number',
    ];

    public $timestamps = false;

    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
