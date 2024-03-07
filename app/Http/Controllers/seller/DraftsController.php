<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DraftsController extends Controller
{
    public function drafts(){
        
        return view('serviceprovider.drafts');
    }
    
    public function request_draft(){
        
        return view('serviceprovider.request-draft');
    }
    
    public function add_request($id=""){
        
        return view('serviceprovider.add-request');
    }
    
    public function edit_request($id=""){
        
        return view('serviceprovider.edit-request');
    }
    
    public function view_request($id=""){
        
        return view('serviceprovider.view-request-draft');
    }

    public function view_draft($id=""){
        
        return view('serviceprovider.view-draft');
    }

    // public function add_draft(){
        
    //     return view('serviceprovider.add-order');
    // }
}
