@extends('serviceprovider.layouts.app')
@section('title', 'Requests')
@section('content')
<link  rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" >

<style>
#customerList_wrapper #cat_filter {
    position: absolute;
    top: -45px;
    right: 20px;
}

#customerList_wrapper #customerList_filter input
{
       height: 30px;
    background: transparent;
    border-radius: 5px;
    border: 1px solid #ddd;
}


div.dt-buttons {
   position: absolute;
   top: -50px;
   left: 182px;
}

.dt-button-collection {
   padding: 0 !important;
}
 
button.dt-button {
   background: transparent;
   border-radius: 5px;
   border: 1px solid #ddd;
}

.dt-button-collection .dt-button {
   border-radius: 0;
   background: #f8f9fa !important;
   color: #000;
   margin: 0 !important;
   box-shadow: none !important;
   border: 0;
   border-bottom: 0.1px solid #eaeaea;
   text-align: left;
}

.dt-button-collection .dt-button:hover {
   box-shadow: none !important;
   border: transparent !important;
   border-bottom: 0.1px solid #eaeaea !important;
   background: #ffffff !important;
   color: #000;
   background-color: #ffffff !important;
}


/*.dataTables_wrapper.no-footer #cat_paginate,
.dataTables_wrapper.no-footer #cat_info
{
display: none;
}*/

#customerList_wrapper .row:nth-child(2) #cat_paginate,
#customerList_wrapper .row:nth-child(2) #cat_info {
   display: none;
}

button.dt-button.buttons-columnVisibility.active {
   color: #c9343a !important;
}

</style>


    <div class="content container-fluid estimate_table  customer-list-page pb-3">
        <div class="page-header">
            <div class="row mb-4">
                <div class="col">
                  <h3 class="page-title">Requests</h3>
                </div>
				
				
				 <div class="col-auto text-right all-product-right">
					<div class="actionMore d-flex align-items-center">
					<a class="btn btn-primary addorder mr-3" href="javascript:void(0)">
                        Export
                    </a>
				    <a class="btn btn-primary addorder" href="{{route('seller.add_request')}}">
                        Create Request
                    </a>
					
					
					</div>
                    
                </div>
				
                
                
                  
            </div>           
        <div class="requestmain_tab" id="exTab1">
            <ul  class="nav nav-pills nav-tabs menu-tabs">
                <li class="nav-item"> 
                    <a class="nav-link active" href="#allrequest"  data-toggle="tab">All </a>
                </li>
                <li class="nav-item">
                	<a class="nav-link " href="#openrequest" data-toggle="tab">Open</a>
				</li>
				<li class="nav-item">
                	<a class="nav-link " href="#unpaidrequest" data-toggle="tab">Unpaid</a>
				</li>
				<li class="nav-item">
                	<a class="nav-link " href="#closedrequest" data-toggle="tab">Closed</a>
				</li>
			</ul>		
            <div class="tab-content">
				<div class="tab-pane fade show active" id="allrequest">
					<div class="card card-table flex-fill">
						<div class="card-body px-4 pt-2">
								<div class="row w-100 my-3">
									<div class="col">
										<div class="w-100 searchFilerwrap">
											<input type="text" id="" class="form-control w-100" name="" placeholder="Filter Requests" value="">
											<i class="fa fa-search"></i>
										</div>
									</div>
									<div class="col">
											 <div class="actionMore text-right">

										  
										  <span class="nav-item mr-3">
											 <a href="javascript:void(0)" class="btn btn-primary filter-toggler morefilterbtn" data-toggle="dropdown">
												More filters
											 </a> 
											 
										  </span>									  
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
							<div class="table-responsive requesttable_div">
								<table class="table table-center  datatable"  id="cat">
									<thead  >
										<tr  >
											<th style='padding-bottom: 12px' >Request</th>
											<th style='padding-bottom: 12px' >Date</th>
											<th style='padding-bottom: 12px'>Customer</th>
											<th style='padding-bottom: 12px'>Status</th>
											<th style='padding-bottom: 12px'>Total</th>
											<th style='padding-bottom: 12px'>Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>#1001</td>
											<td>26 Jul at 6:24 pm</td>
											<td>Brian Smith</td>
											<td><label class="badge badge-success">Partially Confirmed</label></td>
											<td>k9,396.00</td>
											<td>
												<a href="{{route('seller.view_estimate')}}" class="btn bg-primary-light">View</a>
												<a href="{{route('seller.edit_request')}}" class="btn btn-sm bg-success-light">
													<i class="fas fa-edit"></i> Edit
												</a>
											  <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>  Reject</button>
											</td>
										</tr>
										<tr>
											<td>#1002</td>
											<td>26 Jul at 6:24 pm</td>
											<td>Brian Smith</td>
											<td><label class="badge badge-success">Partially Confirmed</label></td>
											<td>k9,396.00</td>
											<td>
												<a href="{{route('seller.view_estimate')}}" class="btn bg-primary-light">View</a>
												<a href="{{route('seller.edit_request')}}" class="btn btn-sm bg-success-light">
													<i class="fas fa-edit"></i> Edit
												</a>
											  <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>  Reject</button>
											</td>
										</tr>
										<tr>
											<td>#1003</td>
											<td>26 Jul at 6:24 pm</td>
											<td>Brian Smith</td>
											<td><label class="badge badge-success">Partially Confirmed</label></td>
											<td>k9,396.00</td>
											<td>
												<a href="{{route('seller.view_estimate')}}" class="btn bg-primary-light">View</a>
												<a href="{{route('seller.edit_request')}}" class="btn btn-sm bg-success-light">
													<i class="fas fa-edit"></i> Edit
												</a>
											  <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>  Reject</button>
											</td>
										</tr>
										<tr>
											<td>#1004</td>
											<td>26 Jul at 6:24 pm</td>
											<td>Brian Smith</td>
											<td><label class="badge badge-success">Partially Confirmed</label></td>
											<td>k9,396.00</td>
											<td>
												<a href="{{route('seller.view_estimate')}}" class="btn bg-primary-light">View</a>
												<a href="{{route('seller.edit_request')}}" class="btn btn-sm bg-success-light">
													<i class="fas fa-edit"></i> Edit
												</a>
											  <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>  Reject</button>
											</td>
										</tr>
										<tr>
											<td>#1005</td>
											<td>26 Jul at 6:24 pm</td>
											<td>Brian Smith</td>
											<td><label class="badge badge-success">Partially Confirmed</label></td>
											<td>k9,396.00</td>
											<td>
												<a href="{{route('seller.view_estimate')}}" class="btn bg-primary-light">View</a>
												<a href="{{route('seller.edit_request')}}" class="btn btn-sm bg-success-light">
													<i class="fas fa-edit"></i> Edit
												</a>
											  <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>  Reject</button>
											</td>
										</tr>
										<tr>
											<td>#1006</td>
											<td>26 Jul at 6:24 pm</td>
											<td>Brian Smith</td>
											<td><label class="badge badge-success">Partially Confirmed</label></td>
											<td>k9,396.00</td>
											<td>
												<a href="{{route('seller.view_estimate')}}" class="btn bg-primary-light">View</a>
												<a href="{{route('seller.edit_request')}}" class="btn btn-sm bg-success-light">
													<i class="fas fa-edit"></i> Edit
												</a>
											  <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>  Reject</button>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>		
				<div class="tab-pane fade" id="openrequest">
					<div class="card card-table flex-fill">
						<div class="card-body px-4 pt-2">
								<div class="row w-100 my-3">
									<div class="col">
										<div class="w-100 searchFilerwrap">
											<input type="text" id="" class="form-control w-100" name="" placeholder="Filter Requests" value="">
											<i class="fa fa-search"></i>
										</div>
									</div>
									<div class="col">
											 <div class="actionMore text-right">

										  
										  <span class="nav-item mr-3">
											 <a href="javascript:void(0)" class="btn btn-primary filter-toggler morefilterbtn" data-toggle="dropdown">
												More filters
											 </a> 
											 
										  </span>									  
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
							<div class="table-responsive requesttable_div">
								<table class="table table-center  datatable"  id="cat">
									<thead>
										<tr>
											<th>Request</th>
											<th>Date</th>
											<th>Customer</th>
											<th>Status</th>
											<th>Total</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>#1001</td>
											<td>26 Jul at 6:24 pm</td>
											<td>Brian Smith</td>
											<td><label class="badge badge-success">Partially Confirmed</label></td>
											<td>k9,396.00</td>
											<td>
												<a href="{{route('seller.view_estimate')}}" class="btn bg-primary-light">View</a>
												<a href="{{route('seller.edit_request')}}" class="btn btn-sm bg-success-light">
													<i class="fas fa-edit"></i> Edit
												</a>
											  <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>  Reject</button>
											</td>
										</tr>
										<tr>
											<td>#1002</td>
											<td>26 Jul at 6:24 pm</td>
											<td>Brian Smith</td>
											<td><label class="badge badge-success">Partially Confirmed</label></td>
											<td>k9,396.00</td>
											<td>
												<a href="{{route('seller.view_estimate')}}" class="btn bg-primary-light">View</a>
												<a href="{{route('seller.edit_request')}}" class="btn btn-sm bg-success-light">
													<i class="fas fa-edit"></i> Edit
												</a>
											  <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>  Reject</button>
											</td>
										</tr>
										<tr>
											<td>#1003</td>
											<td>26 Jul at 6:24 pm</td>
											<td>Brian Smith</td>
											<td><label class="badge badge-success">Partially Confirmed</label></td>
											<td>k9,396.00</td>
											<td>
												<a href="{{route('seller.view_estimate')}}" class="btn bg-primary-light">View</a>
												<a href="{{route('seller.edit_request')}}" class="btn btn-sm bg-success-light">
													<i class="fas fa-edit"></i> Edit
												</a>
											  <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>  Reject</button>
											</td>
										</tr>
										<tr>
											<td>#1004</td>
											<td>26 Jul at 6:24 pm</td>
											<td>Brian Smith</td>
											<td><label class="badge badge-success">Partially Confirmed</label></td>
											<td>k9,396.00</td>
											<td>
												<a href="{{route('seller.view_estimate')}}" class="btn bg-primary-light">View</a>
												<a href="{{route('seller.edit_request')}}" class="btn btn-sm bg-success-light">
													<i class="fas fa-edit"></i> Edit
												</a>
											  <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>  Reject</button>
											</td>
										</tr>
										<tr>
											<td>#1005</td>
											<td>26 Jul at 6:24 pm</td>
											<td>Brian Smith</td>
											<td><label class="badge badge-success">Partially Confirmed</label></td>
											<td>k9,396.00</td>
											<td>
												<a href="{{route('seller.view_estimate')}}" class="btn bg-primary-light">View</a>
												<a href="{{route('seller.edit_request')}}" class="btn btn-sm bg-success-light">
													<i class="fas fa-edit"></i> Edit
												</a>
											  <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>  Reject</button>
											</td>
										</tr>
										<tr>
											<td>#1006</td>
											<td>26 Jul at 6:24 pm</td>
											<td>Brian Smith</td>
											<td><label class="badge badge-success">Partially Confirmed</label></td>
											<td>k9,396.00</td>
											<td>
												<a href="{{route('seller.view_estimate')}}" class="btn bg-primary-light">View</a>
												<a href="{{route('seller.edit_request')}}" class="btn btn-sm bg-success-light">
													<i class="fas fa-edit"></i> Edit
												</a>
											  <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>  Reject</button>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div> 		
				<div class="tab-pane fade" id="unpaidrequest">
					<div class="card card-table flex-fill">
						<div class="card-body px-4 pt-2">
								<div class="row w-100 my-3">
									<div class="col">
										<div class="w-100 searchFilerwrap">
											<input type="text" id="" class="form-control w-100" name="" placeholder="Filter Requests" value="">
											<i class="fa fa-search"></i>
										</div>
									</div>
									<div class="col">
											 <div class="actionMore text-right">

										  
										  <span class="nav-item mr-3">
											 <a href="javascript:void(0)" class="btn btn-primary filter-toggler morefilterbtn" data-toggle="dropdown">
												More filters
											 </a> 
											 
										  </span>									  
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
							<div class="table-responsive requesttable_div">
								<table class="table table-center  datatable"  id="cat">
									<thead>
										<tr>
											<th>Request</th>
											<th>Date</th>
											<th>Customer</th>
											<th>Status</th>
											<th>Total</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>#1001</td>
											<td>26 Jul at 6:24 pm</td>
											<td>Brian Smith</td>
											<td><label class="badge badge-success">Partially Confirmed</label></td>
											<td>k9,396.00</td>
											<td>
												<a href="{{route('seller.view_estimate')}}" class="btn bg-primary-light">View</a>
												<a href="{{route('seller.edit_request')}}" class="btn btn-sm bg-success-light">
													<i class="fas fa-edit"></i> Edit
												</a>
											  <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>  Reject</button>
											</td>
										</tr>
										<tr>
											<td>#1002</td>
											<td>26 Jul at 6:24 pm</td>
											<td>Brian Smith</td>
											<td><label class="badge badge-success">Partially Confirmed</label></td>
											<td>k9,396.00</td>
											<td>
												<a href="{{route('seller.view_estimate')}}" class="btn bg-primary-light">View</a>
												<a href="{{route('seller.edit_request')}}" class="btn btn-sm bg-success-light">
													<i class="fas fa-edit"></i> Edit
												</a>
											  <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>  Reject</button>
											</td>
										</tr>
										<tr>
											<td>#1003</td>
											<td>26 Jul at 6:24 pm</td>
											<td>Brian Smith</td>
											<td><label class="badge badge-success">Partially Confirmed</label></td>
											<td>k9,396.00</td>
											<td>
												<a href="{{route('seller.view_estimate')}}" class="btn bg-primary-light">View</a>
												<a href="{{route('seller.edit_request')}}" class="btn btn-sm bg-success-light">
													<i class="fas fa-edit"></i> Edit
												</a>
											  <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>  Reject</button>
											</td>
										</tr>
										<tr>
											<td>#1004</td>
											<td>26 Jul at 6:24 pm</td>
											<td>Brian Smith</td>
											<td><label class="badge badge-success">Partially Confirmed</label></td>
											<td>k9,396.00</td>
											<td>
												<a href="{{route('seller.view_estimate')}}" class="btn bg-primary-light">View</a>
												<a href="{{route('seller.edit_request')}}" class="btn btn-sm bg-success-light">
													<i class="fas fa-edit"></i> Edit
												</a>
											  <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>  Reject</button>
											</td>
										</tr>
										<tr>
											<td>#1005</td>
											<td>26 Jul at 6:24 pm</td>
											<td>Brian Smith</td>
											<td><label class="badge badge-success">Partially Confirmed</label></td>
											<td>k9,396.00</td>
											<td>
												<a href="{{route('seller.view_estimate')}}" class="btn bg-primary-light">View</a>
												<a href="{{route('seller.edit_request')}}" class="btn btn-sm bg-success-light">
													<i class="fas fa-edit"></i> Edit
												</a>
											  <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>  Reject</button>
											</td>
										</tr>
										<tr>
											<td>#1006</td>
											<td>26 Jul at 6:24 pm</td>
											<td>Brian Smith</td>
											<td><label class="badge badge-success">Partially Confirmed</label></td>
											<td>k9,396.00</td>
											<td>
												<a href="{{route('seller.view_estimate')}}" class="btn bg-primary-light">View</a>
												<a href="{{route('seller.edit_request')}}" class="btn btn-sm bg-success-light">
													<i class="fas fa-edit"></i> Edit
												</a>
											  <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>  Reject</button>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div> 		
				<div class="tab-pane fade" id="closedrequest">
					<div class="card card-table flex-fill">
						<div class="card-body px-4 pt-2">
								<div class="row w-100 my-3">
									<div class="col">
										<div class="w-100 searchFilerwrap">
											<input type="text" id="" class="form-control w-100" name="" placeholder="Filter Requests" value="">
											<i class="fa fa-search"></i>
										</div>
									</div>
									<div class="col">
											 <div class="actionMore text-right">

										  
										  <span class="nav-item mr-3">
											 <a href="javascript:void(0)" class="btn btn-primary filter-toggler morefilterbtn" data-toggle="dropdown">
												More filters
											 </a> 
											 
										  </span>									  
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
							<div class="table-responsive requesttable_div">
								<table class="table table-center  datatable"  id="cat">
									<thead>
										<tr>
											<th>Request</th>
											<th>Date</th>
											<th>Customer</th>
											<th>Status</th>
											<th>Total</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>#1001</td>
											<td>26 Jul at 6:24 pm</td>
											<td>Brian Smith</td>
											<td><label class="badge badge-success">Partially Confirmed</label></td>
											<td>k9,396.00</td>
											<td>
												<a href="{{route('seller.view_estimate')}}" class="btn bg-primary-light">View</a>
												<a href="{{route('seller.edit_request')}}" class="btn btn-sm bg-success-light">
													<i class="fas fa-edit"></i> Edit
												</a>
											  <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>  Reject</button>
											</td>
										</tr>
										<tr>
											<td>#1002</td>
											<td>26 Jul at 6:24 pm</td>
											<td>Brian Smith</td>
											<td><label class="badge badge-success">Partially Confirmed</label></td>
											<td>k9,396.00</td>
											<td>
												<a href="{{route('seller.view_estimate')}}" class="btn bg-primary-light">View</a>
												<a href="{{route('seller.edit_request')}}" class="btn btn-sm bg-success-light">
													<i class="fas fa-edit"></i> Edit
												</a>
											  <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>  Reject</button>
											</td>
										</tr>
										<tr>
											<td>#1003</td>
											<td>26 Jul at 6:24 pm</td>
											<td>Brian Smith</td>
											<td><label class="badge badge-success">Partially Confirmed</label></td>
											<td>k9,396.00</td>
											<td>
												<a href="{{route('seller.view_estimate')}}" class="btn bg-primary-light">View</a>
												<a href="{{route('seller.edit_request')}}" class="btn btn-sm bg-success-light">
													<i class="fas fa-edit"></i> Edit
												</a>
											  <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>  Reject</button>
											</td>
										</tr>
										<tr>
											<td>#1004</td>
											<td>26 Jul at 6:24 pm</td>
											<td>Brian Smith</td>
											<td><label class="badge badge-success">Partially Confirmed</label></td>
											<td>k9,396.00</td>
											<td>
												<a href="{{route('seller.view_estimate')}}" class="btn bg-primary-light">View</a>
												<a href="{{route('seller.edit_request')}}" class="btn btn-sm bg-success-light">
													<i class="fas fa-edit"></i> Edit
												</a>
											  <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>  Reject</button>
											</td>
										</tr>
										<tr>
											<td>#1005</td>
											<td>26 Jul at 6:24 pm</td>
											<td>Brian Smith</td>
											<td><label class="badge badge-success">Partially Confirmed</label></td>
											<td>k9,396.00</td>
											<td>
												<a href="{{route('seller.view_estimate')}}" class="btn bg-primary-light">View</a>
												<a href="{{route('seller.edit_request')}}" class="btn btn-sm bg-success-light">
													<i class="fas fa-edit"></i> Edit
												</a>
											  <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>  Reject</button>
											</td>
										</tr>
										<tr>
											<td>#1006</td>
											<td>26 Jul at 6:24 pm</td>
											<td>Brian Smith</td>
											<td><label class="badge badge-success">Partially Confirmed</label></td>
											<td>k9,396.00</td>
											<td>
												<a href="{{route('seller.view_estimate')}}" class="btn bg-primary-light">View</a>
												<a href="{{route('seller.edit_request')}}" class="btn btn-sm bg-success-light">
													<i class="fas fa-edit"></i> Edit
												</a>
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
        </div>
			<div class="text-center pb-4">
				<p>Learn more about <a href="javascrcipt:void(0);">Requests</a></p>
			</div>		
    </div>
	<div class="v-sidebar-wrapper morefiltersidebar">
   <div class="v-sidebar">
      <div class="v-sidebar-header">
         <h3>More filters</h3> <button id="sidebar-close-btn"><i class="fa fa-times fa-2x"></i></button>
      </div>
	 
	 <div class="morefilterlists">
	 
	
		<ul>
			<li class="dropdown"> 
				<a   class="dropdown-toggle" href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >Search </a>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					<div class="morefilter-search">
						<input type="text" class="form-control" value="">
					</div>
				  </div>
			</li>
			
				<li class="dropdown"> 
				<a   class="dropdown-toggle" href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >Delivery Method </a>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					 <div class="form-check mb-3">
						<input type="checkbox" class="form-check-input" id="localdelivery">
						<label class="form-check-label" for="localdelivery">Local Delivery</label>
					  </div>
					   <div class="form-check mb-3">
						<input type="checkbox" class="form-check-input" id="localpickup">
						<label class="form-check-label" for="localpickup">Local Pickup</label>
					  </div>
					   <div class="form-check">
						<input type="checkbox" class="form-check-input" id="shipcustomer">
						<label class="form-check-label" for="shipcustomer">Ship To Customer</label>
					  </div>
				  </div>
			</li>
			
			<li class="dropdown"> 
				<a   class="dropdown-toggle" href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >Tagged with </a>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					<div class="morefilter-search">
						<input type="text" class="form-control" value="">
					</div>
				  </div>
			</li>
			
			
				<li class="dropdown"> 
				<a   class="dropdown-toggle" href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >Status </a>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					 <div class="form-check mb-3">
						<input type="checkbox" class="form-check-input" id="exampleCheck3">
						<label class="form-check-label" for="exampleCheck3">Active</label>
					  </div>
					   <div class="form-check">
						<input type="checkbox" class="form-check-input" id="exampleCheck4">
						<label class="form-check-label" for="exampleCheck4">Draft</label>
					  </div>
				  </div>
			</li>
			<li> <a class="" href="#">More filters </a></li>
			<li> <a class="" href="#">Sort</a></li>
		</ul>
		
	 </div>
   </div>
   <div class="v-sidebar-fade">
   </div>
   </div>    
@endsection
@section('scripts')

<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.1.0/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/fixedheader/3.2.0/js/dataTables.fixedHeader.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.colVis.min.js"></script>

<script>


$(document).ready(function() {
    var table = $('#customerList').DataTable(
    {
        fixedHeader: true,
        dom: 'Bfrtip',
		"searching": false,
    });
    $.fn.dataTable.ext.errMode = 'none';
});

$(function () {
        $("#selectAllTable").click(function () {
            if ($(this).is(":checked")) {
                $(".tableseletefilter").show();
            } else {
                $(".tableseletefilter").hide();
            }
        });
    });
    
      
      $(document).ready(function(){
 $(".clic-show").click(function(){
   $(".sows").toggle(400);
 });

 
});
      $(document).ready(function(){
 $(".clic-show").click(function(){
   $(".sows").toggle(400);
 });

 
});
</script>
<script>
$(document).ready(function() {
    var table = $('#cat').DataTable(
    {
        fixedHeader: true,
        dom: 'Bfrtip',
        buttons: [{
            extend: 'colvis',
            text: "Columns",
            postfixButtons: ['colvisRestore']
        }]
    });
    $.fn.dataTable.ext.errMode = 'none';
});
	$('.filter-toggler').click(function () {
   $('.v-sidebar-wrapper').toggleClass('sidebar-control', 500);
   $('.v-sidebar-fade').fadeIn(500);
   $('body').addClass('openSidebar');
});
$('#sidebar-close-btn').click(function () {
   $('.v-sidebar-wrapper').toggleClass('sidebar-control', 500);
   $('.v-sidebar-fade').fadeOut(500);
   $('body').removeClass('openSidebar');
});
</script>
@endsection