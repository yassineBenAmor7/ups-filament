<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NachdFormulaireRequest extends Model
{
    use HasFactory;


    public function nachdInput(){
        return $this->belongsTo(NachdInput::class,'nachd_input_id','id');
    }

    public function nachdFormulaire(): BelongsTo
{
    return $this->belongsTo(NachdFormulaire::class);
}
    public function nachdFormulaireInput(): BelongsTo
{
    return $this->belongsTo(NachdFormulaireInput::class);
}
    public function nachdTentative(): BelongsTo
{
    return $this->belongsTo(NachdTentative::class);
}

    protected $fillable = ['value'];
    
}
