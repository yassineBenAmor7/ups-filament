<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class NewsUser extends Model
{
    public function news(): BelongsTo
{
    return $this->belongsTo(News::class);
}
    public function user(): BelongsTo
{
    return $this->belongsTo(User::class);
}
}
