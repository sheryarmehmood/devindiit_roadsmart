@extends('serviceprovider.layouts.app')
@section('title', 'Fulfill')
@section('content')
   <div class="content container-fluid">
      <div class="page-header">
         <div class="row d-flex align-items-center">
            <div class="col d-flex align-items-center">
               <h3 class="page-title">Fulfill Items</h3>
            </div>
            <div class="col text-right">
               <a href="javascript:void(0)" class="text-muted">Print packing slip</a>
               <a href="{{route('seller.view_order')}}" class="btn btn-primary ml-2">Back</a>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-8">
            <div class="card card-table mb-3">
               <div class="card-body p-2 py-3 px-4">
                  <div class="d-flex justify-content-between align-items-center">
                     <h3 class="mb-0"><span class="text-muted">#1002</span> <span class="mx-2">John Smith</span> <span class="badge badge-warning fontpen mx-2">Partially Fulfilled</span></h3>
                     <p class="mb-0">22 Manchinchi Road</p>
                  </div>
                  <div class="viewBox table-responsive pt-3">
                     <table class="table">
                        <thead>
                            <tr>     
                                <th>Image</th>     
                                <th class=" pl-0">Items</th>     
                                <th class=" pl-0">Quantity</th>       
                                <th></th>     
                            </tr>
                        </thead>                         
                        <tbody>
                            <tr>
                                <td class="text-left">
                                   <div class="fileboxdiv">
                                        <i class="far fa-file-archive"></i>
                                   </div>
                                </td>
                                <td class="text-left"> Brakes Shoes For Jeep Cherokee <br>
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#addvehicle-popup">
                                        BMW X3 
                                    </a>
                                </td>
                                <td class="text-left">1</td>
                                <td class="text-right pr-0"> <a href="javascript:void(0)" class="crosdel">X</a> </td>
                           </tr>
                            <tr>
                                <td class="text-left">
                                   <div class="fileboxdiv">
                                        <i class="far fa-file-archive"></i>
                                   </div>
                                </td>
                                <td class="text-left"> Brakes Shoes For Jeep Cherokee <br>
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#addvehicle-popup">
                                        BMW X6 
                                    </a>
                                </td>
                                <td class="text-left">1</td>
                                <td class="text-right pr-0"> <a href="javascript:void(0)" class="crosdel">X</a> </td>
                           </tr>
                            <tr>
                                <td class="text-left">
                                   <div class="fileboxdiv">
                                        <i class="far fa-file-archive"></i>
                                   </div>
                                </td>
                                <td class="text-left"> Brakes Shoes For Jeep Cherokee <br>
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#addvehicle-popup">
                                        Range Rover
                                    </a>
                                </td>
                                <td class="text-left">1</td>
                                <td class="text-right pr-0"> <a href="javascript:void(0)" class="crosdel">X</a> </td>
                           </tr>
                            <tr>
                                <td class="text-left">
                                   <div class="fileboxdiv">
                                        <i class="far fa-file-archive"></i>
                                   </div>
                                </td>
                                <td class="text-left"> Brakes Shoes For Jeep Cherokee <br>
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#addvehicle-popup">
                                        Toyota Hilux
                                    </a>
                                </td>
                                <td class="text-left">1</td>
                                <td class="text-right pr-0"> <a href="javascript:void(0)" class="crosdel">X</a> </td>
                           </tr>
                        </tbody>
                     </table>
                     
                  </div>
               </div>
            </div>
            
            <div class="card card-table mb-3 trakinginfo_div" id="trakinginfo_id">
                  <div class="card-body pt-3 px-4">
                     <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-3">Tracking Information (Optional)</h3>
                     </div>   
                        <div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  <label>Tracking Number</label>
								   <input type="text" id="" class="form-control" name="" value="">
							    </div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  <label class="">Shipping Carrier</label>
								  <input type="text" id="" class="form-control" name="" value="">
							    </div>
							</div>
						</div>
                  </div>
                  <div class="card-body pb-3 px-4">
                     <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-3">Charges (Optional)</h3>
                     </div>   
                        <div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  <label>Shipping Charges</label>
								   <input type="text" id="" class="form-control" name="" value="">
							    </div>
							</div>
						</div>
                  </div>
               </div>
       

         </div>
         <div class="col-md-4">
           
               <div class="card card-table mb-3 shippingaddress_main" id="trakingaddress_id" style="display:none">
                  <div class="card-body p-2 py-3 px-4">
                     <div class="d-flex justify-content-between align-items-center mb-3">
                        <h3 class="mb-0">Shipping Address</h3>
                        <a href="javascript: void(0);">Edit</a>
                     </div>
                    <div class="customerLists">
    					<div class="customerLists-item">
    						<h4 class="d-flex">John Smith  
    						<a class="addresscopy_btn" href="javascript: void(0);"><i class="fas fa-copy" aria-hidden="true"></i></a></h4>
    						<p>1688 St Matthews Ave, Winnipeg, MB R3H 0A2, Canada</p>
    						
    					</div>
    					<a class="mt-3 d-inline-block" href="javascript: void(0);">Edit Unverified Shipping Address</a>
    				 </div>
                  </div>
               </div>
            
               <div class="card card-table mb-3 summary">
                  <div class="card-body p-2 py-3 px-4">
                     <div class="d-flex justify-content-between align-items-center mb-3">
                        <h3 class="mb-0">Summary</h3>
                     </div>
                     <p class="mb-1">Fulfilling from 22 Manchinchi Road</p>
                     <p>4 of 4 Items</p>
                     <hr />
                    <!--a href="{{route('seller.view_order')}}" class="btn btn-success text-white d-block mt-3">
                        FulFill Items
                    </a>
                    <a href="javacript:void(0)" class="btn btn-primary text-white d-block mt-3 shipitems_btn">
                        Ship Items
                    </a-->                  
                    <div class="selectitem_div">
                        <select class="select_item" id="all-FulFill">
                           <option value="1">FulFill Items</option>
                           <option value="2">Ship Items</option>
                        </select>  
                    </div>
                  </div>
               </div>

         </div>
      </div>
   </div>
    <div class="modal fade vehiclepopup" id="selectvehicle-popup" role="dialog" aria-hidden="true">
       <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
                <div class="modal-body">
                <ul>    
                    <li><a href="javascript:void(0)" data-dismiss="modal">Hundai Verna</a></li>
                    <li><a href="javascript:void(0)" data-dismiss="modal">Hundai Careta</a></li>
                    <li><a href="javascript:void(0)" data-dismiss="modal">Toyota Fortuner</a></li>
                    <li><a href="javascript:void(0)" data-dismiss="modal">Maruti Suzuki Swift</a></li>
                    <li><a href="javascript:void(0)" data-dismiss="modal">Audi Q7</a></li>
                    <li><a href="javascript:void(0)" data-dismiss="modal">BMW 525</a></li>
                </ul>    
                </div>
          </div>
       </div>
    </div>
    <div class="modal fade addorderpopup" id="addvehicle-popup" role="dialog" aria-hidden="true">
       <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>            
             <div class="modal-body">
                <div class="card-table mb-0">
                   <div class="card-body addorder p-0imp">
                      <div class="d-flex justify-content-between align-items-center">
                         <h3 class="mb-0">Add Vehicle</h3>
                      </div>
                      <div class="chat-search chatAuto d-flex justify-content-between align-items-center pt-0">
                         <div class="input-group " id="searchform">
                            <div class="input-group-prepend">
                               <i class="fas fa-search"></i>
                            </div>
                            <input type="text" class="form-control" id="search-bar" autocomplete="off" placeholder="Toyoto Landcruiser ACX 4523">
                            <!-- User Dropdown Custom Ja For Change Value -->
                            <ul class="output" style="display:none;">
                             </ul>
                         </div>
                      </div>
                      <div class="viewBox table-responsive pt-3 px-3 hideborder">
                         <table class="table">
                            <tbody>
                               <tr>
                                  <td class="text-left pl-0">
                                     <div class="checkbox">
                                        <label class="mb-0">
                                           <input type="checkbox" name="checkbox">
                                        </label>
                                     </div>
                                  </td>
                                  <td class="pl-0" style="width: 60px;">
                                     <div class="avatar avatar-md">
                                        <img class="avatar-img rounded" alt="" src="{{ asset('assets/serviceprovider/img/engine.jpg') }}">
                                     </div>
                                  </td>
                                  <td class="pl-0"> ABX 2312 <br> <span class="text-muted">Landrover Discovery</span></td>
                                 
                               </tr>
                            </tbody>
                         </table>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
@endsection
@section('scripts')
<script>
  /*  $(document).ready(function(){
      $(".shipitems_btn").click(function(){
        $("#trakinginfo_id").toggle()
      });
    }); */
$(function() {
  $('#all-FulFill').change(function(){
    $('#trakinginfo_id').show();
    $('#trakingaddress_id').show();
  });
});    
</script>
@endsection