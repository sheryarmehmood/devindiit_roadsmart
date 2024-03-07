<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceEstimations extends Model
{
    use HasFactory;
    protected $table = 'service_estimations';
    
    protected $fillable = [
        'id',
        'service_request_id',
        'dynamic_id',
        'service_item_id',
        'seen'
    ];
}
