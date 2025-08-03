<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class NoteClaim extends Model
{


    protected $fillable = [
        'user_id',
        'note_id',
        'description',
        'etat',
    ];

    public function user(): BelongsTo
{
    return $this->belongsTo(User::class);
}

    public function note(): BelongsTo
{
    return $this->belongsTo(Note::class);
}
}
