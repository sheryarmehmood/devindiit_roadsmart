<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\SellerRating;
use DB;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable , HasRoles;

    protected $table = 'users';

    protected $guard_name = 'admin';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'phone_num',
        'password',
        'forgot_pass_otp',
        'username',
        'status'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public static function DecreaseQuantityCart($id='',$quantity){
         return	$sales = DB::table('carts')->where('id',$id)->update(array('quantity'=>$quantity));
    }
    public static function DeleteItemFromCart($id=''){
      return	$sales = DB::table('carts')->where('id',$id)->delete();
    }
    
     public static function updatecart($condition='',$id='')
    {
      $updateoptions =  DB::table('carts')->where('id',$id)->update($condition);
      return back();
    } 

    public static function VehicleDetailsWithId($condition='')
    {
         return  $sales = DB::table('vehicles')
           ->join('model', 'model.id', '=', 'vehicles.model_id')
          ->join('makes', 'makes.id', '=', 'vehicles.make_id')
        ->join('engines', 'engines.id', '=', 'vehicles.engine_id')
        //   ->join('orders', 'orders.vehicle_id', '=', 'vehicles.id')
        //   ->select('vehicles.*','makes.name as make_name','makes.icon as make_icon','model.name as model_name','variants.name as variant_name','engines.name as engine_name')
        ->select('vehicles.*','model.name as model_name','makes.id as make_id','makes.name as make_name','makes.icon as icon','engines.name as engine_name')
           ->where('vehicles.id', $condition)->get();
        
    }
    	public static function updateoption($condition='',$id='')
    {
	$updateoptions = User::findOrFail($id);
	$updateoptions->update($condition);
	return back();
    }
    public static function carttotal($id=''){
               
    return  $sales = DB::table('carts')
    ->join('products', 'products.id', '=', 'carts.product_id')
    ->select(DB::raw('sum(products.sale_price*carts.quantity) AS total_sales'))
    ->where('carts.user_id',$id)
    ->where('carts.status',1)
    ->first();
	
    }
   	public static function insertorder($condition='')
	{
	    return  DB::table('orders')->insert($condition);
	}
    public static function getCart($id=''){
    //   return	 $category = DB::table('carts')->where('user_id',$id)->where('status','1')->get();   
        return   $workouts = DB::table('carts')
            ->join('products', 'products.id', '=', 'carts.product_id')
            ->select('carts.*','products.product_name','products.sale_price','products.image','products.catid','products.seller_id')
            ->where('carts.user_id',$id)
            ->where('carts.status',1)
            ->get(); 
    }
    
     public static function Addtocart($condition=''){
        
$carts = DB::table('carts')->where(['product_id'=>$condition['product_id'],'user_id'=>$condition['user_id'],'status'=>1])->get();
        //  $data= DB::table('carts')->where('user_id',$condition);
         
         if(!empty($carts)){
             foreach($carts as $count){
                //  dd($count->quantity);
                return $data = DB::table('carts')->where(['product_id'=>$condition['product_id'],'user_id'=>$condition['user_id'],'status'=>1])->update(['quantity'=>$count->quantity+ $condition['quantity']]);
                //  dd($data);
             }
            //  $data=$carts['quantity'];
             
         }
       return	 $category = DB::table('carts')->insert($condition);  
    }
    
         public static function getAddress($id=''){
    //   return	 $category = DB::table('carts')->where('user_id',$id)->where('status','1')->get();   

	
	
        return   $workoutss = DB::table('user_addresses') ->where('user_addresses.user_id',$id)->where('status','!=','0')
            // ->join('user_addresses','user_addresses.user_id' ,'=', $id)
            // ->select('carts.*','products.product_name','products.sale_price','products.image','products.catid')
           
            // ->where('carts.status',1)
            ->get(); 
            
            
    }
    public static function updateRequest($condition='',$id){
        return	 $category = DB::table('quote_requests')->where('id',$id)->update($condition);  
    }
    public static function insertFinanceRequest($condition=''){
         return	 $category = DB::table('finance_requests')->insert($condition);  
    }
    public static function insertRequest($condition=''){
         return	 $category = DB::table('quote_requests')->insert($condition);  
    }
   
    public static function insertQuery($condition='')
    {
     return $prod = DB::table('queries')->insert($condition);   
    }
    public static function insertoption($condition='')
    {
   return User::insert($condition);
    }
     public static function getUsermatch($condition)
    {
     return User::where($condition)->get();
    }
    
    public static function getCategories(){
       	 $category = DB::table('category')->get(); 
       	 return $category;
    }
    public static function getSubCategories($id){
       $category = DB::table('Subcategories')->where('catid',$id)->get(); 
       	 return $category; 
    }
    public static function GetRequestDetails($id){
      return  $prod = DB::table('quote_requests')->where(array('id'=>$id))->first(); 
        
    }
    public static function getProductDetails($id,$userid){
      $prod = DB::table('products')->where('id',$id)->first(); 
       // reviews
            $review = DB::table('order_reviews')->where('order_reviews.seller_id',$prod->seller_id)->get();
            $prod->review = $review;
      if(empty($prod)){
          //not found 
      }else{
           $prod->Installment = DB::table('quote_requests')->where(array('user_id'=>$userid,'product_id'=>$id))->first(); 
           $prod->Finance = DB::table('finance_requests')->where(array('user_id'=>$userid,'product_id'=>$id))->first();
      }
      return $prod;
    }
    public static function makefavorite($condition){
         $product = DB::table('liked_products')->where(array('user_id'=>$condition['user_id'],'product_id'=>$condition['product_id']))->get(); 
             if(count($product)>0){
                
               $product = DB::table('liked_products')->where(array('user_id'=>$condition['user_id'],'product_id'=>$condition['product_id']))->delete();
             }else{
                
                 $product = DB::table('liked_products')->insert(array('user_id'=>$condition['user_id'],'product_id'=>$condition['product_id']));
             }
             return true ;
    
    }
    public static function deleteRequest($id){
        return $data=DB::table('services_request')->where('id',$id)->delete(); 
    }
    public static function getmodels(){
       return $data=DB::table('makes')->get(); 
    }
    public static function getbrands(){
        
        return $data=DB::table('model')->get();
    }
    public static function popularproducts($userid){
           $data= DB::table('products')->where('popular','=','1')->get();
          
              
       if( count($data)>0){
            foreach($data as $p){
             $product = DB::table('liked_products')->where(array('user_id'=>$userid,'product_id'=>$p->id))->get(); 
             if(count($product)>0){
                 //delete
               $p->favorite=true;
             }else{
                 //add
               $p->favorite=false;
             }
        }
       }
        
        return $data;
    }
      public static function updateVehicleDetails($condition){
        //   dd($condition['field']);
        
        // for roadtax
         if($condition['field'] == 'quarter_expiry'){
           $field2= array('quarter_expiry');
            $data2=DB::table('road_tax')->where('vehicle_id',$condition['id'])->first();

          
          if(!empty($data2)){
                  if(in_array($condition['field'], $field2)){
                         
                          $data=DB::table('road_tax')->where('vehicle_id',$condition['id'])->update(array($condition['field']=>$condition['element']));
                        //   
                         }else{
                     $data=DB::table('vehicles')->where('id',$condition['id'])->update(array($condition['field']=>$condition['element']));
                         }
         }else{
             if(in_array($condition['field'], $field2)){
             DB::table('road_tax')->insert(array($condition['field']=>$condition['element'],'vehicle_id'=>$condition['id']));
             }else{
                     $data=DB::table('vehicles')->where('id',$condition['id'])->update(array($condition['field']=>$condition['element']));
                         }
         }
         }
         
         // for policies
        $field= array('seller_id', 'policy_number', 'rate', 'discount', 'premium', 'cover', 'start_date', 'expiry_date');
         $data=DB::table('policies')->where('vehicle_id',$condition['id'])->first();
         
         if(!empty($data)  ){
                   if(in_array($condition['field'], $field)){
                          $data=DB::table('policies')->where('vehicle_id',$condition['id'])->update(array($condition['field']=>$condition['element']));
                         }else{
                     $data=DB::table('vehicles')->where('id',$condition['id'])->update(array($condition['field']=>$condition['element']));
                         }
         }else{
             if(in_array($condition['field'], $field)){
             DB::table('policies')->insert(array($condition['field']=>$condition['element'],'vehicle_id'=>$condition['id']));
             }else{
                     $data=DB::table('vehicles')->where('id',$condition['id'])->update(array($condition['field']=>$condition['element']));
                         }
         }
         
        
        
    //   return $data;
    }
    public static function getRelatedProductsTyres($condition){
       
         $data=DB::table('products')->Where('make',$condition['make_id'])->Where('subcatid','18')->get(); 
          
           if( count($data)>0){
            foreach($data as $p){
             $product = DB::table('liked_products')->where(array('user_id'=>$condition['user_id'],'product_id'=>$p->id))->get(); 
             if(count($product)>0){
                 //delete
               $p->favorite=true;
             }else{
                 //add
               $p->favorite=false;
             }
        }
       }
        
        return $data;  
    }
     public static function getRelatedProductsAccess($condition){
       
         $data=DB::table('products')->Where('make',$condition['make_id'])->Where('subcatid','13')->get(); 
          
           if( count($data)>0){
            foreach($data as $p){
             $product = DB::table('liked_products')->where(array('user_id'=>$condition['user_id'],'product_id'=>$p->id))->get(); 
             if(count($product)>0){
                 //delete
               $p->favorite=true;
             }else{
                 //add
               $p->favorite=false;
             }
        }
       }
        
        return $data;  
    }
     public static function getRelatedProductsWind($condition){
       
         $data=DB::table('products')->Where('make',$condition['make_id'])->Where('subcatid','14')->get(); 
          
           if( count($data)>0){
            foreach($data as $p){
             $product = DB::table('liked_products')->where(array('user_id'=>$condition['user_id'],'product_id'=>$p->id))->get(); 
             if(count($product)>0){
                 //delete
               $p->favorite=true;
             }else{
                 //add
               $p->favorite=false;
             }
        }
       }
        
        return $data;  
    }
    public static function getRelatedProducts($condition){
        
         $data=DB::table('products')->Where('make',$condition['make_id'])->get(); 
          
           if( count($data)>0){
            foreach($data as $p){
             $product = DB::table('liked_products')->where(array('user_id'=>$condition['user_id'],'product_id'=>$p->id))->get(); 
             if(count($product)>0){
                 //delete
               $p->favorite=true;
             }else{
                 //add
               $p->favorite=false;
             }
        }
       }
        
        return $data;
          
    }
    public static function getProductsWithSearchText($condition){
       return $data=DB::table('products')->Where('product_name', 'like', '%' . $condition['text'] . '%')->get(); 
    }
    public static function getMakesWithSearchText($condition){
       return $data=DB::table('makes')->Where('name', 'like', '%' . $condition['text'] . '%')->get(); 
    }
    public static function getMakes(){
        return $data=DB::table('makes')->get(); 
    }
    public static function getProductsWithSearch($condition){
    if($condition['filter_by']=='Make'){
        $data=DB::table('makes')->Where('name', 'like', '%' . $condition['text'] . '%')->first();
        $pr=array();
        
        if(!empty($data)){
        if(empty($condition['subcatid'])){
             $data->products= DB::table('products')->where('catid',$condition['catid'])->where('make',$data->id)->get();
        }else{
           $data->products  = DB::table('products')->where('catid',$condition['catid'])->
           where('subcatid',$condition['subcatid'])->where('make',$data->id)->get();  
        }
        }
        
       if(!empty($data) && count($data->products)>0){
            foreach($data->products as $p){
             $product = DB::table('liked_products')->where(array('user_id'=>$condition['user_id'],'product_id'=>$p->id))->get(); 
             if(count($product)>0){
                 //delete
               $p->favorite=true;
             }else{
                 //add
                 $p->favorite=false;
             }
        }
        
        return $data->products;
        
       }else{
            return array();
       }
        }else if($condition['filter_by']=='Min_Year'){
            if(empty($condition['subcatid'])){
                     $products  = DB::table('products')->where('year','>=',$condition['text'])->
                     where('catid',$condition['catid'])->get();  
            }else{
                 $products  = DB::table('products')->where('catid',$condition['catid'])->
           where('subcatid',$condition['subcatid'])->where('year','>=',$condition['text'])->get();       
            }
            foreach($products as $pro){
           $product = DB::table('liked_products')->where(array('user_id'=>$condition['user_id'],'product_id'=>$pro->id))->get(); 
             if(count($product)>0){
                 //delete
               $pro->favorite=true;
             }else{
                 //add
                 $pro->favorite=false;
             }}
           return $products;
            
        
        }else if($condition['filter_by']=='Max_Year'){
            if(empty($condition['subcatid'])){
                     $products  = DB::table('products')->where('year','<=',$condition['text'])->
                     where('catid',$condition['catid'])->get();  
            }else{
                 $products  = DB::table('products')->where('catid',$condition['catid'])->
           where('subcatid',$condition['subcatid'])->where('year','>=',$condition['text'])->get();       
            }
            foreach($products as $pro){
           $product = DB::table('liked_products')->where(array('user_id'=>$condition['user_id'],'product_id'=>$pro->id))->get(); 
             if(count($product)>0){
                 //delete
               $pro->favorite=true;
             }else{
                 //add
                 $pro->favorite=false;
             }}
           return $products;
            
        
        }else if($condition['filter_by']=='Model'){
        $data=DB::table('model')->Where('name', 'like', '%' . $condition['text'] . '%')->first();
        $pr=array();
        
        if(!empty($data)){
        if(empty($condition['subcatid'])){
             $data->products= DB::table('products')->where('catid',$condition['catid'])->where('brand_id',$data->id)->get();
        }else{
           $data->products  = DB::table('products')->where('catid',$condition['catid'])->
           where('subcatid',$condition['subcatid'])->where('brand_id',$data->id)->get();  
        }
        }
        
       if(!empty($data) && count($data->products)>0){
            foreach($data->products as $p){
             $product = DB::table('liked_products')->where(array('user_id'=>$condition['user_id'],'product_id'=>$p->id))->get(); 
             if(count($product)>0){
                 //delete
               $p->favorite=true;
             }else{
                 //add
                 $p->favorite=false;
             }
        }
        
        return $data->products;
        
       }else{
            return array();
       }
        }
     
        
    }
    public static function updateDefaultVehicle($condition){
       
        
          $sales = DB::table('vehicles')
        ->where('vehicles.userid',$condition['user_id'])
        ->where('vehicles.default',1)
        ->update(array('default'=>0));
        
          $salqes = DB::table('vehicles')
        ->where('vehicles.userid',$condition['user_id'])
        ->where('vehicles.id',$condition['vehicle_id'])
        ->update(array('default'=>1));
        
        return back();
        
    }
    public static function getFeaturedSellerProductsAll($userid){
         return  $sales = DB::table('products')
        //->join('makes','makes.id', '=', 'vehicles.make_id')
        ->where('products.seller_id',$userid['seller_id'])
        ->where('products.featured',1)
       // ->where('vehicles.default',1)
        ->select('products.*')
      
    //    ->orderby('vehicles.id','desc')
        ->count(); 
    }
    public static function getSellercategories($cond){
         $sales = DB::table('products')
         ->where('products.seller_id',$cond['seller_id'])  
        ->get(); 
        $subcat=array();
        foreach($sales as $p){
            $subcat[]=$p->catid;
        }
        $subcat=array_unique($subcat);
        $data=array();
        foreach($subcat as $sub)
        {
        $data1=array();
        $sal = DB::table('category')
         ->where('category.id',$sub)  
        ->first(); 
        if(!empty($sal)){
        $sal->Subcategories = DB::table('Subcategories')
         ->where('Subcategories.catid',$sal->id)  
        ->get();   
            
        $data[]=$sal;
        }
        
       
        }
        return $data;
    }
    public static function getSellerProductWithCategories($userid){
        $sales = DB::table('products')
        //->join('makes','makes.id', '=', 'vehicles.make_id')
        ->where('products.seller_id',$userid['seller_id'])
        ->where('products.featured',1)
        ->where('products.subcatid',$userid['subcatid'])
        ->select('products.*')
        ->take('4')
    //    ->orderby('vehicles.id','desc')
        ->get(); 
        
         foreach($sales as $p){
             $product = DB::table('liked_products')->where(array('user_id'=>$userid,'product_id'=>$p->id))->get(); 
             if(count($product)>0){
                 //delete
               $p->favorite=true;
             }else{
                 //add
                 $p->favorite=false;
             }
        }
        return $sales; 
    }
    public static function getFeaturedSellerProducts($userid){
   
           $sales = DB::table('products')
        //->join('makes','makes.id', '=', 'vehicles.make_id')
        ->where('products.seller_id',$userid['seller_id'])
        ->where('products.featured',1)
       // ->where('vehicles.default',1)
        ->select('products.*')
        // ->take('4')
    //    ->orderby('vehicles.id','desc')
        ->get(); 
        
         foreach($sales as $p){
             $product = DB::table('liked_products')->where(array('user_id'=>$userid['user_id'],'product_id'=>$p->id))->get(); 
             if(count($product)>0){
                 //delete
               $p->favorite=true;
             }else{
                 //add
                 $p->favorite=false;
             }
        }
        return $sales;
        
    }
    public static function getSellerprofile($userid){
          return  $sales = DB::table('sellers')
        //->join('makes','makes.id', '=', 'vehicles.make_id')
        ->where('sellers.id',$userid['seller_id'])
       // ->where('vehicles.default',1)
        ->select('sellers.*')
    //    ->orderby('vehicles.id','desc')
        ->first();
          
          
    }
    
      public static function getSellerReview($userid){
          return  $sales = SellerRating::select('seller_rating.*',DB::raw('users.name as username'))
 ->Join('users', function($join) {
              $join->on('seller_rating.user_id', '=', 'users.id');
            })
            
          
          
        //   DB::table('seller_rating')
        // ->join('users','users.id', '=', $userid['user_id'])
        // ->select('seller_rating.*','users.name')
        ->where('seller_rating.seller_id',$userid['seller_id'])
   
        // ->select('seller_rating.*')
    //    ->orderby('vehicles.id','desc')
        ->get();
          
          
    }
    
    public static function getUserVehicleDefult($userid){
        return  $sales = DB::table('vehicles')
        ->join('makes','makes.id', '=', 'vehicles.make_id')
        ->where('vehicles.userid',$userid)
        ->where('vehicles.default',1)
        ->select('vehicles.*','makes.name as mname','makes.icon')
        ->orderby('vehicles.id','desc')
        ->first();
          
    }

    public static function getUserVehicles($userid){
        return  $sales = DB::table('vehicles')
        ->join('makes','makes.id', '=', 'vehicles.make_id')
        ->where(['vehicles.userid' => $userid, 'status' => 1])
        ->select('vehicles.*','makes.name as mname','makes.icon')
        ->orderby('vehicles.updated_at','desc')
        ->get();
        

    }
    public static function getdummyproducts($userid){
       $prod = DB::table('products')->where('catid','3')->where('subcatid','11')->get();  
        foreach($prod as $p){
             $product = DB::table('liked_products')->where(array('user_id'=>$userid,'product_id'=>$p->id))->get(); 
             if(count($product)>0){
                 //delete
               $p->favorite=true;
             }else{
                 //add
                 $p->favorite=false;
             }
        }
        
        return $prod;
    }
    public static function getProductsWithSearchModel($condition){
         if(empty($condition['subcatid'])){
         $prod = DB::table('products')->where('catid',$condition['catid'])->where('brand_id',$condition['brand_id'])->get();
        }else{
         $prod = DB::table('products')->where('catid',$condition['catid'])->where('brand_id',$condition['brand_id'])->where('subcatid',$condition['subcatid'])->get(); 
        }
        
        foreach($prod as $p){
             $product = DB::table('liked_products')->where(array('user_id'=>$condition['user_id'],'product_id'=>$p->id))->get(); 
             if(count($product)>0){
                 //delete
               $p->favorite=true;
             }else{
                 //add
                 $p->favorite=false;
             }
        }
        
        return $prod;
    }
     public static function getProductsWithSearchMaxYear($condition){
         if(empty($condition['subcatid'])){
         $prod = DB::table('products')->where('catid',$condition['catid'])->where('year',$condition['max_year'])->get();
        }else{
         $prod = DB::table('products')->where('catid',$condition['catid'])->where('year',$condition['max_year'])->where('subcatid',$condition['subcatid'])->get(); 
        }
        
        foreach($prod as $p){
             $product = DB::table('liked_products')->where(array('user_id'=>$condition['user_id'],'product_id'=>$p->id))->get(); 
             if(count($product)>0){
                 //delete
               $p->favorite=true;
             }else{
                 //add
                 $p->favorite=false;
             }
        }
        
        return $prod;
    }
    
     public static function getProductsWithSearchMinYear($condition){
         if(empty($condition['subcatid'])){
         $prod = DB::table('products')->where('catid',$condition['catid'])->where('year',$condition['min_year'])->get();
        }else{
         $prod = DB::table('products')->where('catid',$condition['catid'])->where('year',$condition['min_year'])->where('subcatid',$condition['subcatid'])->get(); 
        }
        
        foreach($prod as $p){
             $product = DB::table('liked_products')->where(array('user_id'=>$condition['user_id'],'product_id'=>$p->id))->get(); 
             if(count($product)>0){
                 //delete
               $p->favorite=true;
             }else{
                 //add
                 $p->favorite=false;
             }
        }
        
        return $prod;
    }
    public static function getProductsWithSearchMake($condition){
         if(empty($condition['subcatid'])){
         $prod = DB::table('products')->where('catid',$condition['catid'])->where('make',$condition['make_id'])->get();
        }else{
         $prod = DB::table('products')->where('catid',$condition['catid'])->where('make',$condition['make_id'])->where('subcatid',$condition['subcatid'])->get(); 
        }
        
        foreach($prod as $p){
             $product = DB::table('liked_products')->where(array('user_id'=>$condition['user_id'],'product_id'=>$p->id))->get(); 
             if(count($product)>0){
                 //delete
               $p->favorite=true;
             }else{
                 //add
                 $p->favorite=false;
             }
        }
        
        return $prod;
    }
    public static function getProducts($catid,$subcatid,$userid){
        if(empty($subcatid)){
         $prod = DB::table('products')->where('catid',$catid)->get();
         
        }else{
         $prod = DB::table('products')->where('catid',$catid)->where('subcatid',$subcatid)->get(); 
        //  dd($prod);
        }
        
        foreach($prod as $p){
             $product = DB::table('liked_products')->where(array('user_id'=>$userid,'product_id'=>$p->id))->get(); 
             if(count($product)>0){
                 //delete
               $p->favorite=true;
             }else{
                 //add
                 $p->favorite=false;
             }
             
           
        }
        
        return $prod;
    }
    public static function getproductsMarketplace(){
      $product=array(); 
	 $category = DB::table('category')->get(); 
	
	 foreach($category as $cat)
	 {
	      
	      $subcat = DB::table('Subcategories')->where('catid',$cat->id)->get(); 
	      foreach($subcat as $sub){
	           
	           $prod = DB::table('products')->where('catid',$cat->id)->where('subcatid',$sub->id)->limit('4')->get();
	           $sub->products=$prod;
	           $cat->subcategory[]=$sub;
	          // $cat->subcategory[]['products']=$prod;
	           
	          
	      }
	      $product[]=$cat;    
	 }
     
     return $product;
     
    }
     public static function getUsermatch1($condition)
    {
     return User::where($condition)->first();
    }
    

    //relatioships
    public function orders()
    {
        return $this->hasMany(Orders::class);
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}

