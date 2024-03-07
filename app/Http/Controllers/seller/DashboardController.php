<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Seller;

class DashboardController extends Controller
{

    //to get the dashboard page or the main index page for seller dashboard.
    public function index(){
        
        return view('serviceprovider.index');
    }

    //to get the profile page from the navbar profile
    public function my_profile(){
        
        $userid = Auth::user()->id; 
        $user_details = Seller::findOrFail($userid);
        return view('serviceprovider.profile.profile-setting',compact('user_details'));
    }

    //post method function for updating the profile details
    public function update_profile(Request $request){
        $id = $request->sellerid;
        $seller = Seller::findOrFail($id);
        
        //laravel validations to check the valid fields
        $validator = Validator::make($request->all(),
        [
          'first_name' => ['required', 'string', 'max:255'],
          'last_name' => ['required', 'string', 'max:255'],
          'email' => ['required', 'string', 'email', 'max:255', 'unique:sellers,email,'.$id],
          'phone_number' => ['required','numeric'],
          'address1' => ['required']
        ]);

        //check if the field validations are failed
         if ($validator->fails())
          {
            // dd($validator);
            return redirect(route('serviceprovider.my_profile'))->withErrors($validator)->withInput();
          } 

                
        $input = $request->all();
        $oldphoto = $seller['avatar'];
        if($request->hasfile('avatar')){
            $file = $request->file('avatar');
            $extension = $file->getClientOriginalExtension();
            $filename = time() .  '.' . $extension;
            $file->move('assets/serviceprovider/img/seller/',$filename);
            $input['avatar'] = $filename;
            if($oldphoto != '' && $oldphoto != 'default.jpg')
            { 
                $image = 'assets/serviceprovider/img/seller/'.$oldphoto;
                // $filename = str_replace('app\Http\Controllers\Admin', '', __DIR__).$image;
                // unlink($filename);
                 if(\File::exists($image)) {
                   \File::delete($image);
               }
            }
        }
        if(isset($request->convert_estimate)){
            $input['convert_estimate'] = $request->convert_estimate;
        }else{
            if($seller['convert_estimate'] == 0){
                 $input['convert_estimate'] = '1';
            }else{
                 $input['convert_estimate'] = '0';
            }
          
        }
        $seller->update($input);
       Session::flash('message', 'Your Profile Updated Successfully!!');
       return redirect(route('seller.my_profile'));
    }

    //post method to change the password of the seller.
     function update_password(Request $request)
    {
        $id = $request->sellerid;
        $seller = seller::findOrFail($id);
        $validator = Validator::make($request->all(), [
            
        ],
        $messages = [
             'cpass' => 'required',
            'newpass' => 'required|min:8',
            'renewpass' => 'required|same:newpass',
        ]);
        if ($validator->fails()) {
          return redirect(route('seller.my_profile'))->withErrors($validator);
        }

        $input['password'] = "";
        if ($request->cpass){
          if (Hash::check($request->cpass, $seller->password))
          {
            if ($request->newpass == $request->renewpass){
                 $input['password'] = Hash::make($request->newpass);
                 $seller->update($input);
                 Session::flash('message', 'Your Password Updated Successfully!!');
            }
            else{
                Session::flash('error', 'Confirm Password does not match.');
            }
          }
          else
          {
            Session::flash('error', 'Current Password does not match');
          }
        }
        else
        {
          Session::flash('error', 'Please fill the required fields');
        }
        return redirect(route('seller.my_profile'));
    }

    public function calender(){
        
        return view('serviceprovider.calender');
    }

    public function messages(){
        
        return view('serviceprovider.messages');
    }

    public function quotation(){
        
        return view('serviceprovider.quotation');
    }

    public function view_quotation($id=""){
        
        return view('serviceprovider.view-quotation');
    }

    public function edit_quotation($id=""){
        
        return view('serviceprovider.edit-quotation');
    }
}
