<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Road_tax extends Model
{
    use HasFactory;
 protected $table = 'road_tax';
 
  protected $fillable = [
        'id',
        'user_id',
        'seller_id',
        'vehicle_id',
        'request_id',
        'note',
        'amount',
        'quarter_expiry',
        'status'
    ];
}
