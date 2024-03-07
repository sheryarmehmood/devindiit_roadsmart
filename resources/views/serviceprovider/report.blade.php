@extends('serviceprovider.layouts.app')
@section('title', 'Report')
@section('content')
   <div class="content container-fluid">
      <div class="page-header">
         <div class="row">
            <div class="col">
               <h3 class="page-title">Report</h3>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12">
            <div class="card card-table">
             
			    <div class="card-header">
                            <h4 class="card-title">Marketplace Orders</h4>
                        </div>
               <div id="exTab1" class="container">
                  <ul  class="nav nav-pills nav-tabs menu-tabs">
                     <li class="nav-item active">
                        <a class="nav-link" href="#1a" data-toggle="tab">Upcoming Orders</a>
                     </li>
                     <li class="nav-item"><a class="nav-link" href="#2a" data-toggle="tab">Past Orders</a>
                     </li>
                  </ul>
                  <div class="tab-content clearfix">
                     <div class="tab-pane active" id="1a">
                        <div class="row ordertabstableitems">
                           <div class="col-md-12 d-flex">
                              <div class="card-table flex-fill">
                                 <div class="card-body px-4 pt-2">
                                    <div class="table-responsive">
                                       <table class="table table-center">
                                          <thead>
                                             <tr>
                                                <th>Order Id</th>
                                                <th>Product Name</th>
                                                <th>Client Name</th>
                                                <th>Type</th>
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
                                                <td class="text-nowrap">Engine</td>
                                                <td>John Smith</td>
                                                <td><label class="badge bg-info-light">Product</label></td>
                                                <td>
                                                   Usa , Florida
                                                </td>
                                                <td>10 Dec 2021</td>
                                                <td>11:28 am</td>
                                                <td>
                                                   +123456789
                                                </td>
                                                <th>
                                                   <a href="{{route('seller.marketplace_detail')}}" class="btn bg-primary-light">View</a>
                                                   <button class="btn bg-success-light">Accept</button>
                                                   <button class="btn bg-danger-light">Reject</button>
                                                </th>
                                             </tr>
                                             <tr>
                                                <td class="text-nowrap">
                                                   #3456
                                                </td>
                                                <td class="text-nowrap">Wheels</td>
                                                <td>John Smith</td>
                                                <td><label class="badge bg-info-light">Product</label></td>
                                                <td>
                                                   Usa , Florida
                                                </td>
                                                <td>10 Dec 2021</td>
                                                <td>11:28 am</td>
                                                <td>
                                                   +123456789
                                                </td>
                                                <th>
                                                   <a href="{{route('seller.marketplace_detail')}}" class="btn bg-primary-light">View</a>
                                                   <button class="btn bg-success-light">Accept</button>
                                                   <button class="btn bg-danger-light">Reject</button>
                                                </th>
                                             </tr>
                                             <tr>
                                                <td class="text-nowrap">
                                                   #3456
                                                </td>
                                                <td class="text-nowrap">Tyres</td>
                                                <td>John Smith</td>
                                                <td><label class="badge bg-info-light">Product</label></td>
                                                <td>
                                                   Usa , Florida
                                                </td>
                                                <td>10 Dec 2021</td>
                                                <td>11:28 am</td>
                                                <td>
                                                   +123456789
                                                </td>
                                                <th>
                                                   <a href="{{route('seller.marketplace_detail')}}" class="btn bg-primary-light">View</a>
                                                   <button class="btn bg-success-light">Accept</button>
                                                   <button class="btn bg-danger-light">Reject</button>
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
                     <div class="tab-pane" id="2a">
                        <div class="row ordertabstableitems">
                           <div class="col-md-12 d-flex">
                              <div class=" card-table flex-fill">
                                 <div class="card-body  px-4 pt-2">
                                    <div class="table-responsive">
                                       <table class="table table-center datatable">
                                          <thead>
                                             <tr>
                                                <th>Order Id</th>
                                                <th>Product Name</th>
                                                <th>Client Name</th>
                                                <th>Type</th>
                                                <th>Price</th>
                                                <th>Date</th>
                                                <th>Time</th>
                                                <th>Phone Number</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <td class="text-nowrap">
                                                   #3456
                                                </td>
                                                <td class="text-nowrap">Gear</td>
                                                <td>John Smith</td>
                                                <td><label class="badge bg-info-light">Product</label></td>
                                                <td>$62</td>
                                                <td>10 Dec 2021</td>
                                                <td>11:28 am</td>
                                                <td>
                                                   +123456789
                                                </td>
                                                <td>
                                                   <label class="badge badge-warning">Completed</label>
                                                </td>
                                                <td> <a href="{{route('seller.view_order')}}" class="btn btn-sm bg-info-light">
                                                   <i class="far fa-eye mr-1"></i> View
                                                   </a>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td class="text-nowrap">
                                                   #3456
                                                </td>
                                                <td class="text-nowrap">Alloys</td>
                                                <td>John Smith</td>
                                                <td><label class="badge bg-info-light">Product</label></td>
                                                <td>$62</td>
                                                <td>10 Dec 2021</td>
                                                <td>11:28 am</td>
                                                <td>
                                                   +123456789
                                                </td>
                                                <td>
                                                   <label class="badge badge-success">In Progress</label>
                                                </td>
                                                <td> <a href="{{route('seller.view_order')}}" class="btn btn-sm bg-info-light">
                                                   <i class="far fa-eye mr-1"></i> View
                                                   </a>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td class="text-nowrap">
                                                   #3456
                                                </td>
                                                <td class="text-nowrap">Engine</td>
                                                <td>John Smith</td>
                                                <td><label class="badge bg-info-light">Product</label></td>
                                                <td>$62</td>
                                                <td>10 Dec 2021</td>
                                                <td>11:28 am</td>
                                                <td>
                                                   +123456789
                                                </td>
                                                <td>
                                                   <label class="badge badge-dark">Pending</label>
                                                </td>
                                                <td> <a href="{{route('seller.view_order')}}" class="btn btn-sm bg-info-light">
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
            <div class="card ordertabstableitems card-table flex-fill">
               
			    <div class="card-header">
                            <h4 class="card-title">Invoices</h4>
                        </div>
               <div class="card-body px-4 pt-2">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="table-responsive">
                           <table class="table table-center">
                              <thead>
                                 <tr>
                                    <th>Id</th>
                                    <th>Client Name</th>
                                    <th>Service Name</th>
                                    <th>Pending Amount</th>
                                    <th>Status</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td class="text-nowrap">
                                       #3456
                                    </td>
                                    <td class="text-nowrap">John Smith</td>
                                    <td>Repairs</td>
                                    <td>
                                       $62
                                    </td>
                                    <td><label class="badge badge-danger">Pending</label></td>
                                 </tr>
                                 <tr>
                                    <td class="text-nowrap">
                                       #3457
                                    </td>
                                    <td class="text-nowrap">Nancy Olson</td>
                                    <td>Parts</td>
                                    <td>
                                       $51
                                    </td>
                                    <td><label class="badge badge-success">Completed</label></td>
                                 </tr>
                                 <tr>
                                    <td class="text-nowrap">
                                       #3458
                                    </td>
                                    <td class="text-nowrap">Roland Storey</td>
                                    <td>Insurance</td>
                                    <td>
                                       $112
                                    </td>
                                    <td><label class="badge badge-danger">Pending</label></td>
                                 </tr>
                                 <tr>
                                    <td class="text-nowrap">
                                       #3459
                                    </td>
                                    <td class="text-nowrap">Smith John</td>
                                    <td>Brakes</td>
                                    <td>
                                       $87
                                    </td>
                                    <td><label class="badge badge-success">Completed</label></td>
                                 </tr>
                                 <tr>
                                    <td class="text-nowrap">
                                       #3460
                                    </td>
                                    <td class="text-nowrap">John Doe</td>
                                    <td>Tyre</td>
                                    <td>
                                       $201
                                    </td>
                                    <td><label class="badge badge-danger">Pending</label></td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="card ordertabstableitems card-table flex-fill">
               
			   <div class="card-header">
                            <h4 class="card-title">Payment Received</h4>
                        </div>
               <div class="card-body px-4 pt-2">
                  <div class="table-responsive">
                     <div class="row">
                        <div class="col-sm-12">
                           <table class="table table-hover table-center mb-0">
                              <thead>
                                 <tr role="row">
                                    <th>#</th>
                                    <th>Date</th>
                                    <th>User</th>
                                    <th>Type</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr role="row" class="odd">
                                    <td class="sorting_1">1</td>
                                    <td>15 Sep 2020</td>
                                    <td>
                                       <span class="table-avatar">
                                       <a href="#" class="avatar avatar-sm mr-2">
                                       <img class="avatar-img rounded-circle" alt="" src="{{ asset('assets/serviceprovider/img/customer/user-02.jpg') }}">
                                       </a>
                                       <a href="javascript:void(0);">Nancy Olson</a>
                                       </span>
                                    </td>
                                    <td>Product</td>
                                    <td>$50</td>
                                    <td>
                                       <label class="badge badge-info">Inprogress</label>
                                    </td>
                                 </tr>
                                 <tr role="row" class="even">
                                    <td class="sorting_1">2</td>
                                    <td>14 Sep 2020</td>
                                    <td>
                                       <span class="table-avatar">
                                       <a href="#" class="avatar avatar-sm mr-2">
                                       <img class="avatar-img rounded-circle" alt="" src="{{ asset('assets/serviceprovider/img/customer/user-03.jpg') }}">
                                       </a>
                                       <a href="javascript:void(0);">Ramona Kingsley</a>
                                       </span>
                                    </td>
                                    <td>Service</td>
                                    <td>$45</td>
                                    <td>
                                       <label class="badge badge-dark">Pending</label>
                                    </td>
                                 </tr>
                                 <tr role="row" class="odd">
                                    <td class="sorting_1">3</td>
                                    <td>13 Sep 2020</td>
                                    <td>
                                       <span class="table-avatar">
                                       <a href="#" class="avatar avatar-sm mr-2">
                                       <img class="avatar-img rounded-circle" alt="" src="{{ asset('assets/serviceprovider/img/customer/user-04.jpg') }}">
                                       </a>
                                       <a href="javascript:void(0);">Ricardo Lung</a>
                                       </span>
                                    </td>
                                    <td>Product</td>
                                    <td>$14</td>
                                    <td>
                                       <label class="badge badge-danger">Rejected By User</label>
                                    </td>
                                 </tr>
                                 <tr role="row" class="even">
                                    <td class="sorting_1">4</td>
                                    <td>12 Sep 2020</td>
                                    <td>
                                       <span class="table-avatar">
                                       <a href="#" class="avatar avatar-sm mr-2">
                                       <img class="avatar-img rounded-circle" alt="" src="{{ asset('assets/serviceprovider/img/customer/user-05.jpg') }}">
                                       </a>
                                       <a href="javascript:void(0);">Annette Silva</a>
                                       </span>
                                    </td>
                                    <td>Service</td>
                                    <td>$100</td>
                                    <td>
                                       <label class="badge badge-dark">Pending</label>
                                    </td>
                                 </tr>
                                 <tr role="row" class="odd">
                                    <td class="sorting_1">5</td>
                                    <td>11 Sep 2020</td>
                                    <td>
                                       <span class="table-avatar">
                                       <a href="#" class="avatar avatar-sm mr-2">
                                       <img class="avatar-img rounded-circle" alt="" src="{{ asset('assets/serviceprovider/img/customer/user-06.jpg') }}">
                                       </a>
                                       <a href="javascript:void(0);">Stephen Wilson</a>
                                       </span>
                                    </td>
                                    <td>Product</td>
                                    <td>$80</td>
                                    <td>
                                       <label class="badge badge-info">Inprogress</label>
                                    </td>
                                 </tr>
                                 <tr role="row" class="even">
                                    <td class="sorting_1">6</td>
                                    <td>10 Sep 2020</td>
                                    <td>
                                       <span class="table-avatar">
                                       <a href="#" class="avatar avatar-sm mr-2">
                                       <img class="avatar-img rounded-circle" alt="" src="{{ asset('assets/serviceprovider/img/customer/user-07.jpg') }}">
                                       </a>
                                       <a href="javascript:void(0);">Ryan Rodriguez</a>
                                       </span>
                                    </td>
                                    <td>Service</td>
                                    <td>$5</td>
                                    <td>
                                       <label class="badge badge-dark">Pending</label>
                                    </td>
                                 </tr>
                                 <tr role="row" class="odd">
                                    <td class="sorting_1">7</td>
                                    <td>9 Sep 2020</td>
                                    <td>
                                       <span class="table-avatar">
                                       <a href="#" class="avatar avatar-sm mr-2">
                                       <img class="avatar-img rounded-circle" alt="" src="{{ asset('assets/serviceprovider/img/customer/user-08.jpg') }}">
                                       </a>
                                       <a href="javascript:void(0);">Lucile Devera</a>
                                       </span>
                                    </td>
                                    <td>Product</td>
                                    <td>$75</td>
                                    <td>
                                       <label class="badge badge-dark">Pending</label>
                                    </td>
                                 </tr>
                                 <tr role="row" class="even">
                                    <td class="sorting_1">8</td>
                                    <td>8 Sep 2020</td>
                                    <td>
                                       <span class="table-avatar">
                                       <a href="#" class="avatar avatar-sm mr-2">
                                       <img class="avatar-img rounded-circle" alt="" src="{{ asset('assets/serviceprovider/img/customer/user-09.jpg') }}">
                                       </a>
                                       <a href="javascript:void(0);">Roland Storey</a>
                                       </span>
                                    </td>
                                    <td>Service</td>
                                    <td>$500</td>
                                    <td>
                                       <label class="badge badge-danger">Rejected by User</label>
                                    </td>
                                 </tr>
                                 <tr role="row" class="odd">
                                    <td class="sorting_1">9</td>
                                    <td>7 Sep 2020</td>
                                    <td>
                                       <span class="table-avatar">
                                       <a href="#" class="avatar avatar-sm mr-2">
                                       <img class="avatar-img rounded-circle" alt="" src="{{ asset('assets/serviceprovider/img/customer/user-10.jpg') }}">
                                       </a>
                                       <a href="javascript:void(0);">Lindsey Parmley</a>
                                       </span>
                                    </td>
                                    <td>Product</td>
                                    <td>$150</td>
                                    <td>
                                       <label class="badge badge-dark">Pending</label>
                                    </td>
                                 </tr>
                                 <tr role="row" class="even">
                                    <td class="sorting_1">10</td>
                                    <td>6 Sep 2020</td>
                                    <td>
                                       <span class="table-avatar">
                                       <a href="#" class="avatar avatar-sm mr-2">
                                       <img class="avatar-img rounded-circle" alt="" src="{{ asset('assets/serviceprovider/img/customer/user-01.jpg') }}">
                                       </a>
                                       <a href="javascript:void(0);">Jeffrey Akridge</a>
                                       </span>
                                    </td>
                                    <td>Service</td>
                                    <td>$25</td>
                                    <td>
                                       <label class="badge badge-success">Complete Request to User</label>
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

<div class="modal fade" id="convert-popup" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-body">
            <div class="convert-cont">
               <p>Are you sure you wants to convert this estimate to order ?</p>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-success">Yes</button>
            <button type="button" class="btn btn-danger">No</button>
         </div>
      </div>
   </div>
</div>
@endsection
@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
@endsection