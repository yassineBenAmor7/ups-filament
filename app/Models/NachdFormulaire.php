<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NachdFormulaire extends Model
{
    use HasFactory;

    public function nachdFormulaireGroupement(): BelongsTo
{
    return $this->belongsTo(NachdFormulaireGroupement::class);
}

    protected $fillable = [
    'name_fr','name_en','name_ar','action','method','accept_files','code','decision','for','one','date_debut','date_fin','photo_supp_1','photo_supp_2','position_photo_1','position_photo_2','note','entete','footer','nachd_formulaire_groupement_id','response_model','response_header','response_footer',
];
}
