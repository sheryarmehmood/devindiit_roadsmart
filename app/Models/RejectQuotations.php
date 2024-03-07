<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RejectQuotations extends Model
{
    use HasFactory;
    protected $table = 'reject_quotations';
 
    protected $fillable = [
        'id',
        'request_id',
        'serviceEstimation_id',
        'user_id',
        'seller_id'
    ];
}
