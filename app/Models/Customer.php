<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

 protected $table = 'orders';
 
    protected $fillable = [
        'id',
        'amount',
        'delivery_address_id',
        'user_id'
    ];
    
    // protected $hidden = ['user_id'];
    
    //     public function user()
    // {
    //     return $this->belongsTo('App\Models\User', 'user_id');
    // }
}
