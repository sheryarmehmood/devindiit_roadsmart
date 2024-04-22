<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceBundleSubServices extends Model
{
    use HasFactory;
    protected $table = 'service_bundle_subservice';

    protected $fillable = [
        'service_bundle_id',
        'sub_service_id'
    ];

    public function servicessubbundle()
    {
        return $this->belongsTo(ServicesBundle::class, 'services_bundles');
    }
}
