@extends('serviceprovider.layouts.app') 
@section('title', 'Edit Job') 
@section('content') 
<div class="content container-fluid estimate_table addjob_page pb-3">
    <div class="page-header">
        <div class="row mb-4">
            <div class="col">
                 <h3 class="page-title">#1008<span class="badge badge-warning fontpen mx-2">In-Progress</span></h3>
                <p>15 August 2022 at 2:01 pm for job # 1056</p>
            </div>
            <div class="col-auto text-right all-product-right">
                <div class="actionMore d-flex align-items-center">
                    <a href="javascript:void(0)" class="ediio mr-3"> Live </a>
                    <span class="nav-item dropdown noti-dropdown mr-3">
                        <a href="javascript:void(0)" class="dropdown-toggle nav-link ediio" data-toggle="dropdown">
                            More Action<span class="badge badge-pill"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right notifications">
                            <div class="noti-content">
                                <ul class="notification-list">
                                    <li class="notification-message">
                                        <a href="javascript:void(0)">Duplicate</a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="javascript:void(0)">Ship Items</a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="javascript:void(0)">Cancel Order</a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="javascript:void(0)">Mark As Fulfilled</a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="javascript:void(0)">Archive</a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="javascript:void(0)">Create Reports</a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="javascript:void(0)">Print Order Page</a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="javascript:void(0)">Print Packing Slips</a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="javascript:void(0)">View Order Status Page</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </span>
                    <a class="btn btn-primary mr-3" href="{{route('seller.jobs')}}">Save</a>
                    <a class="btn btn-primary" href="{{route('seller.jobs')}}">Back</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="card mb-4 overflow-visible"> 
                   <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center mb-2">
                         <h3 class="mb-0">Services</h3>
                          <div class="d-flex justify-content-between align-items-center">
                            <a href="javascript: void(0);">Add</a>
                         </div>
                      </div>                   
                         <div class="row">
						 
						 <div class="col-lg-12">
    							<div class="form-group">
									  <label>Job Title</label>
									  <input type="text" class="form-control" placeholder="Enter Job Title" value="Repairs & Replacement" />
								 </div>
    							<!---div class="form-group d-inline-block w-100">
    								<label class="col-form-label">Service</label>
    								<select multiple=""  class="my-select w-100" id="selectservicetype">
									    <option value="" >Select Service</option>
                                        <option value="repair" selected>Repair</option>
                                     </select>
    							</div--->
								<div class="selectserviceoutput">
										<div class="form-group">
											<label class="col-form-label">Requested Services</label>
											  <select name="Vehicles" multiple="" class="label ui selection fluid dropdown">
											   <option value="">Select Requested Services</option>
											    <option value="5" selected>Brake Replacement</option>
												 <option value="4" selected>Electrical Diagnosis</option>
											   <option value="1">Shock Absorber Replacement</option>
											   <option value="2">Shoe Replacement</option>
											   <option value="3">Tire Replacement</option>
											 
											  
											</select>
										</div>
								</div>
    						</div>
    					  </div>
                   </div>
                </div>
                <div class="card card-table mb-4">
    				<div class="card-body p-2 py-3 px-4">
    					<div class="d-flex justify-content-between align-items-center">
    						<h3 class="mb-0">Products</h3>
    						<div class="d-flex justify-content-between align-items-center">
    							<a data-toggle="modal" data-target="#addcustom-popup" href="javascript: void(0);">Add custom</a>
    						</div>
    					</div>
    					<div class="chat-search d-flex justify-content-between align-items-center">
    						<div class="input-group">
    							<div class="input-group-prepend">
    								<i class="fas fa-search"></i>
    							</div>
    							<input type="text" class="form-control" id="launch-modal" placeholder="Search Products & Services" data-toggle="modal" data-target="#addsearchproduct-popup">
    						</div>
    						<a class="btn btn-primary ml-2" href="javascript: void(0);">
    							Browse
    						</a>
    					</div>
    					<div class="viewBox table-responsive pt-3 product-add-table">
    						<table class="table">
    							<tbody>
    								<tr>
    									<th style="width:50px"><input name="select_all" value="1" type="checkbox"></th>
    									<th>Date</th>
    									<th>Description</th>
    									<th>Quantity</th>								
    									<th>Cost</th>								
    									<th>Vendor</th>								
    									<th ></th>
    								</tr>
    								<tr>
    									<td style="width:50px"><input type="checkbox" name="type" value=""></td>
    									<td>10 Aug</td>
    									<td>Bosch Front Brakes  MR2</td>
    									<td style="width:120px">
    										<input type="number" value="1" class="form-control m-auto" style="min-width: 65px;" name="">
    									</td>
    									<td>K234</td>
    									<td>Bluesky</td>
    									<td class="text-right"><a href="#" class="crosdel">X</a> </td>
    								</tr>
    								<tr>
    									<td style="width:50px"><input type="checkbox" name="type" value=""></td>
    									<td>10 Aug</td>
    									<td>Brake Replacement</td>
    									<td style="width:120px">
    										<input type="number" value="1" class="form-control m-auto" style="min-width: 65px;" name="">
    									</td>
    									<td>K1,000</td>
    									<td>Bluesky</td>
    									<td class="text-right"><a href="#" class="crosdel">X</a> </td>
    								</tr>
    								<tr>
    									<td style="width:50px"><input type="checkbox" name="type" value=""></td>
    									<td>10 Aug</td>
    									<td>Tune Up</td>
    									<td style="width:120px">
    										<input type="number" value="1" class="form-control m-auto" style="min-width: 65px;" name="">
    									</td>
    									<td>K1,000</td>
    									<td>Bluesky</td>
    									<td class="text-right"><a href="#" class="crosdel">X</a> </td>
    								</tr>
    							</tbody> 
    						</table>
    					</div>
    					<a href="javascript:Void(0)" class="btn btn-primary product-save-btn">Update Request</a>
    				</div>
                </div> 
                <div class="card mb-4 overflow-visible"> 
                   <div class="card-body">
                      <div class="d-block">
                         <h3 class="mb-3">Description Of Fault & Works Carried Out</h3>
                      </div>                   
                         <div class="row">
    						<div class="col-lg-12">
    							<div class="form-group">
    								<textarea type="text" class="form-control h_100" name="" value="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</textarea>
    							</div>
    						</div>
                         </div>
                   </div>
                </div> 
                <div class="card mb-4 overflow-visible"> 
                   <div class="card-body">
                      <div class="d-block">
                         <h3 class="mb-3">Details Of Items That Need Attention</h3>
                      </div>                   
                         <div class="row">
    						<div class="col-lg-12">
    							<div class="form-group">
    								<textarea type="text" class="form-control h_100" name="" value="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</textarea>
    							</div>
    						</div>
                         </div>
                   </div>
                </div>
            </div> 
            <div class="col-md-4">
				 <div class="card card-table mb-4">
    				<div class="card-body p-2 py-3 px-4">
    					<div class="d-flex justify-content-between align-items-center">
    						<h3 class="mb-0">Notes</h3>
    					</div>
    					<div class="chat-search">
    						<div class="input-group">
    							<textarea class="form-control" style="min-height: 70px; padding-left: 15px;">Sed ut perspiciatis unde omnis iste natus error sit voluptatem</textarea>
    						</div>
    					</div>
    				</div>
                </div>
                <div class="card card-table mb-4 overflow-visible">
    				<div class="card-body p-2 py-3 px-4">
    					<div class="d-flex justify-content-between align-items-center">
    						<h3 class="mb-3">Request</h3>
    					</div>
    					<div class="form-group">
											  <select name="Vehicles" class="my-select w-100">
											   <option value="">Select Requests</option>
											   <option value="1">#1HGRF3487HS</option>
											   <option value="2" selected>#4PDFDFY56CH</option>
											   <option value="3">#9MMFABC56CH</option>
											   <option value="4">#1HGRF3487HS</option>
											   <option value="5">#4PDFDFY56CH</option>
											   <option value="6">#9MMFABC56CH</option>
											  
											</select>
										</div>
    				</div>
                </div>
                <div class="card card-table mb-4">
    				<div class="card-body p-2 py-3 px-4">
    					<div class="d-flex justify-content-between align-items-center">
    						<h3 class="mb-0">Vehicle</h3>
    					</div>
                 <div class="customerLists">
					<div class="customerLists-item">
						<h4 class="d-flex">Toyota Hilux, ABC 2316  <a data-toggle="modal" data-target="#selectvehicle-popup" href="javascript: void(0);"><i class="fa fa-pencil-alt" aria-hidden="true"></i></a></h4>
						
					</div>
				 </div>
    				</div>
                </div>
                <div class="card card-table mb-4">
    				<div class="card-body p-2 py-3 px-4">
						 <div class="d-flex justify-content-between align-items-center">
							 <h3 class="mb-0">Reports</h3>
							 <div>
								
							</div>
						  </div>
							<div class="mt-3">
								<ul  class="rightsidelistitems ">
									<li><a href="#">Assessment Report </a> <span class="repairsreportbtn" data-toggle="modal" data-target="#create-report-popup"><i class="fa fa-pencil-alt" aria-hidden="true"></i></span></li>
									<li><a href="#">Inspection Report </a><span class="repairsreportbtn" data-toggle="modal" data-target="#create-report-popup"><i class="fa fa-pencil-alt" aria-hidden="true"></i></span></li>
									<li><a href="#">Repairs Report </a><span class="repairsreportbtn" data-toggle="modal" data-target="#create-report-popup"><i class="fa fa-pencil-alt" aria-hidden="true"></i></span></li>
								</ul>
							</div>
    				</div>
                </div> 
                <div class="card card-table mb-4">
    				<div class="card-body p-2 py-3 px-4">
    					<div class="d-flex justify-content-between align-items-center">
    						<h3 class="mb-0">Tags</h3>
    					</div>
    					<div class="chat-search">
    						<div class="input-group">
    							<input type="text" id="exist-values" class="tagged form-control px-3" data-removeBtn="true" placeholder="Add Tags" value="break">
    						</div>
    					</div>
    				</div>
                </div>   
			<div class="card card-table mb-4 overflow-visible">
    				<div class="card-body p-2 py-3 px-4">
    					<div class="d-flex justify-content-between align-items-center">
    						<h3 class="mb-3">Status</h3>
    					</div>
    					<div class="form-group d-inline-block w-100">
    						<select class="my-select form-control">
                                <option value="Confirmed" >Confirmed</option>
								<option value="In Progress" selected>In Progress</option>
                                <option value="Completed">Completed</option>
                             </select>
    					</div>
    				</div>
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
                        <div class="col-md-4">
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
                        <div class="col-md-2">
                           <div class="form-group">
                              <label>Quantity</label>
                              <input type="number" class="form-control" value="1" />
                           </div>
                        </div>
						 <div class="col-md-3">
                           <div class="form-group">
                              <label>Vendor</label>
                              <input type="text" class="form-control" value="" />
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



<div class="modal fade addorderpopup" id="create-report-popup" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-body p0">
            <div class="card-table mb-0">
               <div class="card-body addorder p-0imp">
                  <div class="d-flex justify-content-between align-items-center">
                     <h3 class="mb-0">Edit Report</h3>
                  </div>
                  <div class="viewBox container px-0 mt-3">
                     <div class="row">
						 <div class="col-md-12 mb-3">
                           <div class="form-group">
                              <label>Service</label>
                              <select class="my-select form-control">
									<option>Select Service</option>
									<option value="repairs" selected>Repairs</option>
									<option value="insurance">Insurance</option>
									<option value="compliance">Compliance</option>
									<option value="security">Security</option>
									<option value="roadside-assistance">Roadside Assistance</option>
									<option value="others">Others</option>
							  </select>
                           </div>
                        </div>
						
						<div class="col-md-12">
                           <div class="form-group mb-3">
                              <label>Registration No.</label>
                              <input type="text" class="form-control" id="" value="12345678">
                           </div>
                        </div>
                        <div class="col-md-12 mb-3">
                           <div class="form-group">
                              <label>Vehicle Make </label>
                              <select class="my-select form-control">
									<option>Select Vehicle Make</option>
									<option value="Toyota" selected>Toyota</option>
									<option value="Audi">Audi</option>
									<option value="BMW">BMW</option>
									<option value="Buick ">Buick </option>
							  </select>
                           </div>
                        </div>
                       
					    <div class="col-md-12 mb-3">
                           <div class="form-group">
                              <label>Vehicle Model</label>
                              <select class="my-select form-control">
									<option>Select Vehicle Model</option>
									<option value="330i">330i </option>
									<option value="330ixDrive">330ixDrive </option>
									<option value="840i">840i</option>
									<option value="840i Gran Couple " selected>840i Gran Couple </option>
							  </select>
                           </div>
                        </div>
						
						<div class="col-md-12 mb-3">
                           <div class="form-group">
                              <label>Reported On</label>
                              <select multiple="" class="label ui selection fluid dropdown">
									<option value="">Select Option </option>
									<option value="1" selected>Oil Leak </option>
									<option value="2" selected>Ball Joint </option>
									<option value="3">Inner Tie Rod</option>
							  </select>
                           </div>
                        </div>
						
						
                     </div>
                     
                  </div>
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-success" data-dismiss="modal">Update</button>
            <button type="button" class="btn btn-danger" id="dismiss" data-dismiss="modal">Cancel</button>
         </div>
      </div>
   </div>
</div>


@endsection

@section('scripts')
<script>
	$(document).ready(function(){
	 	$('#selectservicetype').change(function(){
					$('.selectserviceitem').hide();
					$('#' + $(this).val()).show();
				});
	});
</script>

@endsection
