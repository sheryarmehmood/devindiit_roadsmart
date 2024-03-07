<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckoutsController extends Controller
{
    public function abondonedcheckout(){
        
        return view('serviceprovider.abandonedcheckouts');
    }
}
