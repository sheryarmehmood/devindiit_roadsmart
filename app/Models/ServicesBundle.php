<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicesBundle extends Model
{
    use HasFactory;
    protected $table = 'services_bundles';

    protected $fillable = [
        'name',
        'price',
        'description',
        'services',
        'sub_services',
        'bundle_image',
        'status'
    ];

    public function services()
    {
        return $this->belongsToMany(services::class, 'service_bundle_service');
    }

    public function subservices()
    {
        return $this->belongsToMany(SubServices::class, 'service_bundle_subservice');
    }
}
