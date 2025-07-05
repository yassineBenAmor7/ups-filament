<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\SoutenanceTeacher;
use App\Models\Department;
use App\Models\Stage;
use App\Models\SoutenanceSessions;
use App\Models\Teacher;

class Soutenance extends Model
{  
    protected $fillable = [
        'date',
        'horaire_start',
        'horaire_end',
        'salle',
        'stage_id',
        'created_by',
        'updated_by',
        'publier',
        'result',
        'department_id',
        'soutenance_session_id',
        'pv'
    ];

   
public function stage(): BelongsTo
    {
        return $this->belongsTo(Stage::class, 'stage_id', 'id');
    }
public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class, 'department_id', 'id');
    }
    public function soutenanceSession(): BelongsTo
    {
        return $this->belongsTo(SoutenanceSessions::class, 'soutenance_session_id', 'id');
    }
    public function juries(){
        return $this->belongsToMany(Teacher::class,'soutenance_teachers' )
        ->withPivot(['poste'])
        ->withTimestamps() ;
    }
}
