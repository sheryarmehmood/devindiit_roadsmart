<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellerProductPrice extends Model
{
    use HasFactory;
    protected $table = 'seller_product_prices';
    protected $fillable = [
        'seller_id',
        'seller_price',
        'product_id'
    ];

    public function Product()
    {
        return $this->hasOne(Product::class, 'product_id');
    }
}
