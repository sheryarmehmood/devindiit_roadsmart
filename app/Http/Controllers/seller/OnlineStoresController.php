<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\Models\onlinestores;


class OnlineStoresController extends Controller
{
    public function online_store(){
        $seller_id = Auth::user()->id;
        return view('serviceprovider.online-store',compact('seller_id'));
    }

    //post method function for save products details
    public function save_online_store(Request $request){
        
        $seller_id = $request->seller_id; 
        
        //laravel validations to check the valid fields
        $validator = Validator::make($request->all(),
        [
          'add_domain_name' => ['required'],
          'add_website_link' => ['required']
        ]);

        //check if the field validations are failed
         if ($validator->fails())
          {
            // dd($validator);
            return redirect(route('seller.online_store'))->withErrors($validator)->withInput();
          } 

                
        $onlinestores = new onlinestores;

        $onlinestores->domain_name = $request->add_domain_name;
        $onlinestores->website_link = $request->add_website_link;
        $onlinestores->status = $request->status;
       
        $onlinestores->seller_id = $seller_id;

        $done = $onlinestores->save();
       Session::flash('message', 'Online store Added Successfully!!');
       return redirect(route('seller.online_store'));
    }

    function get_storeListing(Request $request)
    {
        $columns = array( 
                            0 =>'id', 
                            1 =>'domain_name',
                            2=> 'website_link',
                            3=> 'status',
                            4=> 'action'
                        );
        
       $data = onlinestores::select('*')->where('seller_id','=',Auth::user()->id)->where('is_deleted','0');

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
            	$checked = ''; 
                if($post->status == 1){
                    $checked = 'checked';
                }else{
                    $checked = '';
                }
                 $Status = '<div class="status-toggle"><input id="service_'.$post->id.'" class="check updatestatus" type="checkbox"  value="'.$post->status.'" data-id="'.$post->id.'" '.$checked.'><label for="service_'.$post->id.'" class="checktoggle">checkbox</label></div>';

                 $button = '
                  <button class="btn btn-sm bg-success-light edit_store" type="button" data-toggle="modal" data-target="#edit-store-popup"  data-storeid="'.$post->id.'"><i class="fas fa-edit"></i> Edit</button>
                  <button type="button" class="btn btn-sm bg-danger-light delete_store" data-toggle="modal" data-storeid="'.$post->id.'" data-target="#delete-popup"><i class="fas fa-trash-alt"></i> Delete
                  </button>';

                $nestedData['id'] = $key + 1;
                $nestedData['domain_name'] = !empty(@$post->domain_name) ? $post->domain_name : "N/A";
                $nestedData['website_link'] = !empty(@$post->website_link) ? $post->website_link : "N/A";
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

    public function delete_store(Request $request){

        $deleted_id = $request->deleted_id;
        $store = onlinestores::select('*')->where('id',$deleted_id)->first();
        $store->is_deleted = '1';
        $store->save();
        Session::flash('message', 'Store Deleted Successfully!');
        return response()->json(['success' => true]);
    }

    public function updatestatus(Request $request){
        $id = $request->user_id;
        $store = onlinestores::findOrFail($id);
        $data['status'] = 0;
        if($request->status != ''){
            if($store->status == '0'){
                $store->status = '1'; 
            }else{
              $store->status = $request->status;  
            }
            $store->save();
            $data['status'] = 1;
        }
        return response()->json(['success' => true,'data' => $data]);
    }

    public function getonlinestore(Request $request)
    {
        $id = $request->id;
        $store_data = onlinestores::select('*')->where('id', $id)->get();
        return response()->json(['success' => true, 'store_data' => $store_data]);
    }

    public function update_online_store(Request $request)
    {

        $id = $request->edit_shop_id;
        $validator = Validator::make($request->all(),
        [
          'edit_domain_name' => ['required'],
          'edit_website_link' => ['required']
        ]);

        $store_data = onlinestores::find($id);
        if ($validator->passes()) {
                $store_data->domain_name = $request->edit_domain_name;
		        $store_data->website_link = $request->edit_website_link;
		        $store_data->status = $request->edit_Status;
                $store_data->save();
                Session::flash('message', 'store Updated Successfully!');
                return redirect()->back();
            
        } else {
            return redirect()->back()->withErrors($validator);
        }
    }
}
