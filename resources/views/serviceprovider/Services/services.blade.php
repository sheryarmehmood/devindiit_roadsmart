@extends('serviceprovider.layouts.app')
@section('title', 'Services')
@section('content')
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row mb-4">
                <div class="col">
                  <h3 class="page-title">
					<div class="d-flex titleSelect align-items-center">
						Service Category:
											<select name="status" id="" class="my-select form-control">
												<option value="All customers">All Services</option>
												<option value="Repairs">Repairs</option>
												<option value="Insurance">Insurance</option>
												<option value="Road Compliance">Road Compliance</option>
												<option value="Vehicle Finance">Vehicle Finance</option>
												<option value="Car Hire">Car Hire</option>
											</select>
					</div>
					
				</h3>
                </div>
				
				
				 <div class="col-auto text-right all-product-right">
					<div class="actionMore d-flex align-items-center">
					<a class="btn btn-primary addorder mr-3" href="javascript:void(0)">
                        Export
                    </a>
					
					<a class="btn btn-primary addorder mr-3" href="javascript:void(0)">
                        Import
                    </a>
				    <a class="btn btn-primary addorder" data-toggle="modal" data-target="#myModalFullscreen" contenteditable="false" href="javascript:void();">
                        Add Service
                    </a> 
					
					
					</div>
                    
                </div>
				
                
                
                  
            </div>
            <div id="accordion">
				  <div class="card page-header-filter  mt-4">
					<div class="card-header" id="headingOne">
					  <h4><p class="customer-count">1 Service <span class="devide-vertical-line"></span> <span>No filters applied</span></p> 
								<div class="customer-filter-actions">
									<a href="#"><i class="fa fa-undo" aria-hidden="true"></i></a>
									<a href="#"><i class="fa fa-redo" aria-hidden="true"></i></a>
									<span class="devide-vertical-line"></span>
									<a href="#"><i class="fa fa-filter" aria-hidden="true"></i></a>
									<a href="#"><i class="fa fa-table" aria-hidden="true"></i></a>
									<a href="#"><i class="fa fa-question-circle" aria-hidden="true"></i></a>
								</div>
							</h4>
							
                            <a href="#" class="btn btn-link filterdownbtn" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"><i class="fa fa-chevron-down" aria-hidden="true"></i></a>
					</div>

					<!--div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
					  <div class="card-body p-0">
						<div class="form-group m-0">
							<textarea class="form-control" id="" rows="3"></textarea>
						  </div>
					  </div>
					   <div class="card-footer text-right">
						  <a class="btn btn-primary ml-auto" href="javascript:void(0);">
						Apply           </a>
					   </div> 
					</div-->
				  </div>            
				  </div> 
        </div>
        <div id="response">
  @if(Session::has('message'))
  <div class="alert alert-success alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    {{ Session::get('message') }}
  </div>
  @endif
  @if(Session::has('error'))
  <div class="alert alert-danger alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    {{ Session::get('error') }}
  </div>
  @endif
  @if($errors->has('error_card'))
  <div class="alert alert-danger alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    {{ $errors->first('error_card') }}
  </div>
  @endif
</div>
						                     <div class="card card-table flex-fill overflow-visible">
				 <div class="card-header">
                            <h4 class="card-title">All Services</h4>
                        </div>
                    <div class="card-body px-4 pt-2">
							<div class="row w-100 my-3">
								<div class="col">
									<div class="w-100 searchFilerwrap">
										<input type="text" id="" class="form-control w-100" name="" placeholder="Search Services" value="">
										<i class="fa fa-search"></i>
									</div>
								</div>
								<div class="col">
										 <div class="actionMore text-right">
									  
									  <span class="nav-item dropdown">
										 <a href="javascript:void(0)" class="dropdown-toggle btn btn-primary" data-toggle="dropdown">
											Sort
										 </a> 
										 <div class="dropdown-menu dropdown-menu-right notifications">
											<div class="noti-content">
											   <ul class="notification-list">
												  <li class="notification-message">
												   <a href="javascript:void(0)">
														 <div class="form-check">
														  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
														  <label class="form-check-label" for="exampleRadios1">
															
Last update
														  </label>
														</div>
													 </a>
												  </li>
												  
												   <li class="notification-message">
													<a href="javascript:void(0)">
														 <div class="form-check">
														  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option1" checked>
														  <label class="form-check-label" for="exampleRadios2">
															Amount spent
														  </label>
														</div>
													 </a>
													
												  </li>
												  
												  
												  <li class="notification-message">
													<a href="javascript:void(0)">
														 <div class="form-check">
														  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option1" checked>
														  <label class="form-check-label" for="exampleRadios3">
															
Total orders
														  </label>
														</div>
													 </a>
													
												  </li>
												  
												  
												    <li class="notification-message">
													<a href="javascript:void(0)">
														 <div class="form-check">
														  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option1" checked>
														  <label class="form-check-label" for="exampleRadios4">
															Last order date
														  </label>
														</div>
													 </a>
													
												  </li>
												  
												    <li class="notification-message">
													<a href="javascript:void(0)">
														 <div class="form-check">
														  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option1" checked>
														  <label class="form-check-label" for="exampleRadios4">
															
First order date
														  </label>
														</div>
													 </a>
													
												  </li>
												  
												  
												  <li class="notification-message">
													<a href="javascript:void(0)">
														 <div class="form-check">
														  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios5" value="option1" checked>
														  <label class="form-check-label" for="exampleRadios5">
															A–Z
														  </label>
														</div>
													 </a>
													
												  </li>
												  
												    <li class="notification-message">
													<a href="javascript:void(0)">
														 <div class="form-check">
														  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios6" value="option1" checked>
														  <label class="form-check-label" for="exampleRadios6">
															Z–A
														  </label>
														</div>
													 </a>
													
												  </li>
												  
												  
											   </ul>
											</div>
										 </div>
									  </span>
									  
									</div>
							
								</div>
							</div>                         
                        <div class="table-responsive"> 
                            <table class="table table-center datatable">
                                <thead>
                                    <tr>
                                        <th style="width:50px"><input name="select_all" value="1" type="checkbox"></th>
                                        <th>Service Name</th>
                                        <th>Status</th>
                                        <th>Offers </th> 
                                        <th>Action </th> 
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="width:50px"><input type="checkbox" name="type" value=""></td>
                                        <td><a class="productview_btn" href="{{route('seller.view_service')}}">Break Pad and Rotor Replacement</a></td>
                                        <td>
											<div class="status-toggle">
                                                            <input id="service_1" class="check" type="checkbox" checked>
                                                            <label for="service_1" class="checktoggle">checkbox</label>
                                                        </div>
										</td>
                                        <td>1 Offer</td>
                                        <td>
                                            <a href="{{route('seller.view_service')}}" class="btn bg-primary-light">View</a>
                                          <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>  Reject</button>
                                        </td>
                                    </tr>
									
									 <tr>
                                        <td style="width:50px"><input type="checkbox" name="type" value=""></td>
                                        <td><a class="productview_btn" href="{{route('seller.view_service')}}">Break Pad and Rotor Replacement</a></td>
                                        <td>
											<div class="status-toggle">
                                                            <input id="service_1" class="check" type="checkbox" checked>
                                                            <label for="service_1" class="checktoggle">checkbox</label>
                                                        </div>
										</td>
                                        <td>1 Offer</td>
                                        <td>
                                            <a href="{{route('seller.view_service')}}" class="btn bg-primary-light">View</a>
                                          <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>  Reject</button>
                                        </td>
                                    </tr>
									
									
									 <tr>
                                        <td style="width:50px"><input type="checkbox" name="type" value=""></td>
                                        <td><a class="productview_btn" href="{{route('seller.view_service')}}">Break Pad and Rotor Replacement</a></td>
                                        <td>
											<div class="status-toggle">
                                                            <input id="service_1" class="check" type="checkbox" checked>
                                                            <label for="service_1" class="checktoggle">checkbox</label>
                                                        </div>
										</td>
                                        <td>1 Offer</td>
                                        <td>
                                            <a href="{{route('seller.view_service')}}" class="btn bg-primary-light">View</a>
                                          <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>  Reject</button>
                                        </td>
                                    </tr>
									
									
									 <tr>
                                        <td style="width:50px"><input type="checkbox" name="type" value=""></td>
                                        <td><a class="productview_btn" href="{{route('seller.view_service')}}">Break Pad and Rotor Replacement</a></td>
                                        <td>
											<div class="status-toggle">
                                                            <input id="service_1" class="check" type="checkbox" checked>
                                                            <label for="service_1" class="checktoggle">checkbox</label>
                                                        </div>
										</td>
                                        <td>1 Offer</td>
                                        <td>
                                            <a href="{{route('seller.view_service')}}" class="btn bg-primary-light">View</a>
                                          <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>  Reject</button>
                                        </td>
                                    </tr>
									
									 <tr>
                                        <td style="width:50px"><input type="checkbox" name="type" value=""></td>
                                        <td><a class="productview_btn" href="{{route('seller.view_service')}}">Break Pad and Rotor Replacement</a></td>
                                        <td>
											<div class="status-toggle">
                                                            <input id="service_1" class="check" type="checkbox" checked>
                                                            <label for="service_1" class="checktoggle">checkbox</label>
                                                        </div>
										</td>
                                        <td>1 Offer</td>
                                        <td>
                                            <a href="{{route('seller.view_service')}}" class="btn bg-primary-light">View</a>
                                          <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>  Reject</button>
                                        </td>
                                    </tr>
									
									
									
									
                                </tbody>
                            </table>
                        </div>
                    </div> 
                </div>	
        </div>
    </div>
    <div class="modal fade" id="delete-popup" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    	<input type="hidden" name="productid" id ="productid"/>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="delete-cont">
                        <p>Are you sure you want to delete this item ?</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" id="confirm">Delete</button>
                </div>
            </div>
        </div>
    </div>
	
	<div class="modal fade modal-fullscreen  footer-to-bottom" id="myModalFullscreen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog animated fadeInDown">
        <div class="modal-content">
          
            <div class="modal-body">
               <div class="d-flex justify-content-between pt-4 px-4 align-items-center">
                     <h3 class="mb-0">Search Services</h3>
                  </div>
                  <div class="viewBox px-4 mt-3">
                     <div class="row">
                        <div class="col-md-12">
								<div class="w-100 searchFilerwrap mb-2">
										<input type="text" id="" class="form-control w-100" name="" placeholder="Search Service" value="">
										<i class="fa fa-search"></i>
									</div> 
								<ul class="search-selected-listings">
								<li><a href="{{route('seller.add_service')}}" >Brake Pad and Rotor Replacement <i class="fa fa-angle-right"></i></a></li>
								<li><a href="{{route('seller.add_service')}}" >Motul Engin Oil <i class="fa fa-angle-right"></i></a></li>
								<li><a href="{{route('seller.add_service')}}" >Steering & Suspension <i class="fa fa-angle-right"></i></a></li>
								<li><a href="{{route('seller.add_service')}}" >Air Conditioner <i class="fa fa-angle-right"></i></a></li>
							 </ul>
                        </div>
                       
                     </div>
                    
                  </div>
            </div>
           
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
  
   @endsection
   @section('scripts')
  
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script>

  

    
      
      $(document).ready(function(){
 $(".clic-show").click(function(){
   $(".sows").toggle(400);
 });

 
});
</script>

   @endsection