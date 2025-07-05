<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class SoutenanceSessions extends Model
{
    public function soutenances(): HasMany
    {
        return $this->hasMany(Soutenance::class, 'soutenance_session_id', 'id');
    }
}
