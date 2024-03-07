<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;   
use Illuminate\Http\Request;
use Mail;
use Hash;
use File;
use App\Models\User;
use App\Models\ServiceEstimations;
use App\Models\Vehicles;
use App\Models\UserAddresses;
use App\Models\RejectQuotations;
use Carbon\Carbon;
use App\Models\AllChatUser;
use App\Models\Chats;
use App\Models\Pages;
use App\Models\Appointment;
use App\Models\Notifications;
use App\Models\ServiceSubCategory;
use App\Models\Seller;
use App\Models\ServiceCategory;
use DB;
class ApiController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
     
     public function getTermCondition (Request $request){
         $getTermCondtion = Pages::get();
        return response()->json([
            "status" => true,
            "code" => 200,
            "data" => $getTermCondtion,
            "message" => "Get Term & Condtions detail",
        ]);
     }
     
     
     public function getVehicleDetailsByLicensePlate (Request $request){
          $data=[];
         $data1 = DB::table('vehicles')->where(['vehicles.reg_no'=>$request->licensePlate])->first();
       
         if($data1 && $data1->status == '1'  && $data1->userid != $request->user_id){
               $data['data']= 'Another vehicle was already active with same license number';
         $data['status'] = 0;
         return json_encode($data);
         }else if($data1 && $data1->status == '0'){
              DB::table('vehicles')->where(['vehicles.status'=>'0','vehicles.reg_no'=>$request->licensePlate])->update(['vehicles.status'=>'1','vehicles.userid'=>$request->user_id]);
             $data['data']= $data1;
         $data['status'] = 1;
         return json_encode($data);
         }else if($data1 && $data1->status == '1' && $data1->userid == $request->user_id){
              $data['data']= 'Vehicle is already added in your account!';
         $data['status'] = 2;
         return json_encode($data);
         }
         else{
              $data['data']= 'Vehicle not found with this license number! ';
         $data['status'] = 3;
         return json_encode($data);
         }
         
     }
     
     public function getVehicleForRenewInsurance (Request $request){
         $data=[];
         $policies =DB::table('policies')
         ->join('vehicles','vehicles.id','=','policies.vehicle_id')
         ->join('makes','makes.id', '=', 'vehicles.make_id')
         ->select('vehicles.*','makes.name as mname','makes.icon')
         ->where(['policies.user_id'=>$request->user_id,'policies.status'=>'0'])->get();
         $data['data']= $policies;
         $data['status'] = 1;
         return json_encode($data);
         
     }
        public function getVehicleForBuyInsurance (Request $request){
         $data=[];
        $policies = DB::table('policies')->where('policies.user_id',$request->user_id)->get();
        foreach($policies as $key){
          $vehicle = DB::table('vehicles')->where(['vehicles.userid'=>$key->user_id,'vehicles.status'=>'1'])->where('vehicles.id','!=',$key->vehicle_id)->get();
        }
        
         $data['data']= $vehicle;
         $data['status'] = 1;
         return json_encode($data);
         
     }
     
    public function GetSubServices(Request $request){
        $data = [];
        $services = DB::table('catss')->where(['category' => $request->catid, 'subcategory' => 0, 'service' => 0])->get();
        $details = DB::table('catss')->where(['id' => $request->catid])->first();
        $data['status'] = 1;
        $data['data'] = $services;
        $data['details'] = $details;
        return json_encode($data);
    }
    
    public function getMyAddress(Request $request){
        $data=[];
        $address = DB::table('user_addresses')->where('user_addresses.user_id',$request->user_id)->get();
        if(!empty($address)){
            $data['data']=$address;
            $data['status']=1;
            return json_encode($data);
        }
    }
    
    public function deleteAddress(Request $request){
        $data =DB::table('user_addresses')->where('user_addresses.id',$request->id)->delete();
         if($request->status == 1){
            $address = DB::table('user_addresses')->where('user_addresses.user_id',$request->user_id)->first();
            $table =DB::table('user_addresses')->where('user_addresses.id',$address->id)->update(['status' => '1']);
        }
    }
    
    public function getaddressbyId (Request $request){
        $data1=DB::table('user_addresses')->where('user_addresses.id',$request->id)->get();
        if(!empty($data1)){
        $data['data'] =$data1;
               return json_encode($data);
        }
    }
    
    public function updateAddress (Request $request){
             $table=DB::table('user_addresses')->where('user_addresses.user_id',$request->user_id)->update(['status'=>'0']);
            $table=DB::table('user_addresses')->where('user_addresses.id',$request->id)->update(['title'=>$request->title,'address'=>$request->address,'city'=>$request->city,'state'=>$request->state,'country'=>$request->country,'zip_code'=>$request->zipCode,'status'=>$request->status]);
        
         $data['status'] = 1;
        return json_encode($data);
        
    }
    
    public function addAddress(Request $request){
        if($request->status == 1){
            $status = DB::table('user_addresses')->where('user_addresses.user_id',$request->user_id)->update(['status'=>'0']);
        }
        $newaddress = DB::table('user_addresses')->where('user_addresses.user_id',$request->user_id)->first();
        if(empty($newaddress)){
            $add = new UserAddresses;
        $add->title = $request->title;
        $add->user_id = $request->user_id;
        $add->address = $request->address;
        $add->city = $request->city;
        $add->state = $request->state;
        $add->country = $request->country;
        $add->zip_code = $request->zipCode;
        $add->status = 1;
        $add->save();
        $data['status'] = 1;
        return json_encode($data);
        }
        else{
            $add = new UserAddresses;
        $add->title = $request->title;
        $add->user_id = $request->user_id;
        $add->address = $request->address;
        $add->city = $request->city;
        $add->state = $request->state;
        $add->country = $request->country;
        $add->zip_code = $request->zipCode;
        $add->status = $request->status;
        $add->save();
        $data['status'] = 1;
        return json_encode($data);
        }
        
        
    }
    
    public function EstimationsList(Request $request){
        $data=[];
        $estimation = DB::table('service_estimations')
        ->join('sellers','sellers.id','=','service_estimations.sellerId')
        ->join('catss','catss.id','=','service_estimations.service_provides')
        ->select('service_estimations.sellerId','service_estimations.price','service_estimations.service_provides as serviceId','sellers.first_name','sellers.last_name','catss.*')
        ->where('service_estimations.service_provides',$request->service_id)->where('service_estimations.status', '!=', 'rejected')->get();
        
        $vehicle= DB::table('vehicles')->where('vehicles.id',$request->vehicle_id)->first();
        
        if(!empty($estimation)){
            $data['status'] = 1;
        $data['data'] = $estimation;
        $data['vehicle'] = $vehicle;
       
        return json_encode($data);
        }
    }
    
    public function wishlist(Request $request){
        $data= [];
        $list = DB::table('liked_products')
        ->join('products','products.id','=','liked_products.product_id')
        ->select('liked_products.*','products.*')
        ->where('liked_products.user_id',$request->user_id)->get();
    
    if( count($list)>0){
            foreach($list as $p){
             if($p){
                 //delete
               $p->favorite=true;
             }else{
                 //add
               $p->favorite=false;
             }
        }
       }
        
       $data['status'] = 1;
        $data['data'] = $list;
        return json_encode($data);
    }
    
        public function getQuotes(Request $request){
        $data= [];
        $quote = DB::table('service_requests')->where(['service_requests.userId'=>$request->user_id,'service_requests.quote_status' => 'accepted'])->get();
         $newArr = [];
        foreach($quote as $key){
            
            $items = DB::table('services_request_items')
            ->join('catss','catss.id','=','services_request_items.service_type_id')
            ->select('catss.*','services_request_items.*')
            ->where('services_request_items.request_id',$key->id)->get();
          array_push($newArr,$items);
          
            foreach($items as $quo){
                $data1 =DB::table('service_estimations')->where(['service_estimations.service_item_id'=> $quo->id,'service_estimations.seen'=> '0'])->get();
                
               array_push($data,$data1);
              
            }
        }
           $data['status'] = 1;
        $data['data'] = $data;
        $data['quote'] = $newArr;
        return json_encode($data);
       
    }
    
    public function quoteSeenupdate (Request $request){
         $data= ServiceEstimations::select('*')->where(['service_estimations.dynamic_id'=> $request->dynamic_id,'service_estimations.service_request_id'=> $request->service_request_id])->first();
        $data->seen = $request->seen;
        $data->update();
    }
    
    
    public function getSeller(Request $request){
        $id =$request->id;
         $data=[];
        $seller = DB::table('sellers')->where('sellers.id',$id)->first();
        
        $data['data']=$seller;
        $data['status'] = 1;
        return json_encode($data);
    }

public function inspection(Request $request){
   
    $id =$request->id;
    $data=[];
     $inspection = DB::table('reports')->where('reports.vehicle_id',$id)->first();
     if($inspection){
          $data['data']=[$inspection];
        $data['status'] = 1;
        return json_encode($data);
     }else{
          $data['data']='';
        $data['status'] = 0;
        return json_encode($data);
     }
      
     
}

public function notifications(Request $request){
   
    $data=[];
    $newArray=[];
    $newArray2=[];
    $count=0;
    
    $notifications = Notifications::select('notifications.*',DB::raw('sellers.first_name as seller_firstName, sellers.last_name as seller_lastName '))
    ->Join('sellers', function($join) {
              $join->on('notifications.seller_id', '=', 'sellers.id');
            })
    ->where('notifications.user_id',$request->user_id)
    ->where('notifications.status','!=','0' )
    ->get();
  if(!empty($notifications)){
      $vehname =[];
       $newCart=[];
      foreach ($notifications as $key1){
          $veh = DB::table('services_request_items')
          ->join('vehicles','vehicles.id','=','services_request_items.vehicle_id')
          
          ->where('services_request_items.request_id',$key1->requestId)
          ->get();
      
      }
       foreach($notifications as $key){
       
        $count2=0;
        $carts = DB::table('carts')
        ->join('products','products.id','=','carts.product_id')
        ->select('carts.*','products.product_name','products.catid as categoryName','products.subcatid as subcatName')
        ->where('carts.order_id',$key->order_id)
        ->get(); 
        
        
        $count++;
        
        if($count == count($carts)){
        
    $data['data2']=$carts;
    $data['vehicle']=$veh;
     $data['notifications']=$notifications;
         $data['status'] = 1;
   
    
        }
        
        
    }
  }else{
       $data['data2']=[];
     $data['notifications']=[];
         $data['status'] = 0;
  }
   
    return json_encode($data);
       
    
}

    public function getMessages(Request $request){
    $chat = DB::table('chats')->where(['chats.sender_id'=>$request->sender_id,'chats.recevier_id'=>$request->recevier_id ])->get();
    if(!empty($chat)){
        $data =[];
        $data['data']= $chat;
        $data['status']= 1;
    }else{
        $data['status']= 0;
    }
     return json_encode($data);
    }

    public function addNewMsg(Request $request){
       
              $chat =new Chats;
              $chat->sender_id =$request->sender_id;
              $chat->recevier_id =$request->recevier_id;
              $chat->message =$request->message;
              $chat->seen =$request->seen;
              $chat->type =1;
              $chat->save();
              $data['status'] = 1;
        
           return json_encode($data);
    }


    public function getAllInbox(Request $request){
        $user_id =$request->id;
        $data=[];
   
  $chatData = DB::table('chats')->where('sender_id',$user_id)->orderby('created_at' , 'desc')->get();
   
  if(!empty($chatData)){
        $allChats =DB::table('chats')
    ->join('sellers','sellers.id','=','chats.recevier_id')
    ->select('chats.*','sellers.first_name as sellerFirstName','sellers.last_name as sellerLastName')
    ->where('chats.sender_id',$user_id)
    ->orderby('created_at' , 'desc')
    ->get();
    $data['data']=$allChats;
    $data['status'] = 1;
    //   }
  }else{
       
  }
   
   
     return json_encode($data);
    }
    

    public function addsellerChat(Request $request){
    $data = [];
    
    $sellerEmail = $request->seller_email;
    $seller= DB::table('sellers')->where('sellers.email',$sellerEmail)->first();
    
    if(!empty($seller)){
        $addChats =DB::table('all_chats_user')->where(['all_chats_user.seller_id'=> $seller->id,'all_chats_user.user_id'=> $request->user_id ])->first();
  
        if(!empty($addChats)){
            $data['message'] = "Chat with email is already exist.";
        $data['status']= 0;
        }else{
             
             $newChats =DB::table('all_chats_user');
             $newChatData=['user_id'=>$request->user_id, 'seller_id'=>$seller->id];
              $saveData = DB::table('all_chats_user')->insert($newChatData);
                $data['status'] = 1;
                $data['data'] =  $saveData;
        }
        
         $data['data']=$seller;
         $data['status'] = 1;
    }else{
        $data['message'] = "Email not exist.";
        $data['status']= 0;
        
    }
    return json_encode($data);
}

public function bookAppointment(Request $request){
    $appointment = new Appointment;
    if($request->serviceEstimationId){
       $appointment->serviceEstimationId =$request->serviceEstimationId;  
    }
   if($request->seller_id){
      $appointment->seller_id =$request->seller_id;  
    }
    if($request->user_id){
      $appointment->user_id =$request->user_id;  
    }
    if($request->serviceProvidesId){
      $appointment->serviceProvidesId =$request->serviceProvidesId;  
    } 
    if($request->compare_productid){
      $appointment->compare_productid =$request->compare_productid;  
    }  
     if($request->appointment_Date){
      $appointment->appointment_Date =$request->appointment_Date;  
    }   
     if($request->appointment_Time){
      $appointment->appointment_Time =$request->appointment_Time;  
    }    
     if($request->requestid){
      $appointment->requestid =$request->requestid;  
    }    
    $appointment->status =$request->status;
    
    $appointment->save();
    $data['status'] = 1;
    return json_encode($data);
}

public function yourOrders(Request $request){
        $allOrders = DB::table('orders')->where('user_id', $request->id) ->get()->reverse()
    ->values();
        $data = array();
        $new_array = [];
        $count2 = 0;

        foreach ($allOrders as $key) {
            
            $data2=[];
            if($key->compare_product_id){
                $compareproduct = DB::table('products')->where('products.id',$key->compare_product_id)->first();
             
                $key->compareProductDetails = $compareproduct;
            }
           $carts = DB::table('carts')->where('id', $key->cartid)->get();
           $requestService =DB::table('services_request_items')
           ->join('vehicles','vehicles.id','=','services_request_items.vehicle_id')
           ->join('makes','makes.id','=','vehicles.make_id')
          ->join('catss','catss.id','=','services_request_items.service_type_id')
          ->select('catss.name as serviceName','vehicles.name','makes.icon','vehicles.reg_no')
           ->where('services_request_items.request_id',$key->request_id)->first();
         $key->serviceOrders = $requestService;
          $requestServiceName =DB::table('services_request_items')
           ->join('vehicles','vehicles.id','=','services_request_items.vehicle_id')
           ->join('makes','makes.id','=','vehicles.make_id')
          ->join('catss','catss.id','=','services_request_items.service_type_id')
          ->select('catss.name as serviceName','vehicles.name','makes.icon')
           ->where('services_request_items.request_id',$key->request_id)->get();
           $key->serviceName = $requestServiceName;
                array_push($new_array, $key);
           $newCarts = [];
           $count1 = 0;

           foreach ($carts as $cartItem) {
              $product =  DB::table('products')->where('id', $cartItem->product_id)->get();
              $cartItem->productDetails = $product;
              array_push($newCarts, $product);
              $count1++;

              if($count1 === count($carts)){
                $key->products = $product;
                $key->serviceOrders = $requestService;
              }
           }
           
           foreach ($key as $item){
               
           }
           
           

           $count2++;
           if(count($allOrders) === $count2){
             $data['data'] = ['orders' => $new_array]; 
             
            $data['status'] = 1;
            
           }
        }
        return json_encode($data);

       }
       
       
       public function getservicebyvehicleid(Request $request){
    $datas = DB::table('policies')
    ->join('catss','catss.id','policies.cover')
    ->select('catss.*','policies.*')
    ->where(['vehicle_id'=>$request->vehicle_id,'status' =>  'active'])
    ->get();
    if(!empty($datas)){
        $data['data']=$datas;
         $data['status'] = 1;
         return json_encode($data);
    }else{
        $data['data']=[];
         $data['status'] = 0;
         return json_encode($data);
    }
}

    public function getrelaTedProducts(Request $request){
       $data = array();
            $request  = $request->all();
            $services=User::getRelatedProducts($request);
            $tyres=User::getRelatedProductsTyres($request);
            $access=User::getRelatedProductsAccess($request);
            $wind=User::getRelatedProductsWind($request);
            $data['data']=$services;
            $data['tyres']=$tyres;
            $data['access']=$access;
            $data['wind']=$wind;
            $data['status']=1;
            return json_encode($data);
    }


    public function getVehicleDetails(Request $request){
            $data = array();
            $id  = $request->id;
           
            $services = User::VehicleDetailsWithId($id);
            $data['data'] = $services;
            $data['status'] = 1;
            return json_encode($data);
    }

   

    public function getProfile(Request $request){
        $profile =  DB::table('users')->where('id',$request->id)->get();

        $data = array();
        $new_array = [];
        $data = ['data' => $profile];
               return json_encode($data);

       }
       public function updateProfile(Request $request){
          $emailss =DB::table('users')->where(['status'=>'1','email'=>$request->email])->first();
           if(!$request->name||!$request->email||!$request->phone_num){
               $data['message'] =  'All field must be required!';
        $data['status'] = 0 ;
        return json_encode($data);
           }else{
                 $profile = User::where('id',$request->id)->first();
          if(!empty($emailss) && $profile->id == $emailss->id){
               $profile_updated =  DB::table('users')->where('id',$request->id)->update(['name' => $request->name,'email' => $request->email,'phone_num' => $request->phone_num,'notification_status' => $request->notification_status]);
       if($request->hasFile('file')){
            $file = $request->file('file');
            //  
            $filename = $file->getClientOriginalName();
            
            $file->move('public/uploads/img/',$filename);
            DB::table('users')->where('id',$request->id)->update(['image'=>$filename]);
        }

        $data['data'] =  $profile;
        $data['status'] = 1 ;
        return json_encode($data);
          }else if(empty($emailss)){
                     $profile_updated =  DB::table('users')->where('id',$request->id)->update(['name' => $request->name,'email' => $request->email,'phone_num' => $request->phone_num,'notification_status' => $request->notification_status]);
       if($request->hasFile('file')){
            $file = $request->file('file');
            //  
            $filename = $file->getClientOriginalName();
            
            $file->move('public/uploads/img/',$filename);
            DB::table('users')->where('id',$request->id)->update(['image'=>$filename]);
        }

        $data['data'] =  $profile;
        $data['status'] = 1 ;
        return json_encode($data);
          }else{
              $data['message'] =  'Email already exist!';
        $data['status'] = 0 ;
        return json_encode($data);
          }
       
           }
       }

       

    public function vehicleDetails(Request $request){

        $vehicle_ = DB::table('vehicles')
        ->where('id', $request->id)
        ->first();

        $vehicle_->variant = DB::table('variants')
        ->where('id', $vehicle_->variant_id)
        ->first();

        $vehicle_->model = DB::table('model')
        ->where('id', $vehicle_->model_id)
        ->first();

        $vehicle_->make = DB::table('makes')
        ->where('id', $vehicle_->make_id)
        ->first();

        $vehicle_->engine = DB::table('engines')
        ->where('variant_id', $vehicle_->variant->id)
        ->first();
        
        $vehicle_->policy = DB::table('policies')
        ->where('policies.vehicle_id',$vehicle_->id)->first();

 $vehicle_->road_tax = DB::table('road_tax')
        ->where('road_tax.vehicle_id',$vehicle_->id)->first();

        $allOrders =  DB::table('orders')->where('vehicle_id', $request->id)->get()->reverse()
    ->values();
        $allreports =  DB::table('reports')
            ->join('catss','catss.id','=','reports.request_id')
            ->select('reports.*','catss.name as request_name')
            ->where('vehicle_id', $request->id)
            ->get();

        $data = array();
        $new_array = [];
        $count2 = 0;

        if(count($allOrders) === 0) {
            $data['data'] = ['orders' => $new_array, 'vehicle' => $vehicle_, 'reports' => $allreports];
            $data['status'] = 1;
            return json_encode($data);
        }

        foreach ($allOrders as $key) {
            
           $carts = DB::table('carts')->where('id', $key->cartid)->get();
           
           if($key->request_id){
                $requestService =DB::table('services_request_items')
           ->join('vehicles','vehicles.id','=','services_request_items.vehicle_id')
          ->join('catss','catss.id','=','services_request_items.service_type_id')
          ->select('catss.name as serviceName','vehicles.name')
           ->where('services_request_items.request_id',$key->request_id)->get();
         $key->serviceOrders = $requestService;
                array_push($new_array, $key);
           }
           
           $newCarts = [];
           $count1 = 0;

           foreach ($carts as $cartItem) {
              $product =  DB::table('products')->where('id', $cartItem->product_id)->first();
              $cartItem->productDetails = $product;
              array_push($newCarts, $product);
              $count1++;

              if($count1 === count($carts)){
                $key->products = $newCarts;
                array_push($new_array, $key);
              }
           }

           $count2++;
           if(count($allOrders) === $count2){
            $data['data'] = ['orders' => $new_array, 'vehicle' => $vehicle_, 'reports' => $allreports];
            $data['status'] = 1;
            return json_encode($data);
           }
        }


    }

    public function brokerAgent(Request $request){
        $allreports =  DB::table('broker_agent')->get();

        $new_array = [];
        $count2 = 0;
        $data = ['data' => $allreports];
               return json_encode($data);

       }


    public function GetServiceRequestsWithId(Request $request){
      $data=array();
            $request  = $request->all();
            $services=ServiceCategory::serviceRequestsWithId($request);
            $data['services']=$services;
            $data['status']=1;
            return json_encode($data);
    }

    public function GetServiceRequests(Request $request){
           $data=array();
            $request  = $request->all();
            $services=ServiceCategory::serviceRequests($request);
            $data['services']=$services;
            $data['status']=1;
            return json_encode($data);
    }
    public function getMakesData(Request $request){
       $data=array();
            $request  = $request->all();
            $services=User::getMakes();
            $data['data']=$services;
            $data['status']=1;
            return json_encode($data);
    }
    public function GetAllQuckLinks(Request $request){
            $data=array();
            $request  = $request->all();
            $services=ServiceCategory::getQuickLinks();
            $data['services']=$services;
            $data['status']=1;
            return json_encode($data);
    }

    public function GetALlServices(Request $request){
       $data=array();
        $request  = $request->all();
        if(isset($request['text']) && !empty($request['text'])){
          $services=ServiceCategory::search($request['text']);
        }else{
         $services=ServiceCategory::all();
        }
        $data['services']=$services;
        $data['status']=1;
        return json_encode($data);
    }
    public function getCategoriesSellers(Request $request){
            $data=array();
            $request  = $request->all();
            $datas=User::getSellercategories($request);
            $data['data']=$datas;
            $data['status']=1;
            return json_encode($data);

    }
    public function getSellerProductWithCategories(Request $request){
        $data=array();
        $request  = $request->all();
        $products=User::getSellerProductWithCategories($request);
        $productsall=User::getFeaturedSellerProductsAll($request);
         $data['status']=1;
        $data['products']=$products;
        $data['productsall']=$productsall;
        return json_encode($data);
    }
    public function SocialLogin(Request $request){
        $data=array();
        $request  = $request->all();
        if(!empty($request['social_id']))
    {

        $exist_admin1 =User::getUsermatch1(array('social_id'=>$request['social_id']));


        if(empty($exist_admin1))
        {
            $insert=User::insertoption($request);
                if($insert){

                $exist_admin = User::getUsermatch1(array('social_id'=>$request['social_id']));
                $data['message'] = "Email verification link has been send successfully";
                $data['status']= 1;
                $data['data']=$exist_admin;

                }else{
                     $data['message'] = "Please login with email and password!";
                }
            $data['message'] = " ";
            $data['status']= 1;
        }else
        {
            $exist_admin = User::getUsermatch1(array('social_id'=>$request['social_id']));
                    $data['message'] = "Logged in successfully";
                    $data['status']= 1;
                    $data['data']=$exist_admin;

        }


    }

         return json_encode($data);
    }
    public function getSellerProfile(Request $request){
        $data=array();
        $request  = $request->all();
        $datas=User::getSellerprofile($request);
        $products=User::getFeaturedSellerProducts($request);
        $productsall=User::getFeaturedSellerProductsAll($request);
        $getSellerReview=User::getSellerReview($request);
         $data['status']=1;
        $data['data']=$datas;
        $data['products']=$products;
        $data['productsall']=$productsall;
        $data['reviews']=$getSellerReview;
         return json_encode($data);
    }
    public function updateDefaultVehicle(Request $request){
      $data=array();
        $request  = $request->all();
        $update=User::updateDefaultVehicle($request);

        $data['status']=1;
        return json_encode($data);
    }
    public function GetHomePageData(Request $request){
        $data=array();
        $request  = $request->all();
        $services=ServiceCategory::take('4')->get();
        $popular=User::popularproducts($request['userid']);
        $vehicle = User::getUserVehicleDefult($request['userid']);
        $offers=Seller::getOffers();
        $data['services']=$services;
        $data['vehicle']=$vehicle;
        $data['offers']=$offers;
        $data['popular']=$popular;
        $data['status']=1;
        return json_encode($data);
    }
    public function placeorder(Request $request){
      $data=array();
      $postdata = file_get_contents("php://input");
      $dataa=User::getCart($request['userid']);
      
      $cid=array();
      foreach($dataa as $da)
      {
          $cid[]=$da->id;
          $update=User::updatecart(array('status'=>2),$da->id);
           $insert=array(
                'user_id'=>$request['userid'],
                'cartid'=>$da->id,
                'payment_method'=>'card',
                 'vehicle_id'=> $da->vehicle_id,
                'amount'=>$request['amount'],
                'delivery_address_id'=>$request->delivery_address_id,
                'transactionid'=>$request->transactionid,
                'seller_id'=>$request->seller_id,
                'status'=>0,

                );
        $update_data = User::insertorder($insert);
      }


       $data['status']=1;
        return json_encode($data);
    }
    public function RequestCarFinance(Request $request){
         $data=array();
        $request  = $request->all();
        $exists = User::insertFinanceRequest($request);
        $data['message'] = "Email already exist.";
        $data['status']= 1;
        return json_encode($data);
    }
    public function AddQuoteRequest(Request $request){
        $data=array();
        $request  = $request->all();
        $exists = User::insertRequest($request);
        $data['message'] = "Email already exist.";
        $data['status']= 1;
        return json_encode($data);
    }
    public function ContactUs(Request $request){
        $data=array();
        $request  = $request->all();
        $insert=array(
            'product_id'=>$request['product_id'],
            'user_id'=>$request['user_id'],
            'message'=>$request['message']
            );
        $exists = User::insertQuery($insert);
        $data['message'] = "Email already exist.";
        $data['status']= 1;
        return json_encode($data);
    }
    public function UpdateVehicleDetails(Request $request){
       $data=array();
        $request  = $request->all();
        $exists = User::updateVehicleDetails($request);
        $data['message'] = "Email already exist.";
        $data['status']= 1;
        return json_encode($data);
    }
    public function UpdateQuoteRequest(Request $request){
        $data=array();
        $request  = $request->all();
        $update=array(
            'price'=>$request['price'],
            'down_payment'=>$request['down_payment'],
            'term'=>$request['term'],
            'interest'=>$request['interest'],
            'fees'=>$request['fees'],
            'monthlyprice'=>$request['monthlyprice'],
            );
        $exists = User::updateRequest($update,$request['installid']);
        $data['message'] = "Email already exist.";
        $data['status']= 1;
        return json_encode($data);
    }
    public function GetRequestDetails(Request $request){
        $data=array();
        $request  = $request->all();
        $exists = User::GetRequestDetails($request['id']);
        $data['message'] = "Email already exist.";
        $data['status']= 1;
        $data['data']=$exists;
        return json_encode($data);
    }
    public function getProductDetails(Request $request){
        $data=array();
        $request  = $request->all();
        $exists = User::getProductDetails($request['id'],$request['user_id']);
        $data['message'] = "Email already exist.";
        $data['status']= 1;
        $data['data']=$exists;
        return json_encode($data);
    }
    public function MakeFavourite(Request $request){
       $data=array();
        $request  = $request->all();
        $favorite=User::makefavorite($request);
         $data['message'] = "Email already exist.";
        $data['status']= 1;

        return json_encode($data);
    }
    public function DecreaseQuantityFRomCart(Request $request){
          $data=array();
        $request  = $request->all();
         $exists = User::DecreaseQuantityCart($request['id'],$request['quantity']);
         $carttotal = User::carttotal($request['user_id']);
         $data['message'] = "Email already exist.";
        $data['status']= 1;
        $data['data']=$exists;
        $data['carttotal']=$carttotal;
        return json_encode($data);
    }
    public function deleteItemFromCart(Request $request){
       $data=array();
        $request  = $request->all();
         $exists = User::DeleteItemFromCart($request['id']);
         $carttotal = User::carttotal($request['user_id']);
         $data['message'] = "Email already exist.";
        $data['status']= 1;
        $data['data']=$exists;
        $data['carttotal']=$carttotal;
        return json_encode($data);
    }
    public function getCart(Request $request){
         $data=array();
        $request  = $request->all();
         $exists = User::getCart($request['user_id']);
         $carttotal = User::carttotal($request['user_id']);
         $address=User::getAddress($request['user_id']);
         $data['message'] = "Email already exist.";
        $data['status']= 1;
        $data['data']=$exists;
        $data['carttotal']=$carttotal;
         $data['address']=$address;
        return json_encode($data);
    }
    public function AddToCart(Request $request){
        $data=array();
        $request  = $request->all();
        $exists = User::Addtocart($request);
        $data['message'] = "Email already exist.";
        $data['status']= 1;
        $data['data']=$exists;
        return json_encode($data);
    }
    public function getPartsSearch(Request $request){
         $data=array();
        $request  = $request->all();
         $exists = User::getProductsPartsWithSearch($request);
         $data['message'] = "Email already exist.";
        $data['status']= 1;
        $data['data']=$exists;
        return json_encode($data);
    }
    public function getProducts(Request $request){
        $data=array();
        $request  = $request->all();
        if(isset($request['filter_by']) && !empty($request['filter_by'])){
        $exists = User::getProductsWithSearch($request);
        }else if(isset($request['make_id']) && !empty($request['make_id'])){
        $exists = User::getProductsWithSearchMake($request);
        }else if(isset($request['brand_id']) && !empty($request['brand_id'])){
        $exists = User::getProductsWithSearchModel($request);
        }else if(isset($request['max_year']) && !empty($request['max_year'])){
        $exists = User::getProductsWithSearchMaxYear($request);
        }else if(isset($request['min_year']) && !empty($request['min_year'])){
        $exists = User::getProductsWithSearchMinYear($request);
        }else{
        $exists = User::getProducts($request['catid'],$request['subcatid'],$request['user_id']);
        }
        $data['message'] = "Email already exist.";
        $data['status']= 1;
        $data['data']=$exists;
        return json_encode($data);
    }
    public function getSubCategories(Request $request){
        $data=array();
        $request  = $request->all();
        $exists = User::getSubCategories($request['catid']);
        $data['message'] = "Email already exist.";
        $data['status']= 1;
        $data['data']=$exists;
        return json_encode($data);

    }
    public function getCategories(Request $request){
        $data=array();
        $exists = User::getCategories();
        $data['message'] = "Email already exist.";
        $data['status']= 1;
        $data['data']=$exists;
        return json_encode($data);
    }
    public function HomePageSearch(Request $request){
        $data=array();
        $request  = $request->all();
        $exists = User::getProductsWithSearchText($request);
        $data['status']= 1;
        $data['data']=$exists;
        return json_encode($data);
    }
     public function MakeSearch(Request $request){
        $data=array();
        $request  = $request->all();
        $exists = User::getMakesWithSearchText($request);
        $data['status']= 1;
        $data['data']=$exists;
        return json_encode($data);
    }
    public function getVehicles(Request $request){
        $data=array();
        $request  = $request->all();
        $exists = User::getUserVehicles($request['user_id']);
        $data['status']= 1;
        $data['data']=$exists;
        return json_encode($data);
    }
    public function getProductsForMarketplace(Request $request){
        $data=array();
        $exists = User::getproductsMarketplace();
        $data['message'] = "Email already exist.";
        $data['status']= 1;
        $data['data']=$exists;
        return json_encode($data);

    }
    public function SignupUser(Request $request){

        $data=array();
        $request  = $request->all();
        if(!empty($request['email'])){
            $email = [['email','=',$request['email']]];
            $exists = User::getUsermatch($email);

            if(count($exists) > 0 )
            {
                $data['message'] = "Email already exist.";
                $data['status']= 2;

            }else{

                $request['password']=Hash::make($request['password']);
                $id= DB::table('users')->insertGetId($request);
                if($id){

                $email_data = ['url' => 'https://roadsmartsolutions.com/apis/verify-email/'.$id, 'status' => "pending"];

                try {
                        Mail::send('mails.send_verification_link', $email_data, function($message) use ($request) {
                          
                            $message->to($request['email'], 'Roadsmart')->subject
                                ('Confirm your email');
                                $message->from ( 'roadsmarttechnologies@gmail.com', 'Roadsmart' );
                        });
                    } catch (Exception $e) {
                         dd($e);
                    }


                $exist_admin = User::getUsermatch1(array('email'=>$request['email']));
                $data['message'] = "Email verification link has been send successfully";
                $data['status']= 1;
                $data['data']=$exist_admin;

                }
            }
        }

        return json_encode($data);
    }
    
     public function resendMail(Request $request){

        $data=array();
        $email  = $request->email;
     
            $table=  DB::table('users')->where('users.email',$email)->first();
             
             $idd= $table->id;
        if(!empty($table)){
                if($idd){

                $email_data = ['url' => 'https://roadsmartsolutions.com/apis/verify-email/'.$idd, 'status' => "pending"];

                Mail::send('mails.send_verification_link', $email_data, function($message) use ($request) {
                   
                    $message->to($request['email'], 'Roadsmart')->subject
                        ('Confirm your email');
                        $message->from ( 'roadsmarttechnologies@gmail.com', 'Roadsmart' );
                });

                $exist_admin = User::getUsermatch1(array('email'=>$request['email']));
                $data['message'] = "Email verification link has been send successfully";
                $data['status']= 1;
                $data['data']=$exist_admin;

            }
        }

        return json_encode($data);
    }
    
     public function getDummyProducts(Request $request){
          $data=array();
        $postdata = file_get_contents("php://input");
        $request= json_decode($postdata,true);

        $exists = User::getdummyproducts($request['user_id']);

        $data['message'] = "Email already exist.";
        $data['status']= 1;
        $data['data']=$exists;
        return json_encode($data);

     }
     public function deleteRequest(Request $request){
        $data=array();
        $postdata = file_get_contents("php://input");
        $request= json_decode($postdata,true);
        $data['message'] = "OTP does not match.";
        $dats=User::deleteRequest($request['id']);
        $data['status']= 1;

        return json_encode($data);
     }
     public function getMakesAll(Request $request){
        $data=array();
        $postdata = file_get_contents("php://input");
        $request= json_decode($postdata,true);
        $data['message'] = "OTP does not match.";
        $dats=User::getmodels();
        $data['status']= 1;
        $data['data']=$dats;
        return json_encode($data);
     }
     public function getBrandsAll(Request $request){
        $data=array();
        $postdata = file_get_contents("php://input");
        $request= json_decode($postdata,true);
        $data['message'] = "OTP does not match.";
        $dats=User::getbrands();
        $data['status']= 1;
        $data['data']=$dats;
        return json_encode($data);
     }
     public function verifyotp(Request $request)
  {

     $data=array();
     $postdata = file_get_contents("php://input");
     $request= json_decode($postdata,true);


    if(!empty($request['otp']))
    {
       $otp = DB::table('users')->where(array('forgot_pass_otp'=>$request['otp']))->first();
       if(empty($otp))
       {
         $data['message'] = "OTP does not match.";
         $data['status']= 0;

       }else
       {

         $userdata = DB::table('users')->where(array('forgot_pass_otp'=>$request['otp']))->first();
         $data['message'] = "OTP verified successfully";
         $data['status']= 1;
         $data['data']=$userdata ;
       }
    }
     return json_encode($data);

  }
  
  public function resetPassword(Request $request){
     
      $id = $request->user_id;
      
      $user = User::select('*')->where('users.id',$id)->first();
    
       $user->password = bcrypt($request->conformPass);
       $user->update();
  }
  
  
  
    public function forgotPass(Request $request)
  {

  $data=array();
  $postdata = file_get_contents("php://input");

    $request= json_decode($postdata,true);

    if(!empty($request['email']))
    {

        $exist_admin = User::getUsermatch1(array('email'=>$request['email']));


        if(empty($exist_admin))
        {
            $data['message'] = "This email is not registered with us";
            $data['status']= 0;
        }else
        {
            $otp = rand(1000,9999);
            $edata['otpId'] = $otp;
            $data['otpId'] = $otp;
            $data['userId'] = $exist_admin->id;


            $update_data = User::updateoption(array('forgot_pass_otp'=>$otp),$exist_admin->id);
            $dataas = array(
                 'bodyMessage' => 'Hello'. $exist_admin->name . 'Your OTP is ' .  $otp,
                'otp' => $otp,
                'email' => $exist_admin->email
                );
 Mail::send ( 'ressetPassword', $dataas, function ($message) use ($dataas) {
        
        $message->from ( 'roadsmarttechnologies@gmail.com', 'Roadsmart' );
        
        $message->to (  $dataas['email'] )->subject ( 'Forget Password' );
    } );

             $data['message'] = "Email Sent Successfully";
             $data['status']= 1;
        }


    }
     return json_encode($data);

  }


     public function loginUser(Request $request)
  {
  $data=array();
  $postdata = file_get_contents("php://input");
  $request= json_decode($postdata,true);


    if(!empty($request['username']) && !empty($request['password']))
    {
        $exist_admin =User::getUsermatch1(array('username'=>$request['username']));
        $exist_admin1 =User::getUsermatch1(array('email'=>$request['username']));

        if(empty($exist_admin) && empty($exist_admin1))
        {
            $data['message'] = "Email or Password is incorrect";
            $data['status']= 0;
        }else
        {
            if(!empty($exist_admin)){
            if($exist_admin->status==0){
                $data['message'] = "Please verify your account to login";
                $data['status']= 0;
            }else if($exist_admin->status==2){
                $data['message'] = "Your account has been rejected by admin";
                $data['status']= 0;
            }else{

                $hashedPassword= $exist_admin->password;
                if (Hash::check($request['password'], $hashedPassword))
                {
                    $data['message'] = "Logged in successfully";
                    $data['status']= 1;
                    $data['data']=$exist_admin;
                }else
                {
                    $data['status']= 0;
                    $data['message'] = "Email or Password is incorrect";
                }
            }
            }else{
                if($exist_admin1->status==0){
                $data['message'] = "Please verify your account to login";
                $data['status']= 0;
            }else if($exist_admin1->status==2){
                $data['message'] = "Your account has been rejected by admin";
                $data['status']= 0;
            }else{

                $hashedPassword= $exist_admin1->password;
                if (Hash::check($request['password'], $hashedPassword))
                {
                    $data['message'] = "Logged in successfully";
                    $data['status']= 1;
                    $data['data']=$exist_admin1;
                }else
                {
                    $data['status']= 0;
                    $data['message'] = "Email or Password is incorrect";
                }
            }
            }


        }


    }
     return json_encode($data);

  }


  public function GetMyServices(Request $request){

                $allCats =  DB::table('catss')->where(['category' => 0, 'subcategory' => 0, 'service' => 0])->orderBy('sr_no', 'asc')->get();

                if(count($allCats)!=0){
                    $count = 0;
                    $allData = [];
                    foreach($allCats as $key){

                           $allSubCats = DB::table('catss')->where(['category' => $key->id, 'subcategory' => 0, 'service' => 0])->get();

                            $dict = (object)($key);
                            $dict->subCats =  $allSubCats;

                            array_push($allData,  $dict);

                            $count++;

                            if($count == count($allCats)){

                                        $data['status'] = 1;
                                        $data['data'] =  $allData;

                            }

                    }

                }
                else{
                    $data['status'] = 0;
                }
                return json_encode($data);

        }


        public function GetMyCategories(Request $request){

            $allCats =  DB::table('catss')->where(['category' => 0, 'subcategory' => 0, 'service' => 0])->orderBy('sr_no', 'asc')->get();

            if(count($allCats)!=0){
                $count = 0;
                $allData = [];
                foreach($allCats as $key){

                    $allSubCats = DB::table('catss')->where(['category' => $key->id, 'subcategory' => 0, 'service' => 0])->get();

                        $dict = (object)($key);
                        $dict->subCats =  $allSubCats;

                        array_push($allData,  $dict);

                        $count++;

                        if($count == count($allCats)){

                                    $data['status'] = 1;
                                    $data['data'] =  $allData;

                        }

                }

            }
            else{
                $data['status'] = 0;
            }
            return json_encode($data);

    }



 public function GetServicesByCat(Request $request){
            $condition = ['service' => 1];

            if($request->hasSubCat == '0') {
                $condition['subcategory'] = 0;
                $condition['category'] = $request->subCat;
            }
            else{
                $condition['subcategory'] = $request->subCat;
            }

            $allServices = DB::table('catss')->where($condition)->orderBy('sr_no', 'asc')->get();
            $data['status'] = 1;
            $data['data'] =  $allServices;
            return json_encode($data);

    }


    public function SaveServiceSarch(Request $request){
        $saveData = DB::table('searches')->insert(['keyword' => $request->keyword]);
        $data['status'] = 1;
        $data['data'] =  $saveData;
        return json_encode($data);

}


public function GetPopularSearches(Request $request){
    $allSeaches = DB::table('searches')->get();
 $services=ServiceCategory::take('10')->get();
     $data['services']=$services;
    return json_encode($data);
 
}

public function vehicelId(Request $request){
    $data=[];
    $table =DB::table('services_request_items')->where('services_request_items.request_id',$request->request_id)->first();
    $data=$table;
    return json_encode($data);
}

public function PayForRequestService(Request $request){
     $field= array(56, 57, 58, 59, 60, 61);
     $field2= array(125);
  DB::table('orders')->insert(['request_id' => $request->request_id,'amount'=>$request->amount,'transactionid'=>$request->transactionid,'payment_method'=>$request->payment_method,'user_id'=>$request->user_id,'seller_id'=>$request->seller_id,'vehicle_id'=>$request->vehicle_id,'compare_product_id'=>$request->compareProductId]);
  DB::table('services_request_items')->where(['request_id' => $request->request_id])->update(['rejectEstimation' => '1','rejectSellerId' =>$request->seller_id]);
       if(in_array($request->subcat_id, $field)){
       $data=  DB::table('policies')->where('policies.vehicle_id',$request->vehicle_id)->first();
    
       if(!empty($data)){
           DB::table('policies')->where('policies.vehicle_id',$request->vehicle_id)->update(['status'=>'Valid','request_id'=>$request->request_id,'cover'=>$request->subcat_id,'seller_id'=>$request->seller_name,]);
       }else{
           DB::table('policies')->insert(['seller_id'=>$request->seller_name,'cover'=>$request->subcat_id,'request_id'=>$request->request_id,'vehicle_id'=>$request->vehicle_id,'user_id'=>$request->user_id,'status'=>'Valid']);
       }
    }
      if(in_array($request->subcat_id, $field2)){
       $data=  DB::table('road_tax')->where('road_tax.vehicle_id',$request->vehicle_id)->first();
    
       if(!empty($data)){
           DB::table('road_tax')->where('road_tax.vehicle_id',$request->vehicle_id)->update(['request_id'=>$request->request_id,'seller_id'=>$request->seller_name,'quarter_expiry'=>$request->road_tax_expiry,'user_id'=>$request->user_id,]);
    //   DB::table('vehicles')->where('vehicles.id',$request->vehicle_id)->update(['vehicles.quarter_expiry'=>$request->road_tax_expiry,])
       }else{
           DB::table('road_tax')->insert(['seller_id'=>$request->seller_name,'request_id'=>$request->request_id,'vehicle_id'=>$request->vehicle_id,'user_id'=>$request->user_id,'quarter_expiry'=>$request->road_tax_expiry,'amount'=>$request->amount]);
       }
    }
    $data['status']=1;
    return json_encode($data);
    
}

public function declinePayment (Request $request) {
    $Data= DB::table('notifications')->where('notifications.id',$request->notification_id)->update(['status'=>'0']);
    $data['data'] = $Data;
    $data['status'] = 1;
}


public function SendServiceRequest(Request $request){

    $requestedServices = $request->requestedServices;
    $userId =  $request->userid;
    $count = 0;

    $newRequest = ['userid' => $userId];

    $requestId = DB::table('service_requests')->insertGetId($newRequest);
    //  DB::table('orders')->insert(['request_id' => $requestId]);

    $myArray = [];
    $dynamicCount = 1;
    
    // for comapare deals in marketplace
    
    $compareDealsRequestedServices = $request->compareFinance;
    if($compareDealsRequestedServices){
        $comapareFinance= DB::table('services_request_items')->insert(['dynamic_id' => $requestId.'-'.$dynamicCount,'request_id' => $requestId,'compare_productid'=>$compareDealsRequestedServices['product_id'],'compare_downpayment'=>$compareDealsRequestedServices['down_payment'],'compare_terms'=>$compareDealsRequestedServices['terms']]);

            $data['status'] = 1;
            $data['data'] = $comapareFinance;
            return json_encode($data);
     
        
    }
     
    foreach($requestedServices as $service_){
            foreach ($service_ as $service) {
                
                $newServiceRequest = ['dynamic_id' => $requestId.'-'.$dynamicCount,'request_id' => $requestId,'location' => $request->location,'quarters' => $service['quarters'],'sum_insured' => $service['sum_insured'],'brokerId' => $service['brokerId'],'incidentDate' => $service['incidentDate'],'subCategory' => $service['subcategory'],'service_type_id' => $service['id'], 'vehicle_id' => $service['vehicle_id']];
                if(isset($service['notes'])) $newServiceRequest['notes'] = json_encode($service['notes']);
               
                // if(isset($service['location'])) $newServiceRequest['location'] = json_encode($service['location']);
                if(isset($service['start_Date'])) $newServiceRequest['start_Date'] = json_encode($service['start_Date']);
                if(isset($service['additional_info'])) $newServiceRequest['additional_info'] = json_encode($service['additional_info']);
                 if(isset($service['images'])) $newServiceRequest['images'] = json_encode($service['images']);
                 if(isset($service['roadtax_amount'])) $newServiceRequest['roadtax_amount'] = json_encode($service['roadtax_amount']);
                DB::table('services_request_items')->insert($newServiceRequest);
                $dynamicCount++;
            }
        
        $count++;
        if($count === count($requestedServices)){
            $data['status'] = 1;
            $data['data'] = $newServiceRequest;
            return json_encode($data);
        }
    };
}


public function getMyServiceRequests(Request $request){

    $data = array();
    $services =  DB::table('service_requests')->where(['userid' => $request->userid, 'status' => 'pending'])->orderBy('created_at', 'desc')->get();
    $count = 0;
    $newArray = [];
    if(count($services) !== 0){

        foreach($services as $servicee){

            $servicesRequestItems = DB::table('services_request_items')->where('request_id', $servicee->id)->get();
            $quotations = DB::table('service_estimations')->where('service_request_id', $servicee->id)->where('status', '!=', 'rejected')->get();
            $catDetails = DB::table('catss')->where('id', $servicee->cat_id)->first();
            $servicee->quotations = $quotations;
            $servicee->catDetails = $catDetails;
            $count++;
            $services_request_itemss = [];
            $count1 = 0;

            foreach($servicesRequestItems as $key){
                

                $serviceTypeDetails = DB::table('catss')->where('id', $key->service_type_id)->first();
                $subCatDetails = DB::table('catss')->where('id', $key->subCategory)->first();
                $vehicleDetails = DB::table('vehicles')->where('id', $key->vehicle_id)->first();

                $key->serviceTypeDetails = $serviceTypeDetails;
                $key->vehicleDetails = $vehicleDetails;
                $key->request_id = $servicee->id;
                $key->subCatDetails = $subCatDetails;

                $count1++;
                array_push($services_request_itemss, $key);
                if($count1 === count($servicesRequestItems)) $servicee->services = $services_request_itemss;
            }


            array_push($newArray, $servicee);

            if($count === count($services)){
                $data['data'] = $newArray;
                $data['status'] = 1;
            }


        }

    }else{
        $data['data'] = [];
        $data['status'] = 0;
    }


    return json_encode($data);
}


public function getMyServiceRequestsNew(Request $request){

    $data = array();
    $services =  DB::table('service_requests')->where(['userid' => $request->userid, 'status' => 'pending'])->orderBy('created_at', 'desc')->get();
    $count = 0;
    $newArray = [];
    if(count($services) !== 0){

        foreach($services as $servicee){
            $data1 = [];
               
            $reject = DB::table('reject_quotations')->where(['reject_quotations.user_id'=>$servicee->userId,'reject_quotations.request_id'=>$servicee->id])->get();
            
            foreach ($reject as $keys){
                
                $estimateid = $keys->serviceEstimation_id;
              
                array_push($data1,$estimateid);
            }
             
            
            $quotations = DB::table('service_estimations')->where('service_request_id', $servicee->id)->where('status', '!=', 'rejected')->whereNotIn('id',$data1)->get();
            $catDetails = DB::table('catss')->where('id', $servicee->cat_id)->first();
            $servicee->quotations = $quotations;
            $servicee->catDetails = $catDetails;
            $count++;
            $services_request_itemss = [];
            $count3 = 0;


            $servicesRequestItems = DB::table('services_request_items')->where('request_id', $servicee->id)->get()->groupBy('subCategory');

            foreach($servicesRequestItems as $key){
                $servicesBySubCat = [];
                $count2 = 0;
               $data1=[];

                foreach($key as $singleRequest){
                     
                $estimations = DB::table('service_estimations')->where('service_estimations.service_provides', $singleRequest->service_type_id)->where('status', '!=', 'rejected')->whereNotIn('id',$data1)->get();
         
                   
                    $service_quotations = DB::table('service_estimations')->where('dynamic_id', $singleRequest->dynamic_id)->where('status', '!=', 'rejected')->get();
                    $serviceTypeDetails = DB::table('catss')->where('id', $singleRequest->service_type_id)->first();
                    $vehicleDetails = DB::table('vehicles')->where('id', $singleRequest->vehicle_id)->whereNotIn('id',$data1)->first();
                    // $vehicleId = $vehicleDetails->id;
                    array_push($data1,$singleRequest->vehicle_id);
                    $subCatDetails = DB::table('catss')->where('id', $singleRequest->subCategory)->first();
                    if($singleRequest->compare_productid){
                        $compareProductDetails = DB::table('products')->where('products.id',$singleRequest->compare_productid)->first();
                         $singleRequest->compareProductDetails = $compareProductDetails;
                    }
                    $singleRequest->serviceTypeDetails = $serviceTypeDetails;
                    $singleRequest->vehicleDetails = $vehicleDetails;
                    $singleRequest->request_id = $servicee->id;
                    $singleRequest->subCatDetails = $subCatDetails;
                    $singleRequest->service_quotations = $service_quotations;
                    if($estimations){
                    $singleRequest->estimations = $estimations;
                    }
                    $count2++;

                    array_push($servicesBySubCat, $singleRequest);

                }

                $count3++;
                array_push($services_request_itemss, $servicesBySubCat);
            }

            $servicee->services = $services_request_itemss;
            array_push($newArray, $servicee);

            if($count === count($services)){
                $data['data'] = $newArray;
                $data['status'] = 1;
            }


        }

    }else{
        $data['data'] = [];
        $data['status'] = 0;
    }


    return json_encode($data);
}




public function CancelServiceRequest(Request $request){
    $result = DB::table('service_requests')->where('id', $request->id)->update(['status' => 'deleted']);
    $data['data'] = $result;
    $data['status'] = 1;
}


public function GetCancelServiceRequest(Request $request){
    $deletedData =[];
    $result = DB::table('service_requests')->where('userId', $request->userId)->where('status' , 'deleted')->orderBy('created_at', 'desc')->get();
    
    foreach($result as $key) {
       $service=[];
        $data = DB::table('services_request_items')->where('request_id', $key->id)->get();
        
        foreach($data as $keys ){
            $datas = DB::table('catss')->where('id', $keys->service_type_id)->first();
            $keys->service_type = $datas;
            
        array_push($deletedData,$data);
        }
    }

    $datass['data'] = $data;
    $datass['status'] = 1;
     return json_encode($datass);
}


// my

// public function getMyServiceRequestsById(Request $request){

//     $data = array();
    
//     $data1 =[];
//     $services =  DB::table('service_requests')->where(['id' => $request->id, 'status' => 'pending'])->orderBy('created_at', 'desc')->get();
   
   
    
//     foreach ($services as $key){
//     $reject = DB::table('reject_quotations')->where(['reject_quotations.user_id'=>$key->userId,'reject_quotations.request_id'=>$key->id])->get();
    
//     foreach ($reject as $keys){
        
//         $estimateid = $keys->serviceEstimation_id;
//         array_push($data1,$estimateid);
//     }
     
//     }
    
  
//     $count = 0;
//     $newArray = [];
    
    
    
//     if(count($services) !== 0){

//         foreach($services as $servicee){

//             $servicesRequestItems = DB::table('services_request_items')->where(['request_id' => $servicee->id, 'dynamic_id' => $request->dynamic_id])->get();
          
//             foreach($servicesRequestItems as $keyy){
                 
//                 if($keyy->compare_productid){
//                     $estimations = DB::table('service_estimations')->where(['service_estimations.service_request_id'=> $keyy->request_id,'service_estimations.dynamic_id'=>$keyy->dynamic_id,'service_estimations.product_id'=>$keyy->compare_productid])->where('status', '!=', 'rejected')->whereNotIn('id',$data1)->get();
         
//                 }
               
//                 $estimations = DB::table('service_estimations')
//                 // ->join('vehicles','vehicles.id',$keyy->vehicle_id)
//                 // ->select('service_estimations.*','vehicles.id as vehilceId' ,'vehicles.name as vehicleName')
//                 ->where('service_estimations.service_provides', $keyy->service_type_id)
//                 ->where('status', '!=', 'rejected')->whereNotIn('id',$data1)
//                 ->get();
//                 // array_push($estimations,$keyy->vehicle_id);
//                 // $estimations->vehId =$keyy->vehicle_id;
//           dd($estimations);
//             }
// //  $estimations = DB::table('service_estimations')->where('service_request_id', $servicee->id)->where('status', '!=', 'rejected')->get();
//             if(count($estimations) > 0){
//                 $userIds = [];
//                 $reducedEstimates = [];
//                 $counting = 0;
//                 foreach($estimations as $key){
                     
//                     $doesExist = in_array($key->sellerId, $userIds);
//                     if(!$doesExist){
//                         array_push($userIds, $key->sellerId);
//                         $id=[];
//                         $sellerDetail = DB::table('sellers')
//                         ->join('service_estimations','service_estimations.sellerId', 'sellers.id')
//                         ->join('catss','catss.id','service_estimations.service_provides')
//                         ->select('sellers.*','service_estimations.price as estimationPrice','service_estimations.part_name as estimationpart_name','service_estimations.part_price as estimationpart_price','service_estimations.number_of_parts as estimationnumber_of_parts','service_estimations.estimation_type as estimationestimation_type','catss.name as catname','catss.icon as catIcon')
//                         ->where('sellers.id', $key->sellerId)->first();
//                         $sellerDetail->appointment = DB::table('appointments')->where('appointments.seller_id','=',$key->sellerId)->get();
//                         $sellerDetail->servicedata = DB::table('service_estimations')->where(['sellerId'=> $key->sellerId,'service_provides'=>$key->service_provides])->whereNotIn('id',$id)->first();
                         
//                         array_push($id,$sellerDetail->servicedata->id);
//                         $sellerDetail->serviceestimationId = DB::table('service_estimations')->where(['sellerId'=> $key->sellerId,'service_provides'=>$key->service_provides])->where('status', '!=', 'rejected')->first();
//                          $sellerDetail->total = DB::table('service_estimations')->where(['sellerId'=> $key->sellerId,'service_provides'=>$key->service_provides])->where('status', '!=', 'rejected')->sum('price');
//                         array_push($reducedEstimates, $sellerDetail);
//                     }

//                     $counting++;

//                     if($counting === count($estimations)) $estimations = $reducedEstimates;
//                 }
//             }


//             $catDetails = DB::table('catss')->where('id', $servicee->cat_id)->first();
//             $servicee->estimations = $estimations;
//             $servicee->catDetails = $catDetails;
//              $servicee->rejectservice = $reject;
//             $count++;
//             $services_request_itemss = [];
//             $count1 = 0;

//             foreach($servicesRequestItems as $key){

//                 $serviceTypeDetails = DB::table('catss')->where('id', $key->service_type_id)->first();
//                 $vehicleDetails = DB::table('vehicles')->where('id', $key->vehicle_id)->first();
//                 $service_estimation = DB::table('service_estimations')->where(['service_item_id' => $key->id, 'service_request_id' => $servicee->id])->where('status', '!=', 'rejected')->first();
//                  if($key->compare_productid){
//                         $compareProductDetails = DB::table('products')->where('products.id',$key->compare_productid)->first();
//                          $key->compareProductDetails = $compareProductDetails;
//                     }
//                 $key->serviceTypeDetails = $serviceTypeDetails;
//                 $key->vehicleDetails = $vehicleDetails;
//                 $key->request_id = $servicee->id;
//                 $key->service_estimation = $service_estimation;

//                 $count1++;
//                 array_push($services_request_itemss, $key);
//                 if($count1 === count($servicesRequestItems)) $servicee->services = $services_request_itemss;
//             }


//             array_push($newArray, $servicee);

//             if($count === count($services)){
//                 $data['data'] = $newArray[0];
//                 $data['status'] = 1;
//             }


//         }

//     }else{
//         $data['data'] = [];
//         $data['status'] = 0;
//     }


//     return json_encode($data);
// }

// previous
public function getMyServiceRequestsById(Request $request){
    
    $data = array();
    
    $data1 =[];
    $services =  DB::table('service_requests')->where(['id' => $request->id, 'status' => 'pending'])->orderBy('created_at', 'desc')->get();
   
   
    
    foreach ($services as $key){
    $reject = DB::table('reject_quotations')->where(['reject_quotations.user_id'=>$key->userId,'reject_quotations.request_id'=>$key->id])->get();
    // dd($reject);
    foreach ($reject as $keys){
        
        $estimateid = $keys->serviceEstimation_id;
        array_push($data1,$estimateid);
    }
     
    } 
    $count = 0;
    $newArray = [];
    
    
    
    if(count($services) !== 0){

        foreach($services as $servicee){

            // $servicesRequestItems = DB::table('services_request_items')->where(['request_id' => $servicee->id, 'dynamic_id' => $request->dynamic_id])->get();
            
            $servicesRequestItems = DB::table('services_request_items')->where(['request_id' => $servicee->id])->get();
          
            foreach($servicesRequestItems as $keyy){
                if($keyy->compare_productid){
                    $estimations = DB::table('service_estimations')->where(['service_estimations.service_request_id'=> $keyy->request_id,'service_estimations.dynamic_id'=>$keyy->dynamic_id,'service_estimations.product_id'=>$keyy->compare_productid])->where('status', '!=', 'rejected')->whereNotIn('id',$data1)->get();
         
                }
                $estimations = DB::table('service_estimations')->where('service_estimations.service_provides', $keyy->service_type_id)->where('status', '!=', 'rejected')->whereNotIn('id',$data1)->get();
         
            } 
            if(count($estimations) > 0){
                $userIds = [];
                $reducedEstimates = [];
                $counting = 0;
                foreach($estimations as $key){
                    $doesExist = in_array($key->sellerId, $userIds);
                    if(!$doesExist){
                        array_push($userIds, $key->sellerId);
                        $sellerDetail = DB::table('sellers')
                        ->join('service_estimations','service_estimations.sellerId', 'sellers.id')
                        ->select('sellers.*','service_estimations.price')
                        ->where('sellers.id', $key->sellerId)->first();
                        $sellerDetail->sellerRating =DB::table('seller_rating')->where('seller_id', $key->sellerId)->avg('rating');
                        $sellerDetail->serviceestimationId = DB::table('service_estimations')->where(['sellerId'=> $key->sellerId,'service_provides'=>$key->service_provides])->where('status', '!=', 'rejected')->sum('id');
                         $sellerDetail->total = DB::table('service_estimations')->where(['sellerId'=> $key->sellerId,'service_provides'=>$key->service_provides])->where('status', '!=', 'rejected')->sum('price');
                        array_push($reducedEstimates, $sellerDetail);
                    }

                    $counting++;

                    if($counting === count($estimations)) $estimations = $reducedEstimates;
                }
            }


            $catDetails = DB::table('catss')->where('id', $servicee->cat_id)->first();
            $servicee->estimations = $estimations;
            $servicee->catDetails = $catDetails;
             $servicee->rejectservice = $reject;
            $count++;
            $services_request_itemss = [];
            $count1 = 0;
 
            foreach($servicesRequestItems as $key){

                $serviceTypeDetails = DB::table('catss')->where('id', $key->service_type_id)->first();
                $vehicleDetails = DB::table('vehicles')->where('id', $key->vehicle_id)->first();
                $service_estimation = DB::table('service_estimations')->where(['service_item_id' => $key->id, 'service_request_id' => $servicee->id])->where('status', '!=', 'rejected')->first();
                 if($key->compare_productid){
                        $compareProductDetails = DB::table('products')->where('products.id',$key->compare_productid)->first();
                         $key->compareProductDetails = $compareProductDetails;
                    }
                $key->serviceTypeDetails = $serviceTypeDetails;
                $key->vehicleDetails = $vehicleDetails;
                $key->request_id = $servicee->id;
                $key->service_estimation = $service_estimation;

                $count1++;
                array_push($services_request_itemss, $key);
                if($count1 === count($servicesRequestItems)) $servicee->services = $services_request_itemss;
            }


            array_push($newArray, $servicee);

            if($count === count($services)){
                $data['data'] = $newArray[0];
                $data['status'] = 1;
            }


        }

    }else{
        $data['data'] = [];
        $data['status'] = 0;
    }


    return json_encode($data);
}


// public function getMyServiceRequestsById(Request $request){
    

//     $data = array();
    
//     $data1 =[];
//     $data2 =[];
    
//     $data3 =[];
//     $services =  DB::table('service_requests')->where(['id' => $request->id, 'status' => 'pending'])->orderBy('created_at', 'desc')->get();
   
   
//   foreach ($services as $key){
//     $servicesItems =  DB::table('services_request_items')->where(['services_request_items.request_id' => $key->id])->first();
//         //  foreach($servicesItems as $key1){
//              $reject = DB::table('reject_quotations')->where(['reject_quotations.request_id'=>$servicesItems->request_id,'reject_quotations.dynamic_id'=>$servicesItems->dynamic_id])->first();
//             //   
//              if($reject){
//              array_push($data3,$reject->dynamic_id);
//              }
//         //  }  
//     }
    
   
//     foreach ($services as $key){
        
//     $reject = DB::table('reject_quotations')->where(['reject_quotations.user_id'=>$key->userId,'reject_quotations.request_id'=>$key->id])->get();

//     foreach ($reject as $keys){
        
//         $estimateid = $keys->serviceEstimation_id;
//         array_push($data1,$estimateid);
//     }
     
//     }
    
//     // 
//     $count = 0;
//     $newArray = [];
    
    
    
//     if(count($services) !== 0){
// $data=[];
//         foreach($services as $servicee){
            
//             $servicesRequestItems = DB::table('services_request_items')->where(['request_id' => $servicee->id,'dynamic_id' => $request->dynamic_id])->get();
  

//             // $servicesRequestItems = DB::table('services_request_items')->where(['request_id' => $servicee->id, 'dynamic_id' => $request->dynamic_id])->get();
        
//             foreach($servicesRequestItems as $keyy){
              
//                 if($keyy->compare_productid){
//                     $estimations = DB::table('service_estimations')->where(['service_estimations.service_request_id'=> $keyy->request_id,'service_estimations.dynamic_id'=>$keyy->dynamic_id,'service_estimations.product_id'=>$keyy->compare_productid])->where('status', '!=', 'rejected')->whereNotIn('id',$data1)->first();
         
//                 }
//                 $estimations = DB::table('service_estimations')->where('service_estimations.service_provides', $keyy->service_type_id)->where('status', '!=', 'rejected')->whereNotIn('id',$data1)->get();
//                 array_push($data,$estimations);
//             }
            
//             if(count($data) > 0){
//                 $userIds = [];
//                 $reducedEstimates = [];
//                 $counting = 0;
//                 foreach($data as $keys){
//                   foreach($keys as $key){
//                     // $doesExist = in_array($key->sellerId, $userIds);
//                     if($key){
//                         array_push($userIds, $key->sellerId);
//                         $sellerDetail = DB::table('sellers')
//                         ->join('service_estimations','service_estimations.sellerId', 'sellers.id')
//                         ->select('sellers.*','service_estimations.price','service_estimations.id as estimationId')
//                         ->where('sellers.id', $key->sellerId)->first();
//                         $sellerDetail->serviceestimationId = DB::table('service_estimations')->where(['sellerId'=> $key->sellerId,'service_provides'=>$key->service_provides])->where('status', '!=', 'rejected')->sum('id');
//                          $sellerDetail->total = DB::table('service_estimations')->where(['sellerId'=> $key->sellerId,'service_provides'=>$key->service_provides])->where('status', '!=', 'rejected')->sum('price');
//                         array_push($reducedEstimates, $sellerDetail);
//                     }

//                     $counting++;

//                     if($counting === count($data)) $estimations = $reducedEstimates;
//                 }
//                 }
//             }

//             $catDetails = DB::table('catss')->where('id', $servicee->cat_id)->first();
            
//             $servicee->estimations = $estimations;
//             $servicee->catDetails = $catDetails;
//              $servicee->rejectservice = $reject;
             
//              $servicee->appointments = $data2;
//             $count++;
//             $services_request_itemss = [];
//             $count1 = 0;
// //  
//             foreach($servicesRequestItems as $key){
//                 //  
//                 $serviceTypeDetails = DB::table('catss')->where('id', $key->service_type_id)->first();
//                 $vehicleDetails = DB::table('vehicles')->where('id', $key->vehicle_id)->first();
//                 $service_estimation = DB::table('service_estimations')->where(['service_item_id' => $key->id, 'service_request_id' => $servicee->id])->where('status', '!=', 'rejected')->first();
               
//                   if($keyy->compare_productid){
//                     $estimations1 = DB::table('service_estimations')->where(['service_estimations.product_id'=>$key->compare_productid,'service_provides'=>$serviceTypeDetails->id])->where('status', '!=', 'rejected')->whereNotIn('id',$data1)->first();
//           if($estimations1){
//                          $sellerDetails = DB::table('sellers')->where('id',$estimations1->sellerId)->first();
//                     }
//                 }else{
//                     //  
//                      $estimations1=  DB::table('service_estimations')->where(['service_provides'=>$serviceTypeDetails->id])->where('status', '!=', 'rejected')->whereNotIn('id',$data1)->get();
//                     //  
                    
//                     if($estimations1){
//                         foreach( $estimations1 as $esti){
//                         $sellerDetails = DB::table('sellers')->where('id',$esti->sellerId)->first();
//                     }
                         
//                     }
                    
                    
//                 }
           
//                  if($key->compare_productid){
//                         $compareProductDetails = DB::table('products')->where('products.id',$key->compare_productid)->first();
//                          $key->compareProductDetails = $compareProductDetails;
//                     }
//                       $key->serviceestimationId = DB::table('service_estimations')->where(['service_provides'=>$serviceTypeDetails->id])->where('status', '!=', 'rejected')->sum('id');
//                     //    
//                           $key->appointment = DB::table('appointments')->where(['requestid' => $key->request_id])->first();
                    
                       
//                 $key->serviceTypeDetails = $serviceTypeDetails;
//                 $key->vehicleDetails = $vehicleDetails;
//                 $key->request_id = $servicee->id;
//                 $key->service_estimation = $service_estimation;
                
//                 if($estimations1){
//                     $key->estimations = $estimations1;
//                     $key->sellerDetails = $sellerDetails;
//                 }else{
//                     $key->estimations = null;
//                     $key->sellerDetails = null;
//                 }
                

//                 $count1++;
                
//             }
// array_push($services_request_itemss, $key);
//                 if($count1 === count($servicesRequestItems)) $servicee->services = $services_request_itemss;

//             array_push($newArray, $servicee);

//             if($count === count($services)){
//                 $data['data'] = $newArray[0];
//                 $data['status'] = 1;
//             }


//         }

//     }else{
//         $data['data'] = [];
//         $data['status'] = 0;
//     }


//     return json_encode($data);
// }

// public function getMyServiceRequestsById(Request $request){

//     $data = array();
    
//     $data1 =[];
//     $services =  DB::table('service_requests')->where(['id' => $request->id, 'status' => 'pending'])->orderBy('created_at', 'desc')->get();
   
   
    
//     foreach ($services as $key){
//     $reject = DB::table('reject_quotations')->where(['reject_quotations.user_id'=>$key->userId,'reject_quotations.request_id'=>$key->id])->get();
//    
//     foreach ($reject as $keys){
        
//         $estimateid = $keys->serviceEstimation_id;
//         array_push($data1,$estimateid);
//     }
     
//     }
    
//      
//     $count = 0;
//     $newArray = [];
    
    
    
//     if(count($services) !== 0){
// $data=[];
//         foreach($services as $servicee){

//             $servicesRequestItems = DB::table('services_request_items')->where(['request_id' => $servicee->id, 'dynamic_id' => $request->dynamic_id])->get();
          
//             foreach($servicesRequestItems as $keyy){
              
//                 if($keyy->compare_productid){
//                     $estimations = DB::table('service_estimations')->where(['service_estimations.service_request_id'=> $keyy->request_id,'service_estimations.dynamic_id'=>$keyy->dynamic_id,'service_estimations.product_id'=>$keyy->compare_productid])->where('status', '!=', 'rejected')->whereNotIn('id',$data1)->get();
         
//                 }
//                 $estimations = DB::table('service_estimations')->where('service_estimations.service_provides', $keyy->service_type_id)->where('status', '!=', 'rejected')->whereNotIn('id',$data1)->get();
//           array_push($data,$estimations);
//             }
//              
// //  $estimations = DB::table('service_estimations')->where('service_request_id', $servicee->id)->where('status', '!=', 'rejected')->get();
//             if(count($data[0]) > 0){
//                 $userIds = [];
//                 $reducedEstimates = [];
//                 $counting = 0;
//                 foreach($data[0] as $key){
//                     $doesExist = in_array($key->sellerId, $userIds);
//                     if(!$doesExist){
//                         array_push($userIds, $key->sellerId);
//                         $sellerDetail = DB::table('sellers')
//                         ->join('service_estimations','service_estimations.sellerId', 'sellers.id')
//                         ->select('sellers.*','service_estimations.price')
//                         ->where('sellers.id', $key->sellerId)->first();
//                         $sellerDetail->serviceestimationId = DB::table('service_estimations')->where(['sellerId'=> $key->sellerId,'service_provides'=>$key->service_provides])->where('status', '!=', 'rejected')->sum('id');
//                          $sellerDetail->total = DB::table('service_estimations')->where(['sellerId'=> $key->sellerId,'service_provides'=>$key->service_provides])->where('status', '!=', 'rejected')->sum('price');
//                         array_push($reducedEstimates, $sellerDetail);
//                     }

//                     $counting++;

//                     if($counting === count($data[0])) $estimations = $reducedEstimates;
//                 }
//             }


//             $catDetails = DB::table('catss')->where('id', $servicee->cat_id)->first();
//             $servicee->estimations = $estimations;
//             $servicee->catDetails = $catDetails;
//              $servicee->rejectservice = $reject;
//             $count++;
//             $services_request_itemss = [];
//             $count1 = 0;

//             foreach($servicesRequestItems as $key){

//                 $serviceTypeDetails = DB::table('catss')->where('id', $key->service_type_id)->first();
//                 $vehicleDetails = DB::table('vehicles')->where('id', $key->vehicle_id)->first();
//                 $service_estimation = DB::table('service_estimations')->where(['service_item_id' => $key->id, 'service_request_id' => $servicee->id])->where('status', '!=', 'rejected')->first();
//                  if($key->compare_productid){
//                         $compareProductDetails = DB::table('products')->where('products.id',$key->compare_productid)->first();
//                          $key->compareProductDetails = $compareProductDetails;
//                     }
//                 $key->serviceTypeDetails = $serviceTypeDetails;
//                 $key->vehicleDetails = $vehicleDetails;
//                 $key->request_id = $servicee->id;
//                 $key->service_estimation = $service_estimation;

//                 $count1++;
//                 array_push($services_request_itemss, $key);
//                 if($count1 === count($servicesRequestItems)) $servicee->services = $services_request_itemss;
//             }


//             array_push($newArray, $servicee);

//             if($count === count($services)){
//                 $data['data'] = $newArray[0];
//                 $data['status'] = 1;
//             }


//         }

//     }else{
//         $data['data'] = [];
//         $data['status'] = 0;
//     }


//     return json_encode($data);
// }

public function getestimationDetailsById(Request $request){
    $data=[];
    $seller= DB::table('sellers')->where('sellers.id',$request->sellerId)->first();
    $rating = DB::table('seller_rating')->where('seller_id', $request->sellerId)->avg('rating');
    $reviews = DB::table('seller_rating')
                        ->select('seller_rating.*', 'users.*')
                        ->join('users','users.id','=','seller_rating.user_id')
                        ->where(['seller_rating.seller_id' => $request->sellerId])
                        ->get();
     $estimation = DB::table('service_estimations')
        ->join('catss','catss.id','=','service_estimations.service_provides')
        ->select('service_estimations.*','catss.*')
        ->where(['service_estimations.service_provides'=>$request->service_id,'service_estimations.sellerId'=>$request->sellerId])->get();
        
        $vehicle= DB::table('vehicles')->where('vehicles.id',$request->vehicle_id)->first();                    
    
    $data['seller'] = $seller;
    $data['rating'] = $rating;
    $data['reviews'] = $reviews;
    $data['estimation'] = $estimation;
    $data['vehicle'] = $vehicle;
    $data['status'] = 1;
         return json_encode($data);
}

public function acceptEstimate (Request $request){
    $servicesRequestItems = DB::table('services_request_items')->where(['request_id' => $request->requestId])->get();
     $estimations =[];
         foreach($servicesRequestItems as $key){ 
      
            $serviceEstimation = DB::table('services_request_items')->where(['id' => $key->id])->update(['acceptEstimation' => '1','acceptSellerId' =>$request->sellerId]);
            array_push($estimations,$serviceEstimation); 
            } 
    $data['status'] = 1;
    $data['estimations'] = $estimations;
         return json_encode($data);
}


public function rejectEstimate (Request $request){
       $servicesRequestItems = DB::table('services_request_items')->where(['request_id' => $request->requestId])->get();
     $estimations =[];
    foreach($servicesRequestItems as $key){ 
            $serviceEstimation = DB::table('services_request_items')->where(['id' => $key->id])->update(['rejectEstimation' => '1','rejectSellerId' =>$request->sellerId]);
            array_push($estimations,$serviceEstimation); 
            } 
    $data['status'] = 1;
    $data['estimations'] = $estimations;
         return json_encode($data);
}

public function getSellerEstimates(Request $request){ 
    $rejectQuotaionsId=[];
    // $orders = DB::table('orders')->where(['request_id' => $request->requestId,'user_id'=>$request->user_id,'seller_id'=>$request->sellerId])->first();
    $orders = DB::table('orders')->where(['request_id' => $request->requestId,'user_id'=>$request->user_id,])->first();
    
   $bookedAppointment = DB::table('appointments')->where(['requestid' => $request->requestId,'user_id'=>$request->user_id,'seller_id'=>$request->sellerId])->first();
    $services =  DB::table('service_requests')->where(['id' => $request->requestId, 'status' => 'pending'])->select('service_requests.id','service_requests.userId','service_requests.status','service_requests.acceptEstimation','service_requests.rejectEstimation','service_requests.created_at as serviceCreate')->orderBy('created_at', 'desc')->first();
    $servicesRequestItems = DB::table('services_request_items')->where(['request_id' => $request->requestId])->get();
    
    //  foreach ($servicesRequestItems as $key){
        
    $reject = DB::table('reject_quotations')->where(['reject_quotations.user_id'=>$request->user_id,'reject_quotations.request_id'=>$request->requestId])->get();
    
    foreach ($reject as $keys){
       
        $estimateid = $keys->serviceEstimation_id;
        array_push($rejectQuotaionsId,$estimateid);
    }
       
    // }
    $estimations =[];
    foreach($servicesRequestItems as $key){
        $serviceEstimation = DB::table('service_estimations')->where(['service_provides' => $key->service_type_id,'sellerId' =>$request->sellerId ])->whereNotIn('id',$rejectQuotaionsId)->first();
        $vehicle =DB::table('vehicles')->where(['id'=>$key->vehicle_id])->select('vehicles.id','vehicles.name','vehicles.model_year','vehicles.license_plate','vehicles.reg_no')->first();
        $serviceName =DB::table('catss')->where(["id" => $key->service_type_id])->select('catss.id','catss.name','catss.icon')->first();
    
        if($serviceEstimation){
          $sellerName =DB::table('sellers')->where(["id" => $serviceEstimation->sellerId])->select('sellers.id','sellers.first_name','sellers.last_name','sellers.shop_name')->first();
           $serviceEstimation->vehicle =$vehicle;
        $serviceEstimation->bookedService =$serviceName ;
        $serviceEstimation->vehicle =$vehicle;
        $serviceEstimation->location =$key->location;
        $serviceEstimation->acceptEstimation =$key->acceptEstimation;
        $serviceEstimation->acceptSellerId =$key->acceptSellerId;
        $serviceEstimation->rejectSellerId =$key->rejectSellerId;
        $serviceEstimation->rejectEstimation =$key->rejectEstimation;
        $serviceEstimation->requestId =$key->request_id;
        $serviceEstimation->dynamicId =$key->dynamic_id;
        $serviceEstimation->sellerDetails =$sellerName;
        array_push($estimations,$serviceEstimation);
        }
       
    }
    $data['status'] = '1';
    $data['service'] = $services;
    $data['estimations'] = $estimations;
    $data['orders'] = $orders;
    $data['bookedAppointment'] = $bookedAppointment;
     return json_encode($data);
}

// public function getSellerEstimates(Request $request){
     
//     $estimate = $request->estimationId;
   
//     $data = array();
//     $appointment = DB::table('appointments')->where(['requestid' => $request->requestId,'seller_id'=>$request->sellerId])->first();
    
//     $services =  DB::table('service_requests')->where(['id' => $request->requestId])->get();
    
//     $sellerDetails = DB::table('sellers')->where('id', $request->sellerId)->first();
//     $rating = DB::table('seller_rating')->where('seller_id', $request->sellerId)->avg('rating');

//     $reviews = DB::table('seller_rating')
//                         ->select('seller_rating.*', 'users.*')
//                         ->join('users','users.id','=','seller_rating.user_id')
//                         ->where(['seller_rating.seller_id' => $request->sellerId])
//                         ->get();
//  $orders= DB::table('orders')->where(['orders.user_id'=>$request->user_id,'orders.request_id'=> $request->requestId])->first();
//     $count = 0;
//     $newArray = [];
//     $total_estimate = 0;
//     if(count($services) !== 0){
// $servicesRequestItems=[];
//         foreach($services as $servicee){
//             $servicee->sellerDetails = $sellerDetails;
//             $servicesRequestItems2 = DB::table('services_request_items')->where(['request_id' => $servicee->id, 'dynamic_id' => $request->dynamic_id])->first();
            
// array_push($servicesRequestItems,$servicesRequestItems2);
//             $catDetails = DB::table('catss')->where('id', $servicee->cat_id)->first();
//             $servicee->catDetails = $catDetails;
//              $servicee->appointment = $appointment;
//             $count++;
//             $services_request_itemss = [];
//             $count1 = 0;
//             foreach($servicesRequestItems as $key){
//                 $serviceTypeDetails = DB::table('catss')->where('id', $key->service_type_id)->first();
//                 $vehicleDetails = DB::table('vehicles')->where('id', $key->vehicle_id)->first();
                
//                 if( $request->estimationId){
//                      $service_estimation = DB::table('service_estimations')->where('service_estimations.id', $request->estimationId)->Where('status', '!=', 'rejected')->where('service_estimations.sellerId',$request->sellerId)->first();
    
//                 }else{
//                      $service_estimation = DB::table('service_estimations')->where('service_estimations.service_provides', $key->service_type_id)->Where('status', '!=', 'rejected')->first();
       
//                     $newPrice = $service_estimation->part_price * $service_estimation->number_of_parts;
                    
//                     $total_estimate = $total_estimate + $newPrice;
//                 }
                
              
//                     // $newPrice = $service_estimation->part_price * $service_estimation->number_of_parts;
                    
//                     // $total_estimate = $total_estimate + $newPrice;
//                     if($key->compare_productid){
//                         $compareProductDetails = DB::table('products')->where('products.id',$key->compare_productid)->first();
//                          $key->compareProductDetails = $compareProductDetails;
//                     }

//                 $key->serviceTypeDetails = $serviceTypeDetails;
//                 $key->vehicleDetails = $vehicleDetails;
//                 $key->request_id = $servicee->id;
//                 $key->service_estimation = $service_estimation;

//                 $count1++;
                
//                 array_push($services_request_itemss, $key);
//                 if($count1 === count($servicesRequestItems)){
                    
//                      $servicee->services = $services_request_itemss;
//                      if($total_estimate){
//                          $servicee->total_estimate = $total_estimate;
//                      }
//                     //  $servicee->total_estimate = $total_estimate;
//                      $servicee->rating = $rating;
//                      $servicee->reviews = $reviews;
                    
//                      $servicee->orders = $orders;
//                     }
//             }

//             array_push($newArray, $servicee);

//             if($count === count($services)){
//                 $data['data'] = $newArray[0];
//                 $data['status'] = 1;
//             }
//         }

//     }else{
//         $data['data'] = [];
//         $data['status'] = 0;
//     }


//     return json_encode($data);
// }



public function getUserAddresses(Request $request){
    $data = array();
    $services =  DB::table('user_addresses')->where(['user_id' => $request->userid])->get();
    $data['data'] = $services;
    $data['status'] = 1;

    return json_encode($data);
}

public function rejectQuotations(Request $request){
    
    // $services =  DB::table('service_estimations')->where('service_estimations.id' , $request->serviceEstimation_id)->update(['rejectedRequestId'=>$request->request_id]);
    // $services =  DB::table('service_estimations')->where(['service_request_id' => $request->requestId, 'sellerId' => $request->sellerId])->update(['status' => 'rejected']);
    $services =  new RejectQuotations;
    $services->request_id =$request->request_id;
    $services->serviceEstimation_id =$request->serviceEstimation_id;
    $services->user_id =$request->user_id;
    $services->seller_id =$request->seller_id;
    if($request->dynamic_id){
        $services->dynamic_id =$request->dynamic_id;
    }
    $services->save();
    $data['data'] = $services;
    $data['status'] = 1;

    return json_encode($data);
}


public function verifyEmail(Request $request){
    $result = DB::table('users')->where(['id' => $request->id])->update(['status' => '1']);
    return view('mails.send_verification_link', ['status' => 'confirmed', 'url' => null]);
}


public function newVehicleDetails(Request $request){
    $result = [];
    $result['makes'] = DB::table('makes')->get();
    $result['model'] = DB::table('model')->get();
    $result['variants'] = DB::table('variants')->get();
    $result['engines'] = DB::table('engines')->get();

    return json_encode(['status' => 1, 'result' => $result]);
}

public function addNewVehicle(Request $request){
    
    $data1 =[];
    $make = DB::table('makes')->where('makes.name',$request->make)->first();
    if(!$make){
        $data=['name'=>$request->make];
        $saveMake = DB::table('makes')->insert($data);
    }
    $make1 = DB::table('makes')->where('makes.name',$request->make)->first();
     
    $model = DB::table('model')->where(['model.name'=>$request->model,'model.make_id'=>$make1->id])->first();
    if(!$model){
        $data=['name'=>$request->model,'make_id'=>$make1->id];
        $saveModel = DB::table('model')->insert($data);
    }
    $model1 = DB::table('model')->where(['model.name'=>$request->model,'model.make_id'=>$make1->id])->first();
    
    $variants = DB::table('variants')->where(['variants.name'=>$request->variant,'variants.model_id'=>$model1->id])->first();
    
    if(!$variants){
        $data=['name'=>$request->variant,'model_id'=>$model1->id];
        $saveVariant = DB::table('variants')->insert($data);
    }
     $variants1 = DB::table('variants')->where(['variants.name'=>$request->variant,'variants.model_id'=>$model1->id])->first();
     
    $engine = DB::table('engines')->where(['engines.name'=>$request->engine,'engines.variant_id'=>$variants1->id])->first();
    if(!$engine){
        $data=['name'=>$request->engine,'variant_id'=>$variants1->id];
        $saveVariant = DB::table('engines')->insert($data);
    }
     
    $engine1 = DB::table('engines')->where(['engines.name'=>$request->engine,'engines.variant_id'=>$variants1->id])->first();
    
    $allVeh = DB::table('vehicles')->where(['status'=>'1', 'reg_no' => $request->reg_no])->first();
   
 
   if($allVeh){
      
         $data['status'] = 0;
    $data['message'] =  'Another vehicle is already registered with this regestraion number!';
    return json_encode($data);
   }else{
        $vehicleDetails = DB::table('makes')->where('id', $make1->id)->first();
    
        if($vehicleDetails){
             $data = ['name' => $vehicleDetails->name,'title' => $request->title, 'color' => $request->color,'trim' => $request->variant,'price' => $request->amount, 'make_id' => $make1->id, 'model_id' => $model1->id, 'variant_id' => $variants1->id, 'reg_no' => $request->reg_no,'license_plate' => $request->reg_no, 'model_year' => $request->model_year, 'userid' => $request->userId];
    if(isset($request->weight)) $data['weight'] = $request['weight'];
    if(isset($request->transmission)) $data['transmission'] = $request['transmission'];
    if(isset($request->wheels_tires)) $data['wheels_tires'] = $request['wheels_tires'];
    if(isset($request->engine)) $data['engine_id'] = $engine1->id;
     if(isset($request->engine_displacement)) $data['engine_displacement'] = $request['engine_displacement'];
 
    $saveData = DB::table('vehicles')->insert($data);
    $data['status'] = 1;
    $data['data'] =  $saveData;
    return json_encode($data);
        }else{
            
        }
   
   }
   
   
}

public function deleteVehicle(Request $request){
    $saveData = DB::table('vehicles')->where(['id' => $request->id])->update(['status' => '0']);
    $data['status'] = 1;
    $data['data'] =  $saveData;
    return json_encode($data);
}




public function orderDetailsById(Request $request){

        $data = array();
        $order = DB::table('orders')->where('id', $request->id)->first();
        
        if(!empty($order->request_id)){
             if($order->compare_product_id){
                 $comapreProduct = DB::table('products')->where('id', $order->compare_product_id)->first();
                 $delivery_address = DB::table('user_addresses')->where('user_id', $request->user_id)->where('status','1')->first();
                  
           }
           if(!$order->compare_product_id){
               $delivery_address = DB::table('user_addresses')->where('id', $order->delivery_address_id)->first();
           }
            
        $review = DB::table('order_reviews')->where(['order_id' => $order->id, 'user_id'=>  $request->user_id])->first();
        $seller_address = DB::table('sellers')->where('sellers.id',$order->seller_id)->first();
        $service = DB::table('services_request_items')
        ->join('catss','catss.id','=','services_request_items.service_type_id')
        ->join('vehicles','vehicles.id','=','services_request_items.vehicle_id')
        ->select('catss.name as serviceName','services_request_items.*','vehicles.name as vehicleName ')
        ->where('services_request_items.request_id',$order->request_id)->get();
       
        if($order->compare_product_id){
            $data['data'] = ['comapreProduct'=>$comapreProduct,'service' => $service,'seller_address' => $seller_address, 'order' => $order, 'delivery_address' => $delivery_address, 'review' => $review];
            $data['status'] = 1;
            return json_encode($data);
        }else{
            $data['data'] = ['service' => $service,'seller_address' => $seller_address, 'order' => $order, 'delivery_address' => $delivery_address, 'review' => $review];
            $data['status'] = 1;
            return json_encode($data);
        }
        
        }
        $carts = DB::table('carts')->where(['user_id' => $request->user_id, 'id'=>  $order->cartid])->get();

if($order->seller_id) $seller_address = DB::table('sellers')->where('sellers.id',$order->seller_id)->first();
        if($order->payment_method === 'card') $cardDetails = DB::table('cards')->where('id', $order->card_id)->first();
        if($order->delivery_address_id) $delivery_address = DB::table('user_addresses')->where('id', $order->delivery_address_id)->first();
        $review = DB::table('order_reviews')->where(['order_id' => $order->id, 'user_id'=>  $request->user_id])->first();


        $newCarts = [];
        $count1 = 0;

        if(count($carts) === 0){
            $data['data'] = ['products' => $newCarts, 'order' => []];
            $data['status'] = 1;
            return json_encode($data);
        }

       foreach ($carts as $cartItem) {
          
          $product = DB::table('products')->where('id', $cartItem->product_id)->first();
          $product->CartQuantity=$cartItem->quantity; 
          $cartItem->productDetails = $product;
          array_push($newCarts, $product);
          $count1++;

          if($count1 === count($carts)){
            $data['data'] = ['products' => $newCarts,'seller_address' => $seller_address, 'order' => $order, 'cardDetails' => $cardDetails, 'delivery_address' => $delivery_address, 'review' => $review];
            $data['status'] = 1;
            return json_encode($data);
          }
       }

}



public function getAdminVariables(Request $request){
    $varibales = DB::table('admin_variables')->first();
    $data['status'] = 1;
    $data['data'] =  $varibales;
    return json_encode($data);
}

public function addOrderReview(Request $request){
    $data = ['order_id' => $request->order_id, 'user_id' => $request->user_id, 'rating' => $request->rating, 'review' => $request->review,'seller_id'=>$request->seller_id];
    $data2=['user_id' => $request->user_id, 'rating' => $request->rating, 'comments' => $request->review,'seller_id'=>$request->seller_id];
    $sellerreview = DB::table('seller_rating')->insert($data2);
    $newReview = DB::table('order_reviews')->insert($data);
    $data['status'] = 1;
    $data['data'] =  $newReview;
    return json_encode($data);
}

}
