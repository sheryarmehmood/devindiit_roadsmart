@extends('serviceprovider.layouts.app')
@section('title', 'Drafts')

@section('content')
   <div class="content container-fluid addorder">
      <div class="page-header">
         <div class="row">
            <div class="col">
               <h3 class="page-title d-flex align-items-center">#1002 <span class="badge badge-warning fontpen mx-2">Updated by Admin 24 January, 3:53 pm</span></h3>
            </div>
            <div class="col text-right">
              <div class="actionMore d-flex align-items-center justify-content-end">
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
                     <h3 class="mb-0 text-success">Products </h3>
                     <div class="d-flex justify-content-between align-items-center">
                        <a data-toggle="modal" data-target="#addcustom-popup" href="javascript: void(0);">Add custom products</a>
                        <div class="ml-3">
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
                        </div>
                     </div>
                  </div>
                   <div class="chat-search d-flex justify-content-between align-items-center">
                     <div class="input-group">
                        <div class="input-group-prepend">
                           <i class="fas fa-search"></i>
                        </div>
                        <input type="text" class="form-control" data-toggle="modal" data-target="#addorder-popup" id="launch-modal" placeholder="Search">
                     </div>
                     <a class="btn btn-primary ml-2" data-toggle="modal" data-target="#addorder-popup" href="javascript: void(0);">
                        Browse
                     </a>
                  </div>
                  <div class="viewBox table-responsive pt-3">
                     <table class="table">
                        <tbody>
                           <tr>
                              <th class="text-left pl-0"> Product </th>
                              <th></th>
                              <th class="text-center "> Quantity </th>
                              <th class="text-right pr-0"> Total </th>
                           </tr>
                           <tr>
                              <td class="text-left  pl-0" style="min-width:150px"> 
                                 <a href="#" style="color: #009ce7 !important;">test</a> <br> 
                                 <a data-toggle="modal" data-target="#addiscount-popup" href="javascript: void(0);" style="color: #009ce7 !important;" >K 100.00</a> 
                              </td>
                              <td class="text-left">
                                2018 Ford..
                              </td>
                              <td class="text-center">
                                 <input type="number" value="1" class="form-control m-auto" style="min-width: 65px;" name="">
                              </td>
                              <td class="text-right pr-0"> K 100.00 <a href="#" class="crosdel">X</a> </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>


             <div class="card card-table hideborder">
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
                              <td class="text-left pl-0">  <a data-toggle="modal" data-target="#addiscount-popup" href="javascript: void(0);">Add Discount</a> </td>
                              <td class="text-center "> 10% </td>
                              <td class="text-right pr-0"> K 100.00 </td>
                           </tr>
                           <tr>
                              <td class="text-left pl-0">
                                 <a data-toggle="modal" data-target="#addshipping-popup" href="javascript: void(0);">Add Shipping</a>
                              </td>
                              <td class="text-center"> Free shipping </td>
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
                              <td class="text-center "> VAT 16% </td>
                              <td class="text-right pr-0"> K 1,280.00 </td>
                           </tr>
                           <tr>
                              <th class="text-left pl-0"> Total </th>
                              <th class="text-right pr-0" colspan="2"> K 9,380.00 </th>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>

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
                           <div class="d-flex align-items-center">
                              <div class="input-group mr-3">
                                 <input type="text" class="form-control px-3" placeholder="Add Comments">
                              </div>
                              <button class="btn btn-primary">Post</button>
                           </div>
                        </li>
                        <li class="event commentli">
                           <h2 class="todaytex">24 JANUARY</h2>
                   <!--         <span class="username">DN</span>
                           <h3>Davy Nanduba <small>Just now (edited)</small></h3>
                           <p>Insurance Purchased from hollard</p> -->
                        </li>
                        <li class="event">
                           <p class="d-flex">You created this draft order.  <span class="ml-auto text-right">3:53 pm</span></p>
                        </li>
                     </ul>
                  </div>
                  <hr />
                  <button class="btn btn-primary">Delete draft order</button>
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
                  <hr />
                  <div class="contactInfo mt-3">
                     <div class="d-flex justify-content-between align-items-center mb-3">
                        <h3 class="mb-0">Contact Information</h3>
                     </div>
                     <h4><span>John Smith</span></h4>
                  </div>
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


<!-- Shipping Popup -->
<div class="modal fade addorderpopup" id="shipping-popup" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-body pb-0">
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
         <div class="modal-body pb-0">
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

<div class="modal fade addorderpopup" id="addorder-popup" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-body pb-0">
            <div class="card-table mb-0">
               <div class="card-body addorder p-0imp">
                  <div class="d-flex justify-content-between align-items-center">
                     <h3 class="mb-0">All Products</h3>
                  </div>
                  <div class="chat-search d-flex justify-content-between align-items-center">
                     <div class="input-group">
                        <div class="input-group-prepend">
                           <i class="fas fa-search"></i>
                        </div>
                        <input type="text" class="form-control" placeholder="Search">
                     </div>
                     <a class="btn btn-primary filter-btn ml-2" href="javascript: void(0);" id="filter_search">
                        <i class="fas fa-filter text-white"></i>
                     </a>
                  </div>
                  <div class="viewBox table-responsive pt-3">
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
                              <td class="text-left pl-0">
                                 <div class="avatar avatar-sm">
                                    <img class="avatar-img rounded-circle" alt="" src="assets/img/engine.jpg">
                                 </div>
                              </td>
                              <td class="text-left pl-0"> Brakes Shoes For Jeep Cherokee </td>
                              <td class="text-center "> -1 Available </td>
                              <td class="text-right pr-0"> K 8,000.00 </td>
                           </tr>
                           <tr>
                              <td class="text-left pl-0">
                                 <div class="checkbox">
                                    <label class="mb-0">
                                       <input type="checkbox" name="checkbox">
                                    </label>
                                 </div>
                              </td>
                              <td class="text-left pl-0">
                                 <div class="avatar avatar-sm">
                                    <img class="avatar-img rounded-circle" alt="" src="assets/img/engine.jpg">
                                 </div>
                              </td>
                              <td class="text-left pl-0 text-wrap"> Brakes Skimming </td>
                              <td class="text-center "> </td>
                              <td class="text-right pr-0"> K 8,000.00 </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-success">Order</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
         </div>
      </div>
   </div>
</div>

<!-- Reports Popup -->
<div class="modal fade addorderpopup" id="reports-popup" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-body pb-0">
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
         <div class="modal-body pb-0">
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
<!-- End Discount -->

<div class="modal fade addorderpopup" id="addcustom-popup" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-body pb-0">
            <div class="card-table mb-0">
               <div class="card-body addorder p-0imp">
                  <div class="d-flex justify-content-between align-items-center">
                     <h3 class="mb-0">Add Custom Product</h3>
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

<!-- Add Shipping -->
<div class="modal fade addorderpopup" id="addshipping-popup" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-body pb-0">
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

<!-- Add Discount -->
<div class="modal fade addorderpopup" id="addiscount-popup" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-body pb-0">
            <div class="card-table mb-0">
               <div class="card-body addorder p-0imp">
                  <div class="d-flex justify-content-between align-items-center">
                     <h3 class="mb-0">Change Price</h3>
                  </div>
                  <div class="viewBox container px-0 mt-3">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>Price</label>
                              <input type="text" class="form-control" placeholder="₹ 0.00" />
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>Unit</label>
                              <input type="text" class="form-control" placeholder="1" />
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
@endsection

<script>
   $(document).ready(function() {
      $("input[name$='shipping']").click(function() {
        var test = $(this).val();

        $("div.desc").hide();
        $("#Cars" + test).show();
      });
   });

   $(function() {
     $("#paymentdue").on("click",function() {
       $(".payemntboxhide").toggle();
       $(".payemntboxhide1").toggle();
     });
   });
</script>