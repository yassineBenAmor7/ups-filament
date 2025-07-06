<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StageTypes extends Model
{
    protected $table = 'stage_types';

    protected $fillable = [
        'designation_fr',
        'designation_ar',
        'designation_en',
        'is_required',
        'is_supervised',
        'is_company',
        'nb_candidate',
        'appui_model',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
        'publier',
        'assignment_model',
        'company_request_sheet_model',
        'duration_min',
        'duration_max',
        'sector_type_id',
        'level',
        'convention_model',
        'from',
        'to',
        'etranger',
        'request_from',
        'request_to',
        'prefix',
        'convention_model_en',
    ];

    public $timestamps = false;

    protected $dates = [
        'created_at',
        'updated_at',
        'from',
        'to',
        'request_from',
        'request_to',
    ];
}
