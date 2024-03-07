@extends('admin.layouts.app1')
@section('title', 'Requests')
@section('head')
<style>

   
   .card-table .table td
   {
      padding: 12px 0.75rem;  
      /*border: none;*/
   }
</style>
@endsection
@section('content')
   <div class="content container-fluid addorder">
      <div class="page-header">
         <div class="row">
            <div class="col">
               <h3 class="page-title d-flex align-items-center">Quotes Requests  </h3>
               <!--<p>25 January 2022 at 10:56 am from Draft Request</p>-->
            </div>
            <div class="col text-right">
              <div class="actionMore d-flex align-items-center justify-content-end">
                  <a href="{{route('admin.quotes')}}" class="btn btn-primary mr-2">Back</a>
              </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12">
            <div class="card card-table mb-3">
               <div class="card-body p-2 py-3 px-4">
                  <div class="d-flex justify-content-between align-items-center">
                     <h3 class="mb-0 text-danger">Quotes Completed Requests </h3>
                     
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
    							    	<h1>#69</h1>
    							    </div>
    								<div class="requestdetail_info">
                                        <div class="Request_card">
                                            <div class="Request_header border-0">
                                                <a class="Requestlink_btn py-0 collapsed tooltips_anchor" href="#vehicledetails1" data-toggle="collapse"><span class="custom-tooltips" title="ABX 2312"> Dec 26,2022 </span> </a> 
                                            </div>
                                            <div id="vehicledetails1"   data-parent="#accordion3">
                                                <div class="Request_body table-responsive border-none">
                                                    <table class="table ">
                                                        <tbody>
                                                            <tr>
                                                                <td >#69-1
                                                                </br>    
                                                                Road Tax Renewal
                                                                </br>
                    											  <a href="{{route('admin.requestquotesview')}}" class="btn bg-primary-light"> <i class="fas fa-eye"></i> View</a>
                    											</td>
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
								    	<h1>#68</h1>
								    </div>
									 <div class="requestdetail_info">
                                        <div class="Request_card">
                                            <div class="Request_header border-0">
                                                <a class="Requestlink_btn py-0 collapsed tooltips_anchor" href="#vehicledetails2" data-toggle="collapse" ><span class="custom-tooltips" title="ABX 2312">Dec 27, 2021</span></a> 
                                            </div>
                                            <div id="vehicledetails2" class="collapse pt-3"  data-parent="#accordion3">
                                                <div class="Request_body table-responsive border-top">
                                                      <table class="table">
                                                        <tbody>
                                                            <tr>
                                                                <td >#68-1
                                                                </br>    
                                                                 Repair Finance
                                                                </br>
                    											  <a href="{{route('admin.requestquotesview')}}" class="btn bg-primary-light"> <i class="fas fa-eye"></i> View</a>
                    											</td>
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
            </div>
            
            <div class="card card-table mb-3 overflow-visible">
				<div class="card-body p-2 py-3 px-4">
					<div class="d-flex justify-content-between">
					    <div class="progressmain_div">
    						<!--h3 class="mb-0 text-warning d-inline-block">In Progress(3)</h3-->
    						<h3 class="mb-0 text-warning d-inline-block"> Quotes In Progress Requests </h3>
    						
                        </div>            
                        <div class="requestpopup_div ">                        
                            <div class="dropdown trackingRequestbtn d-inline-block mr-2">
                                
                                <!--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">-->
                                <!--    <a class="dropdown-item" href="javascript:void(0)">Brake Replacement</a>-->
                                <!--    <a class="dropdown-item" href="javascript:void(0)">Tune Up</a>-->
                                <!--    <a class="dropdown-item" href="javascript:void(0)">More</a>-->
                                <!--</div>-->
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
									    		<span>0</span>
									    	</div>
									    </td>
									    <td colspan="2" class="text-left pl-0 pr-0">
										    <div class="d-flex justify-content-between">
										    	<h1>#141</h1>
										    </div>
                                            <div class="requestdetail_info">
                                                <div class="Request_card">
                                                    <div class="Request_header border-0">
                                                        <a class="Requestlink_btn py-0 collapsed" href="#vehicleone" data-toggle="collapse" >25 March, 2020</a>
                                                    </div>
                                                    <div id="vehicleone" class="collapse pt-3"  data-parent="#accordion3">
                                                        <div class="Request_body table-responsive border-top">
                                                            <table class="table">
                                                                <tbody>
                                                                    <tr>
                                                                        <td >#141-1
                                                                        </br>    
                                                                        Vehicle Finance 
                                                                        </br>
                            											  <a href="{{route('admin.requestquotesview')}}" class="btn bg-primary-light"> <i class="fas fa-eye"></i> View</a>
                            											</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td >#141-2
                                                                        </br>    
                                                                         Repiar Finance
                                                                        </br>
                            											  <a href="{{route('admin.requestquotesview')}}" class="btn bg-primary-light"> <i class="fas fa-eye"></i> View</a>
                            											</td>
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
                                                <span>0</span>
                                            </div>
                                        </td>
        							    <td colspan="2" class="text-left pl-0 pr-0">
        									<div class="d-flex justify-content-between">
        								    	<h1>#142</h1>
        								    </div>
        									 <div class="requestdetail_info">
                                                <div class="Request_card">
                                                    <div class="Request_header border-0">
                                                        <a class="Requestlink_btn py-0 collapsed tooltips_anchor" href="#vehicledetails4" data-toggle="collapse" ><span class="custom-tooltips" title="ABX 2312">Dec 27, 2021</span></a> 
                                                    </div>
                                                    <div id="vehicledetails4" class="collapse pt-3"  data-parent="#accordion3">
                                                        <div class="Request_body table-responsive border-top">
                                                              <table class="table">
                                                                <tbody>
                                                                    <tr>
                                                                        <td >#142-1
                                                                        </br>    
                                                                          Vehicle Repair Finance
                                                                        </br>
                            											  <a href="{{route('admin.viewquotes')}}" class="btn bg-primary-light"> <i class="fas fa-eye"></i> View</a>
                            											</td>
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
				</div>
            </div>
         </div>
      </div>
   </div>

@endsection

