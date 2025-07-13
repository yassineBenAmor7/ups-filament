<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;


class RessourceReservation extends Model
{
    protected $fillable = [
        'id',
        'user_id',
        'product_id',
        'user_name',
        'user_cin',
        'product',
        'product_category',
        'etat',
        'etat_deadline',
        'from',
        'to',
        'qty',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at'
    ];
    public function user(){
        return $this->belongsTo(User::class );
    }
}
