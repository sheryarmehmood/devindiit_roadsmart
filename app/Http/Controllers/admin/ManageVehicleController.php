<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class VehicleController extends Controller
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
    public function vehicles()
    {
        return view('admin.vehicles.vehicles');
    }
    // public function sellers()
    // {
    //     return view('admin.user.sellers');
    // }
    // public function customers()
    // {
    //     return view('admin.user.customers');
    // }
}
