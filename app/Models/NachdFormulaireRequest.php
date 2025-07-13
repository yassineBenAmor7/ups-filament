<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NachdFormulaireRequest extends Model
{
    use HasFactory;


    public function nachdInput(){
        return $this->belongsTo(NachdInput::class,'nachd_input_id','id');
    }
}
