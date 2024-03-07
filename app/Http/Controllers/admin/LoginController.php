<?php
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use App\Http\ControllersAdmin;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

   public function __construct()
   {
       $this->middleware('guest:admin')->except('logout');
   }
   public function username()
    {
        return 'email';
    }
    public function login()
    {
    
    	//add admin user
    // 	return Admin::create([
    //         'name' =>'admin',
    //         'email' => 'admin@gmail.com',
    //         'password' => Hash::make('admin@#123@#'),
    //     ]);
       

        return view('admin.auth.login');
    }

    public function loginAdmin(Request $request)
    {
      // Validate the form data
      $this->validate($request, [
        'email'   => 'required|email',
        'password' => 'required|min:6'
      ]);
      // Attempt to log the user in
      
      if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
          
        if($request->remember==true){
            setcookie ("admin_email",$request->email,time()+ (10 * 365 * 24 * 60 * 60));  
            setcookie ("admin_password",$request->password,time()+ (10 * 365 * 24 * 60 * 60));   
          }else{
            setcookie ("admin_email",'',5);  
            setcookie ("admin_password",'',5);
          }
        return redirect()->intended(route('admin.dashboard'));
      }
      // if unsuccessful, then redirect back to the login with the form data
        return $this->sendFailedLoginResponse($request);
    }

     
     protected function sendFailedLoginResponse(Request $request)
    {
        $errors = [$this->username() => trans('auth.failed')];
        if ($request->expectsJson()) {
            return response()->json($errors, 422);
        }
        return redirect()->back()
            ->withInput($request->only($this->username()))
            ->withErrors($errors);
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
