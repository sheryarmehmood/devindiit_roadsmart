<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Dashboard;
use DB;


class DashboardController extends Controller
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
    // public function vehicles()
    // {
    //     return view('admin.vehicle.vehicles');
    // }
    
     // vehicles listing starts
    
     function get_dashboardListing(Request $request)
    {
        $columns = array(  
                            0 =>'id',
                            1=> 'cartid',
                            2=>'user_id',
                            3=> 'status',
                            4=> 'delivery_address_id',
                            5=> 'updated_at',
                            6=> 'phone_num',
                            7=> 'action'
                           
                        );
  
         
    //   $data = Product::select('*')->where('status','=','1');
 $data = Dashboard::select('orders.*',DB::raw('users.name as user_id,users.phone_num as phone_num'),DB::raw('user_addresses.address as delivery_address_id'))
 ->Join('users', function($join) {
              $join->on('orders.user_id', '=', 'users.id');
            })
            ->Join('user_addresses', function($join) {
              $join->on('orders.delivery_address_id', '=', 'user_addresses.id');
            });
 
      

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
                 
                 $button = '<a href="'.route('admin.ordersview').'/'.$post->id.'" class="btn btn-sm bg-info-light"><i class="far fa-eye mr-1"></i> View</a>';

                $nestedData['id'] = !empty(@$post->id) ? '#'.$post->id : "N/A";
                $nestedData['cartid'] =  !empty(@$post->cartid) ? $post->cartid : "N/A";
                $nestedData['user_id'] =  !empty(@$post->user_id) ? $post->user_id : "N/A";
                $nestedData['delivery_address_id'] = !empty(@$post->delivery_address_id) ? $post->delivery_address_id : "N/A";
                $nestedData['updated_at'] = !empty(@$post->updated_at) ?date('d M,Y', strtotime(@$post->updated_at))  : "N/A";
                  $nestedData['phone_num'] =  !empty(@$post->phone_num) ? $post->phone_num : "N/A";
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
    
    // vehicles listing ends
    
    // vehicles delete starts
      public function delete_vehicle(Request $request)
    {
      $userRating = Vehicles::find($request->id);
    
      if($userRating)
      {
      	$userRating->delete();
        return response()->json([
          'code'    => 200,
          'message' => 'Vehicle deleted successfully!'
        ]);
      }else{
        return response()->json([
          'code'    => 500,
          'message' => 'Vehicle not Found!'
        ]);
      }
    }
    // vehicles delete ends
    
    public function addvehicle()
    {
        return view('admin.vehicle.addvehicle');
    }
    public function editvehicle()
    {
        return view('admin.vehicle.editvehicle');
    }
    public function viewvehicle()
    {
        return view('admin.vehicle.viewvehicle');
    }
    
}
