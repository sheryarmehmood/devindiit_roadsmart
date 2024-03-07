<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class onlinestores extends Model
{
    use HasFactory;

    protected $fillable = [
        'domain_name',
        'website_link',
        'seller_id',
        'status',
        'is_deleted'
    ];
}
