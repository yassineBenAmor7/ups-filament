<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stats extends Model
{
    protected $table = 'stats';

    protected $fillable = [
        'designation_fr',
        'designation_en',
        'designation_ar',
        'value',
        'cover',
        'order',
        'route',
        'year_id',
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

    // Relationships
    public function year()
    {
        return $this->belongsTo(Years::class, 'year_id');
    }
}
