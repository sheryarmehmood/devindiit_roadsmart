<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use DB;

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
    
    function get_customerListing(Request $request)
    {
        $columns = array(  
                            0 =>'name',
                            1=> 'status',
                            2=> 'location',
                            3=>'order_id',
                            4=>'spent'
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
                 

                // $nestedData['id'] = $key + 1;
                $nestedData['name'] = !empty(@$post->name) ? $post->name : "N/A";
                $nestedData['status'] = !empty(@$Status) ? $Status : "N/A";
                $nestedData['location'] = !empty(@$post->address) ? $post->address : "N/A";
                $nestedData['order_id'] = !empty(@$post->id) ? $post->id : "N/A";
                $nestedData['spent'] = !empty(@$post->amount) ?'k'.$post->amount : "N/A";
               
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