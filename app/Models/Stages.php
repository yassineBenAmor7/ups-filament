<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Stages extends Model
{
    use SoftDeletes;

    protected $table = 'stages';

    protected $fillable = [
        'candidat_1_id',
        'candidat_2_id',
        'candidat_3_id',
        'entreprise_id',
        'candidat_1_name',
        'candidat_2_name',
        'candidat_3_name',
        'encadrant_name',
        'sujet',
        'domaine',
        'description',
        'duree',
        'start',
        'end',
        'rapport',
        'level',
        'etat',
        'created_by',
        'updated_by',
        'encadrant_id',
        'avis_encadrant',
        'avis_jury',
        'remarque_jury',
        'resultat_jury',
        'remarque_encadrant',
        'slug',
        'responsible_id',
        'status',
        'type_stage',
        'motivation_letter',
        'offer_id',
        'company_acceptation',
        'teacher_acceptation',
        'acceptation',
        'company_validation',
        'teacher_validation',
        'validation',
        'assignment_file',
        'internship_certificate',
        'activities_file',
        'stage_type_id',
        'other_file',
        'company_request_sheet',
        'appui_request',
        'responsible_name',
        'responsible_email',
        'year_id',
        'convention_file',
        'department_id',
        'signed_by',
        'convention_html',
        'stage_category_id',
        'signed_convention_file',
        'code',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // Relationships (examples, adjust as needed)
    public function offer()
    {
        return $this->belongsTo(Offers::class, 'offer_id');
    }

    public function stageType()
    {
        return $this->belongsTo(StageTypes::class, 'stage_type_id');
    }

    public function year()
    {
        return $this->belongsTo(Years::class, 'year_id');
    }

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }

    public function stageCategory()
    {
        return $this->belongsTo(StageCategories::class, 'stage_category_id');
    }
}
