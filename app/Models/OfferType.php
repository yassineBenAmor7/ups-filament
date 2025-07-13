<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class OfferType extends Model
{
    protected $fillable = [
        'id',
        'designation_fr',
        'designation_en',
        'designation_ar',
    ];
}
