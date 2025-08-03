<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
    'image',
    'slug',
    'meta_description',
    'meta_keywords',
    'publier',
    'pdf',
    'designation_fr',
    'designation_en',
    'designation_ar',
    'short_description_fr',
    'short_description_en',
    'short_description_ar',
    'description_fr',
    'description_en',
    'description_ar',
    'target',
    'display_type',
    'link',
    'files',
];
}
