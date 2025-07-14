<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $fillable = [
        'user_id',
        'table_name',
        'action',
        'description',
        'data'
    ];

    protected $casts = [
        'data' => 'array'
    ];
    public function user()
{
    return $this->belongsTo(\App\Models\User::class);
}
public function getDesignationFrAttribute()
{
    $data = is_string($this->data) ? json_decode($this->data, true) : $this->data;

    // Retourne la désignation_fr si présente, sinon le numéro d'inscription
    return $data['designation_fr'] ?? $data['numero_inscription'] ?? '';
}
public function getNumeroInscriptionAttribute(): ?string
{
    return $this->data['numero_inscription'] ?? null;
}
}
