<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicles extends Model
{
    use HasFactory;
     protected $table = 'vehicles';
 
    protected $fillable = [
        'id',
        'model_year',
        'name',
        'price',
        'user_id',
        'status',
        'make_id',
        'model_id',
        'reg_no',
        'variant_id',
        'name',
        'price',
        'user_id',
        'status',
        'make_id',
        'model_id',
        'fit_ex_date',
        'fit_status'
    ];
}
