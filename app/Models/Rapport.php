<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Rapport extends Model
{

    public function stage(){
        return $this->belongsTo(Stage::class,'stage_id','id');
    }
    public function stageDocumentType(){
        return $this->belongsTo(StageDocumentType::class , 'stage_rapport_type_id');
    }
}
