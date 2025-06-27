<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class CoordinationSector extends Model
{

    protected $fillable = [
        'sector_id',
        'user_id', 
        'role', 
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',       
        'publier',
    ];

    public function sector()
    {
        return $this->belongsTo(Sector::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
