<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Vehicles;
use DB;


class VehicleController extends Controller
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
    public function vehicles()
    {
      
        return view('admin.vehicle.vehicles');
    }
    
     // vehicles listing starts
    
     function get_vehicleListing(Request $request)
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
            });
 
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
                 
                 $button = '<a href="'.route('admin.viewvehicle').'/'.$post->id.'" class="btn btn-sm bg-info-light"><i class="far fa-eye mr-1"></i> View</a>
                  <a href="'.route('admin.editvehicle').'/'.$post->id.'" class="btn btn-sm bg-success-light"><i class="fas fa-edit"></i> Edit</a>
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
    public function editvehicle($id='')
    {
      // dd($id);
      $data=[];
        $vehicleDetails= $data['vehicleDetails']= Vehicles::select('vehicles.*',DB::raw('users.name as userid,users.email as email,users.phone_num as phonenum,users.image as image'),DB::raw('variants.name as variant_id'),DB::raw('user_addresses.address as userAddress,user_addresses.state as userState'))
         ->Join('users', function($join) {
              $join->on('vehicles.userid', '=', 'users.id');
            })
         ->Join('variants', function($join) {
              $join->on('vehicles.variant_id', '=', 'variants.id');
            })
            ->Join('user_addresses', function($join) {
              $join->on('user_addresses.user_id', '=', 'users.id');
            })
            ->where('vehicles.id',$id)->first();
        return view('admin.vehicle.editvehicle')->with($data);
    }
    
    // view button starts
    
    public function viewvehicle($id='')
    {
        $data=[];
        $vehicleDetails= $data['vehicleDetails']= Vehicles::select('vehicles.*',DB::raw('users.name as userid,users.email as email,users.phone_num as phonenum,users.image as image'),DB::raw('variants.name as variant_id'),DB::raw('user_addresses.address as userAddress,user_addresses.state as userState'))
         ->Join('users', function($join) {
              $join->on('vehicles.userid', '=', 'users.id');
            })
         ->Join('variants', function($join) {
              $join->on('vehicles.variant_id', '=', 'variants.id');
            })
            ->Join('user_addresses', function($join) {
              $join->on('user_addresses.user_id', '=', 'users.id');
            })
            ->where('vehicles.id',$id)->first();
            // dd($vehicleDetails);
        return view('admin.vehicle.viewvehicle')->with($data);
    }
    // view button ends
    
}
