@extends('admin.layouts.app1')
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
               <h3 class="page-title d-flex align-items-center">View Customer Requests  </h3>
               <!--<p>25 January 2022 at 10:56 am from Draft Request</p>-->
            </div>
            <div class="col text-right">
              <div class="actionMore d-flex align-items-center justify-content-end">
                  <a href="{{route('admin.requests')}}" class="btn btn-primary mr-2">Back</a>
              </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12">
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
								<!--<h6> Request Tracking</h6>-->
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
            <div class="col-md-12">
    			<div class="card card-table mb-3">
                   <div class="card-body p-2 py-3 px-4">
                      <div class="d-flex justify-content-between align-items-center">
                         <h3 class="mb-0">Delivery Customer Address</h3>
                      </div>
                      <!--<div class="chat-search">-->
                      <!--   <div class="input-group">-->
                      <!--      <div class="input-group-prepend">-->
                      <!--         <i class="fas fa-search"></i>-->
                      <!--      </div>-->
                      <!--      <input type="text" class="form-control" placeholder="Search">-->
                      <!--   </div>-->
                      <!--</div>-->
                        <div class="customerLists">
            				<div class="customerLists-item">
            					<h4 class="d-flex">John Smith </h4>
            					<h5>Shipping Address</h5>
            					<p>1688 St Matthews Ave, Winnipeg, MB R3H 0A2, Canada</p>
            					
            					<h5>Billing Address</h5>
            					<p>1688 St Matthews Ave, Winnipeg, MB R3H 0A2, Canada</p>
            				</div>
            				<div class="customerLists-item">
            					<h4 class="d-flex">Mark Robert </h4>
            					<h5>Shipping Address</h5>
            					<p>1688 St Matthews Ave, Winnipeg, MB R3H 0A2, Canada</p>
            
            					<h5>Billing Address</h5>
            					<p>1688 St Matthews Ave, Winnipeg, MB R3H 0A2, Canada</p>
            				</div>
    				 </div>
                   </div>
                </div>
            </div>
         </div>
         
      </div>
   </div>




@endsection

