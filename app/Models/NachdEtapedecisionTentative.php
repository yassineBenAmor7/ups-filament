<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NachdEtapedecisionTentative extends Model
{
    use HasFactory;

    public function nachdTentative(): BelongsTo
{
    return $this->belongsTo(NachdTentative::class);
}

public function nachdEtapedecision(): BelongsTo
{
    return $this->belongsTo(NachdEtapedecision::class);
}

    protected $fillable =['id','etat','nachd_etapedecision_id','nachd_tentative_id'];
}
