<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $guard = 'appointment';
    protected $fillable = [
        'serviceEstimationId', 'seller_id'	,'user_id	','serviceProvidesId	','appointment_Date'	,'appointment_Time',	'requestid'	,'status'
    ];
}
