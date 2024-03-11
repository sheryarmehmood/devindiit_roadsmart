<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Dashboard;
use App\Models\Orders;
use DB;

class OrderController extends Controller
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
    public function orders()
    {
        return view('admin.order.orders');
    }
    
    function get_orderListing(Request $request)
    {
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
    
                      
        
    //   $data = Product::select('*')->where('status','=','1');
 $data = Orders::select('orders.*',DB::raw('users.name as user_id,users.email as email'),DB::raw('user_addresses.address as delivery_address_id'),Db::raw('vehicles.name as vehicle_id'))
 ->Join('users', function($join) {
              $join->on('orders.user_id', '=', 'users.id');
            })
            ->Join('vehicles', function($join) {
              $join->on('orders.vehicle_id', '=', 'vehicles.id');
            })
            ->Join('user_addresses', function($join) {
              $join->on('orders.delivery_address_id', '=', 'user_addresses.id');
            });
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
                  <a href="'.route('admin.invoiceorders').'/'.$post->id.'" class="btn btn-sm bg-success-light"><i class="fas fa-edit"></i> Invoice</a>
                  <a href="#" class="btn btn-sm bg-danger-light delete_order" data-toggle="modal"  data-orderid="'.$post->id.'" data-target="#delete-popup"><i class="fas fa-trash-alt"></i> Delete
                  </a>';

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
    
      public function delete_order(Request $request)
    {
      $orderDelete = Orders::find($request->id);
    
      if($orderDelete)
      {
      	$orderDelete->delete();
        return response()->json([
          'code'    => 200,
          'message' => 'Order deleted successfully!'
        ]);
      }else{
        return response()->json([
          'code'    => 500,
          'message' => 'Order not Found!'
        ]);
      }
    }
    
    
    public function 
    ordersview($id='')
    {
        $data=[];
        $orderDetails= $data['orderDetails']=DB::table('orders')
         ->join('users','users.id','=','orders.user_id')
        ->select('orders.*','users.name as userName','users.email as userEmail','users.phone_num as userPhone')
        ->where('orders.id',$id)
        ->first();
        return view('admin.order.ordersview')->with($data);
    }
    public function invoiceorders()
    {
        return view('admin.order.invoiceorders');
    }
      public function ordersdetails($id='')
    {
        $data=[];
        $orderDetails= $data['orderDetails']=Orders::select('orders.*',DB::raw('users.name as user_id,users.email as email'),DB::raw('user_addresses.address as delivery_address_id'),Db::raw('vehicles.name as vehicle_id'))
 ->Join('users', function($join) {
              $join->on('orders.user_id', '=', 'users.id');
            })
            ->Join('vehicles', function($join) {
              $join->on('orders.vehicle_id', '=', 'vehicles.id');
            })
            ->Join('user_addresses', function($join) {
              $join->on('orders.delivery_address_id', '=', 'user_addresses.id');
            })
        ->where('orders.id',$id)
        ->first();
        // dd($orderDetails);
        return view('admin.order.ordersdetails')->with($data);
    }
    public function  updateorder()
    {
        return view('admin.order.updateorder');
    }
    public function  orderrequests()
    {
        return view('admin.order.orderrequests');
    }
    
}
