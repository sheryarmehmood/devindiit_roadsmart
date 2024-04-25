<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSellerPrices extends Model
{
    use HasFactory;
    protected $table = 'product_seller_prices';
 
    protected $fillable = [
        'seller_id',
        'seller_price'
    ];

    public function SellerProduct()
    {
        return $this->belongsTo(ProductSellers::class);
    }
}
