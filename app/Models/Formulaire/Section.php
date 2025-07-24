<?php
namespace App\Models\Formulaire;
use LaraZeus\Bolt\Models\Section as BaseSection;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Section extends BaseSection
{
    protected $fillable = [
        'form_id', 'name', 'description', 'ordering', 'columns',
        'icon', 'aside', 'compact', 'borderless', 'options'
    ];

    public function form():BelongsTo
    {
        return $this->belongsTo(Form::class, 'form_id');
    }

    public function fields(): HasMany
    {
        return $this->hasMany(Field::class);
    }
}