<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubjectDocuments extends Model
{
    protected $table = 'subject_documents';

    protected $fillable = [
        'designation_fr',
        'designation_en',
        'designation_ar',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
        'publier',
        'order',
        'url',
        'parent_id',
    ];

    public $timestamps = false;

    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
