<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubServices extends Model
{
    use HasFactory;

    public function service()
    {
        return $this->belongsTo(services::class);
    }

    public function bundles()
    {
        return $this->belongsToMany(ServicesBundle::class, 'service_bundle_subservice');
    }

}
