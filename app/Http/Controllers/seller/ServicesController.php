<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\services;
use App\Models\ServiceCategory;
use App\Models\ServiceSubCategory;
use App\Models\ServiceType;

class ServicesController extends Controller
{
    public function services(){
        
        return view('serviceprovider.Services.services');
    }

    public function add_service(){
        $seller_id = Auth::user()->id;
        $categories = ServiceCategory::select('*')->get();
        $subcategories = ServiceSubCategory::select('*')->get();
        $servicetypes = ServiceType::select('*')->get();
        return view('serviceprovider.Services.add-service',compact('seller_id','categories','subcategories','servicetypes'));
    }

    //post method function for save products details
    public function save_service(Request $request){
        
        $seller_id = $request->seller_id; 
        
        //laravel validations to check the valid fields
        $validator = Validator::make($request->all(),
        [
          'category' => ['required'],
          'subcategory' => ['required'],
          'service_type' => ['required'],
          'price' => ['required','regex:/^(\d+(,\d{1,2})?)?$/'],
          'vendor_name' =>['required']
        ]);

        //check if the field validations are failed
         if ($validator->fails())
          {
            // dd($validator);
            return redirect(route('seller.add_service'))->withErrors($validator)->withInput();
          } 

                
        $services = new services;

        if($request->hasfile('uploadimg')){
            $file = $request->file('uploadimg');
            $extension = $file->getClientOriginalExtension();
            $filename = time() .  '.' . $extension;
            $file->move('assets/serviceprovider/img/services/',$filename);
            $services->image = $filename;

        }
        $services->category = $request->category;
        $services->subcategory = $request->subcategory;
        $services->price = $request->price;
        $services->compatible_vehicle = $request->compatible_vehicle;
        $services->vendor = $request->vendor_name;
        $services->status = $request->status;
        if(isset($request->service_type)){
             $services->service_type = implode(',',$request->service_type);
        }
       
        $services->seller_id = $seller_id;

        $done = $services->save();
       Session::flash('message', 'Services Added Successfully!!');
       return redirect(route('seller.add_service'));
    }

    public function view_service($id=""){
        
        return view('serviceprovider.Services.view-service-detail');
    }

    public function edit_service($id=""){
        
        return view('serviceprovider.Services.edit-service');
    }

    function get_serviceListing(Request $request)
    {
        $columns = array( 
                            0 =>'id', 
                            1 =>'subcategory',
                            2=> 'service_type',
                            3=> 'price',
                            4=> 'status',
                            5=> 'action'
                        );
  
        
       $data = services::select('*')->where('status','=','1');

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
                //condition for service name starts
                $subcategory = '';
                if($post->subcategory == '1'){
                  $subcategory = 'Brakes';
                }else if($post->subcategory == '2'){
                  $subcategory = 'Electrical';
                }else if($post->subcategory == '3'){
                  $subcategory = 'Engine';
                }else if($post->subcategory == '4'){
                  $subcategory = 'Exhaust';
                }else{
                  $subcategory = '';
                }
                //condition for service name ends

                //condition for service type starts
                $servicetype = '';

                $typevalue = explode(',',$post->service_type);
                if(in_array('1', $typevalue)){
                  if($servicetype != ''){
                    $servicetype .= 'Brake Safety Inspection';
                  }else{
                    $servicetype = 'Brake Safety Inspection';
                  }
                }else if(in_array('2', $typevalue)){
                  if($servicetype != ''){
                    $servicetype .= 'Pad and Motar Replacement';
                  }else{
                    $servicetype = 'Pad and Motar Replacement';
                  }
                }else if(in_array('3', $typevalue)){
                  if($servicetype != ''){
                    $servicetype .= 'Pad Replacement';
                  }else{
                    $servicetype = 'Pad Replacement';
                  }
                }else if(in_array('4', $typevalue)){
                  if($servicetype != ''){
                    $servicetype .= 'Shoe Replacement';
                  }else{
                    $servicetype = 'Shoe Replacement';
                  }
                }else if(in_array('5', $typevalue)){
                  if($servicetype != ''){
                    $servicetype .= 'Clean and Adjust';
                  }else{
                    $servicetype = 'Clean and Adjust';
                  }
                }else if(in_array('6', $typevalue)){
                  if($servicetype != ''){
                    $servicetype .= 'Others';
                  }else{
                    $servicetype = 'Others';
                  }
                }else{
                  $servicetype .= '';
                }
              
                //condition for service type ends

                 //condition code for status starts
                 $checked = ''; 
                if($post->status == 1){
                    $checked = 'checked';
                }else{
                    $checked = '';
                }

                 $Status = '<div class="status-toggle"><input id="service_'.$post->id.'" class="check updatestatus" type="checkbox"  value="'.$post->status.'" data-id="'.$post->id.'" '.$checked.'><label for="service_'.$post->id.'" class="checktoggle">checkbox</label></div>';

                 $button = '<a href="'.route('seller.view_service').'/'.$post->id.'" class="btn btn-sm bg-info-light"><i class="far fa-eye mr-1"></i> View</a>
                  <a href="'.route('seller.edit_service').'/'.$post->id.'" class="btn btn-sm bg-success-light"><i class="fas fa-edit"></i> Edit</a>
                  <a href="#" class="btn btn-sm bg-danger-light delete_service" data-toggle="modal"  data-productid="'.$post->id.'" data-target="#delete-popup"><i class="fas fa-trash-alt"></i> Delete
                  </a>';

                $nestedData['id'] = $key + 1;
                $nestedData['subcategory'] = !empty(@$subcategory) ? $subcategory : "N/A";
                $nestedData['service_type'] = !empty(@$servicetype) ? $servicetype : "N/A";
                $nestedData['price'] = !empty(@$post->price) ? '$'.$post->price : "N/A";
                $nestedData['status'] = !empty(@$Status) ? @$Status : "N/A";
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
    
    public function service_search(){
        
        return view('serviceprovider.Services.service-search');
    }
    
    public function not_addedon_service(){
        
        return view('serviceprovider.Services.add-services-not-available');
    }
	
	 public function view_offer(){
        
        return view('serviceprovider.Services.view-offer');
    }
	
	 public function services_draft(){
        
        return view('serviceprovider.Services.services-draft');
    }
	
	 public function add_offer(){
        
        return view('serviceprovider.Services.add-offer');
    } 
	
	public function edit_offer(){
        
        return view('serviceprovider.Services.edit-offer');
    }
}
