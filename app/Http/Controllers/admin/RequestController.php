<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use DB;

class RequestController extends Controller
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
    public function requests()
    {
        return view('admin.request.requests');
    }
    public function viewrequest()
    {
        return view('admin.request.viewrequest');
    }
}