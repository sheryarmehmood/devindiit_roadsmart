<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllChatUser extends Model
{
    use HasFactory;
     protected $guard = 'all_chats_user';
    protected $fillable = [
        'user_id', 'seller_id','created_at','updated_at'
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];

}
