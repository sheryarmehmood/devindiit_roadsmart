@extends('serviceprovider.layouts.app')
@section('title', 'Service Drafts')

@section('content')
   <div class="content container-fluid">
      <div class="page-header">
         <div class="row">
            <div class="col">
               <h3 class="page-title">Draft</h3>
            </div>
             <div class="col-auto text-right all-product-right">
					<div class="actionMore d-flex align-items-center">
					<a class="btn btn-primary addorder mr-3" href="javascript:void(0)">
                        Export
                    </a>
					
					<a class="btn btn-primary addorder mr-3" href="javascript:void(0)">
                        Import
                    </a>
				    <a class="btn btn-primary addorder" href="{{route('seller.add_service')}}">
                        Add Service
                    </a>
					
					
					</div>
                    
                </div>
         </div>
      </div>

        <div class="card ">
				 <div class="card-header">
                            <h4 class="card-title">Draft Services</h4>
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
                                        <th>Draft ID</th>
                                        <th>Service Name</th>
                                        <th>Status</th>
                                        <th>Offers </th> 
                                        <th>Action </th> 
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="width:50px"><input type="checkbox" name="type" value=""></td>
										<td>#D1</td>
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
										<td>#D2</td>
                                        <td><a class="productview_btn" href="{{route('seller.view_service')}}">Break Pad and Rotor Replacement</a></td>
                                        <td>
											<div class="status-toggle">
                                                            <input id="service_1" class="check" type="checkbox">
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
										<td>#D3</td>
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
										<td>#D4</td>
                                        <td><a class="productview_btn" href="{{route('seller.view_service')}}">Break Pad and Rotor Replacement</a></td>
                                        <td>
											<div class="status-toggle">
                                                            <input id="service_1" class="check" type="checkbox" >
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
										<td>#D5</td>
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
@endsection
@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

@endsection