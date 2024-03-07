<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellerRating extends Model
{
    use HasFactory;

 protected $table = 'seller_rating';
 
    protected $fillable = [
        'user_id',
        'seller_id',
        'rating',
        'comments',
    ];
    
    // protected $hidden = ['user_id'];
    
    //     public function user()
    // {
    //     return $this->belongsTo('App\Models\User', 'user_id');
    // }
}
