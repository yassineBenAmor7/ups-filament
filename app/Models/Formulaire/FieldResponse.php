<?php 
namespace App\Models\Formulaire;
use \LaraZeus\Bolt\Models\FieldResponse as BaseFieldResponse;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FieldResponse extends BaseFieldResponse {
    protected $fillable=[
        'response_id',
        'form_id',
        'field_id',
        'response'
    ];
    
   public function field(): BelongsTo
{
    return $this->belongsTo(Field::class);
}
}