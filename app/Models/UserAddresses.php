<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAddresses extends Model
{
    use HasFactory;

 protected $table = 'user_addresses';
 
    protected $fillable = [
        'id',
        'user_id',
        'title',
        'address',
        'city',
        'state',
        'country',
        'default',
        'zip_code'
    ];
    
    // protected $hidden = ['user_id'];
    
    //     public function user()
    // {
    //     return $this->belongsTo('App\Models\User', 'user_id');
    // }
}
