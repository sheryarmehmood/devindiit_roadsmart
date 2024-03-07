<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function reports(){
        
        return view('serviceprovider.report');
    }

    public function marketplace_detail($id=""){
        
        return view('serviceprovider.marketplace-detail');
    }
}
