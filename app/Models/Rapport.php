<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Rapport extends Model
{
    protected $fillable = ['rapport','remarque','etat','avis_encadrant','rapport_encadrant','rapport_encadrant_created_at','stage_rapport_type_id','plagiat_rapport','plagiat_note'];

    public function stage(){
        return $this->belongsTo(Stage::class,'stage_id','id');
    }
    public function stageDocumentType(){
        return $this->belongsTo(StageDocumentType::class , 'stage_rapport_type_id');
    }
}
