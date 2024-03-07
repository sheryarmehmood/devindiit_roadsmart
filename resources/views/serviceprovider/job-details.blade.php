@extends('serviceprovider.layouts.app')
@section('title', 'Job Details')
@section('head')
<style>

   .card-table .table td, 
   .card-table .table th
   {
      padding: 12px 0.75rem;  
   }
</style>
@endsection
@section('content')
   <div class="content container-fluid addorder">
      <div class="page-header">
         <div class="row">
            <div class="col">
               <h3 class="page-title d-flex align-items-center">#1002 <span class="badge badge-warning fontpen mx-2">In-Progress</span> </h3>
               <p>15 August 2022 at 2:01 pm for job # 1056</p>
            </div>
            <div class="col text-right">
              <div class="actionMore d-flex align-items-center justify-content-end">
                  <a href="javascript:void(0)" class="ediio ml-3"> Restock </a>
                  <a href="javascript:void(0)" class="ediio ml-3"> Return Items </a>
                  <span class="nav-item dropdown noti-dropdown mx-3">
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
				  <a href="{{route('seller.edit_job')}}" class="btn btn-primary mr-2">Edit</a>
                  <a href="{{route('seller.jobs')}}" class="btn btn-primary mr-2">Back</a>
               
              </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-8">
			<div class="card card-table mb-3">
               <div class="card-body p-2 py-3 px-4">
                  
				  <div class="viewBox">
                     <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-3">Repairs & Replacement</h3>
                     </div>
					 <div class="details_selectedServices">
						 <ul class="pl-3 mb-2">
							<li>Brake Replacement</li>
							<li>Electrical Diagnosis</li>
						 </ul>
					 </div>
					
					 </div>
					 
               </div>
            </div>
			
            <div class="card card-table mb-3">
               <div class="card-body p-2 py-3 px-4">
                  <div class="d-flex justify-content-between align-items-center">
                     <h3 class="mb-0">Products</h3>
                 </div>
                  <div class="viewBox table-responsive pt-3 product-add-table">
    						<table class="table">
    							<tbody>
    								<tr>
    									
    									<th>Date</th>
    									<th>Description</th>
    									<th>Quantity</th>								
    									<th>Cost</th>								
    									<th>Vendor</th>								
    									
    								</tr>
    								<tr>
    									
    									<td>10 Aug</td>
    									<td>Bosch Front Brakes  MR2</td>
    									<td style="width:120px">
    										1
    									</td>
    									<td>K234</td>
    									<td>Bluesky</td>
    									
    								</tr>
    								<tr>
    									
    									<td>10 Aug</td>
    									<td>Brake Replacement</td>
    									<td style="width:120px">
    										2
    									</td>
    									<td>K1,000</td>
    									<td>Bluesky</td>
    									
    								</tr>
    								<tr>
    									
    									<td>10 Aug</td>
    									<td>Tune Up</td>
    									<td style="width:120px">
    										1
    									</td>
    									<td>K1,000</td>
    									<td>Bluesky</td>
    									
    								</tr>
    							</tbody> 
    						</table>
    					</div>
    					                
               </div>
            </div>
            
			
			      <div class="card mb-4 overflow-visible"> 
                   <div class="card-body">
                      <div class="d-block">
                         <h3 class="mb-2">Description Of Fault & Works Carried Out</h3>
						 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                      </div>                   
                         
                   </div>
                </div> 
                <div class="card mb-4 overflow-visible"> 
                   <div class="card-body">
                      <div class="d-block">
                         <h3 class="mb-2">Details Of Items That Need Attention</h3>
						  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                      </div>                   
                  </div>
                </div>
           
            
         </div>
         <div class="col-md-4">
			
            <div class="card card-table mb-3">
               <div class="card-body p-2 py-3 px-4">
                  <div class="d-flex justify-content-between align-items-center">
                     <h3 class="mb-0">Notes</h3>
                  </div>
                  <div class="chat-search mt-32">
                     <p class="text-muted">Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                  </div>
               </div>
            </div>
			<div class="card card-table mb-3">
               <div class="card-body p-2 py-3 px-4">
                  <div class="d-flex justify-content-between align-items-center">
                     <h3 class="mb-2">Request</h3>
                  </div>
                   <div class="TagsCardLists">
					<span class="tagsitem mt-0 mb-2">#1HGRF3487HS </span>
					<span class="tagsitem mt-0 mb-2">#4PDFDFY56CH </span>
                   
                  </div>
                  	
               </div>
            </div>
			<div class="card card-table mb-3">
               <div class="card-body p-2 py-3 px-4">
                  <div class="d-flex justify-content-between align-items-center">
                     <h3 class="mb-2">Vehicle</h3>
                  </div>
                 
                  <p class="text-muted">Toyota Hilux, ABC 2316</p>
               </div>
            </div>
			 <div class="card card-table mb-4">
    				<div class="card-body p-2 py-3 px-4">
						 <div class="d-flex justify-content-between align-items-center">
							 <h3 class="mb-0">Reports</h3>
							
						  </div>
							<div class="mt-3">
								<ul  class="rightsidelistitems ">
									<li><a href="#">Assessment Report </a> <span class="repairsreportbtn" data-toggle="modal" data-target="#create-report-popup"><i class="fa fa-eye" aria-hidden="true"></i></span></li>
									<li><a href="#">Inspection Report </a><span class="repairsreportbtn" data-toggle="modal" data-target="#create-report-popup"><i class="fa fa-eye" aria-hidden="true"></i></span></li>
									<li><a href="#">Repairs Report </a><span class="repairsreportbtn" data-toggle="modal" data-target="#create-report-popup"><i class="fa fa-eye" aria-hidden="true"></i></span></li>
								</ul>
							</div>
    				</div>
                </div> 
            <div class="card card-table mb-3">
               <div class="card-body p-2 py-3 px-4">
                  <div class="d-flex justify-content-between align-items-center">
                     <h3 class="mb-0">Tags</h3>
                  </div>
                  <div class="TagsCardLists">
				  <span class="tagsitem">Break</span>
                   
                  </div>
               </div>
            </div>
			<div class="card card-table mb-4 overflow-visible">
    				<div class="card-body p-2 py-3 px-4">
    					<div class="d-flex justify-content-between align-items-center">
    						<h3 class="mb-3">Status</h3>
    					</div>
    					<p class="text-muted">In-Progress</p>
    				</div>
                </div>	

         </div>
      </div>
   </div>


<!-- Shipping Popup -->
<div class="modal fade addorderpopup" id="shipping-popup" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-body pb-0">
            <div class="card card-table mb-0">
               <div class="card-body addorder p-0imp">
                  <div class="d-flex justify-content-between align-items-center">
                     <h3 class="mb-0">Edit shipping address</h3>
                  </div>
                  <div class="viewBox container px-0 mt-3">
                     <div class="row">                        
                        <div class="col-md-12 mb-3">
                           <div class="form-group">
                              <label>Country/region</label>
                              <select name="category"  class="my-select form-control">
                                 <option value="">India</option>
                                 <option value="">Iceland</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>First name</label>
                              <input type="text" class="form-control">
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>Last name</label>
                              <input type="text" class="form-control">
                           </div>
                        </div>
                        <div class="col-md-12">
                           <div class="form-group">
                              <label>Company</label>
                              <input type="text" class="form-control">
                           </div>
                        </div>
                        <div class="col-md-12">
                           <div class="form-group">
                              <label>Address</label>
                              <input type="text" class="form-control">
                           </div>
                        </div>
                        <div class="col-md-12">
                           <div class="form-group">
                              <label>Apartment, suite, etc.</label>
                              <input type="text" class="form-control">
                           </div>
                        </div>

                        <div class="col-md-12">
                           <div class="row">
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label>City</label>
                                    <input type="text" class="form-control">
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label>State</label>
                                    <select name="category"  class="my-select form-control">
                                       <option value="">Assam</option>
                                       <option value="">Bihar</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label>PIN code</label>
                                    <input type="text" class="form-control">
                                 </div>
                              </div>
                           </div>
                        </div>

                        <div class="col-md-12">
                           <div class="form-group">
                              <label>Phone</label>
                              <input type="text" class="form-control">
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
<!-- End Shipping -->
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
                        <input type="text" class="form-control" id="search-bar" autocomplete="off" placeholder="Search Reg. number, VIN number">
                        <!-- User Dropdown Custom Ja For Change Value -->
                        <ul class="output" style="display:none;">
                         </ul>
                     </div>
                  </div>
                  <div class="viewBox table-responsive pt-3 px-3 hideborder">
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
<!-- Coninformation Popup -->
<div class="modal fade addorderpopup" id="coninformation-popup" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-body pb-0">
            <div class="card card-table mb-0">
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
<!-- End Coninformation -->

<div class="modal fade addorderpopup" id="addorder-popup" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-body pb-0">
            <div class="card card-table mb-0">
               <div class="card-body addorder p-0imp">
                  <div class="d-flex justify-content-between align-items-center">
                     <h3 class="mb-0">All Products</h3>
                  </div>
                  <div class="chat-search d-flex justify-content-between align-items-center">
                     <div class="input-group">
                        <div class="input-group-prepend">
                           <i class="fas fa-search"></i>
                        </div>
                        <input type="text" class="form-control" placeholder="Search">
                     </div>
                     <a class="btn btn-primary filter-btn ml-2" href="javascript: void(0);" id="filter_search">
                        <i class="fas fa-filter text-white"></i>
                     </a>
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
                              <td class="text-center "> -1 Available </td>
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
                              <td class="text-left pl-0">
                                 <div class="avatar avatar-sm">
                                    <img class="avatar-img rounded-circle" alt="" src="assets/img/engine.jpg">
                                 </div>
                              </td>
                              <td class="text-left pl-0 text-wrap"> Brakes Skimming </td>
                              <td class="text-center "> </td>
                              <td class="text-right pr-0"> K 8,000.00 </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-success">Order</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
         </div>
      </div>
   </div>
</div>

<!-- Reports Popup -->
<div class="modal fade addorderpopup" id="reports-popup" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-body pb-0">
            <div class="card card-table mb-0">
               <div class="card-body addorder p-0imp">
                  <div class="d-flex justify-content-between align-items-center">
                     <h3 class="mb-0">Edit note</h3>
                  </div>
                  <div class="viewBox container px-0 mt-3">
                     <div class="row">                        
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>Bookings</label>
                              <input type="text" class="form-control px-3" placeholder="Urgent, reviewed, wholesale">
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>Tags</label>
                              <input type="text" class="form-control px-3" placeholder="Urgent, reviewed, wholesale">
                           </div>
                        </div>
                        <div class="col-md-12">
                           <div class="form-group">+
                              <label>Attachments</label>
                              <div class="chat-search">
                                 <div class="input-group mb-3">
                                    <button class="btn btn-success">Upload</button>
                                 </div>
                              
                              </div>
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
<!-- End Discount -->

<!-- Notes Popup -->
<div class="modal fade addorderpopup" id="notes-popup" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-body pb-0">
            <div class="card card-table mb-0">
               <div class="card-body addorder p-0imp">
                  <div class="d-flex justify-content-between align-items-center">
                     <h3 class="mb-0">Edit note</h3>
                  </div>
                  <div class="viewBox container px-0 mt-3">
                     <div class="row">                        
                        <div class="col-md-12">
                           <div class="form-group">
                              <label>Notes</label>
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
<!-- End Discount -->

<!-- Notes Popup -->
<div class="modal fade addorderpopup" id="request-tracking-popup" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-body p0">
            <div class="card-table mb-0">
               <div class="card-body addorder p-0imp">
                  <div class="d-flex justify-content-between align-items-center">
                     <h3 class="mb-0">Tracking Status</h3>
                  </div>
                  <div class="viewBox container px-0 mt-3">
					
                     <div class="timelinebox">
                     <ul class="timeline">
                        
                        <li class="event commentli">
                           <h2 class="">Brake Discs</h2>
                            <span class="username"><i class="fa fa-check" aria-hidden="true"></i></span>
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<span class="ml-auto text-right">15 Minutes ago</span></p>
                        </li>
                        <li class="event ">
							   <h2 class="">Tune Up</h2>
							  
						 <span class="username"><i class="fa fa-check" aria-hidden="true"></i></span>
                           <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque<span class="ml-auto text-right">1 Minutes ago</span></p>
                        </li>
                        <li class="event undone-services">
						 <h2 class="todaytex">Brake Discs Replacement</h2>
                           <p class="d-flex">In-Progress </p>
                        </li>
                       
                     </ul>
                  </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-danger" id="dismiss" data-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
</div>

<!-- End Discount -->


<div class="modal fade addorderpopup jobdetailsreportpopup" id="create-report-popup" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-body p0">
            <div class="card-table mb-0">
               <div class="card-body addorder p-0imp">
                  <div class="d-flex justify-content-between align-items-center">
                     <h3 class="mb-0">Repair Report Details</h3>
                  </div>
                  <div class="viewBox container px-0 mt-3">
                     <div class="row">
						 <div class="col-md-6 mb-3">
                           <div class="form-group">
                              <label>Service</label>
							  <p>Repairs</p>
                           </div>
                        </div>
						 <div class="col-md-6 mb-3">
                           <div class="form-group">
                              <label>Report Date</label>
							  <p>Aug 21, 11:30 PM</p>
                           </div>
                        </div>
						
						<div class="col-md-6  mb-3">
                           <div class="form-group">
                              <label>Registration No.</label>
							  <p>12345678</p>
                           </div>
                        </div>
                        <div class="col-md-6 mb-3">
                           <div class="form-group">
                              <label>Vehicle Make </label>
							  <p>Toyota</p>
                             
                           </div>
                        </div>
                       
					    <div class="col-md-6 mb-3">
                           <div class="form-group">
                              <label>Vehicle Model</label>
							  <p>840i Gran Couple</p>
                              
                           </div>
                        </div>
						
						<div class="col-md-12 mb-3">
                           <div class="form-group">
                              <label>Reported On</label>
							  <ul>
								<li>Oil Leak</li>
								<li>Ball Joint</li>
								<li>Inner Tie Rod</li>
							  </ul>
                             
                           </div>
                        </div>
						
						
                     </div>
                     
                  </div>
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-danger" id="dismiss" data-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
</div>


@endsection

