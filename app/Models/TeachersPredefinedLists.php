<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeachersPredefinedLists extends Model
{
    protected $table = 'teachers_predefined_lists';

    protected $fillable = [
        'cin',
        'nom',
        'nom_ar',
        'prenom',
        'prenom_ar',
        'grade_fr',
        'grade_en',
        'grade_ar',
        'specialite_fr',
        'specialite_en',
        'specialite_ar',
        'department_id',
        'statut_fr',
        'statut_en',
        'statut_ar',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
        'email',
    ];

    public $timestamps = false;

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    // Relationships
    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updatedBy()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
