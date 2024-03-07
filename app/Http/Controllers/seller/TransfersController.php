<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransfersController extends Controller
{
    public function transfers(){
        
        return view('serviceprovider.transfers');
    }
    
    public function create_transfer(){
        
        return view('serviceprovider.New-transfer');
    }
}
