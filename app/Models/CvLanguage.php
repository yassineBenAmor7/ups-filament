<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class CvLanguage extends Model
{
    protected $fillable = [
        'id',
        'designation',
        'publier',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
    ];
}
