<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class NewsPerCategory extends Model
{
    public function news(): BelongsTo
{
    return $this->belongsTo(News::class);
}
    public function newsCategory(): BelongsTo
{
    return $this->belongsTo(NewsCategory::class);
}

protected $fillable = ['publier'];
}