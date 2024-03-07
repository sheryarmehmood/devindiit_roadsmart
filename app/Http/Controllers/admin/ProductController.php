<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use DB;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function product()
    {
        return view('admin.products.product');
    }
    public function addproduct()
    {
        return view('admin.products.addproduct');
    }
    public function editproduct()
    {
        return view('admin.products.editproduct');
    }
    public function viewproduct()
    {
        return view('admin.products.viewproduct');
    }
}
