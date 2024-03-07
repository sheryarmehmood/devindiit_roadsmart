<?php
namespace App\Http\Controllers\Auth\Seller;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use App\Models\Seller;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

   public function __construct()
   {
       $this->middleware('guest:seller')->except('logout');
   }

   public function username()
    {
        return 'email';
    }

    //this function is used to get the view page for login
    public function login()
    {   

        return view('seller.auth.login');
    }

    //this function is used for login user ,checck for validations and if user athenticated then will redirect to user dashboard.
    public function loginSeller(Request $request)
    {
      // Validate the form data
      $this->validate($request, [
        'email'   => 'required|email',
        'password' => 'required|min:8'
      ]);
      // Attempt to log the user in
      if (Auth::guard('seller')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {

        //remember me functionality code starts
        if($request->remember==true){
            setcookie ("seller_email",$request->email,time()+ (10 * 365 * 24 * 60 * 60));  
            setcookie ("seller_password",$request->password,time()+ (10 * 365 * 24 * 60 * 60));   
          }else{
            setcookie ("seller_email",'',5);  
            setcookie ("seller_password",'',5);
          }
          //remember me functionality code ends

        // if successful, then redirect to their intended location
        return redirect()->intended(route('seller.dashboard'));
      }
      // if unsuccessful, then redirect back to the login with the form data
        return $this->sendFailedLoginResponse($request);
    }

    
    //if login failed then send error message to the user
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

    //for logout
    public function logout()
    {
        Auth::guard('seller')->logout();
        return redirect()->route('seller.login');
    }
}



