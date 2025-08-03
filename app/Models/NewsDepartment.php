<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class NewsDepartment extends Model
{
    public function department(): BelongsTo
{
    return $this->belongsTo(Department::class);
}
    public function news(): BelongsTo
{
    return $this->belongsTo(News::class);
}
}
