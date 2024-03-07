@extends('serviceprovider.layouts.app')
@section('title', 'Edit Order')
@section('content')
   <div class="content container-fluid addorder">
      <div class="page-header">
         <div class="row">
            <div class="col">
               <h3 class="page-title">Edit order</h3>
            </div>
            <div class="col text-right">
               <a href="{{route('seller.orders')}}" class="btn btn-primary">Back</a>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-8">
            <div class="card card-table mb-3 card_visible">
               <div class="card-body p-0">
                  <div class="px-4 pt-3">
                     <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Add Item</h3>
                        <div class="d-flex justify-content-between align-items-center">
                           <a data-toggle="modal" data-target="#addcustom-popup" href="javascript: void(0);">Add custom item</a>
                        </div>
                     </div>

                     <div class="chat-search d-flex justify-content-between align-items-center">
                        <div class="input-group">
                           <div class="input-group-prepend">
                              <i class="fas fa-search"></i>
                           </div>
                           <input type="text" class="form-control" id="launch-modal" placeholder="Search" data-toggle="modal" data-target="#addsearchproduct-popup" href="javascript: void(0);">
                        </div>
                        <a class="btn btn-primary ml-2" data-toggle="modal" data-target="#addsearchproduct-popup" href="javascript: void(0);">
                           Browse
                        </a>
                     </div>
                  </div>
                  <hr />
                  <div class="viewBox table-responsive px-4">
                     <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0 text-danger">Unfulfilled <!---span class="custom-circle-dot"></span> <span class="text-muted associate-vehicle-name ">BMW X3</span---></h3>
                        <a class="addvehicle_btn" data-toggle="modal" data-target="#addorder-popup" href="javascript: void(0);">Add Vehicle</a>
                     </div>
                   <div class="viewBox pt-3 unfulfilledTblBx">
                     <table class="table">
                        <tbody>
                           <tr>
                              <td class="text-left pl-0">
                                 <div class="fileboxdiv">
                                    <i class="far fa-file-archive"></i>
                                 </div>
                              </td>
                              <td class="text-left pl-0">  Brakes Shoes For Jeep Cherokee <br />  	
                                    <a href="javascript:void(0)"  data-toggle="modal" data-target="#addorder-popup">
                                        Toyota Hilux
                                    </a>
                                 <div class="mt-2 adanchor">
                                    <a data-toggle="modal" data-target="#quantity-popup" href="javascript: void(0);">Adjust quantity</a>
                                    <a href="javascript:void(0)">Remove item</a>
                                    <a href="javascript:void(0)">Dissociate Vehicle</a>
                                 </div>
                              </td>
							  
                              <td class="text-center" style="width:120px">
                                 <input type="number" value="1" class="form-control m-auto" style="min-width: 65px;" name="">
                              </td>
                              <td class="text-right pr-0"> K 100.00 <!-- <a href="#" class="crosdel">X</a> --> </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
                     <!--- div class="viewBox table-responsive pt-3">
                        <table class="table">
                           <tbody>
                              <tr>
                                 <td class="text-left pl-0">
                                    <div class="fileboxdiv">
                                       <i class="far fa-file-archive"></i>
                                       <span>1</span>
                                    </div>
                                 </td>
                                 <td class="text-left pl-0"> 
                                    Brakes Shoes For Jeep Cherokee <br /> 
                                    1 × ₹10.00 
                                 </td>
                                 <td class="text-right pr-0"> K 10.00 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div---->
                  </div>
               </div>
            </div>
            <div class="card card-table mb-3">
               <div class="card-body p-2 py-3 px-4">
                     <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0 text-danger">Unfulfilled</h3>
                        <a class="addvehicle_btn" data-toggle="modal" data-target="#addorder-popup" href="javascript: void(0);">Add Vehicle</a>
                     </div>
                   <div class="viewBox table-responsive pt-3 unfulfilledTblBx">
                     <table class="table">
                        <tbody>
                           <tr>
                              <td class="text-left pl-0">
                                 <div class="fileboxdiv">
                                    <i class="far fa-file-archive"></i>
                                 </div>
                              </td>
                              <td class="text-left pl-0">  Brakes Shoes For Jeep Cherokee <br /> 	
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#addorder-popup">
                                        BMW X3
                                    </a>

                                 <div class="mt-2 adanchor">
                                    <a data-toggle="modal" data-target="#quantity-popup" href="javascript: void(0);">Adjust quantity</a>
                                    <a href="javascript:void(0)">Remove item</a>
                                    <a href="javascript:void(0)" class="associate_vehicle" data-toggle="modal" data-target="#addorder-popup">
                                        Associate Vehicle                                      
                                    </a>
                                 </div>
                              </td>
							  
                              <td class="text-center" style="width:120px">
                                 <input type="number" value="1" class="form-control m-auto" style="min-width: 65px;" name="">
                              </td>
                              <td class="text-right pr-0"> K 100.00</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
            

            <div class="card card-table mb-3">
               <div class="card-body p-2 py-3 px-4">
                  <div class="d-flex justify-content-between align-items-center">
                     <h3 class="mb-0 text-success">Fulfilled  <!---span class="custom-circle-dot"></span> <span class="text-muted associate-vehicle-name ">Toyota Hilux</span----></h3>
                    <a class="addvehicle_btn" data-toggle="modal" data-target="#addorder-popup" href="javascript: void(0);">Add Vehicle</a>
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
                              <td class="text-left pl-0"> 
                                 Brakes Shoes For Jeep Cherokee <br /> 
                                 BMW X3
                              </td>
							   <td class="text-left  pl-0">1 × ₹13.00</td>
                              <td class="text-right pr-0"> K 13.00 </td>
                           </tr>
                        </tbody>
                     </table>
                     <hr />
                     <h4 class="text-muted">Fulfilled items can’t be edited.</h4>
                  </div>
               </div>
            </div>

            <div class="card card-table mb-3">
               <div class="card-body p-2 py-3 px-4">
                  <div class="d-flex justify-content-between align-items-center">
                     <h3 class="mb-0 text-danger">Pending</h3>
                  </div>
                  <div class="viewBox table-responsive pt-3">
                     <table class="table tbanchor">
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
                           <tr>
                              <td class="text-left pl-0"> Paid by customer </td>
                              <td class="text-right pr-0" colspan="2"> K 0.00 </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>

             <div class="card card-table mb-3">
               <div class="card-body p-2 py-3 px-4">
                  <div class="d-flex justify-content-between align-items-center">
                     <h3 class="mb-3">Reason for edit</h3>
                  </div>
                  <div class="form-group">
                     <input type="text" class="form-control">
                     <small>Only you and other staff can see this reason.</small>
                  </div>
               </div>
            </div>
			
			<div class="card card-table mb-3">
               <div class="card-body p-2 py-3 px-4">
                  <div class="d-flex justify-content-between align-items-center">
                     <h3 class="mb-0">Summary</h3>
                  </div>
                   <div class="viewBox table-responsive pt-3">
                     <table class="table">
                        <tbody>
                           <tr>
                              <td class="text-left pl-0"> Updated total </td>
                              <td class="text-right pr-0"> ₹36.60 </td>
                           </tr>
                           <tr>
                              <td class="text-left pl-0"> Paid by customer </td>
                              <td class="text-right pr-0"> ₹0.00 </td>
                           </tr>
                           <tr>
                              <td class="text-left pl-0"> <strong>Amount to collect</strong> </td>
                              <td class="text-right pr-0"> <strong>₹36.60</strong> </td>
                           </tr>
                        </tbody>
                     </table>
                     <hr />
                     <div class="invoibox">
                        <h3>INVOICE</h3>
                        <p>There’s no email address on this order. Your customer won’t be notified of these changes.</p>
                     </div>
                     <div class="modal-footer px-0">
                        <button type="button" class="btn btn-success">Update Order</button>
                     </div>
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
						<h4 class="d-flex">John Smith  <a data-toggle="modal" data-target="#editcustomer-popup" href="javascript: void(0);"><i class="fa fa-pencil-alt" aria-hidden="true"></i></a></h4>
						
						
						<h5>Shipping Address</h5>
						<p>1688 St Matthews Ave, Winnipeg, MB R3H 0A2, Canada</p>
						
						<h5>Billing Address</h5>
						<p>1688 St Matthews Ave, Winnipeg, MB R3H 0A2, Canada</p>
					</div>
					<div class="customerLists-item">
						<h4 class="d-flex">Bill Walsh  <a data-toggle="modal" data-target="#editcustomer-popup" href="javascript: void(0);"><i class="fa fa-pencil-alt" aria-hidden="true"></i>
</a></h4>
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
                     <a data-toggle="modal" data-target="#notes-popup" href="javascript: void(0);">Edit</a>
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
                     <div class="input-group">
                        <input type="text" id="exist-values" class="tagged form-control px-3" data-removeBtn="true" value="Urgent,Reviewed, Wholesale">
                     </div>
                  </div>
               </div>
            </div>
            

           
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

<div class="modal fade addorderpopup" id="addorder-popup" role="dialog" aria-hidden="true">
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
         <!--div class="modal-footer">
            <button type="button" class="btn btn-success">Done</button>
            <button type="button" class="btn btn-danger" id="dismiss" data-dismiss="modal">Cancel</button>
         </div-->
      </div>
   </div>
</div>

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
                  <div class="chat-search d-flex justify-content-between align-items-center">
                     <div class="input-group">
                        <div class="input-group-prepend">
                           <i class="fas fa-search"></i>
                        </div>
                        <input type="text" class="form-control" placeholder="Search">
                     </div>
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

<div class="modal fade addorderpopup" id="addcustom-popup" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-body p0">
            <div class="card-table mb-0">
               <div class="card-body addorder p-0imp">
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

<!-- Quantity Popup -->
<div class="modal fade addorderpopup" id="quantity-popup" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-body p0">
            <div class="card-table mb-0">
               <div class="card-body addorder p-0imp">
                  <div class="d-flex justify-content-between align-items-center">
                     <h3 class="mb-0">Adjust quantity</h3>
                  </div>
                  <div class="viewBox container px-0 mt-2">
                     <div class="row mb-3">
                        <div class="col-md-12">
                           Adjust the quantity for <strong>Test</strong>.
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                           <div class="form-group">
                              <label>Quantity</label>
                              <input type="number" class="form-control" value="1" />
                           </div>
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




<div class="modal fade addorderpopup" id="addsearchproduct-popup"" role="dialog" aria-hidden="true">
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
                           <tr>
                              <td class="text-left pl-0">
                                 <div class="checkbox">
                                    <label class="mb-0">
                                       <input type="checkbox" name="checkbox">
                                    </label>
                                 </div>
                              </td>
                              
                              <td class="text-left pl-0"> Brakes Shoes For Jeep Cherokee </td>
                              <td class="text-center "> 3 </td>
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
                              
                              <td class="text-left pl-0 text-wrap"> Brakes Skimming </td>
                              <td class="text-center "> 2 </td>
                              <td class="text-right pr-0"> K 8,000.00 </td>
                           </tr>
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
<!-- End Coninformation -->
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
     $("#paymentdue").on("click",function() {
       $(".payemntboxhide").toggle();
       $(".payemntboxhide1").toggle();
     });
   });
</script>
@endsection