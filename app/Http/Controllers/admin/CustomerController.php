<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Orders;
use App\Models\UserAddresses;
use DB;


class CustomerController extends Controller
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
     
    public function customers()
    {
        return view('admin.customer.customers');
    }
    
        // customer listing starts
    
     function get_customerListing(Request $request)
    {
        $columns = array(  
                            0 =>'id',
                            1=> 'name',
                            2=> 'email',
                            3=> 'status',
                            4=> 'action',
                            5=> 'phone_num'
                        );
  
        
    //   $data = Product::select('*')->where('status','=','1');
 $data = User::select('users.*',DB::raw('users.name,users.email,users.phone_num,users.status'));
 
        if($request->has('name')){
            $data->where(function($query) use($request) {
              $query->where('name', 'LIKE', "%{$request->search}%" )
                    ->orWhere ( 'phone_num', 'LIKE', "%{$request->search}%" )
                    ->orWhere ( 'email', 'LIKE', "%{$request->search}%" );
            });
        }
         if($request->has('search')){
            $data->where(function($query) use($request) {
                $query->where('users.name', 'LIKE', "%{$request->search}%" )
                    ->orWhere ( 'users.email', 'LIKE', "%{$request->search}%" )
                    ->orWhere ( 'users.phone_num', 'LIKE', "%{$request->search}%" );
            });
        }

        // if ($request->get('status') != '') {
        //     $data = $data->where('status',$request->get('status'));
        // }

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
                 if($post->status == '1'){
                     $current_status = 'Active';
                     $Status = '<label class="badge badge-success">'.$current_status.'</label>';
                 }
                 else{
                     $current_status = 'In-active';
                     $Status = '<label class="badge badge-danger">'.$current_status.'</label>';
                 }
                 
                 $button = '<a href="'.route('admin.viewcustomer').'/'.$post->id.'" class="btn btn-sm bg-info-light"><i class="far fa-eye mr-1"></i> View</a>
                  <a href="'.route('admin.editcustomer').'/'.$post->id.'" class="btn btn-sm bg-success-light"><i class="fas fa-edit"></i> Edit</a>
                  <a href="#" class="btn btn-sm bg-danger-light delete_customer" data-toggle="modal"  data-customerid="'.$post->id.'" data-target="#delete-popup"><i class="fas fa-trash-alt"></i> Delete
                  </a>';

                $nestedData['id'] = !empty(@$post->id) ? $post->id : "N/A";
                $nestedData['name'] =  !empty(@$post->name) ? $post->name : "N/A";
                $nestedData['email'] = !empty(@$post->email) ? $post->email : "N/A";
                $nestedData['phone_num'] = !empty(@$post->phone_num) ? $post->phone_num : "N/A";
                  $nestedData['action'] = $button;
                $nestedData['status'] = !empty(@$Status) ? $Status : "N/A";
                
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
    
    // customer listing ends
    
    // customer delete starts
      public function delete_customer(Request $request)
    {
      $userRating = User::find($request->id);
    
      if($userRating)
      {
      	$userRating->delete();
        return response()->json([
          'code'    => 200,
          'message' => 'Customer deleted successfully!'
        ]);
      }else{
        return response()->json([
          'code'    => 500,
          'message' => 'Customer not Found!'
        ]);
      }
    }
    // customer delete ends
    
    public function addcustomer()
    {
        // dd($$request->all());
        return view('admin.customer.addcustomer');
    }
    
     public function add_newcustomer(Request $request)
    {
       
        $validator = Validator::make($request->all(),  [
              'name' => ['required', 'string', 'max:255'],
              'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
              'phone_num' => ['required'],
              'address' => ['required'],
              'city' => ['required'],
              'state' => ['required'],
              'zipcode' => ['required'],
              'country' => ['required'],
              'status' => ['required']
             
          ]);
         
          if ($validator->fails())
          {
              
              return redirect()->back()->withErrors($validator);
          }
          
          $customer = new User;
          $customer->name=$request->input('name');
          $customer->email=$request->input('email');
          $customer->phone_num=$request->input('phone_num');
          $customer->save();
          
          
          $customer_address = new UserAddresses;
          $customer_address->user_id = $customer->id;
          $customer_address->address = $request->input('address');
          $customer_address->city = $request->input('city');
          $customer_address->state = $request->input('state');
          $customer_address->zip_code = $request->input('zipcode');
          $customer_address->save();
         
          if($customer){
           Session::flash('message', 'Customer Added Successfully!!');
           return redirect()->back()->with('message','Customer added Successfully');
        }else{
            Session::flash('error', 'Something went wrong!');
        }
        return redirect()->back()->with('message','Customer added Successfully');
          
       
    }
    
    // view button starts
        
    public function viewcustomer($id='')
    {
         $data=[];
        $customerDetails= $data['customerDetails']=DB::table('users')
        ->leftJoin('user_addresses','user_addresses.user_id','=','users.id')
        ->select('users.*','user_addresses.address as userAddress')
        ->where('users.id',$id)
        ->first();
        
        return view('admin.customer.viewcustomer')->with($data);
    }
    
    // view button ends
        
    public function editcustomer($id='')
    {
      // dd($id);
         $data=[];
        $customerDetails= $data['customerDetails']=DB::table('users')
        ->leftJoin('user_addresses','user_addresses.user_id','=','users.id')
        ->select('users.*','user_addresses.address as userAddress','user_addresses.state as userState','user_addresses.city as userCity','user_addresses.zip_code as userZipCode')
        ->where('users.id',$id)
        ->first();

        // dd($data);
      
        return view('admin.customer.editcustomer')->with($data);
        // return view('admin.customer.editcustomer');
    }
    
      function post_editCustomer(Request $request)
    {
      // dd($request);
         $id = $request->id;
        $customer =User::find($request->id);
//  dd($customer);
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.$id],
              'phone_num' => ['required'],
              'city' => ['required'],
            //   'country' => ['required'],
            //   'state' => ['required'],
            //   'zipcode' => ['required'],
        ]);
      
         if ($validator->fails())
          {
            return redirect()->back()->withErrors($validator);
          }
          $input = $request->all();
                     
           $customer->update($input);
           
           $userAddress = UserAddresses::select('*')->where('user_addresses.user_id',$id)->first();
     
           if($userAddress){
               $userAddress->address = $request->input('address');
                $userAddress->city = $request->input('city');
                 $userAddress->state = $request->input('state');
                  $userAddress->zip_code = $request->input('zipcode');
                  $userAddress->update();
           }else{
                   $useNew_address = new UserAddresses;
          $useNew_address->user_id = $customer->id;
          $useNew_address->address = $request->input('address');
          $useNew_address->city = $request->input('city');
          $useNew_address->state = $request->input('state');
          $useNew_address->zip_code = $request->input('zipcode');
          $useNew_address->save();
           }
           
          if($customer){
                 Session::flash('message', 'Exercise details updated Successfully!!');
            }else{
                 Session::flash('error', 'Something went wrong!');
            }
        
    //   Session::flash('message', 'Employee Profile Updated Successfully!!');
           return redirect()->back()->with('message','Customer update Successfully');
    }

    public function customerorders($id='')
    {
      // $id = 1;  
      // $orders = Orders::where('user_id', $id)->get();
      // dd($orders);
      // return view('admin.customer.customerorders');
      return view('admin.customer.customerorders', ['id' => $id]);
    }
}
