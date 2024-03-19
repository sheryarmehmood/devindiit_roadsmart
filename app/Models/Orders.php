<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    
    protected $table = 'orders';
 
    protected $fillable = [
        'id',
        'amount',
        'delivery_address_id',
        'user_id',
        'vehicle_id'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
