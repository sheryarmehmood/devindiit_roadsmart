@extends('serviceprovider.layouts.app')

@section('title', 'Dashboard')
@section('content')
<link  rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" >

 
             
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-12">
                        <h3 class="page-title">Welcome Service Provider!</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon bg-primary">
                                    <i class="fas fa-archive"></i>
                                </span>
                                <div class="dash-widget-info">
                                    <h3>429</h3>
                                    <h6 class="text-muted">My <br>Services</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon bg-primary">
                                    <i class="fas fa-shopping-cart"></i>
                                </span>
                                <div class="dash-widget-info">
                                    <h3>148</h3>
                                    <h6 class="text-muted">My <br>Orders</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon bg-primary">
                                    <i class="fas fa-clipboard-check"></i>
                                </span>
                                <div class="dash-widget-info">
                                    <h3>124</h3>
                                    <h6 class="text-muted">My<br> Products</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon bg-primary">
                                    <i class="fas fa-hourglass-half"></i>
                                </span>
                                <div class="dash-widget-info">
                                    <h3>$11378</h3>
                                    <h6 class="text-muted">My <br>Earning</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 d-flex ordertabstableitems ">
                    <div class="card card-table flex-fill">
                        <div class="card-header">
                            <h4 class="card-title">Recent Orders</h4>
                        </div>
                        <div class="card-body px-4 pt-2">
                            <div class="table-responsive">
                                <table class="table table-center">
                                    <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Service Name</th>
                                            <th>Client Name</th>
											<th>Order Status</th>
                                            <th>Address</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Phone Number</th>
                                            <th>Action</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-nowrap">
                                                #3456
                                            </td>
                                            <td class="text-nowrap">Repairs</td>
                                            <td>John Smith</td>
											 <td><label class="badge badge-success">Completed</label></td>
                                            <td>
                                                Usa , Florida
                                            </td>
                                            <td>10 Dec 2021</td>
                                            <td>03:42 PM</td>
                                            <td>
                                                +123456789
                                            </td>
											
                                             <th>
											  <a href="{{route('seller.view_order')}}" class="btn btn-sm bg-info-light">
												 <i class="far fa-eye mr-1"></i> View
											   </a>
											  <button class="btn btn-sm bg-success-light"><i class="fas fa-check"></i> Accept</button>
											  <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>  Reject</button>
											 </th>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap">
                                             #3456</td>
                                            <td class="text-nowrap">Parts</td>
                                            <td>John Smith</td>
											<td><label class="badge badge-success">Completed</label></td>
                                            
                                            <td>
                                                Usa , Florida
                                            </td>
                                            <td>10 Dec 2021</td>
                                            <td>03:42 PM</td>
                                            <td>
                                             +123456789
                                            </td>
											  <th>
											 <a href="{{route('seller.view_order')}}" class="btn btn-sm bg-info-light">
												 <i class="far fa-eye mr-1"></i> View
											   </a>
											  <button class="btn btn-sm bg-success-light"><i class="fas fa-check"></i> Accept</button>
											  <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>  Reject</button>
											 </th>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap">
                                             #3456</td>
                                            <td class="text-nowrap">Insurance Services</td>
                                            <td>John Smith</td>
											<td><label class="badge badge-danger">Pending</label></td>
                                            <td>
                                              Usa , Florida
                                            </td>
                                            <td>10 Dec 2021</td>
                                            <td>03:42 PM</td>
                                            <td>
                                              +123456789
                                            </td>
											
                                             <th>
											  <a href="{{route('seller.view_order')}}" class="btn btn-sm bg-info-light">
												 <i class="far fa-eye mr-1"></i> View
											   </a>
											  <button class="btn btn-sm bg-success-light"><i class="fas fa-check"></i> Accept</button>
											  <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>  Reject</button>
											 </th>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap">
                                               #3456
                                            </td>
                                            <td class="text-nowrap">Brakes</td>
                                            <td>John Smith</td>
											<td><label class="badge badge-success">Completed</label></td>
                                            <td>
                                          Usa , Florida
                                            </td>
                                            <td>10 Dec 2021</td>
                                            <td>03:42 PM</td>
                                            <td>
                                               +123456789
                                            </td>
											
                                              <th>
											   <a href="{{route('seller.view_order')}}" class="btn btn-sm bg-info-light">
												 <i class="far fa-eye mr-1"></i> View
											   </a>
											  <button class="btn btn-sm bg-success-light"><i class="fas fa-check"></i> Accept</button>
											  <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>  Reject</button>
											 
											 </th>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap">
                                             #3456
                                         </td>
                                            <td class="text-nowrap">Tyre</td>
                                            <td>John Smith</td>
											<td><label class="badge badge-danger">Pending</label></td>
                                            <td>
                                            Usa , Florida
                                            </td>
                                            <td>10 Dec 2021</td>
                                            <td>03:42 PM</td>
                                            <td>
                                              +123456789
                                            </td>
											
                                             <th>
											  <a href="{{route('seller.view_order')}}" class="btn btn-sm bg-info-light">
												 <i class="far fa-eye mr-1"></i> View
											   </a>
											  <button class="btn btn-sm bg-success-light"><i class="fas fa-check"></i> Accept</button>
											  <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>  Reject</button>
											 </th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
  @endsection  

      
