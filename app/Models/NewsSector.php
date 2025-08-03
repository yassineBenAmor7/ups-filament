<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class NewsSector extends Model
{
    public function news(): BelongsTo
{
    return $this->belongsTo(News::class);
}
    public function sectors(): BelongsTo
{
    return $this->belongsTo(Sector::class);
}
}
