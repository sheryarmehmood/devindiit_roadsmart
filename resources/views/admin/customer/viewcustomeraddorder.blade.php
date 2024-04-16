@extends('admin.layouts.app1')
@section('title', 'Add order')
<style>
   .filter-btn {
      width: 34px;
      height: 34px;
   }

   .card-table .table td,
   .card-table .table th {
      padding: 12px 0.75rem;
   }

   .viewBox.table-responsive.product-add-table {
      overflow-y: hidden;
   }
</style>
@section('content')
<div class="content container-fluid addorder">
   <div class="page-header">
      <div class="row">
         <div class="col">
            <h3 class="page-title">Create Order</h3>
         </div>
         <div class="col text-right">
            <a href="javascript:void(0)" class="btn btn-primary">Discard</a>
            <a href="{{route('seller.drafts')}}" class="btn btn-primary">Save</a>
            <a href="{{route('seller.orders')}}" class="btn btn-primary">Back</a>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-md-8">
         <div class="card card-table mb-3">
            <div class="card-body p-2 py-3 px-4">
               <div class="d-flex justify-content-between align-items-center">
                  <h3 class="mb-0">Items</h3>
                  <div class="d-flex justify-content-between align-items-center">
                     <!-- <a data-toggle="modal" data-target="#addcustom-popup" href="javascript: void(0);">Add custom items</a> -->
                     <!---div class="ml-3">
                            <span class="nav-item dropdown noti-dropdown actionMore addorbef">
                               <a href="javascript:void(0)" class="dropdown-toggle nav-link ediio" data-toggle="dropdown">
                                   <svg viewBox="0 0 20 20" class="threedost" focusable="false" aria-hidden="true"><path d="M6 10a2 2 0 1 1-4.001-.001A2 2 0 0 1 6 10zm6 0a2 2 0 1 1-4.001-.001A2 2 0 0 1 12 10zm6 0a2 2 0 1 1-4.001-.001A2 2 0 0 1 18 10z"></path></svg>
                               </a>
                               <div class="dropdown-menu dropdown-menu-right notifications">
                                   <div class="noti-content">
                                       <ul class="notification-list">
                                          <li class="notification-message">
                                               <a class="dropdown-item" data-toggle="modal" data-target="#vhicle-popup" href="javascript: void(0);">Associate Vehicle</a>
                                           </li>
                                       </ul>
                                   </div>
                               </div>
                            </span>
                         </div--->
                  </div>
               </div>
               <div class="chat-search d-flex justify-content-between align-items-center">
                  <div class="input-group">
                     <div class="input-group-prepend">
                        <i class="fas fa-search"></i>
                     </div>
                     <input type="text" class="form-control" id="launch-modal" placeholder="Search items" data-toggle="modal" data-target="#addsearchproduct-popup">
                  </div>
                  <a class="btn btn-primary ml-2" data-toggle="modal" data-target="#addsearchproduct-popup" href="javascript: void(0);">
                     Browse
                  </a>
               </div>
               <div class="viewBox table-responsive pt-3 product-add-table">
                  <table class="table">
                     <thead>
                        <tr>
                           <th style="width:50px"><input name="select_all" value="1" type="checkbox"></th>
                           <th class="text-left pl-0"> Items</th>
                           <th style="width:170px"></th>
                           <th class="text-center "> Status</th>
                           <th class="text-right pr-0"> Price</th>
                        </tr>
                     </thead>
                     <tbody id="selectedProducts">

                     </tbody>
                  </table>
               </div>
            </div>
         </div>

         <div class="card card-table mb-3" style="overflow:visible;">
            <div class="card-body p-2 py-3 px-4">
               <div class="d-flex justify-content-between align-items-center">
                  <h3 class="mb-0">Payment</h3>
               </div>
               <div class="viewBox table-responsive pt-3">
                  <table class="table tbanchor">
                     <tbody>
                        <tr>
                           <th class="text-left pl-0"> Subtotal </th>
                           <td class="text-center "> --- </td>
                           <td class="text-right pr-0"> K 0.00 </td>
                        </tr>
                        <tr>
                           <td class="text-left pl-0">
                              <a data-toggle="modal" data-target="#addiscount-popup" href="javascript: void(0);">Add Discount</a>
                           </td>
                           <td class="text-center"> --- </td>
                           <td class="text-right pr-0"> K 0.00 </td>
                        </tr>
                        <tr>
                           <td class="text-left pl-0">
                              <a data-toggle="modal" data-target="#addshipping-popup" href="javascript: void(0);">Add Shipping</a>
                           </td>
                           <td class="text-center"> --- </td>
                           <td class="text-right pr-0"> K 0.00 </td>
                        </tr>
                        <tr>
                           <td class="text-left pl-0 addorbef">
                              <span class="nav-item dropdown noti-dropdown orderitempopmain">
                                 <a href="javascript:void(0)" class="dropdown-toggle nav-link ediio " style="padding:0 !important" data-toggle="dropdown">
                                    Tax
                                 </a>
                                 <div class="dropdown-menu dropdown-menu-right notifications orderitempop">
                                    <div class="noti-content">
                                       <h3 class="p-0">Taxes are automatically calculated</h3>
                                       <div class="payment_check_div ">
                                          <label class="payment-checkbox">
                                             <input type="checkbox">
                                             <span class="checkmark"></span>Charge taxes
                                          </label>
                                       </div>
                                       <div class="modal-footer pb-0">
                                          <button type="button" class="btn btn-success">Apply</button>
                                          <button type="button" class="btn btn-danger" id="dismiss" data-dismiss="modal">Cancel</button>
                                       </div>
                                    </div>

                                 </div>
                              </span>
                           </td>
                           <td class="text-center "> Not Calculated </td>
                           <td class="text-right pr-0"> K 0.00 </td>
                        </tr>
                        <tr>
                           <th class="text-left pl-0"> Total </th>
                           <td class="text-center "> --- </td>
                           <td class="text-right pr-0"> K <span id="totalprice">0.00</span> </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <hr class="mt-0 pt-2" />
               <div class="checkbox">
                  <label>
                     <input type="checkbox" name="paymentdue" value="1" id="paymentdue" /> Payment due later
                  </label>
               </div>
               <hr />
               <div class="payemntboxhide">
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
               <div class="text-left payemntboxhide1">
                  <div class="d-flex flex-column">
                     <h3>Payment terms</h3>
                     <select name="Status" class="my-select form-control w-50 mb-3">
                        <option value="">Due on receipt</option>
                        <option value="">Within 7 days</option>
                        <option value="">Within 15 days</option>
                        <option value="">Within 30 days</option>
                        <option value="">Within 60 days</option>
                        <option value="">Within 90 days</option>
                        <option value="">Fixed date</option>
                     </select>
                     <div>
                        <p><strong>Payment due when invoice is sent</strong>. You’ll be able to send an invoice and collect payment from the order page.</p>
                        <hr />
                        <div class="text-right">
                           <button class="btn btn-primary" data-toggle="modal" data-target="#order-notification-popup">Create Order</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="col-md-4">
         <!---div class="card card-table">
                <div class="card-body p-2 py-3 px-4">
                   <div class="d-flex justify-content-between align-items-center mb-3">
                      <h3 class="mb-0">Services</h3>
                   </div>
                   <div class="row">
                      <div class="col-md-12">
                         <div class="servicesCardLists">
                            <ul>
                               <li><a href="#">Clean and Adjust</a></li>
                               <li><a href="#">Shoe Replacement</a></li>
                               <li><a href="#">Pad Replacement</a></li>
                            </ul>
                         </div>
                      </div>
                   </div>
                </div>
             </div--->
         <!-- <div class="card card-table">
                <div class="card-body p-2 py-3 px-4">
                   <div class="d-flex justify-content-between align-items-center mb-3">
                      <h3 class="mb-0">Vehicle Information</h3>
                   </div>
                   <div class="row">
                      <div class="col-md-12">
                         <div class="chat-search mt-0 mb-3">
                            <div class="input-group">
                               <div class="input-group-prepend">
                                  <i class="fas fa-search"></i>
                               </div>
                               <input type="text" class="form-control" placeholder="Search">
                            </div>
                         </div>
                         <div class="form-group vhinfo">
                            <span>Year: <strong>2022</strong></span>
                            <span>Model: <strong>330i</strong></span>
                            <span>Make: <strong>Audi</strong></span>
                            <span>Engine: <strong>BMW M340i</strong></span>
                         </div>
                      </div>
                   </div>
                </div>
             </div> -->
         <div class="card card-table mb-3 customerCard">
            <div class="card-body p-2 py-3 px-4">
               <div class="d-flex justify-content-between align-items-center">
                  <h3 class="mb-0">Customer</h3>
                  <div class="d-flex justify-content-between align-items-center">
                     <a data-toggle="modal" data-target="#createcustomer-popup" href="javascript: void(0);">Create customer</a>
                  </div>
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
                     <h4 class="d-flex">John Smith <a data-toggle="modal" data-target="#editcustomer-popup" href="javascript: void(0);"><i class="fa fa-pencil-alt" aria-hidden="true"></i></a></h4>


                     <h5>Shipping Address</h5>
                     <p>1688 St Matthews Ave, Winnipeg, MB R3H 0A2, Canada</p>

                     <h5>Billing Address</h5>
                     <p>1688 St Matthews Ave, Winnipeg, MB R3H 0A2, Canada</p>
                  </div>
                  <div class="customerLists-item">
                     <h4 class="d-flex">Bill Walsh <a data-toggle="modal" data-target="#editcustomer-popup" href="javascript: void(0);"><i class="fa fa-pencil-alt" aria-hidden="true"></i>
                        </a></h4>
                     <h5>Shipping Address</h5>
                     <p>1688 St Matthews Ave, Winnipeg, MB R3H 0A2, Canada</p>

                     <h5>Billing Address</h5>
                     <p>1688 St Matthews Ave, Winnipeg, MB R3H 0A2, Canada</p>
                  </div>
               </div>


               <!---div class="contactInfo mt-3">
                      <div class="d-flex justify-content-between align-items-center mb-3">
                         <h3 class="mb-0">Contact Information</h3>
                      </div>
                      <h4><span>John Smith</span></h4>
                   </div--->
            </div>
         </div>
         <div class="card card-table mb-3">
            <div class="card-body p-2 py-3 px-4">
               <div class="d-flex justify-content-between align-items-center">
                  <h3 class="mb-0">Notes</h3>
               </div>
               <div class="chat-search">
                  <div class="input-group">
                     <textarea class="form-control" style="min-height: 70px; padding-left: 15px;"></textarea>
                  </div>
               </div>
            </div>
         </div>
         <div class="card card-table mb-3">
            <div class="card-body p-2 py-3 px-4">
               <div class="d-flex justify-content-between align-items-center">
                  <h3 class="mb-0">Tags</h3>
               </div>
               <div class="chat-search">
                  <div class="input-group">
                     <input type="text" id="exist-values" class="tagged form-control px-3" data-removeBtn="true" placeholder="Add Tags">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>


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
<!-- Add Discount -->
<div class="modal fade addorderpopup" id="addiscount-popup" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-body p0">
            <div class="card-table mb-0">
               <div class="card-body addorder p-0imp">
                  <div class="d-flex justify-content-between align-items-center">
                     <h3 class="mb-0">Add discount</h3>
                  </div>
                  <div class="viewBox container px-0 mt-3">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>Discount type</label>
                              <select name="category" id="category" class="my-select form-control">
                                 <option value="">Amount</option>
                                 <option value="">Percentage</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>Discount type</label>
                              <input type="text" class="form-control" placeholder="%" />
                           </div>
                        </div>

                        <div class="col-md-12">
                           <div class="form-group">
                              <label>Reason</label>
                              <input type="text" class="form-control" />
                              <small>Your customers can see this reason</small>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-success">Apply</button>
            <button type="button" class="btn btn-danger" id="dismiss" data-dismiss="modal">Cancel</button>
         </div>
      </div>
   </div>
</div>
<!-- End Discount -->

<!-- Add Shipping -->
<div class="modal fade addorderpopup" id="addshipping-popup" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-body p0">
            <div class="card-table mb-0">
               <div class="card-body addorder p-0imp">
                  <div class="d-flex justify-content-between align-items-center">
                     <h3 class="mb-0">Add discount</h3>
                  </div>
                  <div class="viewBox container px-0 mt-3">
                     <div class="alert alert-warning">
                        <i class="fa fa-info-circle" aria-hidden="true"></i> If you're not seeing all your rates, add a customer with a complete shipping address.
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                           <div class="d-flex flex-column">
                              <div class="form-check form-check-inline mb-2">
                                 <input class="form-check-input" type="radio" name="shipping" id="freeship" value="2">
                                 <label class="form-check-label" for="freeship">
                                    Free shipping
                                 </label>
                              </div>
                              <div class="form-check form-check-inline mb-3">
                                 <input class="form-check-input" type="radio" name="shipping" id="custom" value="3">
                                 <label class="form-check-label" for="custom">
                                    Custom
                                 </label>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row desc" id="Cars3" style="display:none;">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>Rate name</label>
                              <input type="text" class="form-control" />
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>Price</label>
                              <input type="text" class="form-control" placeholder="₹ 0.00" />
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-success">Apply</button>
            <button type="button" class="btn btn-danger" id="dismiss" data-dismiss="modal">Cancel</button>
         </div>
      </div>
   </div>
</div>
<!-- End Shipping -->

<!-- Vhicle Information -->
<div class="modal fade addorderpopup" id="vhicle-popup" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-body p0">
            <div class="card-table mb-0">
               <div class="card-body addorder p-0imp">
                  <div class="d-flex justify-content-between align-items-center">
                     <h3 class="mb-0">Add Vehicle</h3>
                  </div>
                  <div class="chat-search chatAuto d-flex justify-content-between align-items-center pt-2">
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
                  <div class="viewBox table-responsive pt-0 px-3 hideborder">
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
                                 <div class="avatar avatar-sm">
                                    <img class="avatar-img rounded-circle" alt="" src="assets/img/engine.jpg">
                                 </div>
                              </td>
                              <td class="pl-0"> Engine <br> <span class="text-muted">This Vehicle is Inactive</span></td>

                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-success">Done</button>
            <button type="button" class="btn btn-danger" id="dismiss" data-dismiss="modal">Cancel</button>
         </div>
      </div>
   </div>
</div>


<div class="modal fade addorderpopup" id="addsearchproduct-popup" role=" dialog" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-body p0">
            <div class="card-table mb-0">
               <div class="body addorder p-0imp">
                  <div class="d-flex justify-content-between align-items-center">
                     <h3 class="mb-0">Products</h3>
                  </div>
                  <div class="chat-search d-flex justify-content-between align-items-center pt-2">
                     <div class="input-group">
                        <div class="input-group-prepend">
                           <i class="fas fa-search"></i>
                        </div>
                        <input type="text" class="form-control" placeholder="Search">
                     </div>
                     <!--a class="btn btn-primary filter-btn ml-2" href="javascript: void(0);" id="filter_search">
                         <i class="fas fa-filter text-white"></i>
                      </a--->
                  </div>
                  <div class="viewBox table-responsive pt-0 px-3 hideborder">
                     <table class="table">
                        <tbody>
                           @foreach($services as $service)
                           <tr>
                              <td class="text-left pl-0">
                                 <div class="checkbox">
                                    <label class="mb-0">
                                       <input type="checkbox" name="checkbox">
                                    </label>
                                 </div>
                              </td>

                              <td class="text-left pl-0"> <span class="fs-4">{{ $service->sub_category_name }} </span><br> <span class="fs-6">{{ $service->category_name }}</span> </td>
                              @if($service->status) 
                              <td class="text-center "> Available</td>
                              @else
                              <td class="text-center "> Unavailble</td>
                              @endif
                              <td class="text-right pr-0"> {{ $service->price }}</td>
                           </tr>
                           @endforeach
                        </tbody>
                     </table>
                  </div>

               </div>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-success" data-dismiss="modal">Add Product</button>
            <button type="button" class="btn btn-danger" id="dismiss" data-dismiss="modal">Cancel</button>
         </div>
      </div>
   </div>
</div>


<div class="modal fade addorderpopup" id="addcustom-popup" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-body p0">
            <div class="card-table mb-0">
               <div class="body addorder p-0imp">
                  <div class="d-flex justify-content-between align-items-center">
                     <h3 class="mb-0">Add Custom Item</h3>
                  </div>
                  <div class="viewBox container px-0 mt-3">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>Item name</label>
                              <input type="text" class="form-control" />
                           </div>
                        </div>
                        <div class="col-md-3">
                           <div class="form-group">
                              <label>Price</label>
                              <input type="text" class="form-control" placeholder="₹ 0.00" />
                           </div>
                        </div>
                        <div class="col-md-3">
                           <div class="form-group">
                              <label>Quantity</label>
                              <input type="number" class="form-control" value="1" />
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12 payment_check_div ">
                           <label class="payment-checkbox">
                              <input type="checkbox" checked="checked">
                              <span class="checkmark"></span>Item is taxable
                           </label>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-success">Done</button>
            <button type="button" class="btn btn-danger" id="dismiss" data-dismiss="modal">Cancel</button>
         </div>
      </div>
   </div>
</div>


<div class="modal fade addorderpopup" id="createcustomer-popup" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-body p0">
            <div class="card-table mb-0">
               <div class="body addorder p-0imp">
                  <div class="d-flex justify-content-between align-items-center">
                     <h3 class="mb-0">Add Customer</h3>
                  </div>
                  <div class="viewBox container px-0 mt-3">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="form-group">
                              <label>Customer name</label>
                              <input type="text" class="form-control" />
                           </div>

                           <div class="form-group">
                              <label>Shipping Address</label>
                              <textarea type="text" class="form-control" /></textarea>
                           </div>
                           <div class="form-group">
                              <label>Billing Address</label>
                              <textarea type="text" class="form-control" /></textarea>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-success">Add</button>
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
                              <label>Billing Address</label>
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




<div class="modal fade addorderpopup" id="order-notification-popup" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-body">
            <h6>This will create an order without payment. You will be able to send an invoice and collect payment from the order page</h6>
         </div>
         <div class="modal-footer">
            <a href="{{route('seller.drafts')}}" class="btn btn-secondary">Save Order</a>
            <a href="{{route('seller.orders')}}" class="btn btn-success">Create Order</a>
            <button type="button" class="btn btn-danger" id="dismiss" data-dismiss="modal">Cancel</button>
         </div>
      </div>
   </div>
</div>






@endsection
@section('scripts')
<script>
   $(document).ready(function() {
      $("input[name$='shipping']").click(function() {
         var test = $(this).val();

         $("div.desc").hide();
         $("#Cars" + test).show();
      });
   });

   $(function() {
      $("#paymentdue").on("click", function() {
         $(".payemntboxhide").toggle();
         $(".payemntboxhide1").toggle();
      });


// Event listener for the "Add Product" button in the modal
$(".btn-success[data-dismiss='modal']").on("click", function() {
    // Clear previous selections
    $("#selectedProducts").empty();
    var totalprice = 0;
    // Loop through each selected checkbox
    $(".viewBox table tbody tr").each(function() {
        var checkbox = $(this).find("input[type='checkbox']");
        if (checkbox.is(":checked")) {
            var productName = $(this).find("td:eq(1) span.fs-4").text().trim();
            var productStatus = $(this).find("td:eq(2)").text().trim();
            var productPrice = parseFloat($(this).find("td:eq(3)").text().trim()); // Convert to number
            totalprice += productPrice; // Add to totalprice
            // Append the selected product details to the result area
            $("#selectedProducts").append(
                `<tr>
                    <td style="width:50px"><input type="checkbox" name="type" value=""></td>
                    <td class="text-left  pl-0"> ${productName} <br /> ${productPrice} </td>
                    <td class="text-left  pl-0">
                        <a href="javascript:void(0)" data-toggle="modal" data-target="#addvehicle-popup">
                            Toyota Hilux
                        </a>
                    </td>
                    <td class="text-center" style="width:120px">
                        ${productStatus}
                    </td>
                    <td class="text-right pr-0"> ${productPrice} <a href="#" class="crosdel ml-3">X</a> </td>
                </tr>`
            );
        }
    });

    $('#totalprice').text(totalprice);
});


      $(".table tbody tr").on("click", function() {
         // Remove the .selected class from all rows
         $(".table tbody tr").removeClass("selected");

         // Add the .selected class to the clicked row
         $(this).addClass("selected");
      });

   });
</script>
@endsection