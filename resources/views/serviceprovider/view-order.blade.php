@extends('serviceprovider.layouts.app')
@section('title', 'View Order')
@section('head')
<style>
   .card-table .table td, .card-table .table th
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
               <h3 class="page-title d-flex align-items-center">#1002 <span class="badge badge-warning fontpen mx-2">Payment Pending</span> <span class="badge badge-warning fontpen">Partially fullfilled</span></h3>
               <p>25 January 2022 at 10:56 am from Draft Orders</p>
            </div>
            <div class="col text-right">
              <div class="actionMore d-flex align-items-center justify-content-end">
                  <a href="{{route('seller.edit_order')}}" class="ediio"> Edit </a>
                  <span class="nav-item dropdown noti-dropdown mx-3">
                     <a href="javascript:void(0)" class="dropdown-toggle nav-link ediio" data-toggle="dropdown">
                         More Action<span class="badge badge-pill"></span>
                     </a>
                     <div class="dropdown-menu dropdown-menu-right notifications">
                         <div class="noti-content">
                             <ul class="notification-list">
                                 <li class="notification-message">
                                     <a href="javascript:void(0)">Duplicate</a>
                                 </li>
                                 <li class="notification-message">
                                     <a href="javascript:void(0)">Ship Items</a>
                                 </li>
                                 <li class="notification-message">
                                     <a href="javascript:void(0)">Cancel Order</a>
                                 </li>
                                 <li class="notification-message">
                                     <a href="javascript:void(0)">Mark As Fulfilled</a>
                                 </li>
                                 <li class="notification-message">
                                     <a href="javascript:void(0)">Archive</a>
                                 </li>
                                 <li class="notification-message">
                                     <a href="javascript:void(0)">Create Job</a>
                                 </li>
                                 <li class="notification-message">
                                     <a href="javascript:void(0)">Print Order Page</a>
                                 </li>
                                 <li class="notification-message">
                                     <a href="javascript:void(0)">Print Packing Slips</a>
                                 </li>
                                 <li class="notification-message">
                                     <a href="javascript:void(0)">View Order Status Page</a>
                                 </li>
                             </ul>
                         </div>
                     </div>
                  </span>
                  <a href="{{route('seller.orders')}}" class="btn btn-primary mr-2">Back</a>
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
                     <h3 class="mb-0 text-danger">Unfulfilled <span class="text-muted"><a href="#">#1002-F2</a></span> <span class="text-primary ml-3"><!---a href="javascript: void(0)" data-toggle="modal" data-target="#vinfo-popup">2018 Toyota Hilux</a---></span></h3>
                     <div class="d-flex justify-content-between align-items-center">
                        <span class="nav-item dropdown noti-dropdown actionMore addorbef">
                           <a href="javascript:void(0)" class="dropdown-toggle nav-link ediio" data-toggle="dropdown">
                               <svg viewBox="0 0 20 20" class="threedost" focusable="false" aria-hidden="true"><path d="M6 10a2 2 0 1 1-4.001-.001A2 2 0 0 1 6 10zm6 0a2 2 0 1 1-4.001-.001A2 2 0 0 1 12 10zm6 0a2 2 0 1 1-4.001-.001A2 2 0 0 1 18 10z"></path></svg>
                           </a>
                           <div class="dropdown-menu dropdown-menu-right notifications">
                               <div class="noti-content">
                                   <ul class="notification-list">
                                      <li class="notification-message">
                                           <a href="{{route('seller.fullfill_item')}}">
                                               View Fulfillment
                                           </a>
                                       </li>
                                       <li class="notification-message">
                                           <a href="javascript:void(0)">
                                               Hold fulfillment
                                           </a>
                                       </li>
                                       
                                   </ul>
                               </div>
                           </div>
                        </span>
                     </div>
                    
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
                              <td class="text-left pl-0 text-wrap"> <a href="{{route('seller.view_product')}}">Brakes Shoes For Jeep Cherokee</a> </br> 
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#addvehicle-popup">
                                      BMW X3
                                    </a>,BBA2300                             
                              </td>
                              
                                <td class="text-center ">
                                    K 8,000.00 * 1
                                </td>
                              <td class="text-right pr-0"> K 8,000.00 </td>
                           </tr>
                           <tr>
                              <td class="text-left pl-0">
                                 <div class="fileboxdiv">
                                    <i class="far fa-file-archive"></i>
                                    <span>1</span>
                                 </div>
                              </td>
                              <td class="text-left pl-0 text-wrap"> <a href="{{route('seller.view_product')}}">Brakes Shoes For Jeep Cherokee</a> </br> 
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#addvehicle-popup">
                                      BMW X3
                                    </a>,BBA2300                             
                              </td>
                              
                                <td class="text-center ">
                                    K 8,000.00 * 1
                                </td>
                              <td class="text-right pr-0"> K 8,000.00 </td>
                           </tr>
                           <tr>
                              <td class="text-left pl-0">
                                 <div class="fileboxdiv">
                                    <i class="far fa-file-archive"></i>
                                    <span>1</span>
                                 </div>
                              </td>
                              <td class="text-left pl-0 text-wrap"> <a href="{{route('seller.view_product')}}">Brakes Shoes For Jeep Cherokee</a> </br> 
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#addvehicle-popup">
                                      BMW X3
                                    </a>,BBA2300                             
                              </td>
                              
                                <td class="text-center ">
                                    K 8,000.00 * 1
                                </td>
                              <td class="text-right pr-0"> K 8,000.00 </td>
                           </tr>
                           <tr>
                              <td colspan="6" class="text-left pl-0"> Booking Date: <strong>25 January 2022</strong> </td>
                           </tr>
                           <tr>
                               <td colspan="2" class="text-left pr-0"> <a href="javascript:void(0)" class="btn btn-primary viewreport_btn" data-toggle="modal" data-target="#selectreport_popup"><i class="fas fa-download"></i></a> </td>
                              <td colspan="3" class="text-right pr-0"> <a href="{{route('seller.fullfill_item')}}" class="btn btn-success text-white">Fullfill item</a> </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
            <div class="card card-table mb-3">
               <div class="card-body p-2 py-3 px-4">
                  <div class="d-flex justify-content-between align-items-center">
                     <h3 class="mb-0 text-success">Fulfilled <span class="text-muted"><a href="#">#1002-F2</a></span> <span class="text-primary ml-3"><!---a href="javascript: void(0)" data-toggle="modal" data-target="#vinfo-popup">2018 Toyota Hilux</a---></span></h3>

                     <div class="d-flex justify-content-between align-items-center">
                        
                        <span class="nav-item dropdown noti-dropdown actionMore addorbef">
                           <a href="javascript:void(0)" class="dropdown-toggle nav-link ediio" data-toggle="dropdown">
                               <svg viewBox="0 0 20 20" class="threedost" focusable="false" aria-hidden="true"><path d="M6 10a2 2 0 1 1-4.001-.001A2 2 0 0 1 6 10zm6 0a2 2 0 1 1-4.001-.001A2 2 0 0 1 12 10zm6 0a2 2 0 1 1-4.001-.001A2 2 0 0 1 18 10z"></path></svg>
                           </a>
                           <div class="dropdown-menu dropdown-menu-right notifications">
                               <div class="noti-content">
                                   <ul class="notification-list">
                                    <li class="notification-message">
                                              <a href="{{route('seller.fullfill_item')}}">
                                                  View Fulfillment
                                              </a>
                                          </li>
                                       <li class="notification-message">
                                          
                                           <a href="javascript:void(0)" class="text-danger">
                                               Cancel fulfillment
                                           </a>
                                       </li>
                                   </ul>
                               </div>
                           </div>
                        </span>
                     </div>
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
                              <td class="text-left pl-0 text-wrap"> <a href="{{route('seller.view_product')}}">Brakes Shoes For Jeep Cherokee</a> </br> 
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#addvehicle-popup">
                                      Toyota Hilux
                                    </a>,BBA2300 
                              </td>
                              <td class="text-center ">
                                     K 8,000.00 * 1                             
                              </td>
                              <td class="text-right pr-0"> K 8,000.00 </td>
                           </tr>
                           <tr>
                              <td class="text-left pl-0">
                                 <div class="fileboxdiv">
                                    <i class="far fa-file-archive"></i>
                                    <span>1</span>
                                 </div>
                              </td>
                              <td class="text-left pl-0 text-wrap"> <a href="{{route('seller.view_product')}}">Brakes Shoes For Jeep Cherokee</a> </br> 
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#addvehicle-popup">
                                      Toyota Hilux
                                    </a>,BBA2300 
                              </td>
                              <td class="text-center ">
                                     K 8,000.00 * 1                             
                              </td>
                              <td class="text-right pr-0"> K 8,000.00 </td>
                           </tr>
                           <tr>
                              <td class="text-left pl-0">
                                 <div class="fileboxdiv">
                                    <i class="far fa-file-archive"></i>
                                    <span>1</span>
                                 </div>
                              </td>
                              <td class="text-left pl-0 text-wrap"> <a href="{{route('seller.view_product')}}">Brakes Shoes For Jeep Cherokee</a> </br> 
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#addvehicle-popup">
                                      Toyota Hilux
                                    </a>,BBA2300 
                              </td>
                              <td class="text-center ">
                                     K 8,000.00 * 1                             
                              </td>
                              <td class="text-right pr-0"> K 8,000.00 </td>
                           </tr>
                           <tr>
                              <td colspan="6" class="text-left pl-0"> Booking Date: <strong>25 January 2022</strong> </td>
                           </tr> 

                           <tr>
                              <td colspan="6" class="text-left pl-0"> Shipping not required. </td>
                           </tr>
                           <tr>
                              <td colspan="5" class="text-right pr-0"> 
                              <a href="javascript:void(0)" data-toggle="modal" data-target="#addtracking_popup" class="btn btn-success text-white">Add Tracking</a> </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>

            <div class="card card-table hideborder" style="overflow:visible">
               <div class="card-body p-2 py-3 px-4">
                  <div class="d-flex justify-content-between align-items-center">
                     <h3 class="mb-0 text-danger">Pending</h3>
                  </div>
                  <div class="viewBox table-responsive pt-3">
                     <table class="table">
                        <tbody>
                           <tr>
                              <td class="text-left pl-0"> Subtotal </td>
                              <td class="text-center "> 2 items </td>
                              <td class="text-right pr-0"> K 8,100.00 </td>
                           </tr>
                           <tr>
                              <td class="text-left pl-0"> Tax </td>
                              <td class="text-center "> VAT 16% </td>
                              <td class="text-right pr-0"> K 1,280.00 </td>
                           </tr>
                           <tr>
                              <th class="text-left pl-0"> Total </th>
                              <th class="text-right pr-0" colspan="2"> K 9,380.00 </th>
                           </tr>
                           <tr>
                              <td class="text-left pl-0"> Paid by customer </td>
                              <td class="text-right pr-0" colspan="2"> K 0.00 </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
                  <hr class="mt-0 pt-2" />
                  <div class="text-right d-flex justify-content-end">
                     <button class="btn btn-white mr-2">Send Invoice</button>
                     <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Collect Payment
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                           <a class="dropdown-item" href="#">Mark as Paid</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

          <!--    <div class="card card-table">
               <div class="card-body p-2 py-3 px-4">
                  <div class="d-flex justify-content-between align-items-center">
                     <h3 class="mb-0 text-success">Paid</h3>
                  </div>
                  <div class="viewBox table-responsive pt-3">
                     <table class="table">
                        <tbody>
                           <tr>
                              <td class="text-left pl-0"> Subtotal </td>
                              <td class="text-center "> 2 items </td>
                              <td class="text-right pr-0"> K 8,100.00 </td>
                           </tr>
                           <tr>
                              <td class="text-left pl-0"> Tax </td>
                              <td class="text-center "> VAT 16% </td>
                              <td class="text-right pr-0"> K 1,280.00 </td>
                           </tr>
                           <tr>
                              <th class="text-left pl-0"> Total </th>
                              <th class="text-right pr-0" colspan="2"> K 9,380.00 </th>
                           </tr>
                           <tr>
                              <td class="text-left pl-0"> Paid by customer </td>
                              <td class="text-right pr-0" colspan="2"> K 9,380.00 </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div> -->

            <div class="card card-table mb-3">
               <div class="card-body p-2 py-3 px-4">
                  <div class="d-flex justify-content-between align-items-center">
                     <h3 class="mb-0">Timeline</h3>
                     <div class="checkbox">
                        <label class="mb-0">
                           <input type="checkbox" name="checkbox" checked> Show comments
                        </label>
                     </div>
                  </div>
                  <hr />
                  <div class="timelinebox">
                     <ul class="timeline">
                        <li class="event">
                           <span class="username">DN</span>
                            <div class="timlinecomenntwrap">
								 <div class="input-group mr-3">
									<input type="text" class="form-control px-3" placeholder="Add Comments">
								 </div>
								 <div class="d-flex align-items-center timlinecomenntactions">
									<div class="customer-filter-actions">
										<a href="javascript:void(0);"><i class="fa fa-smile" aria-hidden="true"></i></a>
										<a href="javascript:void(0);"><i class="fa fa-at" aria-hidden="true"></i></a>
										<a href="javascript:void(0);"><i class="fa fa-hashtag" aria-hidden="true"></i></a>
										<a href="javascript:void(0);"><i class="fa fa-paperclip" aria-hidden="true"></i></a>
									</div>
									<button class="btn btn-primary ml-auto">Post</button>
								 </div> 
								
							 </div>
                        </li>
                        <li class="event commentli">
                           <h2 class="todaytex">Today</h2>
                           <span class="username">DN</span>
                           <h3>Davy Nanduba <small>Just now (edited)</small></h3>
                           <p>Insurance Purchased from hollard</p>
                        </li>
                        <li class="event">
                           <p class="d-flex">You fullfilled 1 item from Cairo Road  <span class="ml-auto text-right">Just Now</span></p>
                        </li>
                        <li class="event">
                           <p class="d-flex">You fullfilled 1 item from Cairo Road  <span class="ml-auto text-right">1 Minutes ago</span></p>
                        </li>
                        <li class="event">
                           <p class="d-flex">You fullfilled 1 item from Cairo Road  <span class="ml-auto text-right">5 Minutes ago</span></p>
                        </li>
                     </ul>
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
						<h4 class="d-flex">John Smith  <!---a data-toggle="modal" data-target="#editcustomer-popup" href="javascript: void(0);"><i class="fa fa-pencil-alt" aria-hidden="true"></i></a---></h4>
						
						
						<h5>Shipping Address</h5>
						<p>1688 St Matthews Ave, Winnipeg, MB R3H 0A2, Canada</p>
						
						<h5>Billing Address</h5>
						<p>1688 St Matthews Ave, Winnipeg, MB R3H 0A2, Canada</p>
					</div>
					<div class="customerLists-item">
						<h4 class="d-flex">Bill Walsh  <!---a data-toggle="modal" data-target="#editcustomer-popup" href="javascript: void(0);"><i class="fa fa-pencil-alt" aria-hidden="true"></i>
</a---></h4>
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
                     <!---a data-toggle="modal" data-target="#notes-popup" href="javascript: void(0);">Edit</a--->
                  </div>
                  <div class="chat-search mt-32">
                     <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                  </div>
               </div>
            </div>
			
			 <div class="card card-table mb-3">
               <div class="card-body p-2 py-3 px-4">
                  <div class="d-flex justify-content-between align-items-center">
                     <h3 class="mb-0">Tags</h3>
                  </div>
                  <div class="TagsCardLists">
				  <span class="tagsitem">Urgent</span>
				  <span class="tagsitem">Reviewed</span>
				  <span class="tagsitem">Wholesale</span>
                   
                  </div>
               </div>
            </div>

          
            
           <!--  <div class="card card-table mb-3">
               <div class="card-body p-2 py-3 px-4">
                  <div class="d-flex justify-content-between align-items-center">
                     <h3 class="mb-0">Tasks</h3>
                  </div>
                  <div class="chat-search">
                     <div class="input-group mb-3">
                        <input type="text" class="form-control px-3" placeholder="Add Task">
                        <i class="fas fa-plus-circle plusicon"></i>
                     </div>
                     <div class="input-group">
                        <input type="text" class="form-control px-3" placeholder="Xyz">
                        <i class="fas fa-minus-circle minsicon"></i>
                     </div>
                  </div>
               </div>
            </div> -->

            <!---div class="card card-table mb-3">
               <div class="card-body p-2 py-3 px-4">
                  <div class="d-flex justify-content-between align-items-center">
                     <h3 class="mb-0">Reports</h3>
                     <a data-toggle="modal" data-target="#reports-popup" href="javascript: void(0);">Add</a>
                  </div>
                  <div class="chat-search mt-3">
                     <p class="text-muted">25 January 2022  </p>
                     <hr />
                     <ul>
                        <li>myimage.jpg <a href="#" class="crosdel">X</a></li>
                        <li>example.doc <a href="#" class="crosdel">X</a></li>
                     </ul>

                     <div>
                        <span class="badge badge-primary">Urgent</span> 
                        <span class="badge badge-primary">Reviewed</span>
                        <span class="badge badge-primary">Wholesale</span>
                     </div>
                  </div>
               </div>
            </div--->

         </div>
      </div>
   </div>

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
<div class="modal fade orderreport_modal" id="selectreport_popup" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
            <div class="modal-body">
                <div class="checkbox">
                    <label class="mb-3" for="report1">
                       <input type="radio" name="selectreport" id="report1"> Report 1 
                    </label>
                </div>  
                <div class="checkbox">
                    <label class="mb-3" for="report2">
                       <input type="radio" name="selectreport" id="report2"> Report 2 
                    </label>
                </div>  
                <div class="checkbox">
                    <label class="mb-3" for="report3">
                       <input type="radio" name="selectreport" id="report3"> Report 3 
                    </label>
                </div>  
                <div class="checkbox">
                    <label class="mb-3" for="report4">
                       <input type="radio" name="selectreport" id="report4"> Report 4 
                    </label>
                </div>  
                <div class="checkbox">
                    <label class="mb-3" for="report5">
                       <input type="radio" name="selectreport" id="report5"> Report 5 
                    </label>
                </div>  
                <div class="checkbox">
                    <label for="report6">
                       <input type="radio" name="selectreport" id="report6"> Report 6 
                    </label>
                </div>   
            </div>
      </div>
   </div>
</div>

<div class="modal fade trackinginfo_modal" id="addtracking_popup" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>           
         <div class="modal-body">
            <div class="card-table mb-0">
               <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                     <h3 class="mb-0 text-success">Fulfilled <span class="text-muted"><a href="#">#1003-F3</a></span> <span class="text-primary ml-3"><!---a href="javascript: void(0)" data-toggle="modal" data-target="#vinfo-popup">2018 Toyota Hilux</a---></span></h3>

                     <div class="d-flex justify-content-between align-items-center">
                        
                        <span class="nav-item dropdown noti-dropdown actionMore addorbef">
                           <a href="javascript:void(0)" class="dropdown-toggle nav-link ediio" data-toggle="dropdown">
                               <svg viewBox="0 0 20 20" class="threedost" focusable="false" aria-hidden="true"><path d="M6 10a2 2 0 1 1-4.001-.001A2 2 0 0 1 6 10zm6 0a2 2 0 1 1-4.001-.001A2 2 0 0 1 12 10zm6 0a2 2 0 1 1-4.001-.001A2 2 0 0 1 18 10z"></path></svg>
                           </a>
                           <div class="dropdown-menu dropdown-menu-right notifications">
                               <div class="noti-content">
                                   <ul class="notification-list">
                                       <li class="notification-message">
                                          
                                           <a href="javascript:void(0)" class="text-danger">
                                               Cancel fulfillment
                                           </a>
                                       </li>
                                   </ul>
                               </div>
                           </div>
                        </span>
                     </div>
                  </div>
                    <div class="trackinginfo_div">
                        <h4>Other Tracking <span>Dispatched</span></h4>
                        <p>Drt22334</p>
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
                              <td class="text-left pl-0"> Brakes Shoes For Jeep Cherokee </td>
                              <td class="text-center "> K 8,000.00 * 1 </td>
                              <td class="text-right pr-0"> K 8,000.00 </td>
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
<!-- Shipping Popup -->
<div class="modal fade addorderpopup" id="shipping-popup" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-body p0">
            <div class="card-table mb-0">
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

<!-- Coninformation Popup -->
<div class="modal fade addorderpopup" id="coninformation-popup" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-body p0">
            <div class="card-table mb-0">
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
                        <input type="text" class="form-control" id="search-bar" autocomplete="off" placeholder="Toyoto Landcruiser ACX 4523">
                        <!-- User Dropdown Custom Ja For Change Value -->
                        <ul class="output" style="display:none;">
                         </ul>
                     </div>
                  </div>
                  <div class="viewBox table-responsive pt-3 px-3 hideborder">
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

<!-- Reports Popup -->
<div class="modal fade addorderpopup" id="reports-popup" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-body p0">
            <div class="card-table mb-0">
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
         <div class="modal-body p0">
            <div class="card-table mb-0">
               <div class="card-body addorder p-0imp">
                  <div class="d-flex justify-content-between align-items-center">
                     <h3 class="mb-0">Edit note</h3>
                  </div>
                  <div class="viewBox container px-0 mt-3">
                     <div class="row">                        
                        <div class="col-md-12">
                           <div class="form-group">
                              <label>Notes</label>
                              <textarea type="text" class="form-control" /></textarea>
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

<!-- Vehicle Information -->
<div class="modal fade addorderpopup" id="vinfo-popup" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-body p0">
            <div class="card-table mb-0">
               <div class="card-body addorder p-0imp">
                  <div class="d-flex justify-content-between align-items-center">
                     <h3 class="mb-0">Vehicle Infomation</h3>
                  </div>
                  <div class="viewBox container px-0 mt-3">
                     <div class="row">
                        <div class="col-md-12">
                           <table class="table table-bordered mb-3">
                              <tr>
                                 <th>Year</th>
                                 <th>Model</th>
                                 <th>Make</th>
                                 <th>Engine</th>
                              </tr>
                              <tr>
                                 <td>2022</td>
                                 <td>330i</td>
                                 <td>Audi</td>
                                 <td>BMW M340i</td>
                              </tr>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <!-- <button type="button" class="btn btn-success">Done</button> -->
            <button type="button" class="btn btn-danger" id="dismiss" data-dismiss="modal">Cancel</button>
         </div>
      </div>
   </div>
</div>
<div class="modal fade addorderpopup" id="coninformation-popup" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-body p0">
            <div class="card-table mb-0">
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


<div class="modal fade addorderpopup" id="editcustomer-popup" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-body p0">
            <div class="card-table mb-0">
               <div class="body addorder p-0imp">
                  <div class="d-flex justify-content-between align-items-center">
                     <h3 class="mb-0">Update Customer</h3>
                  </div>
                  <div class="viewBox container px-0 mt-3">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="form-group">
                              <label>Customer name</label>
                              <input type="text" class="form-control" value="John Smith" />
                           </div>
						   <div class="form-group">
                              <label>Shipping Address</label>
                              <textarea type="text" class="form-control" value="" />1688 St Matthews Ave, Winnipeg, MB R3H 0A2, Canada</textarea>
                           </div>
						    <div class="form-group">
                              <label>Billing  Address</label>
                              <textarea type="text" class="form-control" value="" />1688 St Matthews Ave, Winnipeg, MB R3H 0A2, Canada</textarea>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-success">Update</button>
            <button type="button" class="btn btn-danger" id="dismiss" data-dismiss="modal">Cancel</button>
         </div>
      </div>
   </div>
</div>
@endsection

