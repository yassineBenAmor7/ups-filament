<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StageDocumentTypes extends Model
{
    protected $table = 'stage_document_types';

    protected $fillable = [
        'designation_fr',
        'designation_en',
        'designation_ar',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
        'publier',
        'is_required',
        'slug',
        'order',
    ];

    public $timestamps = false;

    protected $casts = [
        'is_required' => 'integer',
        'publier' => 'integer',
        'order' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
