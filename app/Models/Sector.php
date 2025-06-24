<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Sector extends Model
{
   protected $fillable = [
      'sector_type_id','designation_fr','designation_ar','designation_en','plan_etude','description_fr','description_ar','description_en','department_id','publier','slug','created_by','updated_by','created_at','updated_at','educational_coordinator','internship_coordinator'
  ];
    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function sectorType()
    {
        return $this->belongsTo(SectorType::class);
    }

    public function plaquettePedagogiques()
    {
        return $this->hasMany(PlaquettePedagogique::class);
    }

    public function coordinationSectors()
    {
        return $this->hasMany(CoordinationSector::class);
   }
}