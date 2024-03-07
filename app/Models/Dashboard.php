<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{
    use HasFactory;
 protected $table = 'orders';
 
    protected $fillable = [
        'id',
        'request_id',
        'amount',
        'vehicle_id',
        'user_id',
        'status',
        'delivery_address_id',
        'cartid',
        
    ];
    
}
