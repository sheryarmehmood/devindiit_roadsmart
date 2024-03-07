<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use DB;

class ProductsController extends Controller
{
    public function products(){
        $page = 'products';
        return view('serviceprovider.Products.products',compact('page'));
    }

    public function add_product(){
        $seller_id = Auth::user()->id;
        return view('serviceprovider.Products.add-product',compact('seller_id'));
    }

    //post method function for save products details
    public function save_product(Request $request){
        
        $seller_id = $request->seller_id; 
        dd($request);
        //laravel validations to check the valid fields
        $validator = Validator::make($request->all(),
        [
          'product_name' => ['required', 'string', 'max:255'],
          'vendor_name' => ['required', 'string', 'max:255'],
          'brand_name' => ['required', 'string', 'max:255'],
          'sku_no' => ['required','string', 'regex:^[a-z0-9A-Z]{10,20}$', 'unique:products,SKU,'.$request->sku_no],
          'description' => ['required'],
          'cost_price' => ['required','regex:/^(\d+(,\d{1,2})?)?$/'],
          'selling_price' => ['required','regex:/^(\d+(,\d{1,2})?)?$/'],
          'vehicles' => ['required'],
          'location' =>['required']
        ]);

        //check if the field validations are failed
         if ($validator->fails())
          {
            // dd($validator);
            return redirect(route('seller.add_product'))->withErrors($validator)->withInput();
          } 

                
        $product = new Product;

        if($request->hasfile('uploadimg')){
            $file = $request->file('uploadimg');
            $extension = $file->getClientOriginalExtension();
            $filename = time() .  '.' . $extension;
            $file->move('assets/serviceprovider/img/product/',$filename);
            $product->image = $filename;

        }
        $product->product_name = $request->product_name;
        $product->vendor = $request->vendor_name;
        $product->brand_name = $request->brand_name;
        $product->description = $request->description;
        $product->purchase_price = $request->cost_price;
        $product->sale_price = $request->selling_price;
        $product->SKU = $request->sku_no;
        $product->stock_status = $request->status;
        if(isset($request->tyre_size) && $request->tyre_size != '' ){
            $product->is_tyre_product = '1';
            $product->tyre_size = $request->tyre_size;
        }
        $product->location = $request->location;
        if(isset($request->vehicles)){
             $product->compatible_vehicle = implode(',',$request->vehicles);
        }
       
        $product->seller_id = $seller_id;

        $done = $product->save();
       Session::flash('message', 'Product Added Successfully!!');
       return redirect(route('seller.add_product'));
    }

    public function view_product($id=""){
        // dd('sdd');
        // $getDetails = Product::findOrFail($id);
        return view('serviceprovider.Products.view-product-detail');
    }

    public function edit_product($id=""){
        $getDetails = Product::findOrFail($id);
        return view('serviceprovider.Products.edit-product',compact('getDetails'));
    }

    public function inventory(){
        
        return view('serviceprovider.Products.inventory');
    }

    function get_productListing(Request $request)
    {
        $columns = array(  
                            0 =>'product_name',
                            1=> 'status',
                            2=> 'quantity',
                            3=> 'brand_name',
                            4=> 'vendor'
                        );
  
        
    //   $data = Product::select('*')->where('status','=','1');
 $data = Product::select(DB::raw('products.product_name,products.stock_status,products.quantity,products.brand_name,products.vendor'))->where('status','=','1');
        if($request->has('name')){
            $data->where(function($query) use($request) {
              $query->where('product_name', 'LIKE', "%{$request->search}%" )
                    ->orWhere ( 'brand_name', 'LIKE', "%{$request->search}%" )
                    ->orWhere ( 'vendor', 'LIKE', "%{$request->search}%" );
            });
        }
         if($request->has('search')){
            $data->where(function($query) use($request) {
                $query->where('products.product_name', 'LIKE', "%{$request->search}%" )
                    ->orWhere ( 'products.brand_name', 'LIKE', "%{$request->search}%" )
                    ->orWhere ( 'products.vendor', 'LIKE', "%{$request->search}%" );
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
                 if($post->stock_status == 'instock'){
                     $current_status = 'In Stock';
                     $Status = '<label class="badge badge-success">'.$current_status.'</label>';
                 }
                 else{
                     $current_status = 'Out Of Stock';
                     $Status = '<label class="badge badge-danger">'.$current_status.'</label>';
                 }
                 
                 $Quantity = '<p>'.$post->quantity.' in stock</p>';
                 $button = '<a href="'.route('seller.view_product').'/'.$post->id.'" class="btn btn-sm bg-info-light"><i class="far fa-eye mr-1"></i> View</a>
                  <a href="'.route('seller.edit_product').'/'.$post->id.'" class="btn btn-sm bg-success-light"><i class="fas fa-edit"></i> Edit</a>
                  <a href="#" class="btn btn-sm bg-danger-light delete_product" data-toggle="modal"  data-productid="'.$post->id.'" data-target="#delete-popup"><i class="fas fa-trash-alt"></i> Delete
                  </a>';

                // $nestedData['id'] = $key + 1;
                $nestedData['product_name'] = !empty(@$post->product_name) ? $post->product_name : "N/A";
                $nestedData['status'] = !empty(@$Status) ? $Status : "N/A";
                $nestedData['quantity'] =  !empty(@$post->quantity) ? $Quantity : "N/A";
                // $nestedData['sale_price'] = !empty(@$post->sale_price) ? '$'.$post->sale_price : "N/A";
                $nestedData['brand_name'] = !empty(@$post->brand_name) ? $post->brand_name : "N/A";
                  $nestedData['vendor'] = !empty(@$post->vendor) ? $post->vendor : "N/A";
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

    public function tabs_ajax_get($page='products')
    {     
        if($page == 'products')
        {   
          return view('serviceprovider.Products.ajax.products');
        }else if($page == 'services')
        {
          return view('serviceprovider.Products.ajax.services');
        }
    }

    public function delete_product(Request $request){

        $deleted_id = $request->deleted_id;
        $product = Product::select('*')->where('id',$deleted_id)->first();
        $product->is_deleted = '1';
        $product->save();
        Session::flash('message', 'Product Deleted Successfully!');
        return response()->json(['success' => true]);
    }

    //post method function for save products details
    public function update_product(Request $request){
        
        $product_id = $request->product_id; 
        
        //laravel validations to check the valid fields
        $validator = Validator::make($request->all(),
        [
          'product_name' => ['required', 'string', 'max:255'],
          'vendor_name' => ['required', 'string', 'max:255'],
          'brand_name' => ['required', 'string', 'max:255'],
          'sku_no' => ['required','string', 'regex:/^[a-z0-9]{10,20}$/', 'unique:products,SKU,'.$request->sku_no],
          'description' => ['required'],
          'cost_price' => ['required','regex:/^(\d+(,\d{1,2})?)?$/'],
          'selling_price' => ['required','regex:/^(\d+(,\d{1,2})?)?$/'],
          'vehicles' => ['required'],
          'location' =>['required']
        ]);

        //check if the field validations are failed
         if ($validator->fails())
          {
            // dd($validator);
            return redirect(route('seller.edit_product',$product_id))->withErrors($validator)->withInput();
          } 

                
        $product = Product::findOrFail($id);;

        if($request->hasfile('uploadimg')){
            $file = $request->file('uploadimg');
            $extension = $file->getClientOriginalExtension();
            $filename = time() .  '.' . $extension;
            $file->move('assets/serviceprovider/img/product/',$filename);
            $product->image = $filename;

        }
        $product->product_name = $request->product_name;
        $product->vendor = $request->vendor_name;
        $product->brand_name = $request->brand_name;
        $product->description = $request->description;
        $product->purchase_price = $request->cost_price;
        $product->sale_price = $request->selling_price;
        $product->SKU = $request->sku_no;
        $product->stock_status = $request->status;
        if(isset($request->tyre_size) && $request->tyre_size != '' ){
            $product->is_tyre_product = '1';
            $product->tyre_size = $request->tyre_size;
        }
        $product->location = $request->location;
        if(isset($request->vehicles)){
             $product->compatible_vehicle = implode(',',$request->vehicles);
        }
       
        $product->seller_id = $seller_id;

        $done = $product->save();
       Session::flash('message', 'Product Updated Successfully!!');
       return redirect(route('seller.edit_product'));
    }
    
    public function search_product(){
        
        return view('serviceprovider.Products.product-search');
    }
    
    public function not_addedon_product(){
        
        return view('serviceprovider.Products.add-product-not-sold-on');
    }
    
    public function addedon_product(){
        
        return view('serviceprovider.Products.add-product-sold-on');
    }
    
    // public function view_product(){
        
    //     return view('serviceprovider.Products.view-product-detail');
    // }
}
