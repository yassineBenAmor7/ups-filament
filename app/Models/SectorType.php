<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class SectorType extends Model
{
    protected $fillable = [
        'designation_fr',
        'designation_en',
        'designation_ar',
        'created_by',
        'updated_by',
        'publier',
        'slug',
    ];

    public function sectors()
    {
        return $this->hasMany(Sector::class);
    }
}
