<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class SoutenanceTeacher extends Model
{
    public $timestamps = false;
    protected $fillable = ['soutenance_id', 'teacher_id', 'poste'];


     public function soutenance(): BelongsTo
    {
        return $this->belongsTo(Soutenance::class);
    }

    public function teacher(): BelongsTo
    {
        return $this->belongsTo(Teacher::class,'teacher_id');
    }
}
