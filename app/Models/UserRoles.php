<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserRoles extends Model
{
    protected $table = 'user_roles';

    public $incrementing = false;
    public $timestamps = false;

    protected $primaryKey = ['user_id', 'role_id'];
    protected $keyType = 'array';

    protected $fillable = [
        'user_id',
        'role_id',
    ];

    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }
}
