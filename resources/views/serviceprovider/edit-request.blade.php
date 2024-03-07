@extends('serviceprovider.layouts.app')
@section('title', 'Edit Request')
@section('content')
   <div class="content container-fluid addorder services_request_pages">
      <div class="page-header">
         <div class="row">
            <div class="col">
               <h3 class="page-title">Edit Request</h3>
            </div>
            <div class="col text-right">
               <a href="{{route('seller.estimates')}}" class="btn btn-primary">Back</a>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12">
            <div class="card card-table mb-3 card_visible">
               <div class="card-body p-0">
                  <div class="px-4 pt-3">
                     <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Add Product</h3>
                        <div class="d-flex justify-content-between align-items-center">
                           <a data-toggle="modal" data-target="#addcustom-popup" href="javascript: void(0);">Add custom item</a>
                          
                        </div>
                     </div>

                     <div class="chat-search d-flex justify-content-between align-items-center">
                        <div class="input-group">
                           <div class="input-group-prepend">
                              <i class="fas fa-search"></i>
                           </div>
                           <input type="text" class="form-control" id="launch-modal" placeholder="Search" data-toggle="modal" data-target="#addsearchproduct-popup">
                        </div>
                        <a class="btn btn-primary ml-2" href="javascript: void(0);" data-toggle="modal" data-target="#addsearchproduct-popup">
                           Browse
                        </a>
                     </div>
                  </div>
                  <hr />
                  <div class="px-4">
                     <div class="d-flex mb-3">
                        <h3 class="mb-0 text-danger">Pending</h3>
                     </div>
					 <div class="pendingProductsItem">
						<div class="d-flex align-items-center">
							 <div class="fileboxdiv mr-3">
								<i class="far fa-file-archive"></i>
							 </div>
							 <h4>Brakes Shoes For Jeep Cherokee</h4>
						</div>
						<div class="viewBox table-responsive pt-3 product-add-table pl-5">
    						<table class="table">
    							<tbody id="dynamicTable">
    								<tr>
    									
    									
    									<th>Description</th>
    									<th>Type</th>								
    									<th>Qty</th>								
    									<th>Unit</th>									
    									<th>Amount</th>	
    									<th class="text-right rqst_addnew_prdtc"><a href="javascript:void(0);" id="addproductproperty"><i class="fa fa-plus" aria-hidden="true"></i></a></th>	
    								</tr>
    								<tr>
    									
    									<td>
											<input type="text" value="Spark Plug" class="form-control m-auto" style="min-width: 110px;" name="">
										</td>
    									<td style="width:180px">
    										 <select name="Status" class="my-select form-control">
											   <option value="">Product</option>
											   <option value="">Product 1</option>
											   <option value="">Product 2</option>
											</select>
    									</td>
    									<td style="width:120px">
    										<input type="number" value="4" class="form-control m-auto" style="min-width: 65px;" name="">
    									</td>
    									<td style="width:120px">
    										<input type="number" value="200" class="form-control m-auto" style="min-width: 65px;" name="">
    									</td>
										<td style="width:120px">
    										<input type="text" value="K 800" class="form-control m-auto" style="min-width: 65px;" name="">
    									</td>
										 <td class="text-right"> <a href="#" class="ml-3"></a> </td>
    									
    								</tr>
    							</tbody> 
    						</table>
							 <div class="my-2 adanchor">
                                    <a data-toggle="modal" data-target="#addsearchproduct-popup" href="javascript: void(0);">Add Product from Inventry</a>
									 <a data-toggle="modal" data-target="#quantity-popup" href="javascript: void(0);">Adjust quantity</a>
                                    <a href="javascript:void(0)">Remove Product</a>
                                    <a href="javascript:void(0)">Apply Discount</a>
                          </div>
    					</div>
    					
						 
					 </div>
                  </div>
               </div>
            </div>
            <div class="card card-table mb-3">
               <div class="card-body p-2 py-3 px-4">
                        <div class="d-flex mb-3">
                        <h3 class="mb-0 text-danger">Pending</h3>
                     </div>
					 <div class="pendingProductsItem">
						<div class="d-flex align-items-center">
							 <div class="fileboxdiv mr-3">
								<i class="far fa-file-archive"></i>
							 </div>
							 <h4>Brakes Shoes For Jeep Cherokee</h4>
						</div>
						<div class="viewBox table-responsive pt-3 product-add-table pl-5">
    						<table class="table">
    							<tbody id="dynamicTable2">
    								<tr>
    									
    									
    									<th>Description</th>
    									<th>Type</th>								
    									<th>Qty</th>								
    									<th>Unit</th>									
    									<th>Amount</th>	
    									<th class="text-right rqst_addnew_prdtc"><a href="javascript:void(0);" id="addproductproperty2"><i class="fa fa-plus" aria-hidden="true"></i></a></th>	
    								</tr>
    								<tr>
    									
    									<td>
											<input type="text" value="Spark Plug" class="form-control m-auto" style="min-width: 110px;" name="">
										</td>
    									<td style="width:180px">
    										 <select name="Status" class="my-select form-control">
											   <option value="">Product</option>
											   <option value="">Product 1</option>
											   <option value="">Product 2</option>
											</select>
    									</td>
    									<td style="width:120px">
    										<input type="number" value="4" class="form-control m-auto" style="min-width: 65px;" name="">
    									</td>
    									<td style="width:120px">
    										<input type="number" value="200" class="form-control m-auto" style="min-width: 65px;" name="">
    									</td>
										<td style="width:120px">
    										<input type="text" value="K 800" class="form-control m-auto" style="min-width: 65px;" name="">
    									</td>
										 <td class="text-right"> <a href="#" class="ml-3"></a> </td>
    									
    								</tr>
    							</tbody> 
    						</table>
							 <div class="my-2 adanchor">
									  <a data-toggle="modal" data-target="#addsearchproduct-popup" href="javascript: void(0);">Add Product from Inventry</a>
                                    <a data-toggle="modal" data-target="#quantity-popup" href="javascript: void(0);">Adjust quantity</a>
                                    <a href="javascript:void(0)">Remove Product</a>
                                    <a href="javascript:void(0)">Apply Discount</a>
                          </div>
    					</div>
    					
						 
					 </div>
                   
               </div>
            </div>
            

            <div class="card card-table mb-3">
               <div class="card-body p-2 py-3 px-4">
                  <div class="d-flex justify-content-between align-items-center">
                     <h3 class="mb-0 text-success">Confirmed</h3>
                  </div>
                  <div class="viewBox table-responsive pt-3">
                     <table class="table">
                        <tbody>
                           <tr>
                              <td class="text-left pl-0">
                                 <div class="fileboxdiv">
                                    <i class="far fa-file-archive"></i>
                                    <span>1</span>
                                 </div>
                              </td>
                              <td class="text-left pl-0"> 
                                 Brakes Shoes For Jeep Cherokee <br /> 
                                 <a href="javascript:void(0)" data-toggle="modal" data-target="#addvehicle-popup" class="tooltips_anchor">
                                        <span class="custom-tooltips" title="ABX 2312">BMW X3</span>
                                    </a> 
                              </td>
							   <td class="text-left  pl-0">1 × ₹13.00</td>
                              <td class="text-right pr-0"> K 13.00 </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>

			<div class="card card-table mb-3">
               <div class="card-body p-2 py-3 px-4">
                  <div class="d-flex justify-content-between align-items-center">
                     <h3 class="mb-0">Summary</h3>
                  </div>
                   <div class="viewBox table-responsive pt-3">
                     <table class="table">
                        <tbody>
                           <tr>
                              <td class="text-left pl-0"> Updated total </td>
                              <td class="text-right pr-0"> ₹36.60 </td>
                           </tr>
                           <tr>
                              <td class="text-left pl-0"> Paid by customer </td>
                              <td class="text-right pr-0"> ₹0.00 </td>
                           </tr>
                           <tr>
                              <td class="text-left pl-0"> <strong>Amount to collect</strong> </td>
                              <td class="text-right pr-0"> <strong>₹36.60</strong> </td>
                           </tr>
                        </tbody>
                     </table>
                     <hr />
                     <div class="invoibox">
                        <h3>ESTIMATE</h3>
                        <p>There’s no email address on this request. Your customer won’t be notified of these changes.</p>
                     </div>
                     <div class="modal-footer px-0">
                        <button type="button" class="btn btn-success">Update Request</button>
                     </div>
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

<!-- Add Discount -->
<div class="modal fade addorderpopup" id="addiscount-popup" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-body p0">
            <div class="card-table mb-0">
               <div class="card-body addorder p-0imp">
                  <div class="d-flex justify-content-between align-items-center">
                     <h3 class="mb-0">Add discount</h3>
                  </div>
                  <div class="viewBox container px-0 mt-3">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>Discount type</label>
                              <select name="category" id="category" class="my-select form-control">
                                 <option value="">Amount</option>
                                 <option value="">Percentage</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>Discount type</label>
                              <input type="text" class="form-control" placeholder="%" />
                           </div>
                        </div>
                        
                        <div class="col-md-12">
                           <div class="form-group">
                              <label>Reason</label>
                              <input type="text" class="form-control" />
                              <small>Your customers can see this reason</small>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-success">Apply</button>
            <button type="button" class="btn btn-danger" id="dismiss" data-dismiss="modal">Cancel</button>
         </div>
      </div>
   </div>
</div>
<!-- End Discount -->

<!-- Add Shipping -->
<div class="modal fade addorderpopup" id="addshipping-popup" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-body p0">
            <div class="card-table mb-0">
               <div class="card-body addorder p-0imp">
                  <div class="d-flex justify-content-between align-items-center">
                     <h3 class="mb-0">Add discount</h3>
                  </div>
                  <div class="viewBox container px-0 mt-3">
                     <div class="alert alert-warning">
                        <i class="fa fa-info-circle" aria-hidden="true"></i> If you're not seeing all your rates, add a customer with a complete shipping address.
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                           <div class="d-flex flex-column">
                              <div class="form-check form-check-inline mb-2">
                                 <input class="form-check-input" type="radio" name="shipping" id="freeship" value="2">
                                 <label class="form-check-label" for="freeship">
                                    Free shipping
                                 </label>
                              </div>
                              <div class="form-check form-check-inline mb-3">
                                 <input class="form-check-input" type="radio" name="shipping" id="custom" value="3">
                                    <label class="form-check-label" for="custom">
                                    Custom
                                 </label>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row desc" id="Cars3" style="display:none;">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>Rate name</label>
                              <input type="text" class="form-control" />
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>Price</label>
                              <input type="text" class="form-control" placeholder="₹ 0.00" />
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-success">Apply</button>
            <button type="button" class="btn btn-danger" id="dismiss" data-dismiss="modal">Cancel</button>
         </div>
      </div>
   </div>
</div>
<!-- End Shipping -->

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
                        <input type="text" class="form-control" id="search-bar" autocomplete="off" placeholder="Search Reg. number, VIN number">
                        <!-- User Dropdown Custom Ja For Change Value -->
                        <ul class="output" style="display:none;">
                         </ul>
                     </div>
                  </div>
                  <div class="viewBox table-responsive pt-0 px-3 hideborder">
                     <table class="table">
                        <tbody>
                           <tr>
                              <!---td class="text-left pl-0">
                                 <div class="checkbox">
                                    <label class="mb-0">
                                       <input type="checkbox" name="checkbox">
                                    </label>
                                 </div>
                              </td--->
                              <td class="pl-0" style="width: 60px;">
                                 <div class="avatar avatar-sm">
                                    <img class="avatar-img rounded-circle" alt="" src="{{ asset('assets/serviceprovider/img/engine.jpg') }}">
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
         <!--div class="modal-footer">
            <button type="button" class="btn btn-success">Done</button>
            <button type="button" class="btn btn-danger" id="dismiss" data-dismiss="modal">Cancel</button>
         </div-->
      </div>
   </div>
</div>

<!-- Vhicle Information -->
<div class="modal fade addorderpopup" id="vhicle-popup" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-body p0">
            <div class="card-table mb-0">
               <div class="card-body addorder p-0imp">
                  <div class="d-flex justify-content-between align-items-center">
                     <h3 class="mb-0">Add Vehicle</h3>
                  </div>
                  <div class="chat-search d-flex justify-content-between align-items-center">
                     <div class="input-group">
                        <div class="input-group-prepend">
                           <i class="fas fa-search"></i>
                        </div>
                        <input type="text" class="form-control" placeholder="Search">
                     </div>
                  </div>
                  <div class="viewBox table-responsive pt-3">
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
                              <td class="text-left pl-0">
                                 <div class="avatar avatar-sm">
                                    <img class="avatar-img rounded-circle" alt="" src="assets/img/engine.jpg">
                                 </div>
                              </td>
                              <td class="text-left pl-0"> Brakes Shoes For Jeep Cherokee </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-success">Done</button>
            <button type="button" class="btn btn-danger" id="dismiss" data-dismiss="modal">Cancel</button>
         </div>
      </div>
   </div>
</div>

<div class="modal fade addorderpopup" id="addcustom-popup" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-body p0">
            <div class="card-table mb-0">
               <div class="card-body addorder p-0imp">
                  <div class="d-flex justify-content-between align-items-center">
                     <h3 class="mb-0">Add Custom Item</h3>
                  </div>
                  <div class="viewBox container px-0 mt-3">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>Item name</label>
                              <input type="text" class="form-control" />
                           </div>
                        </div>
                        <div class="col-md-3">
                           <div class="form-group">
                              <label>Price</label>
                              <input type="text" class="form-control" placeholder="₹ 0.00" />
                           </div>
                        </div>
                        <div class="col-md-3">
                           <div class="form-group">
                              <label>Quantity</label>
                              <input type="number" class="form-control" value="1" />
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12 payment_check_div ">
                           <label class="payment-checkbox">
                              <input type="checkbox" checked="checked">
                              <span class="checkmark"></span>Item is taxable
                           </label>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-success">Done</button>
            <button type="button" class="btn btn-danger" id="dismiss" data-dismiss="modal">Cancel</button>
         </div>
      </div>
   </div>
</div>

<!-- Quantity Popup -->
<div class="modal fade addorderpopup" id="quantity-popup" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-body p0">
            <div class="card-table mb-0">
               <div class="card-body addorder p-0imp">
                  <div class="d-flex justify-content-between align-items-center">
                     <h3 class="mb-0">Adjust quantity</h3>
                  </div>
                  <div class="viewBox container px-0 mt-2">
                     <div class="row mb-3 mx-0">
                        <div class="col-md-12">
                           Adjust the quantity for <strong>Test</strong>.
                        </div>
                     </div>
                     <div class="row mx-0">
                        <div class="col-md-12">
                           <div class="form-group">
                              <label>Quantity</label>
                              <input type="number" class="form-control" value="1" />
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-success">Done</button>
            <button type="button" class="btn btn-danger" id="dismiss" data-dismiss="modal">Cancel</button>
         </div>
      </div>
   </div>
</div>


<!-- Coninformation Popup -->
<div class="modal fade addorderpopup" id="coninformation-popup" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-body p0">
            <div class="card-table mb-0">
               <div class="card-body addorder p-0imp">
                  <div class="d-flex justify-content-between align-items-center">
                     <h3 class="mb-0">Edit contact information</h3>
                  </div>
                  <div class="viewBox container px-0 mt-3">
                     <div class="row">                        
                        <div class="col-md-12">
                           <div class="form-group">
                              <label>Username</label>
                              <input type="text" class="form-control" />
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-success">Save</button>
            <button type="button" class="btn btn-danger" id="dismiss" data-dismiss="modal">Cancel</button>
         </div>
      </div>
   </div>
</div>



   </div>
</div>

<div class="modal fade addorderpopup" id="addsearchproduct-popup"" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-body p0">
            <div class="card-table mb-0">
               <div class="body addorder p-0imp">
                  <div class="d-flex justify-content-between align-items-center">
                     <h3 class="mb-0">Products</h3>
                  </div>
                     <div class="chat-search d-flex justify-content-between align-items-center pt-2">
                     <div class="input-group">
                        <div class="input-group-prepend">
                           <i class="fas fa-search"></i>
                        </div>
                        <input type="text" class="form-control" placeholder="Search">
                     </div>
                     <!--a class="btn btn-primary filter-btn ml-2" href="javascript: void(0);" id="filter_search">
                        <i class="fas fa-filter text-white"></i>
                     </a--->
                  </div>
                  <div class="viewBox table-responsive pt-0 px-3 hideborder">
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
                              
                              <td class="text-left pl-0"> Brakes Shoes For Jeep Cherokee </td>
                              <td class="text-center "> 3 </td>
                              <td class="text-right pr-0"> K 8,000.00 </td>
                           </tr>
                           <tr>
                              <td class="text-left pl-0">
                                 <div class="checkbox">
                                    <label class="mb-0">
                                       <input type="checkbox" name="checkbox">
                                    </label>
                                 </div>
                              </td>
                              
                              <td class="text-left pl-0 text-wrap"> Brakes Skimming </td>
                              <td class="text-center "> 2 </td>
                              <td class="text-right pr-0"> K 8,000.00 </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
             
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-success" data-dismiss="modal">Add Product</button>
            <button type="button" class="btn btn-danger" id="dismiss" data-dismiss="modal">Cancel</button>
         </div>
      </div>
   </div>
</div>
<!-- End Coninformation -->
@endsection

@section('scripts')

<script>
   $(document).ready(function() {
      $("input[name$='shipping']").click(function() {
        var test = $(this).val();

        $("div.desc").hide();
        $("#Cars" + test).show();
      });
   });

   $(function() {
     $("#paymentdue").on("click",function() {
       $(".payemntboxhide").toggle();
       $(".payemntboxhide1").toggle();
     });
   });
</script>


<script>
	
	var i = 0;
       
    $("#addproductproperty").click(function(){
   
        i++;
   
        $("#dynamicTable").append('<tr><td><input type="text" value="" class="form-control" placeholder="" style="min-width: 110px;" name=""></td><td style="width:180px"> <select name="Status" class="my-select form-control"> <option value="">Product</option> <option value="">Product 1</option> <option value="">Product 2</option></select> </td><td style="width:120px"> <input type="number" value="" class="form-control m-auto" style="min-width: 65px;" name="" placeholder=""> </td><td style="width:120px"> <input type="number" value="" class="form-control m-auto" style="min-width: 65px;" name=""> </td><td style="width:120px"> <input type="text" value="" class="form-control m-auto" style="min-width: 65px;" name=""> </td><td class="text-right"> <a href="javascript:void(0);" class="rqst_pdt_del">X</a></td></tr>');
		
		
    });
   
    $(document).on('click', '.rqst_pdt_del', function(){  
         $(this).parents('tr').remove();
    }); 
	
</script>


<script>
	
	var i = 0;
       
    $("#addproductproperty2").click(function(){
   
        i++;
   
        $("#dynamicTable2").append('<tr><td><input type="text" value="" class="form-control" placeholder="" style="min-width: 110px;" name=""></td><td style="width:180px"> <select name="Status" class="my-select form-control"> <option value="">Product</option> <option value="">Product 1</option> <option value="">Product 2</option></select> </td><td style="width:120px"> <input type="number" value="" class="form-control m-auto" style="min-width: 65px;" name="" placeholder=""> </td><td style="width:120px"> <input type="number" value="" class="form-control m-auto" style="min-width: 65px;" name=""> </td><td style="width:120px"> <input type="text" value="" class="form-control m-auto" style="min-width: 65px;" name=""> </td><td class="text-right"> <a href="javascript:void(0);" class="rqst_pdt_del">X</a></td></tr>');
		
		
    });
   
    $(document).on('click', '.rqst_pdt_del', function(){  
         $(this).parents('tr').remove();
    }); 
	
</script>
	
@endsection