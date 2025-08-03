<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class NewsGroup extends Model
{
   public function news(): BelongsTo
{
    return $this->belongsTo(News::class);
}
    public function group(): BelongsTo
{
    return $this->belongsTo(Group::class);
}
}
