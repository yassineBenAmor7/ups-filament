<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class OfferType extends Model
{
    protected $fillable = [
        'designation_fr',
        'designation_en',
        'designation_ar',
        'cover_ar',
        'cover_en',
        'cover_fr',
        'publier'
    ];
}
