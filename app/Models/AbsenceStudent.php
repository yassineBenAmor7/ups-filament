<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;


class AbsenceStudent extends Model
{

     // **************  wd  **************

    use HasFactory;

    protected $table = 'absence_students';

    public function absence()
    {
        return $this->belongsTo(Absence::class, 'absence_id');
    }

    public function student(){
        return $this->belongsTo(StudentsPredefinedList::class, 'student_cin' , 'cin');
    }
     // **************  wd  **************
}
