<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use DB;

class PaymentController extends Controller
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
    public function payment()
    {
        return view('admin.payment.payment');
    }
    public function payments()
    {
        return view('admin.payment.payments');
    }
    public function viewpayment()
    {
        return view('admin.payment.viewpayment');
    }
}
