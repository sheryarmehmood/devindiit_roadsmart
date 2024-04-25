<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSellers extends Model
{
    use HasFactory;
    protected $table = 'product_sellers';
 
    protected $fillable = [
        'product_id',
        'seller_price_id'
    ];

    public function SellerPrice()
    {
        return $this->hasOne(ProductSellerPrices::class, 'seller_price_id', 'id');
    }
    public function SellerProduct()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
