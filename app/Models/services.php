<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class services extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
        'subcategory',
        'service_type',
        'price',
        'compatible_vehicle',
        'vendor',
        'brand_name',
        'image',
        'status',
        'seller_id'
    ];
}
