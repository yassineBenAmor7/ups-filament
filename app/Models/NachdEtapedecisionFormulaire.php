<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NachdEtapedecisionFormulaire extends Model
{
    use HasFactory;

    public function nachdFormulaire(): BelongsTo
{
    return $this->belongsTo(NachdFormulaire::class);
}

public function nachdEtapedecision(): BelongsTo
{
    return $this->belongsTo(NachdEtapedecision::class);
}

    protected $fillable = ['ordre','nachd_etapedecision_id','nachd_formulaire_id','id'];
}
