<?php

namespace App\Http\Controllers\seller;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OrderReviews;
use App\Models\SellerRating;
use Illuminate\Support\Facades\Session;
use DB;

class ReviewsController extends Controller
{
    public function reviews(){
     $seller_id = Auth::user()->id;
        return view('serviceprovider.review',compact('seller_id'));
    }
    
    // order reviews start
    
    function get_orderListing(Request $request){
         $columns = array( 
                            0 =>'id', 
                            1=> 'created_at',
                            2=> 'user_id',
                            3=> 'order_id',
                            4=> 'rating',
                            5=> 'review',
                            6=> 'action'
                        );
        
       $data = OrderReviews::select('order_reviews.*',DB::raw('users.name as given_by,users.image as image'))
        ->Join('users', function($join) {
              $join->on('order_reviews.user_id', '=', 'users.id');
            })->where('order_reviews.seller_id',Auth::user()->id);
         
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
        
        if(!empty($posts))
        {
            foreach ($posts as $key => $post)
            {
                 //condition code for status starts
            	$checked = ''; 
                if($post->status == 1){
                    $checked = 'checked';
                }else{
                    $checked = '';
                }

                 $button = '
                  <button class="btn btn-sm bg-success-light view_review" type="button" data-toggle="modal" data-target="#order_review-popup"  data-reviewId="'.$post->id.'"><i class="far fa-eye mr-1"></i> View</button>
                  <button type="button" class="btn btn-sm bg-danger-light delete_review" data-toggle="modal" data-reviewId="'.$post->id.'" data-target="#delete-popup"><i class="fas fa-trash-alt"></i> Delete
                  </button>';
                  
                  if(!empty(@$post->image)){
                      $image ='https://dev.indiit.solutions/roadsmart_dev/public/uploads/img/'.@$post->image;
                  }else{
                      $image = 'https://cdn-icons-png.flaticon.com/512/21/21104.png';
                  }
                 $user_data = '<h2 class="table-avatar">
								<a href="#" class="avatar avatar-sm mr-2">
									<img style="height:30px;width:30px" class="avatar-img rounded-circle" alt="" src="'.$image.'">
								</a>
								<a href="#">'.$post->given_by.'</a>
								</h2>';
                  
                $nestedData['id'] = $key + 1;
                 $nestedData['created_at'] = !empty(@$post->created_at) ? 
                          date('d M,Y', strtotime(@$post->created_at)) : "N/A";
                $nestedData['user_id'] = !empty(@$post->user_id) ? $user_data : "N/A";
                $nestedData['order_id'] = !empty(@$post->order_id) ? $post->order_id : "N/A";
                 $nestedData['rating'] = !empty(@$post->rating) ? $post->rating : "N/A";
                  $nestedData['review'] = !empty(@$post->review) ? $post->review : "N/A";
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
    
    public function getViewOrder(Request $request)
    {
        $id = $request->id;
        $store_data = OrderReviews::select('*')
        ->where('id', $id)
        // ->Join('users','users.id','=','order_reviews.user_id')
        // ->select('order_reviews.*','users.name','users.image')
        ->get();
        return response()->json(['success' => true, 'store_data' => $store_data]);
    }
    
    
    public function delete_review(Request $request)
    {
      $userRating = OrderReviews::find($request->id);
      if($userRating)
      {
      	$userRating->delete();
        return response()->json([
          'code'    => 200,
          'message' => 'Rating deleted successfully!'
        ]);
      }else{
        return response()->json([
          'code'    => 500,
          'message' => 'Rating not Found!'
        ]);
      }
    }
    
        // order reviews ends
        
        // seller reviews start
        function get_sellerListing(Request $request){
         $columns = array( 
                            0 =>'id', 
                            1=> 'created_at',
                            2=> 'user_id',
                            3=> 'rating',
                            4=> 'comments',
                            5=> 'action'
                        );
        
       $data = SellerRating::select('seller_rating.*',DB::raw('users.name as given_by,users.image as image'))
        ->Join('users', function($join) {
              $join->on('seller_rating.user_id', '=', 'users.id');
            })->where('seller_rating.seller_id',Auth::user()->id);
        //  dd($data);
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
        
        if(!empty($posts))
        {
            foreach ($posts as $key => $post)
            {
                 //condition code for status starts
            	$checked = ''; 
                if($post->status == 1){
                    $checked = 'checked';
                }else{
                    $checked = '';
                }

                 $button = '
                  <button class="btn btn-sm bg-success-light view_sellerReview" type="button" data-toggle="modal" data-target="#Seller_review-popup"  data-reviewId="'.$post->id.'"><i class="far fa-eye mr-1"></i> View</button>
                  <button type="button" class="btn btn-sm bg-danger-light delete_sellerReview" data-toggle="modal" data-reviewId="'.$post->id.'" data-target="#delete-seller-popup"><i class="fas fa-trash-alt"></i> Delete
                  </button>';
                  
                  if(!empty(@$post->image)){
                      $image ='https://dev.indiit.solutions/roadsmart_dev/public/uploads/img/'.@$post->image;
                  }else{
                      $image = 'https://cdn-icons-png.flaticon.com/512/21/21104.png';
                  }
                 $user_data = '<h2 class="table-avatar">
								<a href="#" class="avatar avatar-sm mr-2">
									<img class="avatar-img rounded-circle" alt="" src="'.$image.'">
								</a>
								<a href="#">'.$post->given_by.'</a>
								</h2>';
                  
                $nestedData['id'] = $key + 1;
                 $nestedData['created_at'] = !empty(@$post->created_at) ? 
                          date('d M,Y', strtotime(@$post->created_at)) : "N/A";
                $nestedData['user_id'] = !empty(@$post->user_id) ? $user_data : "N/A";
                 $nestedData['rating'] = !empty(@$post->rating) ? $post->rating : "N/A";
                  $nestedData['comments'] = !empty(@$post->comments) ? $post->comments : "N/A";
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
    
     public function getSellerViewOrder(Request $request)
    {
        $id = $request->id;
        $store_data = SellerRating::select('*')
        ->where('id', $id)
        // ->Join('users','users.id','=','order_reviews.user_id')
        // ->select('order_reviews.*','users.name','users.image')
        ->get();
        return response()->json(['success' => true, 'store_data' => $store_data]);
    }
    
     public function delete_sellerReview(Request $request)
    {
      $userRating = SellerRating::find($request->id);
      if($userRating)
      {
      	$userRating->delete();
        return response()->json([
          'code'    => 200,
          'message' => 'Rating deleted successfully!'
        ]);
      }else{
        return response()->json([
          'code'    => 500,
          'message' => 'Rating not Found!'
        ]);
      }
    }
       // seller reviews ends
}
