<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Services extends Model
{
    use HasFactory;
    protected $table = 'services';

    protected $fillable = [
        'category',
        'service_name',
        'service_category',
        'service_details',
        'sellers',
        'service_charges',
        'service_location',
        'service_status'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category');
    }

    public function serviceCategory(): BelongsTo
    {
        return $this->belongsTo(serviceCategory::class, 'service_category');
    }

    public function serviceSeller(): BelongsTo
    {
        return $this->belongsTo(Seller::class, 'sellers');
    }

    public function subservices()
    {
        return $this->hasMany(SubServices::class);
    }

    public function bundles()
    {
        return $this->belongsToMany(ServicesBundle::class, 'service_bundle_service');
    }
}
