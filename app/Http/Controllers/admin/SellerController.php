<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Seller;
use DB;

use App\Models\User;
use App\Models\Orders;
use App\Models\Vehicles;
use App\Models\UserAddresses;
use App\Models\Services;



class SellerController extends Controller
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
     
    public function sellers()
    {
        return view('admin.seller.sellers');
    }
    
    // seller listing starts
    
     function get_sellerListing(Request $request)
    {
        $columns = array(  
                            0 =>'id',
                            1=> 'stored_permissions',
                            2=> 'name',
                            3=> 'email',
                            4=> 'phone_number',
                            5=> 'status',
                            6=> 'action'
                        );
  
        
    //   $data = Product::select('*')->where('status','=','1');
 $data = Seller::select('sellers.*',DB::raw('sellers.stored_permissions,sellers.first_name,sellers.last_name,sellers.email,sellers.phone_number,sellers.status'));
 
        if($request->has('name')){
            $data->where(function($query) use($request) {
              $query->where('name', 'LIKE', "%{$request->search}%" )
                    ->orWhere ( 'store_permission', 'LIKE', "%{$request->search}%" )
                    ->orWhere ( 'phone_number', 'LIKE', "%{$request->search}%" );
            });
        }
         if($request->has('search')){
            $data->where(function($query) use($request) {
                $query->where('sellers.first_name', 'LIKE', "%{$request->search}%" )
                    ->orWhere ( 'sellers.last_name', 'LIKE', "%{$request->search}%" )
                    ->orWhere ( 'sellers.phone_number', 'LIKE', "%{$request->search}%" );
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
                 
                  if($post->first_name || $post->last_name ){
                     $Quantity = '<p>'.$post->first_name.'  '.$post->last_name.' </p>';
                    
                 }
                 else{
                   $Quantity = '<p>N/A</p>';
                 }
                
                 $button = '<a href="'.route('admin.viewseller').'/'.$post->id.'" class="btn btn-sm bg-info-light"><i class="far fa-eye mr-1"></i> View</a>
                  <a href="'.route('admin.editseller').'/'.$post->id.'" class="btn btn-sm bg-success-light"><i class="fas fa-edit"></i> Edit</a>
                  <a href="#" class="btn btn-sm bg-danger-light delete_seller" data-toggle="modal"  data-sellerid="'.$post->id.'" data-target="#delete-popup"><i class="fas fa-trash-alt"></i> Delete
                  </a>';

                $nestedData['id'] = !empty(@$post->id) ? $post->id : "N/A";
                $nestedData['stored_permissions'] = !empty(@$post->stored_permissions) ? $post->stored_permissions : "N/A";
                $nestedData['name'] =   !empty(@$Quantity) ? $Quantity : "N/A";
                $nestedData['email'] = !empty(@$post->email) ? $post->email : "N/A";
                $nestedData['phone_number'] = !empty(@$post->phone_number) ? $post->phone_number : "N/A";
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
    
    // seller listing ends
    
    // seller delete starts
      public function delete_seller(Request $request)
    {
      $userRating = Seller::find($request->id);
    
      if($userRating)
      {
      	$userRating->delete();
        return response()->json([
          'code'    => 200,
          'message' => 'Seller deleted successfully!'
        ]);
      }else{
        return response()->json([
          'code'    => 500,
          'message' => 'Seller not Found!'
        ]);
      }
    }
    // seller delete ends
    
    public function addseller()
    {
        return view('admin.seller.addseller');
    }
    
       // view button starts
       
    public function viewseller($id='')
    {
        $data=[];
        $sellerDetails= $data['sellerDetails']= DB::table('sellers')
            ->where('sellers.id',$id)->first();
           
    
        return view('admin.seller.viewseller')->with($data);
    }
    
       // view button starts
       
    public function editseller($id='')
    {
        // dd($id);
        $sellerDetails = $data['sellerDetails']= Seller::where('id',$id)->first();
        // dd($sellerDetails);
        // dd($seller);

        return view('admin.seller.editseller')->with($data);
    }

    public function post_editSeller (Request $request)
    {
      // dd($request->all());
      $seller =Seller::find($request->id);
      $input = $request->all();
                     
      $seller->update($input);
      
      return redirect()->back()->with('message','Seller update Successfully');
    }


    public function sellerorders($id='')
    {
      // dd($id);
      // $id = 1;  
      // $orders = Orders::where('user_id', $id)->get();
      // dd($orders);
      // return view('admin.customer.customerorders');
      return view('admin.seller.sellerorders', ['id' => $id]);
    }

    public function sellerservices($id='')
    {
      // dd($id);
      return view('admin.seller.sellerservices', ['id' => $id]);
    }
    


    public function get_sellerorderListing(Request $request, $id = '')
    {          

      // dd($id); 
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

              

            $data = Orders::select('orders.*',DB::raw('users.name as user_id,users.email as email'),Db::raw('vehicles.name as vehicle_id'))
            ->Join('users', function($join) {
            $join->on('orders.user_id', '=', 'users.id');
            })
            ->Join('vehicles', function($join) {
            $join->on('orders.vehicle_id', '=', 'vehicles.id');
            })->where('orders.seller_id', $id);


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



      public function get_sellerservicesListing (Request $request, $id = '') 
      {
        // dd('helo');
            $columns = array(  
              0 =>'id',
              1=> 'updated_at',
              2=> 'category',
              3=> 'subcategory',
              4=> 'compatible_vehicle', 
              5=> 'price',
              6=> 'seller_id',
              7=> 'status',
              8=> 'action'
          );

            $data = Services::select(
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
          ->where('services.seller_id', $id);

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

            <a href="#" class="btn btn-sm bg-danger-light delete_order" data-toggle="modal"  data-orderid="'.$post->id.'" data-target="#delete-popup"><i class="fas fa-trash-alt"></i> Delete
            </a>';

            // <a href="'.route('admin.invoiceorders').'/'.$post->id.'" class="btn btn-sm bg-success-light"><i class="fas fa-edit"></i> Invoice</a>

            


            $nestedData['id'] = !empty(@$post->id) ? $post->id : "N/A";
            // $nestedData['updated_at'] =  !empty(@$post->updated_at) ? date('d M,Y', strtotime(@$post->updated_at)) : "N/A";
            $nestedData['category_name'] = !empty(@$post->category_name) ? $post->category_name : "N/A";
            $nestedData['sub_category_name'] = !empty(@$post->sub_category_name) ? $post->sub_category_name : "N/A";
            $nestedData['compatible_vehicle'] =  !empty(@$post->compatible_vehicle) ? $post->compatible_vehicle : "N/A";
            $nestedData['price'] = !empty(@$post->price) ? $post->price : "N/A";
            
            $nestedData['first_name '] = !empty(@$post->first_name ) ? $post->first_name  : "N/A"; 
            
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



}
