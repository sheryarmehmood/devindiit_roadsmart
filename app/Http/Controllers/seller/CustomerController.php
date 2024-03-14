<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use DB;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function customers(){
        
        return view('serviceprovider.customer.customers');
    }
    
    public function add_customer(){
        
        return view('serviceprovider.customer.add-customer');
    }
    
    public function view_customer($id=""){
        
        return view('serviceprovider.customer.view-customer');
    }
    public function view_customer_request($id=""){
        
        return view('serviceprovider.customer.view-customer-request');
    }
    public function view_customer_vehicles($id=""){
        
        return view('serviceprovider.customer.view-customer-vehicles');
    }
    public function view_customer_chats($id=""){
        
        return view('serviceprovider.customer.view-customer-chats');
    }
    public function view_customer_profile($id=""){
        
        return view('serviceprovider.customer.view-customer-profile');
    }
    
    function get_customerListing(Request $request)
    {
        $columns = array(  
                            0 =>'name',
                            1=> 'status',
                            2=> 'location',
                            3=>'order_id',
                            4=>'spent',
                            5=>'action'
                        );
  
        
    //   $data = Product::select('*')->where('status','=','1');
 $data = Customer::select('*',DB::raw('orders.amount as spent'))
                         ->join('user_addresses','user_addresses.id','=','orders.delivery_address_id')
                         ->join('users','users.id','=','orders.user_id');
                       
 
        if($request->has('name')){
            $data->where(function($query) use($request) {
              $query->where('name', 'LIKE', "%{$request->search}%" );
                    // ->orWhere ( 'order_id', 'LIKE', "%{$request->search}%" );
                    // ->orWhere ( 'spent', 'LIKE', "%{$request->search}%" );
            });
        }
         if($request->has('search')){
            $data->where(function($query) use($request) {
                $query->where('name', 'LIKE', "%{$request->search}%" );
                    // ->orWhere ( 'order_id', 'LIKE', "%{$request->search}%" )
                    // ->orWhere ( 'spent', 'LIKE', "%{$request->search}%" );
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
                 if($post->status == 1){
                     $current_status = 'Subscribed';
                     $Status = '<label class="badge badge-success">'.$current_status.'</label>';
                 }
                 else{
                     $current_status = 'Un-Subscribed';
                     $Status = '<label class="badge badge-danger">'.$current_status.'</label>';
                 }
                 
                 $button = '<a href="'.route('seller.view-customer').'/'.$post->id.'" class="btn btn-sm bg-info-light"><i class="far fa-eye mr-1"></i> View</a>
                 <a href="#" class="btn btn-sm bg-success-light"><i class="fas fa-edit"></i> Edit</a>
                 <a href="#" class="btn btn-sm bg-danger-light delete_customer" data-toggle="modal"  data-customerid="'.$post->id.'" data-target="#delete-popup"><i class="fas fa-trash-alt"></i> Delete
                 </a>';

                // $nestedData['id'] = $key + 1;
                $nestedData['name'] = !empty(@$post->name) ? $post->name : "N/A";
                $nestedData['status'] = !empty(@$Status) ? $Status : "N/A";
                $nestedData['location'] = !empty(@$post->address) ? $post->address : "N/A";
                $nestedData['order_id'] = !empty(@$post->id) ? $post->id : "N/A";
                $nestedData['spent'] = !empty(@$post->amount) ?'k'.$post->amount : "N/A";
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
}