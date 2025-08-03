<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NachdFormulaireRole extends Model
{
    use HasFactory;

    public function nachdFormulaire(): BelongsTo
{
    return $this->belongsTo(NachdFormulaire::class);
}
public function role(): BelongsTo
{
    return $this->belongsTo(Role::class);
}
}
