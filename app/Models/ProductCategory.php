<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;
    protected $table = 'product_categories';
 
    protected $fillable = [
        'product_category_name'
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
