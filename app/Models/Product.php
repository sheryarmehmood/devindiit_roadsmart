<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\ProductCategory;
use App\Models\Vehicles;
use App\Models\BrandName;
use App\Models\SellerProductPrice;

class Product extends Model
{
    use HasFactory;

 protected $table = 'products';
 
    protected $fillable = [
        'product_name',
        'product_category_id',
        'brand_name',
        'description',
        'purchase_price',
        'sale_price',
        'SKU',
        'stock_status',
        'quantity',
        'image',
        'location',
        'compatible_vehicle',
        'seller_id',
        'discount'
    ];
    
    public function BrandName(): BelongsTo
    {
        return $this->belongsTo(BrandName::class, 'brand_name');
    }
    public function category(): BelongsTo
    {
        return $this->belongsTo(ProductCategory::class, 'product_category_id');
    }
    public function CompatibleVehicle()
    {
        return $this->belongsTo(Vehicles::class, 'compatible_vehicle' , 'id');
    }
    public function SellerPrice()
    {
        return $this->hasMany(SellerProductPrice::class, 'seller_id' , 'seller_id');
    }


}
