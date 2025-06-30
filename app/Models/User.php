<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

use App\Models\StudentsPredefinedList;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable , HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
        'cin',
        'is_validated',
        'publier',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
             'is_validated' => 'boolean',
             'publier'=>'boolean'
        ];
    }

    /*public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function isRole($name)
    {
        if ($this->role->name == $name) {
            return true;
        }
        return false;
    }*/

    public function subjects()
    {
       // return $this->belongsToMany(Subject::class, 'subject_users');
    }


    public function receivers()
    {
      //  return $this->hasMany(Message::class, 'receiver_id', 'id')->where('sender_id', auth()->user()->id)->orderBy('messages.created_at', 'desc');
    }


    public function senders()
    {
      //  return $this->hasMany(Message::class, 'sender_id', 'id')->where('receiver_id', auth()->user()->id);
    }

    public function cv_setting()
    {
       // return $this->hasOne(CvSetting::class, 'user_id', 'id')->where('cv_settings.publier', 1);
    }

    public function company()
    {
      //  return $this->belongsTo(Entreprise::class , 'entreprise_id');
    }
    public function stages(){
      //  return $this->hasMany(Stage::class , 'encadrant_cin');
    }
    // This relationship assumes that both users.cin and teachers.cin are the same.
    public function teacher(){
      //  return $this->belongsTo(Teacher::class , 'cin' , 'cin' );
    }
    public function student_stages(){
      //  return $this->hasMany(Stage::class  , 'candidat_1_id');
    }

    public function department(){
        if($this->isRole('Enseignant')){
            return $this->teacher?->department;
        }else if($this->isRole('Etudiant')){
            $stp = StudentsPredefinedList::where('cin', $this->cin)->first();
            if($stp){
                return $stp->group?->sector?->department;
            }

        }
        return null;
    }


}


