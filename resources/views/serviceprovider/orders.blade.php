@extends('serviceprovider.layouts.app')
@section('title', 'Orders')
@section('head')
<style>
#cat_wrapper #cat_filter {
    position: absolute;
    top: -45px;
    right: 20px;
}

#cat_wrapper #cat_filter input
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

#cat_wrapper .row:nth-child(2) #cat_paginate,
#cat_wrapper .row:nth-child(2) #cat_info {
   display: none;
}

button.dt-button.buttons-columnVisibility.active {
   color: #c9343a !important;
}
</style>
@endsection
@section('content')
   <div class="content container-fluid">
      <div class="page-header">
         <div class="row">
            <div class="col">
               <h3 class="page-title">Orders</h3>
            </div>
            <div class="col-auto text-right">
               <div class="actionMore">
                  <span class="nav-item dropdown noti-dropdown mx-3">
                     <a href="javascript:void(0)" class="dropdown-toggle nav-link ediio" data-toggle="dropdown">
                        Bulk Action<span class="badge badge-pill"></span>
                     </a> 
                     <div class="dropdown-menu dropdown-menu-right notifications">
                        <div class="noti-content">
                           <ul class="notification-list">
                              <li class="notification-message">
                                 <a href="javascript:void(0)">
                                    Mark Fulfilled
                                 </a>
                              </li>
                              <li class="notification-message">
                                 <a href="javascript:void(0)">
                                    Record Payment
                                 </a>
                              </li>
                              <li class="notification-message">
                                 <a href="javascript:void(0)">
                                    More Actions
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </span>
                  <a href="{{route('seller.add_order')}}" class="btn btn-primary addorder ml-3">
                     Create Order
                  </a>
                  <a class="btn btn-white filter-btn" href="javascript: void(0);" id="filter_search">
                     <i class="fas fa-filter"></i>
                  </a> 
               </div>
               
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
            <li class="nav-item"><a class="nav-link" href="#2a" data-toggle="tab">Unfulfilled</a> </li>
            <li class="nav-item"><a class="nav-link" href="#3a" data-toggle="tab">Unpaid</a> </li>
            <li class="nav-item"><a class="nav-link" href="#4a" data-toggle="tab">Open</a> </li>
            <li class="nav-item"><a class="nav-link" href="#5a" data-toggle="tab">Fulfilling</a> </li>
            <li class="nav-item"><a class="nav-link" href="#6a" data-toggle="tab">Closed</a> </li>
         </ul>
         <div class="tab-content ordersTableTabs  ordertabstableitems clearfix">
            <div class="tab-pane active" id="1a">
                  <div class="card card-table flex-fill">
					   <div class="card-header">
                            <h4 class="card-title">All Orders</h4>
                        </div>
                        <div class="card-body">
                           <div class="table-responsive">
                              <table class="table table-center datatable" id="cat">
                                 <thead>
                                    <tr>
                                       <th><input name="select_all" value="1" type="checkbox"></th>
                                       <th style='padding-bottom: 12px' >Order ID</th>
                                       <th style='padding-bottom: 12px'>Date</th>
                                       <th style='padding-bottom: 12px'>Customer</th>
									   <th style='padding-bottom: 12px'>Channel </th>
                                       <th style='padding-bottom: 12px'>Total</th>
                                       <th style='padding-bottom: 12px'>Payment Status</th>
                                       <th style='padding-bottom: 12px'>Fulfillment Status</th>
                                       <th style='padding-bottom: 12px'>Items</th>
                                       <th style='padding-bottom: 12px'>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td class="text-nowrap">#3456  <i class="fas fa-comment-dots ml-2 dottooltip tooltips" tooltip="This order has timeline comments." tooltip-position="top"></i></td>
                                       <td>10 Dec 2021</td>
									   <td>John Smith</td>
									   <td>Lorem ipsum</td>
                                       <td>K9,380.00</td>
                                       <td><label class="badge badge-warning">Paid</label></td>
                                       <td><label class="badge badge-success">Partially fullfield</label></td>
                                       <td>
                                          <span class="nav-item dropdown noti-dropdown orderitempopmain">
                                             <a href="javascript:void(0)" class="dropdown-toggle nav-link ediio " style="padding:0 !important" data-toggle="dropdown">
                                               1 Items<span class="badge badge-pill"></span>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right notifications orderitempop">
                                                <div class="noti-content">
                                                   <span class="badge badge-warning">Unfulfilled</span>
                                                   <ul class="notification-list">
                                                      <li class="notification-message viewBox ">
                                                         <div class="fileboxdiv">
                                                            <i class="far fa-file-archive"></i>
                                                            <span>1</span>
                                                         </div>
                                                         <h3>test</h3>
                                                      </li>
                                                   </ul>
                                                </div>
                                             </div>
                                          </span>
                                       </td>
                                       <td>
                              <a href="{{route('seller.view_order')}}" class="btn btn-sm bg-info-light">
                                             <i class="far fa-eye mr-1"></i> View
                                          </a>
                                         <a href="{{route('seller.edit_order')}}" class="btn btn-sm bg-success-light">
                                             <i class="fas fa-edit"></i> Edit
                                          </a>
                                          <button class="btn btn-sm bg-success-light"><i class="fas fa-check"></i> Accept</button>
                                          <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>  Reject</button>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td class="text-nowrap">#3455</td>
                                       <td>10 Dec 2021</td>
									   <td>John Smith</td>
									   <td>Lorem ipsum</td>
                                       <td>K9,380.00</td>
                                       <td><label class="badge badge-danger">Partially paid</label></td>
                                       <td><label class="badge badge-success">Partially fullfield</label></td>
                                       <td>
                                          <span class="nav-item dropdown noti-dropdown orderitempopmain">
                                             <a href="javascript:void(0)" class="dropdown-toggle nav-link ediio " style="padding:0 !important" data-toggle="dropdown">
                                               3 Items<span class="badge badge-pill"></span>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right notifications orderitempop">
                                                <div class="noti-content">
                                                   <span class="badge badge-warning">Unfulfilled</span>
                                                   <ul class="notification-list">
                                                      <li class="notification-message viewBox ">
                                                         <div class="fileboxdiv">
                                                            <i class="far fa-file-archive"></i>
                                                            <span>1</span>
                                                         </div>
                                                         <h3>test</h3>
                                                      </li>
                                                      <li class="notification-message viewBox ">
                                                         <div class="fileboxdiv">
                                                            <i class="far fa-file-archive"></i>
                                                            <span>1</span>
                                                         </div>
                                                         <h3>test</h3>
                                                      </li>
                                                   </ul>
                                                   <hr /W>
                                                   <span class="badge badge-success">Fulfilled</span>
                                                   <ul class="notification-list">
                                                      <li class="notification-message viewBox ">
                                                         <div class="fileboxdiv">
                                                            <i class="far fa-file-archive"></i>
                                                            <span>1</span>
                                                         </div>
                                                         <h3>test</h3>
                                                      </li>
                                                   </ul>
                                                </div>
                                             </div>
                                          </span>
                                       </td>
                                         <td>
                              <a href="{{route('seller.view_order')}}" class="btn btn-sm bg-info-light">
                                             <i class="far fa-eye mr-1"></i> View
                                          </a>
                                         <a href="{{route('seller.edit_order')}}" class="btn btn-sm bg-success-light">
                                             <i class="fas fa-edit"></i> Edit
                                          </a>
                                          <button class="btn btn-sm bg-success-light"><i class="fas fa-check"></i> Accept</button>
                                          <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>  Reject</button>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td class="text-nowrap">#3457  <i class="fas fa-comment-dots ml-2 dottooltip tooltips" tooltip="This order has timeline comments." tooltip-position="top"></i></td>
                                       <td>10 Dec 2021</td>
                                        <td>John Smith</td>
                                        <td>Lorem ipsum</td>
                                       <td>K9,380.00</td>
                                       <td><label class="badge badge-warning">Paid</label></td>
                                       <td><label class="badge badge-success">Partially fullfield</label></td>
                                       <td>
                                 <span class="nav-item dropdown noti-dropdown orderitempopmain">
                                             <a href="javascript:void(0)" class="dropdown-toggle nav-link ediio " style="padding:0 !important" data-toggle="dropdown">
                                               2 Items<span class="badge badge-pill"></span>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right notifications orderitempop">
                                                <div class="noti-content">
                                                   <span class="badge badge-warning">Unfulfilled</span>
                                                   <ul class="notification-list">
                                                      <li class="notification-message viewBox ">
                                                         <div class="fileboxdiv">
                                                            <i class="far fa-file-archive"></i>
                                                            <span>1</span>
                                                         </div>
                                                         <h3>test</h3>
                                                      </li>
                                          <li class="notification-message viewBox ">
                                                         <div class="fileboxdiv">
                                                            <i class="far fa-file-archive"></i>
                                                            <span>1</span>
                                                         </div>
                                                         <h3>test</h3>
                                                      </li>
                                                   </ul>
                                                </div>
                                             </div>
                                          </span>
                              </td>
                                         <td>
                              <a href="{{route('seller.view_order')}}" class="btn btn-sm bg-info-light">
                                             <i class="far fa-eye mr-1"></i> View
                                          </a>
                                         <a href="{{route('seller.edit_order')}}" class="btn btn-sm bg-success-light">
                                             <i class="fas fa-edit"></i> Edit
                                          </a>
                                          <button class="btn btn-sm bg-success-light"><i class="fas fa-check"></i> Accept</button>
                                          <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>  Reject</button>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td class="text-nowrap">#3458</td>
                                       <td>10 Dec 2021</td>
                                        <td>John Smith</td>
                                        <td>Lorem ipsum</td>
                                       <td>K9,380.00</td>
                                       <td><label class="badge badge-danger">Partially paid</label></td>
                                       <td><label class="badge badge-success">Partially fullfield</label></td>
                                       <td>
                                 <span class="nav-item dropdown noti-dropdown orderitempopmain">
                                             <a href="javascript:void(0)" class="dropdown-toggle nav-link ediio " style="padding:0 !important" data-toggle="dropdown">
                                               1 Items<span class="badge badge-pill"></span>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right notifications orderitempop">
                                                <div class="noti-content">
                                                   <span class="badge badge-warning">Unfulfilled</span>
                                                   <ul class="notification-list">
                                                      <li class="notification-message viewBox ">
                                                         <div class="fileboxdiv">
                                                            <i class="far fa-file-archive"></i>
                                                            <span>1</span>
                                                         </div>
                                                         <h3>test</h3>
                                                      </li>
                                         
                                                   </ul>
                                                </div>
                                             </div>
                                          </span>
                              </td>
                                         <td>
                              <a href="{{route('seller.view_order')}}" class="btn btn-sm bg-info-light">
                                             <i class="far fa-eye mr-1"></i> View
                                          </a>
                                         <a href="{{route('seller.edit_order')}}" class="btn btn-sm bg-success-light">
                                             <i class="fas fa-edit"></i> Edit
                                          </a>
                                          <button class="btn btn-sm bg-success-light"><i class="fas fa-check"></i> Accept</button>
                                          <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>  Reject</button>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td class="text-nowrap">#3451  <i class="fas fa-comment-dots ml-2 dottooltip tooltips" tooltip="This order has timeline comments." tooltip-position="top"></i></td>
                                       <td>10 Dec 2021</td>
                                         <td>John Smith</td>
                                         <td>Lorem ipsum</td>
                                       <td>K9,380.00</td>
                                       <td><label class="badge badge-warning">Paid</label></td>
                                       <td><label class="badge badge-success">Partially fullfield</label></td>
                                       <td>
                                 <span class="nav-item dropdown noti-dropdown orderitempopmain">
                                             <a href="javascript:void(0)" class="dropdown-toggle nav-link ediio " style="padding:0 !important" data-toggle="dropdown">
                                               1 Items<span class="badge badge-pill"></span>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right notifications orderitempop">
                                                <div class="noti-content">
                                                   <span class="badge badge-warning">Unfulfilled</span>
                                                   <ul class="notification-list">
                                                      <li class="notification-message viewBox ">
                                                         <div class="fileboxdiv">
                                                            <i class="far fa-file-archive"></i>
                                                            <span>1</span>
                                                         </div>
                                                         <h3>test</h3>
                                                      </li>
                                         
                                                   </ul>
                                                </div>
                                             </div>
                                          </span>
                              </td>
                                        <td>
                              <a href="{{route('seller.view_order')}}" class="btn btn-sm bg-info-light">
                                             <i class="far fa-eye mr-1"></i> View
                                          </a>
                                         <a href="{{route('seller.edit_order')}}" class="btn btn-sm bg-success-light">
                                             <i class="fas fa-edit"></i> Edit
                                          </a>
                                          <button class="btn btn-sm bg-success-light"><i class="fas fa-check"></i> Accept</button>
                                          <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>  Reject</button>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                 
            </div>
            <div class="tab-pane" id="2a">
                    <div class="card card-table flex-fill">
					 <div class="card-header">
                            <h4 class="card-title">Unfulfilled Orders</h4>
                        </div>
                        <div class="card-body">
                           <div class="table-responsive">
                              <table class="table table-center datatable">
                                 <thead>
                                    <tr>
                                       <th><input name="" value="1" type="checkbox"></th>
                                       <th>Order ID</th>
                                       <th>Date</th>
                                       <th>Customer</th>
                                       <th>Channel </th>
                                       <th>Total</th>
                                       <th>Payment Status</th>
                                       <th>Fulfillment Status</th>
                                       <th>Items</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td class="text-nowrap">#3456</td>
                                       <td>10 Dec 2021</td>
                                        <td>John Smith</td>
                                        <td>Lorem ipsum</td>
                                       <td>K9,380.00</td>
                                       <td><label class="badge badge-success">Paid</label></td>
                                       <td><label class="badge badge-danger">Partially Unfullfield</label></td>
                                       <td>
                                 <span class="nav-item dropdown noti-dropdown orderitempopmain">
                                             <a href="javascript:void(0)" class="dropdown-toggle nav-link ediio " style="padding:0 !important" data-toggle="dropdown">
                                               2 Items<span class="badge badge-pill"></span>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right notifications orderitempop">
                                                <div class="noti-content">
                                                   <span class="badge badge-warning">Unfulfilled</span>
                                                   <ul class="notification-list">
                                                      <li class="notification-message viewBox ">
                                                         <div class="fileboxdiv">
                                                            <i class="far fa-file-archive"></i>
                                                            <span>1</span>
                                                         </div>
                                                         <h3>test</h3>
                                                      </li>
                                          <li class="notification-message viewBox ">
                                                         <div class="fileboxdiv">
                                                            <i class="far fa-file-archive"></i>
                                                            <span>1</span>
                                                         </div>
                                                         <h3>test</h3>
                                                      </li>
                                                   </ul>
                                                </div>
                                             </div>
                                          </span>
                              </td>
                                         <td>
                              <a href="{{route('seller.view_order')}}" class="btn btn-sm bg-info-light">
                                             <i class="far fa-eye mr-1"></i> View
                                          </a>
                                         <a href="{{route('seller.edit_order')}}" class="btn btn-sm bg-success-light">
                                             <i class="fas fa-edit"></i> Edit
                                          </a>
                                          <button class="btn btn-sm bg-success-light"><i class="fas fa-check"></i> Accept</button>
                                          <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>  Reject</button>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td class="text-nowrap">#3455</td>
                                       <td>10 Dec 2021</td>
                                        <td>John Smith</td>
										 <td>Lorem ipsum</td>
                                       <td>K9,380.00</td>
                                       <td><label class="badge badge-success">Paid</label></td>
                                       <td><label class="badge badge-danger">Partially Unfullfield</label></td>
                                       <td>
                                 <span class="nav-item dropdown noti-dropdown orderitempopmain">
                                             <a href="javascript:void(0)" class="dropdown-toggle nav-link ediio " style="padding:0 !important" data-toggle="dropdown">
                                               2 Items<span class="badge badge-pill"></span>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right notifications orderitempop">
                                                <div class="noti-content">
                                                   <span class="badge badge-warning">Unfulfilled</span>
                                                   <ul class="notification-list">
                                                      <li class="notification-message viewBox ">
                                                         <div class="fileboxdiv">
                                                            <i class="far fa-file-archive"></i>
                                                            <span>1</span>
                                                         </div>
                                                         <h3>test</h3>
                                                      </li>
                                          <li class="notification-message viewBox ">
                                                         <div class="fileboxdiv">
                                                            <i class="far fa-file-archive"></i>
                                                            <span>1</span>
                                                         </div>
                                                         <h3>test</h3>
                                                      </li>
                                                   </ul>
                                                </div>
                                             </div>
                                          </span>
                              </td>
                                         <td>
                              <a href="{{route('seller.view_order')}}" class="btn btn-sm bg-info-light">
                                             <i class="far fa-eye mr-1"></i> View
                                          </a>
                                         <a href="{{route('seller.edit_order')}}" class="btn btn-sm bg-success-light">
                                             <i class="fas fa-edit"></i> Edit
                                          </a>
                                          <button class="btn btn-sm bg-success-light"><i class="fas fa-check"></i> Accept</button>
                                          <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>  Reject</button>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td class="text-nowrap">#3457</td>
                                       <td>10 Dec 2021</td>
                                        <td>John Smith</td>
										 <td>Lorem ipsum</td>
                                       <td>K9,380.00</td>
                                       <td><label class="badge badge-success">Paid</label></td>
                                       <td><label class="badge badge-danger">Partially Unfullfield</label></td>
                                       <td>
                                 <span class="nav-item dropdown noti-dropdown orderitempopmain">
                                             <a href="javascript:void(0)" class="dropdown-toggle nav-link ediio " style="padding:0 !important" data-toggle="dropdown">
                                               2 Items<span class="badge badge-pill"></span>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right notifications orderitempop">
                                                <div class="noti-content">
                                                   <span class="badge badge-warning">Unfulfilled</span>
                                                   <ul class="notification-list">
                                                      <li class="notification-message viewBox ">
                                                         <div class="fileboxdiv">
                                                            <i class="far fa-file-archive"></i>
                                                            <span>1</span>
                                                         </div>
                                                         <h3>test</h3>
                                                      </li>
                                          <li class="notification-message viewBox ">
                                                         <div class="fileboxdiv">
                                                            <i class="far fa-file-archive"></i>
                                                            <span>1</span>
                                                         </div>
                                                         <h3>test</h3>
                                                      </li>
                                                   </ul>
                                                </div>
                                             </div>
                                          </span>
                              </td>
                                         <td>
                              <a href="{{route('seller.view_order')}}" class="btn btn-sm bg-info-light">
                                             <i class="far fa-eye mr-1"></i> View
                                          </a>
                                         <a href="{{route('seller.edit_order')}}" class="btn btn-sm bg-success-light">
                                             <i class="fas fa-edit"></i> Edit
                                          </a>
                                          <button class="btn btn-sm bg-success-light"><i class="fas fa-check"></i> Accept</button>
                                          <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>  Reject</button>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td class="text-nowrap">#3458</td>
                                       <td>10 Dec 2021</td>
                                        <td>John Smith</td>
										 <td>Lorem ipsum</td>
                                       <td>K9,380.00</td>
                                       <td><label class="badge badge-success">Paid</label></td>
                                       <td><label class="badge badge-danger">Partially Unfullfield</label></td>
                                       <td>
                                 <span class="nav-item dropdown noti-dropdown orderitempopmain">
                                             <a href="javascript:void(0)" class="dropdown-toggle nav-link ediio " style="padding:0 !important" data-toggle="dropdown">
                                               1 Items<span class="badge badge-pill"></span>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right notifications orderitempop">
                                                <div class="noti-content">
                                                   <span class="badge badge-warning">Unfulfilled</span>
                                                   <ul class="notification-list">
                                                      <li class="notification-message viewBox ">
                                                         <div class="fileboxdiv">
                                                            <i class="far fa-file-archive"></i>
                                                            <span>1</span>
                                                         </div>
                                                         <h3>test</h3>
                                                      </li>
                                          
                                                   </ul>
                                                </div>
                                             </div>
                                          </span>
                              
                              </td>
                                         <td>
                              <a href="{{route('seller.view_order')}}" class="btn btn-sm bg-info-light">
                                             <i class="far fa-eye mr-1"></i> View
                                          </a>
                                         <a href="{{route('seller.edit_order')}}" class="btn btn-sm bg-success-light">
                                             <i class="fas fa-edit"></i> Edit
                                          </a>
                                          <button class="btn btn-sm bg-success-light"><i class="fas fa-check"></i> Accept</button>
                                          <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>  Reject</button>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td class="text-nowrap">#3451</td>
                                       <td>10 Dec 2021</td>
                                        <td>John Smith</td>
										 <td>Lorem ipsum</td>
                                       <td>K9,380.00</td>
                                       <td><label class="badge badge-success">Paid</label></td>
                                       <td><label class="badge badge-danger">Partially Unfullfield</label></td>
                                       <td>
                                 <span class="nav-item dropdown noti-dropdown orderitempopmain">
                                             <a href="javascript:void(0)" class="dropdown-toggle nav-link ediio " style="padding:0 !important" data-toggle="dropdown">
                                               1 Items<span class="badge badge-pill"></span>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right notifications orderitempop">
                                                <div class="noti-content">
                                                   <span class="badge badge-warning">Unfulfilled</span>
                                                   <ul class="notification-list">
                                                      <li class="notification-message viewBox ">
                                                         <div class="fileboxdiv">
                                                            <i class="far fa-file-archive"></i>
                                                            <span>1</span>
                                                         </div>
                                                         <h3>test</h3>
                                                      </li>
                                        
                                                   </ul>
                                                </div>
                                             </div>
                                          </span>
                              </td>
                                         <td>
                              <a href="{{route('seller.view_order')}}" class="btn btn-sm bg-info-light">
                                             <i class="far fa-eye mr-1"></i> View
                                          </a>
                                         <a href="{{route('seller.edit_order')}}" class="btn btn-sm bg-success-light">
                                             <i class="fas fa-edit"></i> Edit
                                          </a>
                                          <button class="btn btn-sm bg-success-light"><i class="fas fa-check"></i> Accept</button>
                                          <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>  Reject</button>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                
            </div>
            <div class="tab-pane" id="3a">
               <div class="row">
                  <div class="col-md-12 d-flex">
                     <div class="card card-table flex-fill">
					  <div class="card-header">
                            <h4 class="card-title">Unpaid Orders</h4>
                        </div>
                        <div class="card-body">
                           <div class="table-responsive">
                              <table class="table table-center datatable">
                                 <thead>
                                    <tr>
                                       <th><input name="" value="1" type="checkbox"></th>
                                       <th>Order ID</th>
                                       <th>Date</th>
                                       <th>Customer</th>
                                       <th>Channel</th>
                                       <th>Total</th>
                                       <th>Payment Status</th>
                                       <th>Fulfillment Status</th>
                                       <th>Items</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td class="text-nowrap">#3456</td>
                                       <td>10 Dec 2021</td>
                                        <td>John Smith</td>
										 <td>Lorem ipsum</td>
                                       <td>K9,380.00</td>
                                       <td><label class="badge badge-danger">Pending</label></td>
                                       <td><label class="badge badge-success">Partially fullfield</label></td>
                                       <td>
                                 <span class="nav-item dropdown noti-dropdown orderitempopmain">
                                             <a href="javascript:void(0)" class="dropdown-toggle nav-link ediio " style="padding:0 !important" data-toggle="dropdown">
                                               2 Items<span class="badge badge-pill"></span>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right notifications orderitempop">
                                                <div class="noti-content">
                                                   <span class="badge badge-success">Fulfilled</span>
                                                   <ul class="notification-list">
                                                      <li class="notification-message viewBox ">
                                                         <div class="fileboxdiv">
                                                            <i class="far fa-file-archive"></i>
                                                            <span>1</span>
                                                         </div>
                                                         <h3>test</h3>
                                                      </li>
                                          <li class="notification-message viewBox ">
                                                         <div class="fileboxdiv">
                                                            <i class="far fa-file-archive"></i>
                                                            <span>1</span>
                                                         </div>
                                                         <h3>test</h3>
                                                      </li>
                                                   </ul>
                                                </div>
                                             </div>
                                          </span>
                              </td>
                                         <td>
                              <a href="{{route('seller.view_order')}}" class="btn btn-sm bg-info-light">
                                             <i class="far fa-eye mr-1"></i> View
                                          </a>
                                         <a href="{{route('seller.edit_order')}}" class="btn btn-sm bg-success-light">
                                             <i class="fas fa-edit"></i> Edit
                                          </a>
                                          <button class="btn btn-sm bg-success-light"><i class="fas fa-check"></i> Accept</button>
                                          <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>  Reject</button>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td class="text-nowrap">#3455</td>
                                       <td>10 Dec 2021</td>
                                        <td>John Smith</td>
										 <td>Lorem ipsum</td>
                                       <td>K9,380.00</td>
                                       <td><label class="badge badge-danger">Pending</label></td>
                                       <td><label class="badge badge-success">Partially fullfield</label></td>
                                       <td>
                                 <span class="nav-item dropdown noti-dropdown orderitempopmain">
                                             <a href="javascript:void(0)" class="dropdown-toggle nav-link ediio " style="padding:0 !important" data-toggle="dropdown">
                                               1 Items<span class="badge badge-pill"></span>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right notifications orderitempop">
                                                <div class="noti-content">
                                                   <span class="badge badge-success">Fulfilled</span>
                                                   <ul class="notification-list">
                                                      <li class="notification-message viewBox ">
                                                         <div class="fileboxdiv">
                                                            <i class="far fa-file-archive"></i>
                                                            <span>1</span>
                                                         </div>
                                                         <h3>test</h3>
                                                      </li>
                                         
                                                   </ul>
                                                </div>
                                             </div>
                                          </span>
                              </td>
                                         <td>
                              <a href="{{route('seller.view_order')}}" class="btn btn-sm bg-info-light">
                                             <i class="far fa-eye mr-1"></i> View
                                          </a>
                                         <a href="{{route('seller.edit_order')}}" class="btn btn-sm bg-success-light">
                                             <i class="fas fa-edit"></i> Edit
                                          </a>
                                          <button class="btn btn-sm bg-success-light"><i class="fas fa-check"></i> Accept</button>
                                          <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>  Reject</button>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td class="text-nowrap">#3457</td>
                                       <td>10 Dec 2021</td>
                                        <td>John Smith</td>
										 <td>Lorem ipsum</td>
                                       <td>K9,380.00</td>
                                       <td><label class="badge badge-danger">Pending</label></td>
                                       <td><label class="badge badge-success">Partially fullfield</label></td>
                                       <td>
                                 <span class="nav-item dropdown noti-dropdown orderitempopmain">
                                             <a href="javascript:void(0)" class="dropdown-toggle nav-link ediio " style="padding:0 !important" data-toggle="dropdown">
                                               1 Items<span class="badge badge-pill"></span>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right notifications orderitempop">
                                                <div class="noti-content">
                                                   <span class="badge badge-success">Fulfilled</span>
                                                   <ul class="notification-list">
                                                      <li class="notification-message viewBox ">
                                                         <div class="fileboxdiv">
                                                            <i class="far fa-file-archive"></i>
                                                            <span>1</span>
                                                         </div>
                                                         <h3>test</h3>
                                                      </li>
                                        
                                                   </ul>
                                                </div>
                                             </div>
                                          </span>
                              </td>
                                         <td>
                              <a href="{{route('seller.view_order')}}" class="btn btn-sm bg-info-light">
                                             <i class="far fa-eye mr-1"></i> View
                                          </a>
                                         <a href="{{route('seller.edit_order')}}" class="btn btn-sm bg-success-light">
                                             <i class="fas fa-edit"></i> Edit
                                          </a>
                                          <button class="btn btn-sm bg-success-light"><i class="fas fa-check"></i> Accept</button>
                                          <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>  Reject</button>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td class="text-nowrap">#3458</td>
                                       <td>10 Dec 2021</td>
                                        <td>John Smith</td>
										 <td>Lorem ipsum</td>
                                       <td>K9,380.00</td>
                                       <td><label class="badge badge-danger">Pending</label></td>
                                       <td><label class="badge badge-success">Partially fullfield</label></td>
                                       <td>
                                 <span class="nav-item dropdown noti-dropdown orderitempopmain">
                                             <a href="javascript:void(0)" class="dropdown-toggle nav-link ediio " style="padding:0 !important" data-toggle="dropdown">
                                               1 Items<span class="badge badge-pill"></span>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right notifications orderitempop">
                                                <div class="noti-content">
                                                   <span class="badge badge-success">Fulfilled</span>
                                                   <ul class="notification-list">
                                                      <li class="notification-message viewBox ">
                                                         <div class="fileboxdiv">
                                                            <i class="far fa-file-archive"></i>
                                                            <span>1</span>
                                                         </div>
                                                         <h3>test</h3>
                                                      </li>
                                         
                                                   </ul>
                                                </div>
                                             </div>
                                          </span>
                              
                              </td>
                                         <td>
                              <a href="{{route('seller.view_order')}}" class="btn btn-sm bg-info-light">
                                             <i class="far fa-eye mr-1"></i> View
                                          </a>
                                         <a href="{{route('seller.edit_order')}}" class="btn btn-sm bg-success-light">
                                             <i class="fas fa-edit"></i> Edit
                                          </a>
                                          <button class="btn btn-sm bg-success-light"><i class="fas fa-check"></i> Accept</button>
                                          <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>  Reject</button>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td class="text-nowrap">#3451</td>
                                       <td>10 Dec 2021</td>
                                        <td>John Smith</td>
										 <td>Lorem ipsum</td>
                                       <td>K9,380.00</td>
                                       <td><label class="badge badge-danger">Pending</label></td>
                                       <td><label class="badge badge-success">Partially fullfield</label></td>
                                       <td>
                                 <span class="nav-item dropdown noti-dropdown orderitempopmain">
                                             <a href="javascript:void(0)" class="dropdown-toggle nav-link ediio " style="padding:0 !important" data-toggle="dropdown">
                                               1 Items<span class="badge badge-pill"></span>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right notifications orderitempop">
                                                <div class="noti-content">
                                                   <span class="badge badge-success">Fulfilled</span>
                                                   <ul class="notification-list">
                                                      <li class="notification-message viewBox ">
                                                         <div class="fileboxdiv">
                                                            <i class="far fa-file-archive"></i>
                                                            <span>1</span>
                                                         </div>
                                                         <h3>test</h3>
                                                      </li>
                                          
                                                   </ul>
                                                </div>
                                             </div>
                                          </span>
                              </td>
                                         <td>
                              <a href="{{route('seller.view_order')}}" class="btn btn-sm bg-info-light">
                                             <i class="far fa-eye mr-1"></i> View
                                          </a>
                                         <a href="{{route('seller.edit_order')}}" class="btn btn-sm bg-success-light">
                                             <i class="fas fa-edit"></i> Edit
                                          </a>
                                          <button class="btn btn-sm bg-success-light"><i class="fas fa-check"></i> Accept</button>
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
            <div class="tab-pane" id="4a">
               <div class="row">
                  <div class="col-md-12 d-flex">
                     <div class="card card-table flex-fill">
					  <div class="card-header">
                            <h4 class="card-title">Open Orders</h4>
                        </div>
                        <div class="card-body">
                           <div class="table-responsive">
                              <table class="table table-center datatable">
                                 <thead>
                                    <tr>
                                       <th><input name="" value="1" type="checkbox"></th>
                                       <th>Order ID</th>
                                       <th>Date</th>
                                        <th>Customer</th>
                                        <th>Channel</th>
                                       <th>Total</th>
                                       <th>Payment Status</th>
                                       <th>Fulfillment Status</th>
                                       <th>Items</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td class="text-nowrap">#3456</td>
                                       <td>10 Dec 2021</td>
                                        <td>John Smith</td>
										 <td>Lorem ipsum</td>
                                       <td>K9,380.00</td>
                                       <td><label class="badge badge-warning">Paid</label></td>
                                       <td><label class="badge badge-success">Partially fullfield</label></td>
                                       <td>
                                 <span class="nav-item dropdown noti-dropdown orderitempopmain">
                                             <a href="javascript:void(0)" class="dropdown-toggle nav-link ediio " style="padding:0 !important" data-toggle="dropdown">
                                               1 Items<span class="badge badge-pill"></span>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right notifications orderitempop">
                                                <div class="noti-content">
                                                   <span class="badge badge-success">Fulfilled</span>
                                                   <ul class="notification-list">
                                                      <li class="notification-message viewBox ">
                                                         <div class="fileboxdiv">
                                                            <i class="far fa-file-archive"></i>
                                                            <span>1</span>
                                                         </div>
                                                         <h3>test</h3>
                                                      </li>
                                          
                                                   </ul>
                                                </div>
                                             </div>
                                          </span>
                              </td>
                                        <td>
                              <a href="{{route('seller.view_order')}}" class="btn btn-sm bg-info-light">
                                             <i class="far fa-eye mr-1"></i> View
                                          </a>
                                         <a href="{{route('seller.edit_order')}}" class="btn btn-sm bg-success-light">
                                             <i class="fas fa-edit"></i> Edit
                                          </a>
                                          <button class="btn btn-sm bg-success-light"><i class="fas fa-check"></i> Accept</button>
                                          <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>  Reject</button>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td class="text-nowrap">#3455</td>
                                       <td>10 Dec 2021</td>
                                        <td>John Smith</td>
										 <td>Lorem ipsum</td>
                                       <td>K9,380.00</td>
                                       <td><label class="badge badge-danger">Partially paid</label></td>
                                       <td><label class="badge badge-success">Partially fullfield</label></td>
                                       <td>
                                 <span class="nav-item dropdown noti-dropdown orderitempopmain">
                                             <a href="javascript:void(0)" class="dropdown-toggle nav-link ediio " style="padding:0 !important" data-toggle="dropdown">
                                               1 Items<span class="badge badge-pill"></span>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right notifications orderitempop">
                                                <div class="noti-content">
                                                   <span class="badge badge-success">Fulfilled</span>
                                                   <ul class="notification-list">
                                                      <li class="notification-message viewBox ">
                                                         <div class="fileboxdiv">
                                                            <i class="far fa-file-archive"></i>
                                                            <span>1</span>
                                                         </div>
                                                         <h3>test</h3>
                                                      </li>
                                         
                                                   </ul>
                                                </div>
                                             </div>
                                          </span>
                              </td>
                                         <td>
                              <a href="{{route('seller.view_order')}}" class="btn btn-sm bg-info-light">
                                             <i class="far fa-eye mr-1"></i> View
                                          </a>
                                         <a href="{{route('seller.edit_order')}}" class="btn btn-sm bg-success-light">
                                             <i class="fas fa-edit"></i> Edit
                                          </a>
                                          <button class="btn btn-sm bg-success-light"><i class="fas fa-check"></i> Accept</button>
                                          <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>  Reject</button>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td class="text-nowrap">#3457</td>
                                       <td>10 Dec 2021</td>
                                        <td>John Smith</td>
										 <td>Lorem ipsum</td>
                                       <td>K9,380.00</td>
                                       <td><label class="badge badge-warning">Paid</label></td>
                                       <td><label class="badge badge-success">Partially fullfield</label></td>
                                       <td>
                                 <span class="nav-item dropdown noti-dropdown orderitempopmain">
                                             <a href="javascript:void(0)" class="dropdown-toggle nav-link ediio " style="padding:0 !important" data-toggle="dropdown">
                                               1 Items<span class="badge badge-pill"></span>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right notifications orderitempop">
                                                <div class="noti-content">
                                                   <span class="badge badge-success">Fulfilled</span>
                                                   <ul class="notification-list">
                                                      <li class="notification-message viewBox ">
                                                         <div class="fileboxdiv">
                                                            <i class="far fa-file-archive"></i>
                                                            <span>1</span>
                                                         </div>
                                                         <h3>test</h3>
                                                      </li>
                                        
                                                   </ul>
                                                </div>
                                             </div>
                                          </span>
                              </td>
                                         <td>
                              <a href="{{route('seller.view_order')}}" class="btn btn-sm bg-info-light">
                                             <i class="far fa-eye mr-1"></i> View
                                          </a>
                                         <a href="{{route('seller.edit_order')}}" class="btn btn-sm bg-success-light">
                                             <i class="fas fa-edit"></i> Edit
                                          </a>
                                          <button class="btn btn-sm bg-success-light"><i class="fas fa-check"></i> Accept</button>
                                          <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>  Reject</button>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td class="text-nowrap">#3458</td>
                                       <td>10 Dec 2021</td>
                                        <td>John Smith</td>
										 <td>Lorem ipsum</td>
                                       <td>K9,380.00</td>
                                       <td><label class="badge badge-danger">Partially paid</label></td>
                                       <td><label class="badge badge-success">Partially fullfield</label></td>
                                       <td>
                                 <span class="nav-item dropdown noti-dropdown orderitempopmain">
                                             <a href="javascript:void(0)" class="dropdown-toggle nav-link ediio " style="padding:0 !important" data-toggle="dropdown">
                                               2 Items<span class="badge badge-pill"></span>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right notifications orderitempop">
                                                <div class="noti-content">
                                                   <span class="badge badge-success">Fulfilled</span>
                                                   <ul class="notification-list">
                                                      <li class="notification-message viewBox ">
                                                         <div class="fileboxdiv">
                                                            <i class="far fa-file-archive"></i>
                                                            <span>1</span>
                                                         </div>
                                                         <h3>test</h3>
                                                      </li>
                                        
                                                   </ul>
                                                </div>
                                             </div>
                                          </span>
                              </td>
                                         <td>
                              <a href="{{route('seller.view_order')}}" class="btn btn-sm bg-info-light">
                                             <i class="far fa-eye mr-1"></i> View
                                          </a>
                                         <a href="{{route('seller.edit_order')}}" class="btn btn-sm bg-success-light">
                                             <i class="fas fa-edit"></i> Edit
                                          </a>
                                          <button class="btn btn-sm bg-success-light"><i class="fas fa-check"></i> Accept</button>
                                          <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>  Reject</button>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td class="text-nowrap">#3451</td>
                                       <td>10 Dec 2021</td>
                                        <td>John Smith</td>
										 <td>Lorem ipsum</td>
                                       <td>K9,380.00</td>
                                       <td><label class="badge badge-warning">Paid</label></td>
                                       <td><label class="badge badge-success">Partially fullfield</label></td>
                                       <td>
                                 <span class="nav-item dropdown noti-dropdown orderitempopmain">
                                             <a href="javascript:void(0)" class="dropdown-toggle nav-link ediio " style="padding:0 !important" data-toggle="dropdown">
                                               1 Items<span class="badge badge-pill"></span>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right notifications orderitempop">
                                                <div class="noti-content">
                                                   <span class="badge badge-warning">Unfulfilled</span>
                                                   <ul class="notification-list">
                                                      <li class="notification-message viewBox ">
                                                         <div class="fileboxdiv">
                                                            <i class="far fa-file-archive"></i>
                                                            <span>1</span>
                                                         </div>
                                                         <h3>test</h3>
                                                      </li>
                                          
                                                   </ul>
                                                </div>
                                             </div>
                                          </span>
                              </td>
                                       <th>
                                          <a href="{{route('seller.view_order')}}" class="btn bg-primary-light">View</a>
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
            <div class="tab-pane" id="5a">
               <div class="row">
                  <div class="col-md-12 d-flex">
                     <div class="card card-table flex-fill">
					  <div class="card-header">
                            <h4 class="card-title">Fulfilling Orders</h4>
                        </div>
                        <div class="card-body">
                           <div class="table-responsive">
                              <table class="table table-center datatable">
                                 <thead>
                                    <tr>
                                       <th><input name="" value="1" type="checkbox"></th>
                                       <th>Order ID</th>
                                       <th>Date</th>
                                       <th>Customer</th>
                                       <th>Channel</th>
                                       <th>Total</th>
                                       <th>Payment Status</th>
                                       <th>Fulfillment Status</th>
                                       <th>Items</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td class="text-nowrap">#3456</td>
                                       <td>10 Dec 2021</td>
                                        <td>John Smith</td>
										 <td>Lorem ipsum</td>
                                       <td>K9,380.00</td>
                                       <td><label class="badge badge-warning">Paid</label></td>
                                       <td><label class="badge badge-success">Partially fullfield</label></td>
                                       <td>
                                 <span class="nav-item dropdown noti-dropdown orderitempopmain">
                                             <a href="javascript:void(0)" class="dropdown-toggle nav-link ediio " style="padding:0 !important" data-toggle="dropdown">
                                               1 Items<span class="badge badge-pill"></span>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right notifications orderitempop">
                                                <div class="noti-content">
                                                   <span class="badge badge-success">Fulfilled</span>
                                                   <ul class="notification-list">
                                                      <li class="notification-message viewBox ">
                                                         <div class="fileboxdiv">
                                                            <i class="far fa-file-archive"></i>
                                                            <span>1</span>
                                                         </div>
                                                         <h3>test</h3>
                                                      </li>
                                         
                                                   </ul>
                                                </div>
                                             </div>
                                          </span>
                              </td>
                                        <td>
                              <a href="{{route('seller.view_order')}}" class="btn btn-sm bg-info-light">
                                             <i class="far fa-eye mr-1"></i> View
                                          </a>
                                         <a href="{{route('seller.edit_order')}}" class="btn btn-sm bg-success-light">
                                             <i class="fas fa-edit"></i> Edit
                                          </a>
                                          <button class="btn btn-sm bg-success-light"><i class="fas fa-check"></i> Accept</button>
                                          <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>  Reject</button>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td class="text-nowrap">#3455</td>
                                       <td>10 Dec 2021</td>
                                        <td>John Smith</td> 
										<td>Lorem ipsum</td>
                                       <td>K9,380.00</td>
                                       <td><label class="badge badge-danger">Partially paid</label></td>
                                       <td><label class="badge badge-success">Partially fullfield</label></td>
                                       <td>
                                 <span class="nav-item dropdown noti-dropdown orderitempopmain">
                                             <a href="javascript:void(0)" class="dropdown-toggle nav-link ediio " style="padding:0 !important" data-toggle="dropdown">
                                               1 Items<span class="badge badge-pill"></span>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right notifications orderitempop">
                                                <div class="noti-content">
                                                   <span class="badge badge-success">Fulfilled</span>
                                                   <ul class="notification-list">
                                                      <li class="notification-message viewBox ">
                                                         <div class="fileboxdiv">
                                                            <i class="far fa-file-archive"></i>
                                                            <span>1</span>
                                                         </div>
                                                         <h3>test</h3>
                                                      </li>
                                         
                                                   </ul>
                                                </div>
                                             </div>
                                          </span>
                              </td>
                                         <td>
                              <a href="{{route('seller.view_order')}}" class="btn btn-sm bg-info-light">
                                             <i class="far fa-eye mr-1"></i> View
                                          </a>
                                         <a href="{{route('seller.edit_order')}}" class="btn btn-sm bg-success-light">
                                             <i class="fas fa-edit"></i> Edit
                                          </a>
                                          <button class="btn btn-sm bg-success-light"><i class="fas fa-check"></i> Accept</button>
                                          <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>  Reject</button>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td class="text-nowrap">#3457</td>
                                       <td>10 Dec 2021</td>
                                        <td>John Smith</td>
										 <td>Lorem ipsum</td>
                                       <td>K9,380.00</td>
                                       <td><label class="badge badge-warning">Paid</label></td>
                                       <td><label class="badge badge-success">Partially fullfield</label></td>
                                      <td>
                                 <span class="nav-item dropdown noti-dropdown orderitempopmain">
                                             <a href="javascript:void(0)" class="dropdown-toggle nav-link ediio " style="padding:0 !important" data-toggle="dropdown">
                                               1 Items<span class="badge badge-pill"></span>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right notifications orderitempop">
                                                <div class="noti-content">
                                                   <span class="badge badge-success">Fulfilled</span>
                                                   <ul class="notification-list">
                                                      <li class="notification-message viewBox ">
                                                         <div class="fileboxdiv">
                                                            <i class="far fa-file-archive"></i>
                                                            <span>1</span>
                                                         </div>
                                                         <h3>test</h3>
                                                      </li>
                                         
                                                   </ul>
                                                </div>
                                             </div>
                                          </span>
                              </td>
                                         <td>
                              <a href="{{route('seller.view_order')}}" class="btn btn-sm bg-info-light">
                                             <i class="far fa-eye mr-1"></i> View
                                          </a>
                                         <a href="{{route('seller.edit_order')}}" class="btn btn-sm bg-success-light">
                                             <i class="fas fa-edit"></i> Edit
                                          </a>
                                          <button class="btn btn-sm bg-success-light"><i class="fas fa-check"></i> Accept</button>
                                          <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>  Reject</button>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td class="text-nowrap">#3458</td>
                                       <td>10 Dec 2021</td>
                                        <td>John Smith</td> 
										<td>Lorem ipsum</td>
                                       <td>K9,380.00</td>
                                       <td><label class="badge badge-danger">Partially paid</label></td>
                                       <td><label class="badge badge-success">Partially fullfield</label></td>
                                       <td>
                                 <span class="nav-item dropdown noti-dropdown orderitempopmain">
                                             <a href="javascript:void(0)" class="dropdown-toggle nav-link ediio " style="padding:0 !important" data-toggle="dropdown">
                                               1 Items<span class="badge badge-pill"></span>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right notifications orderitempop">
                                                <div class="noti-content">
                                                   <span class="badge badge-success">Fulfilled</span>
                                                   <ul class="notification-list">
                                                      <li class="notification-message viewBox ">
                                                         <div class="fileboxdiv">
                                                            <i class="far fa-file-archive"></i>
                                                            <span>1</span>
                                                         </div>
                                                         <h3>test</h3>
                                                      </li>
                                         
                                                   </ul>
                                                </div>
                                             </div>
                                          </span>
                              </td>
                                         <td>
                              <a href="{{route('seller.view_order')}}" class="btn btn-sm bg-info-light">
                                             <i class="far fa-eye mr-1"></i> View
                                          </a>
                                         <a href="{{route('seller.edit_order')}}" class="btn btn-sm bg-success-light">
                                             <i class="fas fa-edit"></i> Edit
                                          </a>
                                          <button class="btn btn-sm bg-success-light"><i class="fas fa-check"></i> Accept</button>
                                          <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>  Reject</button>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td class="text-nowrap">#3451</td>
                                       <td>10 Dec 2021</td>
                                        <td>John Smith</td>
										<td>Lorem ipsum</td>
                                       <td>K9,380.00</td>
                                       <td><label class="badge badge-warning">Paid</label></td>
                                       <td><label class="badge badge-success">Partially fullfield</label></td>
                                       <td>
                                 <span class="nav-item dropdown noti-dropdown orderitempopmain">
                                             <a href="javascript:void(0)" class="dropdown-toggle nav-link ediio " style="padding:0 !important" data-toggle="dropdown">
                                               1 Items<span class="badge badge-pill"></span>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right notifications orderitempop">
                                                <div class="noti-content">
                                                   <span class="badge badge-success">Fulfilled</span>
                                                   <ul class="notification-list">
                                                      <li class="notification-message viewBox ">
                                                         <div class="fileboxdiv">
                                                            <i class="far fa-file-archive"></i>
                                                            <span>1</span>
                                                         </div>
                                                         <h3>test</h3>
                                                      </li>
                                         
                                                   </ul>
                                                </div>
                                             </div>
                                          </span>
                              </td>
                                         <td>
                              <a href="{{route('seller.view_order')}}" class="btn btn-sm bg-info-light">
                                             <i class="far fa-eye mr-1"></i> View
                                          </a>
                                         <a href="{{route('seller.edit_order')}}" class="btn btn-sm bg-success-light">
                                             <i class="fas fa-edit"></i> Edit
                                          </a>
                                          <button class="btn btn-sm bg-success-light"><i class="fas fa-check"></i> Accept</button>
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
            <div class="tab-pane" id="6a">
               <div class="row">
                  <div class="col-md-12 d-flex">
                     <div class="card card-table flex-fill">
					 <div class="card-header">
                            <h4 class="card-title">Closed Orders</h4>
                        </div>
                        <div class="card-body">
                           <div class="table-responsive">
                              <table class="table table-center datatable">
                                 <thead>
                                    <tr>
                                       <th><input name="" value="1" type="checkbox"></th>
                                       <th>Order ID</th>
                                       <th>Date</th>
                                        <th>Customer</th>
                                        <th>Channel</th>
                                       <th>Total</th>
                                       <th>Payment Status</th>
                                       <th>Fulfillment Status</th>
                                       <th>Items</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td class="text-nowrap">#3456</td>
                                       <td>10 Dec 2021</td>
                                        <td>John Smith</td>
										<td>Lorem ipsum</td>
                                       <td>K9,380.00</td>
                                       <td><label class="badge badge-warning">Paid</label></td>
                                       <td><label class="badge badge-success">Partially fullfield</label></td>
                                      <td>
                                 <span class="nav-item dropdown noti-dropdown orderitempopmain">
                                             <a href="javascript:void(0)" class="dropdown-toggle nav-link ediio " style="padding:0 !important" data-toggle="dropdown">
                                               1 Items<span class="badge badge-pill"></span>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right notifications orderitempop">
                                                <div class="noti-content">
                                                   <span class="badge badge-success">Fulfilled</span>
                                                   <ul class="notification-list">
                                                      <li class="notification-message viewBox ">
                                                         <div class="fileboxdiv">
                                                            <i class="far fa-file-archive"></i>
                                                            <span>1</span>
                                                         </div>
                                                         <h3>test</h3>
                                                      </li>
                                         
                                                   </ul>
                                                </div>
                                             </div>
                                          </span>
                              </td>
                                         <td>
                              <a href="{{route('seller.view_order')}}" class="btn btn-sm bg-info-light">
                                             <i class="far fa-eye mr-1"></i> View
                                          </a>
                                         <a href="{{route('seller.edit_order')}}" class="btn btn-sm bg-success-light">
                                             <i class="fas fa-edit"></i> Edit
                                          </a>
                                          <button class="btn btn-sm bg-success-light"><i class="fas fa-check"></i> Accept</button>
                                          <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>  Reject</button>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td class="text-nowrap">#3455</td>
                                       <td>10 Dec 2021</td>
                                        <td>John Smith</td>
										 <td>Lorem ipsum</td>
                                       <td>K9,380.00</td>
                                       <td><label class="badge badge-danger">Partially paid</label></td>
                                       <td><label class="badge badge-success">Partially fullfield</label></td>
                                       <td>
                                 <span class="nav-item dropdown noti-dropdown orderitempopmain">
                                             <a href="javascript:void(0)" class="dropdown-toggle nav-link ediio " style="padding:0 !important" data-toggle="dropdown">
                                               1 Items<span class="badge badge-pill"></span>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right notifications orderitempop">
                                                <div class="noti-content">
                                                   <span class="badge badge-success">Fulfilled</span>
                                                   <ul class="notification-list">
                                                      <li class="notification-message viewBox ">
                                                         <div class="fileboxdiv">
                                                            <i class="far fa-file-archive"></i>
                                                            <span>1</span>
                                                         </div>
                                                         <h3>test</h3>
                                                      </li>
                                         
                                                   </ul>
                                                </div>
                                             </div>
                                          </span>
                              </td>
                                         <td>
                              <a href="{{route('seller.view_order')}}" class="btn btn-sm bg-info-light">
                                             <i class="far fa-eye mr-1"></i> View
                                          </a>
                                         <a href="{{route('seller.edit_order')}}" class="btn btn-sm bg-success-light">
                                             <i class="fas fa-edit"></i> Edit
                                          </a>
                                          <button class="btn btn-sm bg-success-light"><i class="fas fa-check"></i> Accept</button>
                                          <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>  Reject</button>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td class="text-nowrap">#3457</td>
                                       <td>10 Dec 2021</td>
                                        <td>John Smith</td>
										 <td>Lorem ipsum</td>
                                       <td>K9,380.00</td>
                                       <td><label class="badge badge-warning">Paid</label></td>
                                       <td><label class="badge badge-success">Partially fullfield</label></td>
                                       <td>
                                 <span class="nav-item dropdown noti-dropdown orderitempopmain">
                                             <a href="javascript:void(0)" class="dropdown-toggle nav-link ediio " style="padding:0 !important" data-toggle="dropdown">
                                               1 Items<span class="badge badge-pill"></span>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right notifications orderitempop">
                                                <div class="noti-content">
                                                   <span class="badge badge-success">Fulfilled</span>
                                                   <ul class="notification-list">
                                                      <li class="notification-message viewBox ">
                                                         <div class="fileboxdiv">
                                                            <i class="far fa-file-archive"></i>
                                                            <span>1</span>
                                                         </div>
                                                         <h3>test</h3>
                                                      </li>
                                         
                                                   </ul>
                                                </div>
                                             </div>
                                          </span>
                              </td>
                                         <td>
                              <a href="{{route('seller.view_order')}}" class="btn btn-sm bg-info-light">
                                             <i class="far fa-eye mr-1"></i> View
                                          </a>
                                         <a href="{{route('seller.edit_order')}}" class="btn btn-sm bg-success-light">
                                             <i class="fas fa-edit"></i> Edit
                                          </a>
                                          <button class="btn btn-sm bg-success-light"><i class="fas fa-check"></i> Accept</button>
                                          <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>  Reject</button>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td class="text-nowrap">#3458</td>
                                       <td>10 Dec 2021</td>
                                        <td>John Smith</td>
										 <td>Lorem ipsum</td>
                                       <td>K9,380.00</td>
                                       <td><label class="badge badge-danger">Partially paid</label></td>
                                       <td><label class="badge badge-success">Partially fullfield</label></td>
                                      <td>
                                 <span class="nav-item dropdown noti-dropdown orderitempopmain">
                                             <a href="javascript:void(0)" class="dropdown-toggle nav-link ediio " style="padding:0 !important" data-toggle="dropdown">
                                               1 Items<span class="badge badge-pill"></span>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right notifications orderitempop">
                                                <div class="noti-content">
                                                   <span class="badge badge-success">Fulfilled</span>
                                                   <ul class="notification-list">
                                                      <li class="notification-message viewBox ">
                                                         <div class="fileboxdiv">
                                                            <i class="far fa-file-archive"></i>
                                                            <span>1</span>
                                                         </div>
                                                         <h3>test</h3>
                                                      </li>
                                         
                                                   </ul>
                                                </div>
                                             </div>
                                          </span>
                              </td>
                                         <td>
                              <a href="{{route('seller.view_order')}}" class="btn btn-sm bg-info-light">
                                             <i class="far fa-eye mr-1"></i> View
                                          </a>
                                         <a href="{{route('seller.edit_order')}}" class="btn btn-sm bg-success-light">
                                             <i class="fas fa-edit"></i> Edit
                                          </a>
                                          <button class="btn btn-sm bg-success-light"><i class="fas fa-check"></i> Accept</button>
                                          <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>  Reject</button>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td class="text-nowrap">#3451</td>
                                       <td>10 Dec 2021</td>
                                        <td>John Smith</td>
										 <td>Lorem ipsum</td>
                                       <td>K9,380.00</td>
                                       <td><label class="badge badge-warning">Paid</label></td>
                                       <td><label class="badge badge-success">Partially fullfield</label></td>
                                       <td>
                                 <span class="nav-item dropdown noti-dropdown orderitempopmain">
                                             <a href="javascript:void(0)" class="dropdown-toggle nav-link ediio " style="padding:0 !important" data-toggle="dropdown">
                                               1 Items<span class="badge badge-pill"></span>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right notifications orderitempop">
                                                <div class="noti-content">
                                                   <span class="badge badge-success">Fulfilled</span>
                                                   <ul class="notification-list">
                                                      <li class="notification-message viewBox ">
                                                         <div class="fileboxdiv">
                                                            <i class="far fa-file-archive"></i>
                                                            <span>1</span>
                                                         </div>
                                                         <h3>test</h3>
                                                      </li>
                                         
                                                   </ul>
                                                </div>
                                             </div>
                                          </span>
                              </td>
                                         <td>
                              <a href="{{route('seller.view_order')}}" class="btn btn-sm bg-info-light">
                                             <i class="far fa-eye mr-1"></i> View
                                          </a>
                                         <a href="{{route('seller.edit_order')}}" class="btn btn-sm bg-success-light">
                                             <i class="fas fa-edit"></i> Edit
                                          </a>
                                          <button class="btn btn-sm bg-success-light"><i class="fas fa-check"></i> Accept</button>
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
         </div>
      </div>
   </div>


@endsection

<div class="modal fade addorderpopup" id="createorder-popup" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-body pb-0">
            <div class="card card-table mb-0">
               <div class="card-body addorder p-0imp">
                  <div class="d-flex justify-content-between align-items-center">
                     <h3 class="mb-0">Create Order</h3>
                  </div>
                  <div class="viewBox table-responsive pt-3">
                     <p class="textpara">This will create an order without payment. You will be able to send an invoice and collect payment from the order page.</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <a href="{{route('seller.add_order')}}" class="btn btn-success">Create Order</a>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
         </div>
      </div>
   </div>
</div>
@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/fixedheader/3.2.0/js/dataTables.fixedHeader.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.1.0/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.colVis.min.js"></script>
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

//
// Updates "Select all" control in a data table
//
function updateDataTableSelectAllCtrl(table) {
    var $table = table.table().node();
    var $chkbox_all = $('tbody input[type="checkbox"]', $table);
    var $chkbox_checked = $('tbody input[type="checkbox"]:checked', $table);
    var chkbox_select_all = $('thead input[name="select_all"]', $table).get(0);
    // If none of the checkboxes are checked
    if ($chkbox_checked.length === 0) {
        chkbox_select_all.checked = false;
        if ('indeterminate' in chkbox_select_all) {
            chkbox_select_all.indeterminate = false;
        }
        // If all of the checkboxes are checked
    } else if ($chkbox_checked.length === $chkbox_all.length) {
        chkbox_select_all.checked = true;
        if ('indeterminate' in chkbox_select_all) {
            chkbox_select_all.indeterminate = false;
        }
        // If some of the checkboxes are checked
    } else {
        chkbox_select_all.checked = true;
        if ('indeterminate' in chkbox_select_all) {
            chkbox_select_all.indeterminate = true;
        }
    }
}
$(document).ready(function() {
    // Array holding selected row IDs
    var rows_selected = [];
    var table = $('#cat').DataTable({
        'columnDefs': [{
            'targets': 0,
            'searchable': false,
            'orderable': false,
            'width': '1%',
            'className': 'dt-body-center',
            'render': function(data, type, full, meta) {
                return '<input type="checkbox">';
            }
        }],
        language: {
                'paginate': {
                        'previous': '<i class="fas fa-angle-left"></i>',
                        'next': '<i class="fas fa-angle-right"></i>'
                    }
        },
        'order': [
            [1, 'asc']
        ],
        'rowCallback': function(row, data, dataIndex) {
            // Get row ID
            var rowId = data[0];
            // If row ID is in the list of selected row IDs
            if ($.inArray(rowId, rows_selected) !== -1) {
                $(row).find('input[type="checkbox"]').prop('checked', true);
                $(row).addClass('selected');
            }
        }
    });
    // Handle click on checkbox
    $('#cat tbody').on('click', 'input[type="checkbox"]', function(e) {
        var $row = $(this).closest('tr');
        // Get row data
        var data = table.row($row).data();
        // Get row ID
        var rowId = data[0];
        // Determine whether row ID is in the list of selected row IDs
        var index = $.inArray(rowId, rows_selected);
        // If checkbox is checked and row ID is not in list of selected row IDs
        if (this.checked && index === -1) {
            rows_selected.push(rowId);
            // Otherwise, if checkbox is not checked and row ID is in list of selected row IDs
        } else if (!this.checked && index !== -1) {
            rows_selected.splice(index, 1);
        }
        if (this.checked) {
            $row.addClass('selected');
        } else {
            $row.removeClass('selected');
        }
        // Update state of "Select all" control
        updateDataTableSelectAllCtrl(table);
        // Prevent click event from propagating to parent
        e.stopPropagation();
    });
    // Handle click on table cells with checkboxes
    $('#cat').on('click', 'tbody td, thead th:first-child', function(e) {
        $(this).parent().find('input[type="checkbox"]').trigger('click');
    });
    // Handle click on "Select all" control
    $('thead input[name="select_all"]', table.table().container()).on('click', function(e) {
        if (this.checked) {
            $('#cat tbody input[type="checkbox"]:not(:checked)').trigger('click');
        } else {
            $('#cat tbody input[type="checkbox"]:checked').trigger('click');
        }
        // Prevent click event from propagating to parent
        e.stopPropagation();
    });
    // Handle table draw event
    table.on('draw', function() {
        // Update state of "Select all" control
        updateDataTableSelectAllCtrl(table);
    });
});
</script>
@endsection