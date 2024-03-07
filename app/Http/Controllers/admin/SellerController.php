<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Seller;
use DB;


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
       
    public function editseller()
    {
        return view('admin.seller.editseller');
    }
}
