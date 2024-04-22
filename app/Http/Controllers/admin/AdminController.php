<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use DB;

class AdminController extends Controller
{
    use SendsPasswordResetEmails;
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


    // public function __construct()
    // {
    //     $this->middleware('auth:admin');
    // }

    // public function index()
    // {
    //     $data = array();
    //     return view('admin.users.adminusers');
    // }


    public function login()
    {
        return view('admin.auth.login');
    }

    public function forgot_password()
    {
        return view('admin.auth.forgot_password', [
            'passwordEmailRoute' => 'admin.password.email'
        ]);
    }
    public function showResetForm(Request $request, $token = null, $email = null)
    {
        return view('admin.auth.reset_password', [
            'passwordUpdateRoute' => 'admin.password.update',
            'token' => $token,
            'email' => $email,
        ]);
    }
    public function reset_password()
    {
        return view('admin.auth.reset_password');
    }

    public function profile()
    {
        return view('admin.profile.profile');
    }

    public function global_settings()
    {
        return view('admin.profile.global_settings');
    }

    public function dashboard()
    {
        $orders = DB::table('orders')->count();
        $users = DB::table('users')->count();
        $products = DB::table('products')->count();
        $sellers = DB::table('sellers')->count();

        return view('admin.dashboard.dashboard', compact('orders', 'users', 'products', 'sellers'));
    }
    public function user_management()
    {
        return view('admin.user.user_management');
    }
}
