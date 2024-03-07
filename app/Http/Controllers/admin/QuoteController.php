<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use DB;

class QuoteController extends Controller
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
    public function quotes()
    {
        return view('admin.quotes.quotes');
    }
    public function viewquotes()
    {
        return view('admin.quotes.viewquotes');
    }
    public function requestquotesview()
    {
        return view('admin.quotes.requestquotesview');
    }
}
