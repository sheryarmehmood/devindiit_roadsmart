<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceBundleServices extends Model
{
    use HasFactory;
    protected $table = 'service_bundle_service';

    protected $fillable = [
        'service_bundle_id',
        'service_id'
    ];

    public function servicesbundle()
    {
        return $this->belongsTo(ServicesBundle::class, 'services_bundles');
    }

}
