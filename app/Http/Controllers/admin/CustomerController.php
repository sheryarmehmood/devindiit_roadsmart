<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Orders;
use App\Models\Vehicles;
use App\Models\UserAddresses;
use App\Models\Requests;
use App\Models\Services;

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
        ->select('users.*','user_addresses.address as userAddress','user_addresses.state as userState','user_addresses.city as userCity','user_addresses.zip_code as userZipCode','user_addresses.country as userCountry')
        ->where('users.id',$id)
        ->first();
        // dd($customerDetails);

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
                  $userAddress->country = $request->input('country');
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
      // dd($id);
      // $id = 1;  
      // $orders = Orders::where('user_id', $id)->get();
      // dd($orders);
      // return view('admin.customer.customerorders');
      return view('admin.customer.customerorders', ['id' => $id]);
    }
    public function viewcustomerrequest($id='')
    {
      return view('admin.customer.viewcustomerrequest', ['id' => $id]);
    }
    public function viewcustomeraddrequest($id='')
    {
      return view('admin.customer.viewcustomeraddrequest');
    }
    public function addvehicle($id='')
    {
      return view('admin.customer.addvehicle');
    }
    public function viewcustomervehicles($id='')
    {
      return view('admin.customer.viewcustomervehicles', ['id' => $id]);
    }
    public function addservice()
    {
      return view('admin.services.addservice');
    }
    public function services()
    {
      return view('admin.services.services');
    }
    public function viewcustomeraddorder($id='')
    {
      // $services =  Services::all();
      $services = Services::select(
        'services.id', 
        'services.category', 
        'service_categories.category_name', 
        'service_sub_categories.sub_category_name', 
        'services.price',
        'services.status', 
        'sellers.first_name', 
        'services.updated_at'
    )
    ->join('sellers', 'services.seller_id', '=', 'sellers.id')
    ->join('service_categories', 'services.category', '=', 'service_categories.id')
    ->join('service_sub_categories', 'services.subcategory', '=', 'service_sub_categories.id')
    ->get();  // Fetch all records

      return view('admin.customer.viewcustomeraddorder')->with('services', $services)->with('id', $id);
      // dd($services);
      // return view('admin.customer.viewcustomeraddorder');
    }

    

    public function get_customerorderListing(Request $request, $id = '')
    {
      // dd($request);
      // dd($id);
      //  $id = 1;  
      // $orders = Orders::where('user_id', $id)->get();
      // dd($orders);
      // dd($orders);
      // $data = $orders;
      
      $columns = array(  
        0 =>'id',
        1=> 'updated_at',
        2=> 'user_id',
        3=> 'email',
        4=> 'vehicle_id', 
        5=> 'amount',
        6=> 'delivery_address_id',
       7=> 'status',
        8=> 'action'
    );

  
//previous
//   $data = Product::select('*')->where('status','=','1');
// $data = Orders::select('orders.*',DB::raw('users.name as user_id,users.email as email'),DB::raw('user_addresses.address as delivery_address_id'),Db::raw('vehicles.name as vehicle_id'))
// ->Join('users', function($join) {
// $join->on('orders.user_id', '=', 'users.id');
// })
// ->Join('vehicles', function($join) {
// $join->on('orders.vehicle_id', '=', 'vehicles.id');
// })
// ->Join('user_addresses', function($join) {
// $join->on('orders.delivery_address_id', '=', 'user_addresses.id');
// });
//correct
// $data = Orders::select('id', 'updated_at', 'user_id', 'vehicle_id', 'amount', 'delivery_address_id', 'status')
//     ->where('user_id', $id);

$data = Orders::select('orders.*',DB::raw('users.name as user_id,users.email as email'),Db::raw('vehicles.name as vehicle_id'))
->Join('users', function($join) {
$join->on('orders.user_id', '=', 'users.id');
})
->Join('vehicles', function($join) {
$join->on('orders.vehicle_id', '=', 'vehicles.id');
})->where('orders.user_id', $id);





// $data = Orders::select('id', 'updated_at', 'user_id', 'vehicle_id', 'amount', 'delivery_address_id', 'status')
//     ->where('user_id', $id)
//     ->get();



// $data = Orders::select('orders.id', 'orders.updated_at', 'orders.user_id', 'orders.vehicle_id', 'orders.amount', 'orders.delivery_address_id', 'orders.status', 'users.name as user_name', 'users.email as user_email')
//     ->join('users', function($join) {
//         $join->on('orders.user_id', '=', 'users.id');
//     })
//     ->where('orders.user_id', $id);





// $data = Orders::select(
//   'orders.id', 
//   'orders.updated_at', 
//   'users.name as user_id', 
//   'users.email', 
//   'user_addresses.address as delivery_address_id', 
//   'vehicles.name as vehicle_id', 
//   'orders.amount', 
//   'orders.delivery_address_id', 
//   'orders.status'
// )
// ->join('users', 'orders.user_id', '=', 'users.id')
// ->join('vehicles', 'orders.vehicle_id', '=', 'vehicles.id')
// ->join('user_addresses', 'orders.delivery_address_id', '=', 'user_addresses.id')
// ->where('orders.user_id', $id);

// dd($data);
// $data = Orders::select('orders.*', DB::raw('users.name as user_id'), 'users.email', 'user_addresses.address as delivery_address_id', 'vehicles.name as vehicle_id')
//         ->join('users', 'orders.user_id', '=', 'users.id')
//         ->join('vehicles', 'orders.vehicle_id', '=', 'vehicles.id')
//         ->join('user_addresses', 'orders.delivery_address_id', '=', 'user_addresses.id')
//         ->where('orders.user_id', 1);

// dd($data);

// if($request->has('name')){
//     $data->where(function($query) use($request) {
//       $query->where('name', 'LIKE', "%{$request->search}%" )
//             ->orWhere ( 'phone_num', 'LIKE', "%{$request->search}%" )
//             ->orWhere ( 'email', 'LIKE', "%{$request->search}%" );
//     });
// }
//  if($request->has('search')){
//     $data->where(function($query) use($request) {
//         $query->where('users.name', 'LIKE', "%{$request->search}%" )
//             ->orWhere ( 'users.email', 'LIKE', "%{$request->search}%" )
//             ->orWhere ( 'users.phone_num', 'LIKE', "%{$request->search}%" );
//     });
// }

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

// $posts = $data->sortBy($order, $dir)
//     ->skip($start)
//     ->take($limit)
//     ->get();


// $posts = $data->skip($start)
//      ->limit($limit)
//      ->orderBy($order,$dir)
//      ->get();


// $posts = $data;
$data = array();
$status = '';
if(!empty($posts))
{
foreach ($posts as $key => $post)
{

//condition code for status starts
if($post->status == '0'){
 $current_status = 'Pending Delivery';
 $Status = '<label class="badge badge-info">'.$current_status.'</label>';
}
elseif ($post->status == '1'){
 $current_status = 'In-progress';
 $Status = '<label class="badge badge-primary">'.$current_status.'</label>';
}
elseif ($post->status == '2'){
 $current_status = 'On-Hold';
 $Status = '<label class="badge badge-danger">'.$current_status.'</label>';
}
elseif ($post->status == '3'){
 $current_status = 'Dispactched';
 $Status = '<label class="badge badge-warning">'.$current_status.'</label>';
}
else{
 $current_status = 'Delivered';
 $Status = '<label class="badge badge-success">'.$current_status.'</label>';
}

$button = '<a href="'.route('admin.ordersdetails').'/'.$post->id.'" class="btn btn-sm bg-info-light"><i class="far fa-eye mr-1"></i> View</a>

<a href="#" class="btn btn-sm bg-danger-light delete_order" data-toggle="modal"  data-orderid="'.$post->id.'" data-target="#delete-popup"><i class="fas fa-trash-alt"></i> Delete
</a>';

// <a href="'.route('admin.invoiceorders').'/'.$post->id.'" class="btn btn-sm bg-success-light"><i class="fas fa-edit"></i> Invoice</a>

$nestedData['id'] = !empty(@$post->id) ? $post->id : "N/A";
$nestedData['updated_at'] =  !empty(@$post->updated_at) ? date('d M,Y', strtotime(@$post->updated_at)) : "N/A";
$nestedData['email'] = !empty(@$post->email) ? $post->email : "N/A";
$nestedData['user_id'] = !empty(@$post->user_id) ? $post->user_id : "N/A";
$nestedData['vehicle_id'] =  !empty(@$post->vehicle_id) ? $post->vehicle_id : "N/A";
$nestedData['delivery_address_id'] = !empty(@$post->delivery_address_id) ? $post->delivery_address_id : "N/A";
$nestedData['amount'] = !empty(@$post->amount) ? $post->amount : "N/A";
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




    function get_customervehicleListing(Request $request, $id='')
    {
        $columns = array(  
                            0 =>'id',
                            1=> 'name',
                            2=>'userid',
                            3=> 'email',
                            4=> 'reg_no',
                            5=> 'variant_id',
                            6=> 'model_year',
                            7=> 'price',
                            8=> 'status',
                            9=> 'action'
                        );
  
         
    //   $data = Product::select('*')->where('status','=','1');
 $data = Vehicles::select('vehicles.*',DB::raw('users.name as userid,users.email as email'),DB::raw('variants.name as variant_id'))
 ->Join('users', function($join) {
              $join->on('vehicles.userid', '=', 'users.id');
            })
            ->Join('variants', function($join) {
              $join->on('vehicles.variant_id', '=', 'variants.id');
            })->where('vehicles.userid', $id);
 
        if($request->has('name')){
            $data->where(function($query) use($request) {
              $query->where('name', 'LIKE', "%{$request->search}%" )
                    ->orWhere ( 'id', 'LIKE', "%{$request->search}%" )
                    ->orWhere ( 'userid', 'LIKE', "%{$request->search}%" );
            });
        }
         if($request->has('search')){
            $data->where(function($query) use($request) {
                $query->where('vehicles.name', 'LIKE', "%{$request->search}%" )
                    ->orWhere ( 'vehicles.id', 'LIKE', "%{$request->search}%" );
                    // ->orWhere ( 'vehicles.phone_num', 'LIKE', "%{$request->search}%" );
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
                 
                //  <a href="'.route('admin.editvehicle').'/'.$post->id.'" class="btn btn-sm bg-success-light"><i class="fas fa-edit"></i> Edit</a>
                 $button = '<a href="'.route('admin.viewvehicle').'/'.$post->id.'" class="btn btn-sm bg-info-light"><i class="far fa-eye mr-1"></i> View</a>
                  
                  <a href="#" class="btn btn-sm bg-danger-light delete_vehicle" data-toggle="modal"  data-vehicleid="'.$post->id.'" data-target="#delete-popup"><i class="fas fa-trash-alt"></i> Delete
                  </a>';


                $nestedData['id'] = !empty(@$post->id) ? $post->id : "N/A";
                $nestedData['name'] =  !empty(@$post->name) ? $post->name : "N/A";
                $nestedData['userid'] =  !empty(@$post->userid) ? $post->userid : "N/A";
                $nestedData['email'] = !empty(@$post->email) ? $post->email : "N/A";
                $nestedData['reg_no'] = !empty(@$post->reg_no) ? $post->reg_no : "N/A";
                  $nestedData['variant_id'] =  !empty(@$post->variant_id) ? $post->variant_id : "N/A";
                $nestedData['model_year'] = !empty(@$post->model_year) ? $post->model_year : "N/A";
                $nestedData['price'] = !empty(@$post->price) ? $post->price : "N/A";
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


    public function get_customer_requests(Request $request, $id = '')
    {
      // dd($id);
        $columns = array(  
          0 =>'id',
          1=> 'updated_at',
          2=> 'request_type',
          3=> 'status',
          6=> 'user_id',
          7=> 'status',
          8=> 'action'
        );

        $data = Requests::select(
          'requests.id',
          'requests.request_type',
          'requests.status',
          'users.name',
          'repair_services_requests.request_id',
          'repair_services_requests.service_subcat_id',   
          'repair_services_requests.quote_status',
          'service_sub_categories.sub_category_name',
        )
        ->join('users', 'requests.user_id', '=', 'users.id')
        ->join('repair_services_requests', 'requests.id', '=', 'repair_services_requests.request_id')
        ->join('service_sub_categories', 'repair_services_requests.service_subcat_id', '=', 'service_sub_categories.id')
        ->where('requests.user_id', $id);

        
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

            if($post->status == '0'){
            $current_status = 'Pending Delivery';
            $Status = '<label class="badge badge-info">'.$current_status.'</label>';
            }
            elseif ($post->status == '1'){
            $current_status = 'In-progress';
            $Status = '<label class="badge badge-primary">'.$current_status.'</label>';
            }
            elseif ($post->status == '2'){
            $current_status = 'On-Hold';
            $Status = '<label class="badge badge-danger">'.$current_status.'</label>';
            }
            elseif ($post->status == '3'){
            $current_status = 'Dispactched';
            $Status = '<label class="badge badge-warning">'.$current_status.'</label>';
            }
            else{
            $current_status = 'Delivered';
            $Status = '<label class="badge badge-success">'.$current_status.'</label>';
            }

            $button = '<a href="'.route('admin.ordersdetails').'/'.$post->id.'" class="btn btn-sm bg-info-light"><i class="far fa-eye mr-1"></i> View</a>

            <a href="#" class="btn btn-sm bg-danger-light delete_order" data-toggle="modal"  data-orderid="'.$post->id.'" data-target="#delete-popup"><i class="fas fa-trash-alt"></i> Delete
            </a>';

            $nestedData['id'] = !empty(@$post->id) ? $post->id : "N/A";
           
            $nestedData['request_type'] = !empty(@$post->request_type) ? $post->request_type : "N/A";
            // $nestedData['status'] = !empty(@$post->status) ? $post->status : "N/A";
            $nestedData['name'] =  !empty(@$post->name) ? $post->name : "N/A";
            // $nestedData['request_id'] = !empty(@$post->request_id) ? $post->request_id : "N/A";
            
            // $nestedData['service_subcat_id'] = !empty(@$post->service_subcat_id ) ? $post->service_subcat_id  : "N/A"; 
            $nestedData['sub_category_name'] = !empty(@$post->sub_category_name ) ? $post->sub_category_name  : "N/A";
            $nestedData['quote_status'] = !empty(@$post->quote_status ) ? $post->quote_status : "N/A"; 
            
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




    public function delete_customer_request()
    {

    }




}
