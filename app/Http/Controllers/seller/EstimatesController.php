<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EstimatesController extends Controller
{
    public function estimates(){
        
        return view('serviceprovider.estimates');
    }

    public function view_estimate($id=""){
        
        return view('serviceprovider.view-estimate');
    }
}
