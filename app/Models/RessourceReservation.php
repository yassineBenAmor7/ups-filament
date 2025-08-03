<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;


class RessourceReservation extends Model
{
    protected $fillable = [
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
        'qty'
    ];
    public function user(){
        return $this->belongsTo(User::class );
    }
}
