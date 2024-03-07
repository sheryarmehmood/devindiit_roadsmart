<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PackagesController extends Controller
{
    public function packages(){
        
        return view('serviceprovider.package');
    }

    public function add_package(){
        
        return view('serviceprovider.add-package');
    }

    public function edit_package($id=""){
        
        return view('serviceprovider.edit-package');
    }

}
