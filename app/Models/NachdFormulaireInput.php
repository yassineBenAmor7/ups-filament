<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NachdFormulaireInput extends Model
{
    use HasFactory;

     public function nachdInput(): BelongsTo
{
    return $this->belongsTo(NachdInput::class);
}

     public function nachdFormulaire(): BelongsTo
{
    return $this->belongsTo(NachdFormulaire::class);
}

protected $fillable = [
    'nachd_formulaire_id',
    'nachd_input_id',
    'etat_required',
    'etat_disabled',
    'etat_public',
    'ordre'
];
}
