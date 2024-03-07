<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use DB;

class ChatManagerController extends Controller
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
    public function chat()
    {
        return view('admin.chatmanager.chat');
    }
   
}
