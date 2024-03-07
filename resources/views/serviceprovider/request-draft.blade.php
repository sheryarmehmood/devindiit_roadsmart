@extends('serviceprovider.layouts.app')
@section('title', 'Drafts')

@section('content')
   <div class="content container-fluid">
      <div class="page-header">
         <div class="row">
            <div class="col">
               <h3 class="page-title">Draft</h3>
            </div>
            <div class="col-auto text-right">
                
               <a class="btn btn-primary addorder ml-3" href="javascript: void(0);">
                Export
               </a>
               <a href="{{route('seller.add_request')}}" class="btn btn-primary addorder ml-3">
               Create Request
               </a>
               <a class="btn btn-white filter-btn" href="javascript: void(0);" id="filter_search">
               <i class="fas fa-filter"></i>
               </a>
            </div>
         </div>
      </div>
      <div class="card filter-card" id="filter_inputs">
         <div class="card-body pb-0">
            <form>
               <div class="row filter-row">
                  <div class="col-sm-6 col-md-3">
                     <div class="form-group">
                        <label>Search</label>
                        <input class="form-control" placeholder="Search Order" type="text">
                     </div>
                  </div>
                  <div class="col-sm-6 col-md-3">
                     <div class="form-group">
                        <label>From Date</label>
                        <div class="cal-icon">
                           <input class="form-control datetimepicker" type="text">
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6 col-md-3">
                     <div class="form-group">
                        <label>To Date</label>
                        <div class="cal-icon">
                           <input class="form-control datetimepicker" type="text">
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6 col-md-3">
                     <div class="form-group">
                        <button class="btn btn-primary btn-block" type="submit">Submit</button>
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
      <div id="exTab1" class="">
         <ul  class="nav nav-pills nav-tabs menu-tabs">
            <li class="nav-item active"><a class="nav-link" href="#1a" data-toggle="tab">All</a> </li>
            <li class="nav-item"><a class="nav-link" href="#3a" data-toggle="tab">Open</a> </li>
            <li class="nav-item"><a class="nav-link" href="#4a" data-toggle="tab">Estimate</a> </li>
            <li class="nav-item"><a class="nav-link" href="#5a" data-toggle="tab">Completed</a> </li>
         </ul>
         
         <div class="tab-content clearfix">
            <div class="tab-pane active" id="1a">
               <div class="row ordertabstableitems ">
                   
                  <div class="col-md-12">
                    
                     <div class="card card-table flex-fill overflow-visible">
                         
                        <div class="card-body">
<div class="row w-100 mb-4">
								<div class="col">
									<div class="w-100 searchFilerwrap">
										<input type="text" id="" class="form-control w-100" name="" placeholder="Filter Draft" value="">
										<i class="fa fa-search"></i>
									</div>
								</div>
								<div class="col">
										 <div class="actionMore text-right">
									  
									  <span class="nav-item dropdown">
										 <a href="javascript:void(0)" class="dropdown-toggle btn btn-primary" data-toggle="dropdown">
											Status
										 </a> 
										 <div class="dropdown-menu dropdown-menu-right notifications">
											<div class="noti-content">
											   <ul class="notification-list">
												  <li class="notification-message">
												   <a href="javascript:void(0)">
														 <div class="form-check">
														  <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1" value="option1" checked="">
														  <label class="form-check-label" for="exampleRadios1">
															Estimate
														  </label>
														</div>
													 </a>
												  </li>
												  
												   <li class="notification-message">
													<a href="javascript:void(0)">
														 <div class="form-check">
														  <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2" value="option1" checked="">
														  <label class="form-check-label" for="exampleRadios2">
																Pending
														  </label>
														</div>
													 </a>
													
												  </li>
												  
												  
												  <li class="notification-message">
													<a href="javascript:void(0)">
														 <div class="form-check">
														  <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios3" value="option1" checked="">
														  <label class="form-check-label" for="exampleRadios3">
															Completed
														  </label>
														</div>
													 </a>
													
												  </li>
												  
												  
											   </ul>
											</div>
										 </div>
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
														  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked="">
														  <label class="form-check-label" for="exampleRadios1">
															
Last update
														  </label>
														</div>
													 </a>
												  </li>
												  
												   <li class="notification-message">
													<a href="javascript:void(0)">
														 <div class="form-check">
														  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option1" checked="">
														  <label class="form-check-label" for="exampleRadios2">
															Amount spent
														  </label>
														</div>
													 </a>
													
												  </li>
												  
												  
												  <li class="notification-message">
													<a href="javascript:void(0)">
														 <div class="form-check">
														  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option1" checked="">
														  <label class="form-check-label" for="exampleRadios3">
															
Total orders
														  </label>
														</div>
													 </a>
													
												  </li>
												  
												  
												    <li class="notification-message">
													<a href="javascript:void(0)">
														 <div class="form-check">
														  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option1" checked="">
														  <label class="form-check-label" for="exampleRadios4">
															Last order date
														  </label>
														</div>
													 </a>
													
												  </li>
												  
												    <li class="notification-message">
													<a href="javascript:void(0)">
														 <div class="form-check">
														  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option1" checked="">
														  <label class="form-check-label" for="exampleRadios4">
															
First order date
														  </label>
														</div>
													 </a>
													
												  </li>
												  
												  
												  <li class="notification-message">
													<a href="javascript:void(0)">
														 <div class="form-check">
														  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios5" value="option1" checked="">
														  <label class="form-check-label" for="exampleRadios5">
															A–Z
														  </label>
														</div>
													 </a>
													
												  </li>
												  
												    <li class="notification-message">
													<a href="javascript:void(0)">
														 <div class="form-check">
														  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios6" value="option1" checked="">
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
                                       <th></th>
                                       <th>Draft Order</th>
                                       <th>Date</th>
                                       <th>Customer</th>
                                       <th>Status</th>
                                       <th>Total</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td>#R4</td>
                                       <td>31 minutes ago</td>
                                       <td>---</td>
                                       <td><label class="badge badge-success">Completed</label></td>
                                       <td>K9,380.00</td>
                                       <td>
                                          <a href="{{route('seller.view_request')}}" class="btn btn-sm bg-info-light">
                                             <i class="far fa-eye mr-1"></i> View
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td>#R2</td>
                                       <td>31 minutes ago</td>
                                       <td>---</td>
                                       <td><label class="badge badge-danger">Estimate</label></td>
                                       <td>K9,380.00</td>
                                       <td>
                                          <a href="{{route('seller.view_request')}}" class="btn btn-sm bg-info-light">
                                             <i class="far fa-eye mr-1"></i> View
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td>#R3</td>
                                       <td>31 minutes ago</td>
                                       <td>---</td>
                                       <td><label class="badge badge-success">Completed</label></td>
                                       <td>K9,380.00</td>
                                       <td>
                                          <a href="{{route('seller.view_request')}}" class="btn btn-sm bg-info-light">
                                             <i class="far fa-eye mr-1"></i> View
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td>#R1</td>
                                       <td>31 minutes ago</td>
                                       <td>---</td>
                                       <td><label class="badge badge-success">Completed</label></td>
                                       <td>K9,380.00</td>
                                       <td>
                                          <a href="{{route('seller.view_request')}}" class="btn btn-sm bg-info-light">
                                             <i class="far fa-eye mr-1"></i> View
                                          </a>
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
            <div class="tab-pane" id="3a">
               <div class="row ordertabstableitems ">
                  <div class="col-md-12 d-flex">
                     <div class="card card-table flex-fill">
                        <div class="card-body">
                           <div class="table-responsive">
                              <div class="table-responsive">
                              <table class="table table-center datatable">
                                 <thead>
                                    <tr>
                                       <th></th>
                                       <th>Draft Order</th>
                                       <th>Date</th>
                                       <th>Customer</th>
                                       <th>Status</th>
                                       <th>Total</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td>#R4</td>
                                       <td>31 minutes ago</td>
                                       <td>---</td>
                                       <td><label class="badge badge-danger">Estimate</label></td>
                                       <td>K9,380.00</td>
                                       <td>
                                          <a href="javascript:void(0)" class="btn btn-sm bg-info-light">
                                             <i class="far fa-eye mr-1"></i> View
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td>#R2</td>
                                       <td>31 minutes ago</td>
                                       <td>---</td>
                                       <td><label class="badge badge-success">Completed</label></td>
                                       <td>K9,380.00</td>
                                       <td>
                                          <a href="javascript:void(0)" class="btn btn-sm bg-info-light">
                                             <i class="far fa-eye mr-1"></i> View
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td>#R3</td>
                                       <td>31 minutes ago</td>
                                       <td>---</td>
                                       <td><label class="badge badge-success">Completed</label></td>
                                       <td>K9,380.00</td>
                                       <td>
                                          <a href="javascript:void(0)" class="btn btn-sm bg-info-light">
                                             <i class="far fa-eye mr-1"></i> View
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td>#R1</td>
                                       <td>31 minutes ago</td>
                                       <td>---</td>
                                       <td><label class="badge badge-success">Completed</label></td>
                                       <td>K9,380.00</td>
                                       <td>
                                          <a href="javascript:void(0)" class="btn btn-sm bg-info-light">
                                             <i class="far fa-eye mr-1"></i> View
                                          </a>
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
            <div class="tab-pane" id="4a">
               <div class="row ordertabstableitems ">
                  <div class="col-md-12 d-flex">
                     <div class="card card-table flex-fill">
                        <div class="card-body">
                           <div class="table-responsive">
                              <div class="table-responsive">
                              <table class="table table-center datatable">
                                 <thead>
                                    <tr>
                                       <th></th>
                                       <th>Draft Order</th>
                                       <th>Date</th>
                                       <th>Customer</th>
                                       <th>Status</th>
                                       <th>Total</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td>#R4</td>
                                       <td>31 minutes ago</td>
                                       <td>---</td>
                                       <td><label class="badge badge-danger">Estimate</label></td>
                                       <td>K9,380.00</td>
                                       <td>
                                          <a href="javascript:void(0)" class="btn btn-sm bg-info-light">
                                             <i class="far fa-eye mr-1"></i> View
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td>#R2</td>
                                       <td>31 minutes ago</td>
                                       <td>---</td>
                                       <td><label class="badge badge-success">Completed</label></td>
                                       <td>K9,380.00</td>
                                       <td>
                                          <a href="javascript:void(0)" class="btn btn-sm bg-info-light">
                                             <i class="far fa-eye mr-1"></i> View
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td>#R3</td>
                                       <td>31 minutes ago</td>
                                       <td>---</td>
                                       <td><label class="badge badge-success">Completed</label></td>
                                       <td>K9,380.00</td>
                                       <td>
                                          <a href="javascript:void(0)" class="btn btn-sm bg-info-light">
                                             <i class="far fa-eye mr-1"></i> View
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td>#R1</td>
                                       <td>31 minutes ago</td>
                                       <td>---</td>
                                       <td><label class="badge badge-success">Completed</label></td>
                                       <td>K9,380.00</td>
                                       <td>
                                          <a href="javascript:void(0)" class="btn btn-sm bg-info-light">
                                             <i class="far fa-eye mr-1"></i> View
                                          </a>
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
            <div class="tab-pane" id="5a">
               <div class="row ordertabstableitems ">
                  <div class="col-md-12 d-flex">
                     <div class="card card-table flex-fill">
                        <div class="card-body">
                           <div class="table-responsive">
                              <div class="table-responsive">
                              <table class="table table-center datatable">
                                 <thead>
                                    <tr>
                                       <th></th>
                                       <th>Draft Order</th>
                                       <th>Date</th>
                                       <th>Customer</th>
                                       <th>Status</th>
                                       <th>Total</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td>#R4</td>
                                       <td>31 minutes ago</td>
                                       <td>---</td>
                                       <td><label class="badge badge-danger">Estimate</label></td>
                                       <td>K9,380.00</td>
                                       <td>
                                          <a href="javascript:void(0)" class="btn btn-sm bg-info-light">
                                             <i class="far fa-eye mr-1"></i> View
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td>#R2</td>
                                       <td>31 minutes ago</td>
                                       <td>---</td>
                                       <td><label class="badge badge-success">Completed</label></td>
                                       <td>K9,380.00</td>
                                       <td>
                                          <a href="javascript:void(0)" class="btn btn-sm bg-info-light">
                                             <i class="far fa-eye mr-1"></i> View
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td>#R3</td>
                                       <td>31 minutes ago</td>
                                       <td>---</td>
                                       <td><label class="badge badge-success">Completed</label></td>
                                       <td>K9,380.00</td>
                                       <td>
                                          <a href="javascript:void(0)" class="btn btn-sm bg-info-light">
                                             <i class="far fa-eye mr-1"></i> View
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td>#R1</td>
                                       <td>31 minutes ago</td>
                                       <td>---</td>
                                       <td><label class="badge badge-success">Completed</label></td>
                                       <td>K9,380.00</td>
                                       <td>
                                          <a href="javascript:void(0)" class="btn btn-sm bg-info-light">
                                             <i class="far fa-eye mr-1"></i> View
                                          </a>
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
         </div>
      </div>
      <div class="creatingdraft text-center">
          <p>Learn more about <a href="javascript:void(0)">creating draft request</a></p>
      </div>
   </div>
@endsection
@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

@endsection