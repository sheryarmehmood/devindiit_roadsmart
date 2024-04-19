<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicesBundle extends Model
{
    use HasFactory;

    public function services()
    {
        return $this->belongsToMany(services::class, 'service_bundle_service');
    }

    public function subservices()
    {
        return $this->belongsToMany(SubServices::class, 'service_bundle_subservice');
    }
}
