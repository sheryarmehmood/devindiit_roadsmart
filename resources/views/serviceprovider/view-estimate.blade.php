@extends('serviceprovider.layouts.app')
@section('title', 'Requests')
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
               <h3 class="page-title d-flex align-items-center">#1002 <span class="badge badge-warning fontpen mx-2">Payment Pending</span> <span class="badge badge-warning fontpen">Partially Completed</span></h3>
               <p>25 January 2022 at 10:56 am from Draft Request</p>
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
                                     <a href="javascript:void(0)">
                                         Inner Link
                                     </a>
                                 </li>
                                 <li class="notification-message">
                                     <a href="javascript:void(0)">
                                         Inner Link
                                     </a>
                                 </li>
                             </ul>
                         </div>
                     </div>
                  </span>
				  <a href="{{route('seller.edit_request')}}" class="btn btn-primary mr-2">Edit</a>
                  <a href="{{route('seller.estimates')}}" class="btn btn-primary mr-2">Back</a>
                  <nav aria-label="Page navigation example">
                    <ul class="pagination mb-0">
                     <li class="page-item">
                        <a class="page-link" href="#">
                           <i class="fa fa-chevron-left" aria-hidden="true"></i>
                        </a>
                     </li>
                     <li class="page-item">
                        <a class="page-link" href="#">
                           <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        </a>
                     </li>
                    </ul>
                  </nav>
              </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-8">
            <div class="card card-table mb-3">
               <div class="card-body p-2 py-3 px-4">
                  <div class="d-flex justify-content-between align-items-center">
                     <h3 class="mb-0 text-danger">Cancelled <span class="text-muted">#1002-F2</span></h3>
                     
                     <span class="nav-item dropdown noti-dropdown actionMore addorbef">
                        <a href="javascript:void(0)" class="dropdown-toggle nav-link ediio" data-toggle="dropdown">
                            <svg viewBox="0 0 20 20" class="threedost" focusable="false" aria-hidden="true"><path d="M6 10a2 2 0 1 1-4.001-.001A2 2 0 0 1 6 10zm6 0a2 2 0 1 1-4.001-.001A2 2 0 0 1 12 10zm6 0a2 2 0 1 1-4.001-.001A2 2 0 0 1 18 10z"></path></svg>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right notifications">
                            <div class="noti-content">
                                <ul class="notification-list">
                                   <li class="notification-message">
                                        <a href="javascript:void(0)">
                                            Cancel Request
                                        </a>
                                    </li>
									 <li class="notification-message">
                                        <a href="javascript:void(0)">
                                            Mark as Completed
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                     </span>
                  </div>
                  <div class="viewBox table-responsive pt-3">
                     <table class="table">
                        <tbody>
                           <tr class="estimates-services-details">
                              <td class="text-left pl-0">
                                 <div class="fileboxdiv">
                                    <i class="far fa-file-archive"></i>
                                    <span>1</span>
                                 </div>
                              </td>
							  <td colspan="2" class="text-left pl-0 pr-0">
											<div class="d-flex justify-content-between">
										    	<p>Tune Up</p>
										    	<p>K 8,000.00 * 1</p>
										    	<p>K 1,000.00</p>
										    </div>
											 <div class="requestdetail_info">
                                                <div class="Request_card">
                                                    <div class="Request_header border-0">
                                                        <a class="Requestlink_btn py-0 collapsed tooltips_anchor" href="#vehicledetails1" data-toggle="collapse"><span class="custom-tooltips" title="ABX 2312">BMW X3</span> </a> 
                                                    </div>
                                                    <div id="vehicledetails1" class="collapse pt-3"  data-parent="#accordion3">
                                                        <div class="Request_body table-responsive border-top">
                                                             <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Description</th>
                                                                        <th>Type</th>
                                                                        <th>Qty</th>
                                                                        <th>Amount</th>
                                                                        <th>Total</th>
                    												</tr>	
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Tune Up</td>
                                                                        <td>Labour</td>
                                                                        <td>1</td>
                                                                        <td>K 800</td>
                                                                        <td>K 800</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>	 
							  </td>
                            
                             
                           </tr>
						   
							
							<tr class="estimates-services-details">
                              <td class="text-left pl-0">
                                 <div class="fileboxdiv">
                                    <i class="far fa-file-archive"></i>
                                    <span>1</span>
                                 </div>
                              </td>
							  <td colspan="2" class="text-left pl-0 pr-0">
											<div class="d-flex justify-content-between">
										    	<p>Tune Up</p>
										    	<p>K 8,000.00 * 1</p>
										    	<p>K 1,000.00</p>
										    </div>
											 <div class="requestdetail_info">
                                                <div class="Request_card">
                                                    <div class="Request_header border-0">
                                                        <a class="Requestlink_btn py-0 collapsed tooltips_anchor" href="#vehicledetails2" data-toggle="collapse" ><span class="custom-tooltips" title="ABX 2312">BMW X3</span></a> 
														
														
                                                    </div>
                                                    <div id="vehicledetails2" class="collapse pt-3"  data-parent="#accordion3">
                                                        <div class="Request_body table-responsive border-top">
                                                              <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Description</th>
                                                                        <th>Type</th>
                                                                        <th>Qty</th>
                                                                        <th>Amount</th>
                                                                        <th>Total</th>
                    												</tr>	
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
																		<td>Spark Plugs</td>
																		<td>Part</td>
																		<td>4</td>
																		<td>K 150</td>
																		<td>K 600</td>
																	</tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>	 
							  </td>
                            
                             
                           </tr>
						   
                           <tr>
                              <td colspan="4" class="text-left pl-0"> Booking Date: <strong>25 January 2022</strong> </td>
                           </tr> 
                        </tbody>
                     </table>
                  </div>
                    <!---div class="requestdetail_info">
                        <div id="accordion">
                            <div class="Request_card">
                                <div class="Request_header" id="headingOne">
                                    <h5 class="Requestlink_btn collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Request Details
                                    </h5>
                                </div>
                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="Request_body table-responsive">
                    					<table class="table">
                                            <thead>
                                               <tr>
                                                  <th>Description</th>
                                                  <th>Type</th>
                                                  <th>Qty</th>
                                                  <th>Amount</th>
                                                  <th>Total</th>
                                            </thead>
                                            <tbody>
                    							<tr>
                    								<td>Tune Up</td>
                    								<td>Labour</td>
                    								<td>1</td>
                    								<td>K 800</td>
                    								<td>K 800</td>
                    							</tr>
                    							<tr>
                    								<td>Spark Plugs</td>
                    								<td>Part</td>
                    								<td>4</td>
                    								<td>K 150</td>
                    								<td>K 600</td>
                    							</tr>
                                            </tbody>
                                         </table>                                                    
                                    </div>
                                </div>
                            </div>                                     
                        </div>                   
                    </div--->                   
               </div>
            </div>
            <div class="card card-table mb-3">
               <div class="card-body p-2 py-3 px-4">
                  <div class="d-flex justify-content-between align-items-center">
                     <h3 class="mb-0 text-success">Completed <span class="text-muted">#1003-F2</span></h3>
                     
                     <span class="nav-item dropdown noti-dropdown actionMore addorbef">
                        <a href="javascript:void(0)" class="dropdown-toggle nav-link ediio" data-toggle="dropdown">
                            <svg viewBox="0 0 20 20" class="threedost" focusable="false" aria-hidden="true"><path d="M6 10a2 2 0 1 1-4.001-.001A2 2 0 0 1 6 10zm6 0a2 2 0 1 1-4.001-.001A2 2 0 0 1 12 10zm6 0a2 2 0 1 1-4.001-.001A2 2 0 0 1 18 10z"></path></svg>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right notifications">
                            <div class="noti-content">
                                <ul class="notification-list">
                                   <li class="notification-message">
                                        <a href="javascript:void(0)">
                                           Undo Completion
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                     </span>
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
                              <td class="text-left pl-0"> Brakes Shoes For Jeep Cherokee </br>
                                    <a href="javascript:void(0)" class="tooltips_anchor" data-toggle="modal" data-target="#addvehicle-popup">
									  <span class="custom-tooltips" title="BBA2300"> Toyota Hilux  </span>
                                    </a>
									</td>
                              <td class="text-center "> K 8,000.00 * 1 </td>
                              <td class="text-right pr-0"> K 8,000.00 </td>
                           </tr>
                           <tr>
                              <td class="text-left pl-0">
                                 <div class="fileboxdiv">
                                    <i class="far fa-file-archive"></i>
                                    <span>1</span>
                                 </div>
                              </td>
                              <td class="text-left pl-0"> Brakes Shoes For Jeep Cherokee </br>
                                      <a href="javascript:void(0)" class="tooltips_anchor" data-toggle="modal" data-target="#addvehicle-popup">
									  <span class="custom-tooltips" title="BBA2300"> Toyota Hilux  </span>
                                    </a>
									</td>
                              <td class="text-center "> K 8,000.00 * 1 </td>
                              <td class="text-right pr-0"> K 8,000.00 </td>
                           </tr>
                      
                        </tbody>
                     </table>
                  </div>
                    <div class="requestdetail_info">
                        <div id="accordion2">
                            <div class="Request_card">
                                <div class="Request_header" id="headingOne">
                                    <h5 class="Requestlink_btn collapsed" data-toggle="collapse" data-target="#collapsetwo" aria-expanded="true" aria-controls="collapsetwo">
                                            Request Details
                                    </h5>
                                </div>
                                <div id="collapsetwo" class="collapse" aria-labelledby="headingtwo" data-parent="#accordion2">
                                    <div class="Request_body table-responsive">
                    					<table class="table">
                                            <thead>
                                               <tr>
                                                  <th>Description</th>
                                                  <th>Type</th>
                                                  <th>Qty</th>
                                                  <th>Amount</th>
                                                  <th>Total</th>
                                            </thead>
                                            <tbody>
                    							<tr>
                    								<td>Tune Up</td>
                    								<td>Labour</td>
                    								<td>1</td>
                    								<td>K 800</td>
                    								<td>K 800</td>
                    							</tr>
                    							<tr>
                    								<td>Spark Plugs</td>
                    								<td>Part</td>
                    								<td>4</td>
                    								<td>K 150</td>
                    								<td>K 600</td>
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
            <div class="card card-table mb-3 overflow-visible">
				<div class="card-body p-2 py-3 px-4">
					<div class="d-flex justify-content-between">
					    <div class="progressmain_div">
    						<!--h3 class="mb-0 text-warning d-inline-block">In Progress(3)</h3-->
    						<h3 class="mb-0 text-warning d-inline-block">In Progress</h3>
    						<a href="javascript:void(0)" class="d-inline-block text-primary ml-3 custom-tooltips" title="ABX 2312" data-toggle="modal" data-target="#addvehicle-popup">
                              BMW X3  
                            </a>
						
							<div class="requestTrackingBtn">
								<h6> Request Tracking</h6>
								<a href="javascript:void(0)" class="d-inline-block text-primary" data-toggle="modal" data-target="#request-tracking-popup">
                                #1HGRF3487HS
								</a>
							</div>
                        </div>            
                        <div class="requestpopup_div ">                        
                            <div class="dropdown trackingRequestbtn d-inline-block mr-2">
                                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Request
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="javascript:void(0)">Brake Replacement</a>
                                    <a class="dropdown-item" href="javascript:void(0)">Tune Up</a>
                                    <a class="dropdown-item" href="javascript:void(0)">More</a>
                                </div>
                            </div>            
    						<span class="nav-item dropdown noti-dropdown actionMore addorbef d-inline-block">
    							<a href="javascript:void(0)" class="dropdown-toggle nav-link ediio" data-toggle="dropdown">
    								<svg viewBox="0 0 20 20" class="threedost" focusable="false" aria-hidden="true"><path d="M6 10a2 2 0 1 1-4.001-.001A2 2 0 0 1 6 10zm6 0a2 2 0 1 1-4.001-.001A2 2 0 0 1 12 10zm6 0a2 2 0 1 1-4.001-.001A2 2 0 0 1 18 10z"></path></svg>
    							</a>
    							<div class="dropdown-menu dropdown-menu-right notifications">
    								<div class="noti-content">
    									<ul class="notification-list">
    									   <li class="notification-message">
    											<a href="javascript:void(0)">
    												Cancel Request
    											</a>
    										</li>
    									   <li class="notification-message">
    											<a href="javascript:void(0)">
    												Create Job
    											</a>
    										</li>
    									</ul>
    								</div>
    							</div>
    						</span>
						</div>
					</div>
					<div class="viewBox table-responsive pt-3 vehicleopen_div">
					    <div class="vehicle_collapse" id="accordion3">
						    <table class="table">
							    <tbody>
								    <tr>
									    <td style="width: 60px;" class="text-left pl-0">
									    	<div class="fileboxdiv">
									    		<i class="far fa-file-archive"></i>
									    		<span>1</span>
									    	</div>
									    </td>
									    <td colspan="2" class="text-left pl-0 pr-0">
										    <div class="d-flex justify-content-between">
										    	<p>Brake Discs</p>
										    	<p>K 1,000.00</p>
										    </div>
                                            <div class="requestdetail_info">
                                                <div class="Request_card">
                                                    <div class="Request_header border-0">
                                                        <a class="Requestlink_btn py-0 collapsed" href="#vehicleone" data-toggle="collapse" >BMW X3</a>
                                                    </div>
                                                    <div id="vehicleone" class="collapse pt-3"  data-parent="#accordion3">
                                                        <div class="Request_body table-responsive border-top">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Description</th>
                                                                        <th>Type</th>
                                                                        <th>Qty</th>
                                                                        <th>Amount</th>
                                                                        <th>Total</th>
                    												</tr>	
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Tune Up</td>
                                                                        <td>Labour</td>
                                                                        <td>1</td>
                                                                        <td>K 800</td>
                                                                        <td>K 800</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Spark Plugs</td>
                                                                        <td>Part</td>
                                                                        <td>4</td>
                                                                        <td>K 150</td>
                                                                        <td>K 600</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>										
									    </td>
							    	</tr>
								    <tr>
									    <td style="width: 60px;" class="text-left pl-0">
									    	<div class="fileboxdiv">
									    		<i class="far fa-file-archive"></i>
									    		<span>1</span>
									    	</div>
									    </td>
								    	<td colspan="2" class="text-left pl-0 pr-0">
										    <div class="d-flex justify-content-between">
										    	<p>Tune Up</p>
										    	<p>K 2,000.00</p>
										    </div>
                                            <div class="requestdetail_info">
                                                <div class="Request_card">
                                                    <div class="Request_header border-0">
                                                        <a class="Requestlink_btn py-0 collapsed" href="#vehicletwo" data-toggle="collapse">BMW X3</a>
                                                    </div>
                                                    <div id="vehicletwo" class="collapse pt-3" data-parent="#accordion3">
                                                        <div class="Request_body table-responsive border-top">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Description</th>
                                                                        <th>Type</th>
                                                                        <th>Qty</th>
                                                                        <th>Amount</th>
                                                                        <th>Total</th>
                    												</tr>	
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Tune Up</td>
                                                                        <td>Labour</td>
                                                                        <td>1</td>
                                                                        <td>K 800</td>
                                                                        <td>K 800</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Spark Plugs</td>
                                                                        <td>Part</td>
                                                                        <td>4</td>
                                                                        <td>K 150</td>
                                                                        <td>K 600</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>										
									    </td>
								    </tr>
								    <tr>
									    <td style="width: 60px;" class="text-left pl-0">
									    	<div class="fileboxdiv">
									    		<i class="far fa-file-archive"></i>
									    		<span>1</span>
									    	</div>
									    </td>
								    	<td colspan="2" class="text-left pl-0 pr-0">
										    <div class="d-flex justify-content-between">
										    	<p>Brake Discs Replacement</p>
										    	<p>K 100.00</p>
										    </div>
                                            <div class="requestdetail_info">
                                                <div class="Request_card">
                                                    <div class="Request_header border-0">
                                                        <a class="Requestlink_btn py-0 collapsed" href="#vehiclethree" data-toggle="collapse">BMW X3</a>
                                                    </div>
                                                    <div id="vehiclethree" class="collapse pt-3" data-parent="#accordion3">
                                                        <div class="Request_body table-responsive border-top">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Description</th>
                                                                        <th>Type</th>
                                                                        <th>Qty</th>
                                                                        <th>Amount</th>
                                                                        <th>Total</th>
                    												</tr>	
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Tune Up</td>
                                                                        <td>Labour</td>
                                                                        <td>1</td>
                                                                        <td>K 800</td>
                                                                        <td>K 800</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Spark Plugs</td>
                                                                        <td>Part</td>
                                                                        <td>4</td>
                                                                        <td>K 150</td>
                                                                        <td>K 600</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>										
									    </td>
								    </tr>                    
							    </tbody>
						    </table>
					    </div>                  
					</div> 
					<div class="shipmain_div">
					    <h4 class="shipmain_text">Shipping Not Required.</h4>
					</div>
				</div>
            </div>
         </div>
         <div class="col-md-4">
			<div class="card card-table mb-3">
               <div class="card-body p-2 py-3 px-4">
                  <div class="d-flex justify-content-between align-items-center">
                     <h3 class="mb-0">Customer</h3>
                  </div>
                  <div class="chat-search">
                     <div class="input-group">
                        <div class="input-group-prepend">
                           <i class="fas fa-search"></i>
                        </div>
                        <input type="text" class="form-control" placeholder="Search">
                     </div>
                  </div>
                
                    <div class="customerLists">
					<div class="customerLists-item">
						<h4 class="d-flex">John Smith  <!--a href="javascript: void(0);"><i class="fa fa-pencil-alt" aria-hidden="true"></i></a--></h4>
						
						
						<h5>Shipping Address</h5>
						<p>1688 St Matthews Ave, Winnipeg, MB R3H 0A2, Canada</p>
						
						<h5>Billing Address</h5>
						<p>1688 St Matthews Ave, Winnipeg, MB R3H 0A2, Canada</p>
					</div>
					<div class="customerLists-item">
						<h4 class="d-flex">Bill Walsh  <!--a href="javascript: void(0);"><i class="fa fa-pencil-alt" aria-hidden="true"></i></a--></h4>
						<h5>Shipping Address</h5>
						<p>1688 St Matthews Ave, Winnipeg, MB R3H 0A2, Canada</p>

						<h5>Billing Address</h5>
						<p>1688 St Matthews Ave, Winnipeg, MB R3H 0A2, Canada</p>
					</div>
				 </div>
               </div>
            </div>
            <div class="card card-table mb-3">
               <div class="card-body p-2 py-3 px-4">
                  <div class="d-flex justify-content-between align-items-center">
                     <h3 class="mb-0">Notes</h3>
                  </div>
                  <div class="chat-search mt-32">
                     <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                  </div>
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
                     <h3 class="mb-0">Tracking Status <span class="badge badge-warning fontpen mx-2">In-Progress</span></h3>
                  </div>
				 
				  
                  <div class="viewBox container px-0 mt-3">
					
                     <div class="timelinebox">
                     <ul class="timeline">
                        
                        <li class="event commentli">
                           <h2 class="">Confirmed</h2>
                            <span class="username"><i class="fa fa-check" aria-hidden="true"></i></span>
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<span class="ml-auto text-right">15 Minutes ago</span></p>
                        </li>
                        <li class="event ">
							   <h2 class="">In Progress</h2>
							  
						 <span class="username"><i class="fa fa-check" aria-hidden="true"></i></span>
                           <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque<span class="ml-auto text-right">1 Minutes ago</span></p>
                        </li>
                        <li class="event undone-services">
						 <h2 class="todaytex">Completed</h2>
                           <p class="d-flex">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque </p>
                        </li>
                       
                     </ul>
                  </div>
				  <div class="text-center tracking-job-btn mb-4">
					 <a href="{{route('seller.job_details')}}" class="btn btn-primary product-save-btn mt-4">View Job</a>
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

@endsection

