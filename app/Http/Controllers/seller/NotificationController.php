<?php

namespace App\Http\Controllers\serviceProvider;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function notifications(){
        
        return view('serviceprovider.notification');
    }
}
