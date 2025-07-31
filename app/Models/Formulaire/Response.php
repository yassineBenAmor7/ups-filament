<?php

namespace App\Models\Formulaire;

use Illuminate\Database\Eloquent\Model;
use LaraZeus\Bolt\Models\Response as BaseResponse;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Response extends BaseResponse
{
   protected $fillable = [
    'form_id',
    'user_id',
    'status',
    'confirmation_code',
    'submitted_at',
    'processed_at',
    'notes',
    'paper_response',
    'created_by',
    'updated_by',
];

protected $casts = [
    'submitted_at' => 'datetime',
    'processed_at' => 'datetime',
];
     public function creator()
    {
        return $this->belongsTo(config('auth.providers.users.model'), 'created_by');
    }

    public function updater()
    {
        return $this->belongsTo(config('auth.providers.users.model'), 'updated_by');
    }
    public function user():BelongsTo
{
    return $this->belongsTo(User::class);
}

public function approvals()
{
    return $this->hasMany(ResponseApproval::class);
}

public function currentApproval()
{
    return $this->hasOne(ResponseApproval::class)->latestOfMany();
}
 protected static function booted(): void
{
    static::creating(function ($model) {
        $model->created_by = auth()->id();
        $model->updated_by = auth()->id();
    });

    static::updating(function ($model) {
        $model->updated_by = auth()->id();
    });
}
}
