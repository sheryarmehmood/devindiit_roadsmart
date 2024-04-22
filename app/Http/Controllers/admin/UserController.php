<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;



class UserController extends Controller
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

    
     public function adminusers()
     {
         // Check if the authenticated user has the 'admin' role
         if (!Auth::check() || !Auth::user()->hasRole('admin')) {
             abort(403, 'Unauthorized action.');
         }
         
         return view('admin.users.adminusers');
     }

    public function adduser()
    {
        return view('admin.users.adduser');
    }
}
