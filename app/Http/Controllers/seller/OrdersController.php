<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function orders(){
        
        return view('serviceprovider.orders');
    }

    public function add_order(){
        
        return view('serviceprovider.add-order');
    }

    public function view_order($id=""){
        
        return view('serviceprovider.view-order');
    }

    public function edit_order($id=""){
        
        return view('serviceprovider.edit-order');
    }
    
    public function fullfill_item(){
        
        return view('serviceprovider.fullfillitem');
    }
    
}
