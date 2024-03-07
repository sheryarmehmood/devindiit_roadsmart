<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

 protected $table = 'products';
 
    protected $fillable = [
        'product_name',
        'vendor',
        'brand_name',
        'description',
        'purchase_price',
        'sale_price',
        'SKU',
        'stock_status',
        'is_tyre_product',
        'quantity',
        'image',
        'location',
        'compatible_vehicle',
        'seller_id',
        'is_deleted',
        'status',
        'tyre_size',
        'discount'
    ];
    
    // protected $hidden = ['user_id'];
    
    //     public function user()
    // {
    //     return $this->belongsTo('App\Models\User', 'user_id');
    // }
}
