<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\permissions;
use Illuminate\Support\Facades\Hash;
use App\Models\Seller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class SettingsController extends Controller
{
    public function store_details(){
        
        return view('serviceprovider.settings.store-detail');
    }

    public function user_permissions(){
    	return view('serviceprovider.settings.userspermissions.users-permissions');
    }

    public function add_user_permissions(){
    	$permissionsList = array();
    	$permissions = Permissions::select('*')->get();

        foreach ($permissions as $key => $per) {
            $permissionsList[$per['parent']][] = array('value' => $per['child_full_show'], 'id' => $per['id']);
        }
    	return view('serviceprovider.settings.userspermissions.add-users-permissions', compact('permissionsList'));
    }

    //post method function for updating the profile details
    public function save_new_seller(Request $request){


        //laravel validations to check the valid fields
        $validator = Validator::make($request->all(),
        [
          'first_name' => ['required', 'string', 'max:255'],
          'last_name' => ['required', 'string', 'max:255'],
          'email' => ['required', 'string', 'email', 'max:255', 'unique:sellers,email'],
          'phone_number' => ['required','numeric'],
          'address1' => ['required'],
          'new_password' => ['required', 'string', 'min:8'],
           'confirm_password' => ['required', 'same:new_password']
        ]);

        //check if the field validations are failed
         if ($validator->fails())
          {
            return redirect(route('seller.add_user_permissions'))->withErrors($validator)->withInput();
          } 
       
        $input = $request->all();
        $seller = new Seller;
        $oldphoto = $seller['avatar'];
        if($request->hasfile('avatar')){
            $file = $request->file('avatar');
            $extension = $file->getClientOriginalExtension();
            $filename = time() .  '.' . $extension;
            $file->move('assets/serviceprovider/img/seller/',$filename);
            $seller->avatar = $filename;
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
            $seller->convert_estimate = $request->convert_estimate;
        }

        if (isset($request->permissions)) {
            $newArray = array();
            $value = $request->permissions;
            $newArray = array_merge_recursive($newArray,$value);
        
         	$seller->stored_permissions = implode(',', $newArray);
        }
        $seller->password = Hash::make($request->new_password);
        $seller->parent_id = Auth::user()->id; 
        $seller->first_name = $request->first_name;
        $seller->last_name = $request->last_name;
        $seller->email = $request->email;
        $seller->address1 = $request->address1;
        $seller->phone_number = $request->phone_number;
        $seller->country = $request->country;
        $seller->state = $request->state;
        $seller->city = $request->city;
        $seller->zipcode = $request->zipcode;
        $seller->status = $request->status;
        $seller->save();
        //send password email
            $to_name = $request->first_name.' '.$request->last_name;
            $to_email = $request->email;
            $sender_name = Auth::user()->first_name;
            $link = URL::route('seller.login');
            $password = Hash::make($request->new_password);   
            $data = [
            'to_name' => $to_name,
            'to_email' => $to_email,
            'sender_name' => $sender_name,
            'link' => $link,
            'password' => $password
            ];
  
            Mail::send('mails.user.invite', ["data1"=>$data], function($message) use ($to_name, $to_email) {
         	$sender_email = 'roadsmart-noreply@yopmail.com';
                 
            $message->to($to_email, $to_name)->subject("Invite");
            $message->from($sender_email);
            });
            //end send mail
       Session::flash('message', 'New user is added successfully!!');
       return redirect(route('seller.add_user_permissions'));
    }

    function get_usersListing(Request $request)
    {
        $columns = array( 
                            0 =>'avatar', 
                            1 => 'first_name',
                            2 =>'email',
                            3=> 'phone_number',
                            4=> 'status',
                            5=> 'action'
                        );
  
        
       $data = Seller::select('*')->where('is_deleted','=','0')->where('parent_id','!=','0');

        $totalData = $data->count();
            
        $totalFiltered = $totalData; 

        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');
            
        $posts = $data->offset($start)
                         ->limit($limit)
                         ->orderBy($order,$dir)
                         ->get();

        $data = array();
        $status = '';
        if(!empty($posts))
        {
            foreach ($posts as $key => $post)
            {

                 //condition code for status starts
                 $checked = ''; 
                if($post->status == 1){
                    $Status = 'Active';
                    $status = '<label class="badge badge-success">'.$Status.'</label>';
                }else{
                    $Status = 'Inactive';
                    $status = '<label class="badge badge-danger">'.$Status.'</label>';
                }

                 $button = '<a href="'.route('seller.edit_user').'/'.$post->id.'" class="btn btn-sm bg-success-light"><i class="fas fa-edit"></i> Edit</a>
                  <a href="#" class="btn btn-sm bg-danger-light delete_user" data-toggle="modal"  data-userid="'.$post->id.'" data-target="#delete-popup"><i class="fas fa-trash-alt"></i> Delete
                  </a>';

                if($post->avatar != '') {
                    $image =  asset('/assets/serviceprovider/img/seller/' .$post->avatar); 
                }else { 
                    $image =  asset('/assets/serviceprovider/img/seller/default.jpg'); 
                }

                $avatar = '<img class="avatar-img rounded-circle" alt="" src="'.$image.'" style="width:50px; height:50px;">';

                

                $nestedData['avatar'] = $avatar;
                $nestedData['first_name'] = !empty(@$post->first_name) ? $post->first_name.' '.$post->last_name : "N/A";
                $nestedData['email'] = !empty(@$post->email) ? $post->email : "N/A";
                $nestedData['phone_number'] = !empty(@$post->phone_number) ? $post->phone_number : "N/A";
                $nestedData['status'] = !empty(@$status) ? @$status : "N/A";
                $nestedData['action'] = $button;
                $data[] = $nestedData;

            }
        }
          
        $json_data = array(
                    "draw"            => intval($request->input('draw')),  
                    "recordsTotal"    => intval($totalData),  
                    "recordsFiltered" => intval($totalFiltered), 
                    "data"            => $data   
                    );
            
        return json_encode($json_data);
    }

    public function delete_user(Request $request){

        $deleted_id = $request->deleted_id;
        $User = Seller::select('*')->where('id',$deleted_id)->first();
        $User->is_deleted = '1';
        $User->save();
        Session::flash('message', 'User Deleted Successfully!');
        return response()->json(['success' => true]);
    }

    public function edit_user($id=""){
        $getDetails = Seller::select('*')->where('id',$id)->first();
        $permissionsList = array();
    	$permissions = Permissions::select('*')->get();

        foreach ($permissions as $key => $per) {
            $permissionsList[$per['parent']][] = array('value' => $per['child_full_show'], 'id' => $per['id']);
        }
        return view('serviceprovider.settings.userspermissions.edit-users-permissions',compact('getDetails','permissionsList'));
    }
}
