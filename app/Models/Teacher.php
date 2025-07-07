<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
use App\Models\Grade;
use App\Models\SoutenanceTeacher;
use App\Models\Department;

class Teacher extends Model
{
    protected $fillable = [
        'cin','nom','nom_ar','prenom','prenom_ar','name','email','specialite_fr','specialite_en','specialite_ar','department_id','poste','identifiant_unique','identifiant_unique','affichage_in_front','grade_id','nb_surveillance','max_supervising_nb','limit_access_date','second_email','fonction','situation_actuelle','teacher_status_id'
    ];
    public function subjects(){
      //  return $this->belongsToMany(Subject::class , 'subject_teachers');
    }
    public function groupes(){
       // return $this->belongsToMany(GroupTd::class , 'group_td_teachers' ,  'group_td_id' ,'teacher_cin' );
    }

    public function user(){
        return $this->belongsTo(User::class , 'cin' , 'cin');
    }
    public function grade(){
        return $this->belongsTo(Grade::class , 'grade_id' , 'id');
    }
    public function statut(){
      //  return $this->belongsTo(TeacherStatut::class , 'teacher_statut_id');
    }

    public function acceptedStagesCount($year_id)
    {
        return $this->user->stages->filter(function ($stage) use ($year_id) {
            return $stage->year_id == $year_id &&
                   ($stage->teacher_acceptation == 1 || $stage->acceptation == 1);
        })->count();
    }
    public function hasAvailableStages($year_id)
    {

        $max = 5;
        if($this->max_supervising_nb){
            $max = $this->max_supervising_nb;
        }else if(@$this->department->max_supervising_nb){
            $max = $this->department->max_supervising_nb;
        }

        $acceptedStages = $this->acceptedStagesCount($year_id);

        return $acceptedStages < $max; // Assuming you have `max_stage_count` column in users table
    }
     public function soutenanceTeacher(): HasMany
{
    return $this->hasMany(SoutenanceTeacher::class,'user_id');
}
public function department(): BelongsTo
{
    return $this->belongsTo(Department::class);
}
public function jurySoutenances(): BelongsToMany
{
    return $this->belongsToMany(Soutenance::class,'soutenance_teachers', 'teacher_id', 'soutenance_id')
        ->withPivot('poste')
        ->withTimestamps();
}

}
