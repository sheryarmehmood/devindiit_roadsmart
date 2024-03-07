<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderReviews extends Model
{
    use HasFactory;

 protected $table = 'order_reviews';
 
    protected $fillable = [
        'user_id',
        'order_id',
        'rating',
        'review',
    ];
    
    // protected $hidden = ['user_id'];
    
    //     public function user()
    // {
    //     return $this->belongsTo('App\Models\User', 'user_id');
    // }
}
