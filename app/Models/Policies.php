<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Policies extends Model
{
    use HasFactory;
    protected $table = 'policies';
 
    protected $fillable = [
        'id',
        'user_id',
        'seller_id',
        'vehicle_id',
        'request_id',
        'policy_number',
        'rate',
        'discount',
        'premium',
        'cover',
        'start_date',
        'expiry_date',
        'status'
    ];
}
