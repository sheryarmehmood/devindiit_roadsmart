@extends('admin.layouts.app1')
@section('title', 'Create Request')
<style>
   .filter-btn 
   {
    width: 34px;
    height: 34px;
   }

   .card-table .table td, 
   .card-table .table th
   {
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
               <h3 class="page-title">Customer Requests</h3>
            </div>
            <div class="col text-right">
              <div class="actionMore d-flex align-items-center justify-content-end">
                  <a href="{{route('admin.orders')}}" class="btn btn-primary ml-3 mr-2">Back</a>
              </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-6">
            <div class="card card-table mb-3">
               <div class="card-body p-2 py-3 px-4">
                   <div class="page-header">
                        <div class="row">
                            <div class="col">
                                <h3 class="page-title">
                					<div class="d-flex titleSelect align-items-center">
                						Request Details
                					</div>
            				    </h3>
                            </div>
                        </div>
                    </div>
                    <div class="table-top-search-filter my-3">
					    <form id="search-tableForm" method="POST">
        					<div class="row w-100">
        						<div class="col-xl-6">
        							<div class="w-100 searchFilerwrap">
        								<input type="text" id="searchname" class="form-control w-100" name="searchname" placeholder="Search Customer Requests" >
        								<i class="fa fa-search"></i>
        							</div>
        						</div>
        						<div class="col-md-6">
    							    <div>
    								  <span class="nav-item mr-3">
    									 <button class="btn btn-primary " style="padding: 10px 38px;" >
    										Search
    									 </button> 
    								  </span>
									</div>
								</div>
        					</div>
    					</form>
                	</div>
                    <div class="Request_card">
                        <div class="Request_body table-responsive">
        					<table class="table">
                                <thead>
                                   <tr>
                                      <th>Name</th>
                                      <th>Email</th>
                                      <th>Item</th>
                                      <th>Type</th>
                                      <th>Qty</th>
                                      <!--<th>Amount</th>-->
                                      <!--<th>Total</th>-->
                                      <th>Action</th>
                                </thead>
                                <tbody>
        							<tr>
        							    <td>John Smith</td>
        							    <td>JohnSmith@yopmail.com</td>
        								<td>Tune Up</td>
        								<td>Labour</td>
        								<td>1</td>
        								<!--<td>K 800</td>-->
        								<!--<td>K 800</td>-->
        								<td>
                                            <button class="btn btn-sm bg-success-light"><i class="fas fa-check"></i> Accept</button>
                                            <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>  Reject</button>
                                        </td>
        							</tr>
        							<tr>
        							    <td>Mark Robert</td>
        							    <td>MarkRobert@yopmail.com</td>
        								<td>Spark Plugs</td>
        								<td>Part</td>
        								<td>4</td>
        								<!--<td>K 150</td>-->
        								<!--<td>K 600</td>-->
        								<td>
                                            <button class="btn btn-sm bg-success-light"><i class="fas fa-check"></i> Accept</button>
                                            <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>  Reject</button>
                                        </td>
        							</tr>
        							<tr>
        							    <td>Chris</td>
        							    <td>Chris@yopmail.com</td>
        								<td>Spark Plugs</td>
        								<td>Part</td>
        								<td>10</td>
        								<!--<td>K 150</td>-->
        								<!--<td>K 600</td>-->
        								<td>
                                            <button class="btn btn-sm bg-success-light"><i class="fas fa-check"></i> Accept</button>
                                            <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>  Reject</button>
                                        </td>
        							</tr>
        							<tr>
        							    <td>Olivia </td>
        							    <td>Olivia12@yopmail.com</td>
        								<td>Bmw car Meter</td>
        								<td>Part</td>
        								<td>2</td>
        								<!--<td>K 150</td>-->
        								<!--<td>K 600</td>-->
        								<td>
                                            <button class="btn btn-sm bg-success-light"><i class="fas fa-check"></i> Accept</button>
                                            <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>  Reject</button>
                                        </td>
        							</tr>
        							<tr>
        							    <td>Tony Robert</td>
        							    <td>TonyRobert@yopmail.com</td>
        								<td>Tires</td>
        								<td>Part</td>
        								<td>4</td>
        								<!--<td>K 150</td>-->
        								<!--<td>K 600</td>-->
        								<td>
        								    <a href="{{route('admin.updateorder')}}" class="btn btn-sm bg-success-light">
                                             <i class="fas fa-check"></i> Accept
                                            </a>
                                            <!--<button class="btn btn-sm bg-success-light"><i class="fas fa-check"></i> Accept</button>-->
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
         <div class="col-md-6">
            <div class="card card-table mb-2 customerCard">
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
						<h4 class="d-flex">John Smith </h4>
						<h5>Shipping Address</h5>
						<p>1688 St Matthews Ave, Winnipeg, MB R3H 0A2, Canada</p>
						
						<h5>Billing Address</h5>
						<p>1688 St Matthews Ave, Winnipeg, MB R3H 0A2, Canada</p>
					</div>
					<div class="customerLists-item">
						<h4 class="d-flex">Mark Robert </h4>
						<h5>Shipping Address</h5>
						<p>1688 St Matthews Ave, Winnipeg, MB R3H 0A2, Canada</p>

						<h5>Billing Address</h5>
						<p>1688 St Matthews Ave, Winnipeg, MB R3H 0A2, Canada</p>
					</div>
				 </div>
               </div>
            </div>
            <!--<div class="card card-table mb-3">-->
            <!--   <div class="card-body p-2 py-3 px-4">-->
            <!--      <div class="d-flex justify-content-between align-items-center">-->
            <!--         <h3 class="mb-0">Notes</h3>-->
            <!--      </div>-->
            <!--      <div class="chat-search">-->
            <!--         <div class="input-group">-->
            <!--            <textarea class="form-control" style="min-height: 70px; padding-left: 15px; "></textarea>-->
            <!--         </div>-->
            <!--      </div>-->
            <!--   </div>-->
            <!--</div>-->
         </div>
      </div>
   </div>

<!--<div class="modal fade addorderpopup" id="addrequest-popup" role="dialog" aria-hidden="true">-->
<!--   <div class="modal-dialog modal-dialog-centered">-->
<!--      <div class="modal-content">-->
<!--         <div class="modal-body p0">-->
<!--            <div class="card-table mb-0">-->
<!--               <div class="card-body addorder p-0imp">-->
<!--                  <div class="d-flex justify-content-between align-items-center">-->
<!--                     <h3 class="mb-0">Add Custom Item</h3>-->
<!--                  </div>-->
<!--                  <div class="viewBox container px-0 mt-3">-->
<!--                     <div class="row">-->
<!--                        <div class="col-md-6">-->
<!--                           <div class="form-group">-->
<!--                              <label>Item</label>-->
<!--                              <input type="text" class="form-control" placeholder="" />-->
<!--                           </div>-->
<!--                        </div>-->
<!--                        <div class="col-md-6">-->
<!--                           <div class="form-group">-->
<!--                              <label>Type</label>-->
<!--                              <input type="text" class="form-control" placeholder="" />-->
<!--                           </div>-->
<!--                        </div>-->
<!--                        <div class="col-md-4">-->
<!--                           <div class="form-group">-->
<!--                              <label>Quantity</label>-->
<!--                              <input type="number" class="form-control" placeholder="" />-->
<!--                           </div>-->
<!--                        </div>-->
<!--                        <div class="col-md-4">-->
<!--                           <div class="form-group">-->
<!--                              <label>Amount</label>-->
<!--                              <input type="text" class="form-control" placeholder="" />-->
<!--                           </div>-->
<!--                        </div>-->
<!--                        <div class="col-md-4">-->
<!--                           <div class="form-group">-->
<!--                              <label>Total</label>-->
<!--                              <input type="text" class="form-control" placeholder="" />-->
<!--                           </div>-->
<!--                        </div>-->
<!--                     </div>-->
<!--                  </div>-->
<!--               </div>-->
<!--            </div>-->
<!--         </div>-->
<!--         <div class="modal-footer">-->
<!--            <button type="button" class="btn btn-success">Save</button>-->
<!--            <button type="button" class="btn btn-danger" id="dismiss" data-dismiss="modal">Cancel</button>-->
<!--         </div>-->
<!--      </div>-->
<!--   </div>-->
<!--</div>-->

<!-- Add Discount -->
<!--<div class="modal fade addorderpopup" id="addiscount-popup" role="dialog" aria-hidden="true">-->
<!--   <div class="modal-dialog modal-dialog-centered">-->
<!--      <div class="modal-content">-->
<!--         <div class="modal-body p0">-->
<!--            <div class="card-table mb-0">-->
<!--               <div class="card-body addorder p-0imp">-->
<!--                  <div class="d-flex justify-content-between align-items-center">-->
<!--                     <h3 class="mb-0">Add discount</h3>-->
<!--                  </div>-->
<!--                  <div class="viewBox container px-0 mt-3">-->
<!--                     <div class="row">-->
<!--                        <div class="col-md-6">-->
<!--                           <div class="form-group">-->
<!--                              <label>Discount type</label>-->
<!--                              <select name="category" id="category" class="my-select form-control">-->
<!--                                 <option value="">Amount</option>-->
<!--                                 <option value="">Percentage</option>-->
<!--                              </select>-->
<!--                           </div>-->
<!--                        </div>-->
<!--                        <div class="col-md-6">-->
<!--                           <div class="form-group">-->
<!--                              <label>Discount type</label>-->
<!--                              <input type="text" class="form-control" placeholder="%" />-->
<!--                           </div>-->
<!--                        </div>-->
                        
<!--                        <div class="col-md-12">-->
<!--                           <div class="form-group">-->
<!--                              <label>Reason</label>-->
<!--                              <input type="text" class="form-control" />-->
<!--                              <small>Your customers can see this reason</small>-->
<!--                           </div>-->
<!--                        </div>-->
<!--                     </div>-->
<!--                  </div>-->
<!--               </div>-->
<!--            </div>-->
<!--         </div>-->
<!--         <div class="modal-footer">-->
<!--            <button type="button" class="btn btn-success">Apply</button>-->
<!--            <button type="button" class="btn btn-danger" id="dismiss" data-dismiss="modal">Cancel</button>-->
<!--         </div>-->
<!--      </div>-->
<!--   </div>-->
<!--</div>-->
<!-- End Discount -->

<!-- Add Shipping -->
<!--<div class="modal fade addorderpopup" id="addshipping-popup" role="dialog" aria-hidden="true">-->
<!--   <div class="modal-dialog modal-dialog-centered">-->
<!--      <div class="modal-content">-->
<!--         <div class="modal-body p0">-->
<!--            <div class="card-table mb-0">-->
<!--               <div class="card-body addorder p-0imp">-->
<!--                  <div class="d-flex justify-content-between align-items-center">-->
<!--                     <h3 class="mb-0">Add discount</h3>-->
<!--                  </div>-->
<!--                  <div class="viewBox container px-0 mt-3">-->
<!--                     <div class="alert alert-warning">-->
<!--                        <i class="fa fa-info-circle" aria-hidden="true"></i> If you're not seeing all your rates, add a customer with a complete shipping address.-->
<!--                     </div>-->
<!--                     <div class="row">-->
<!--                        <div class="col-md-12">-->
<!--                           <div class="d-flex flex-column">-->
<!--                              <div class="form-check form-check-inline mb-2">-->
<!--                                 <input class="form-check-input" type="radio" name="shipping" id="freeship" value="2">-->
<!--                                 <label class="form-check-label" for="freeship">-->
<!--                                    Free shipping-->
<!--                                 </label>-->
<!--                              </div>-->
<!--                              <div class="form-check form-check-inline mb-3">-->
<!--                                 <input class="form-check-input" type="radio" name="shipping" id="custom" value="3">-->
<!--                                    <label class="form-check-label" for="custom">-->
<!--                                    Custom-->
<!--                                 </label>-->
<!--                              </div>-->
<!--                           </div>-->
<!--                        </div>-->
<!--                     </div>-->
<!--                     <div class="row desc" id="Cars3" style="display:none;">-->
<!--                        <div class="col-md-6">-->
<!--                           <div class="form-group">-->
<!--                              <label>Rate name</label>-->
<!--                              <input type="text" class="form-control" />-->
<!--                           </div>-->
<!--                        </div>-->
<!--                        <div class="col-md-6">-->
<!--                           <div class="form-group">-->
<!--                              <label>Price</label>-->
<!--                              <input type="text" class="form-control" placeholder="₹ 0.00" />-->
<!--                           </div>-->
<!--                        </div>-->
<!--                     </div>-->
<!--                  </div>-->
<!--               </div>-->
<!--            </div>-->
<!--         </div>-->
<!--         <div class="modal-footer">-->
<!--            <button type="button" class="btn btn-success">Apply</button>-->
<!--            <button type="button" class="btn btn-danger" id="dismiss" data-dismiss="modal">Cancel</button>-->
<!--         </div>-->
<!--      </div>-->
<!--   </div>-->
<!--</div>-->
<!-- End Shipping -->

<!-- Vhicle Information -->
<!--<div class="modal fade addorderpopup" id="vhicle-popup" role="dialog" aria-hidden="true">-->
<!--   <div class="modal-dialog modal-dialog-centered">-->
<!--      <div class="modal-content">-->
<!--         <div class="modal-body p0">-->
<!--            <div class="card-table mb-0">-->
<!--               <div class="card-body addorder p-0imp">-->
<!--                  <div class="d-flex justify-content-between align-items-center">-->
<!--                     <h3 class="mb-0">Add Vehicle</h3>-->
<!--                  </div>-->
<!--                  <div class="chat-search chatAuto d-flex justify-content-between align-items-center pt-2">-->
<!--                     <div class="input-group " id="searchform">-->
<!--                        <div class="input-group-prepend">-->
<!--                           <i class="fas fa-search"></i>-->
<!--                        </div>-->
<!--                        <input type="text" class="form-control" id="search-bar" autocomplete="off" placeholder="Toyoto Landcruiser ACX 4523">-->
                        <!-- User Dropdown Custom Ja For Change Value -->
<!--                        <ul class="output" style="display:none;">-->
<!--                         </ul>-->
<!--                     </div>-->
<!--                  </div>-->
<!--                  <div class="viewBox table-responsive pt-0 px-3 hideborder">-->
<!--                     <table class="table">-->
<!--                        <tbody>-->
<!--                           <tr>-->
<!--                              <td class="text-left pl-0">-->
<!--                                 <div class="checkbox">-->
<!--                                    <label class="mb-0">-->
<!--                                       <input type="checkbox" name="checkbox">-->
<!--                                    </label>-->
<!--                                 </div>-->
<!--                              </td>-->
<!--                              <td class="pl-0" style="width: 60px;">-->
<!--                                 <div class="avatar avatar-sm">-->
<!--                                    <img class="avatar-img rounded-circle" alt="" src="assets/img/engine.jpg">-->
<!--                                 </div>-->
<!--                              </td>-->
<!--                              <td class="pl-0"> Engine <br> <span class="text-muted">This Vehicle is Inactive</span></td>-->
                             
<!--                           </tr>-->
<!--                        </tbody>-->
<!--                     </table>-->
<!--                  </div>-->
<!--               </div>-->
<!--            </div>-->
<!--         </div>-->
<!--         <div class="modal-footer">-->
<!--            <button type="button" class="btn btn-success">Done</button>-->
<!--            <button type="button" class="btn btn-danger" id="dismiss" data-dismiss="modal">Cancel</button>-->
<!--         </div>-->
<!--      </div>-->
<!--   </div>-->
<!--</div>-->


<!--<div class="modal fade addorderpopup" id="addorder-popup" role="dialog" aria-hidden="true">-->
<!--   <div class="modal-dialog modal-dialog-centered">-->
<!--      <div class="modal-content">-->
<!--         <div class="modal-body p0">-->
<!--            <div class="card-table mb-0">-->
<!--               <div class="card-body addorder p-0imp">-->
<!--                  <div class="d-flex justify-content-between align-items-center">-->
<!--                     <h3 class="mb-0">All Products & Services</h3>-->
<!--                  </div>-->
<!--                  <div class="chat-search d-flex justify-content-between align-items-center pt-2">-->
<!--                     <div class="input-group">-->
<!--                        <div class="input-group-prepend">-->
<!--                           <i class="fas fa-search"></i>-->
<!--                        </div>-->
<!--                        <input type="text" class="form-control" placeholder="Search">-->
<!--                     </div>-->
<!--                     <a class="btn btn-primary filter-btn ml-2" href="javascript: void(0);" id="filter_search">-->
<!--                        <i class="fas fa-filter text-white"></i>-->
<!--                     </a>-->
<!--                  </div>-->
<!--                  <div class="viewBox table-responsive pt-0 px-3 hideborder">-->
<!--                     <table class="table">-->
<!--                        <tbody>-->
<!--                           <tr>-->
<!--                              <td class="text-left pl-0">-->
<!--                                 <div class="checkbox">-->
<!--                                    <label class="mb-0">-->
<!--                                       <input type="checkbox" name="checkbox">-->
<!--                                    </label>-->
<!--                                 </div>-->
<!--                              </td>-->
<!--                              <td class="text-left pl-0">-->
<!--                                 <div class="avatar avatar-sm">-->
<!--                                    <img class="avatar-img rounded-circle" alt="" src="../assets/serviceprovider/img/engine.jpg">-->
<!--                                 </div> -->
<!--                              </td>-->
<!--                              <td class="text-left pl-0"> Brakes Shoes For Jeep Cherokee </td>-->
<!--                              <td class="text-center "> -1 Available </td>-->
<!--							   <td class="text-center "> Audi </td>-->
<!--                              <td class="text-right pr-0"> K 8,000.00 </td>-->
<!--                           </tr>-->
<!--                           <tr>-->
<!--                              <td class="text-left pl-0">-->
<!--                                 <div class="checkbox">-->
<!--                                    <label class="mb-0">-->
<!--                                       <input type="checkbox" name="checkbox">-->
<!--                                    </label>-->
<!--                                 </div>-->
<!--                              </td>-->
<!--                              <td class="text-left pl-0">-->
<!--                                 <div class="avatar avatar-sm">-->
<!--                                    <img class="avatar-img rounded-circle" alt="" src="../assets/serviceprovider/img/engine.jpg">-->
<!--                                 </div>-->
<!--                              </td>-->
<!--                              <td class="text-left pl-0 text-wrap"> Brakes Skimming </td>-->
<!--                              <td class="text-center "> </td>-->
<!--                              <td class="text-center "> Audi </td>-->
<!--                              <td class="text-right pr-0"> K 8,000.00 </td>-->
<!--                           </tr>-->
<!--                        </tbody>-->
<!--                     </table>-->
<!--                  </div>-->
<!--               </div>-->
<!--            </div>-->
<!--         </div>-->
<!--         <div class="modal-footer">-->
<!--            <button type="button" class="btn btn-success">Add</button>-->
<!--            <button type="button" class="btn btn-danger" id="dismiss" data-dismiss="modal">Cancel</button>-->
<!--         </div>-->
<!--      </div>-->
<!--   </div>-->
<!--</div>-->

<!--<div class="modal fade addorderpopup" id="addcustom-popup" role="dialog" aria-hidden="true">-->
<!--   <div class="modal-dialog modal-dialog-centered">-->
<!--      <div class="modal-content">-->
<!--         <div class="modal-body p0">-->
<!--            <div class="card-table mb-0">-->
<!--               <div class="body addorder p-0imp">-->
<!--                  <div class="d-flex justify-content-between align-items-center">-->
<!--                     <h3 class="mb-0">Add Custom Item</h3>-->
<!--                  </div>-->
<!--                  <div class="viewBox container px-0 mt-3">-->
<!--                     <div class="row">-->
<!--                        <div class="col-md-6">-->
<!--                           <div class="form-group">-->
<!--                              <label>Item name</label>-->
<!--                              <input type="text" class="form-control" />-->
<!--                           </div>-->
<!--                        </div>-->
<!--                        <div class="col-md-3">-->
<!--                           <div class="form-group">-->
<!--                              <label>Price</label>-->
<!--                              <input type="text" class="form-control" placeholder="₹ 0.00" />-->
<!--                           </div>-->
<!--                        </div>-->
<!--                        <div class="col-md-3">-->
<!--                           <div class="form-group">-->
<!--                              <label>Quantity</label>-->
<!--                              <input type="number" class="form-control" value="1" />-->
<!--                           </div>-->
<!--                        </div>-->
<!--                     </div>-->
<!--                     <div class="row">-->
<!--                        <div class="col-md-12 payment_check_div ">-->
<!--                           <label class="payment-checkbox">-->
<!--                              <input type="checkbox" checked="checked">-->
<!--                              <span class="checkmark"></span>Item is taxable-->
<!--                           </label>-->
<!--                        </div>-->
<!--                     </div>-->
<!--                  </div>-->
<!--               </div>-->
<!--            </div>-->
<!--         </div>-->
<!--         <div class="modal-footer">-->
<!--            <button type="button" class="btn btn-success">Done</button>-->
<!--            <button type="button" class="btn btn-danger" id="dismiss" data-dismiss="modal">Cancel</button>-->
<!--         </div>-->
<!--      </div>-->
<!--   </div>-->
<!--</div>-->


<!--<div class="modal fade addorderpopup" id="createcustomer-popup" role="dialog" aria-hidden="true">-->
<!--   <div class="modal-dialog modal-dialog-centered">-->
<!--      <div class="modal-content">-->
<!--         <div class="modal-body p0">-->
<!--            <div class="card-table mb-0">-->
<!--               <div class="body addorder p-0imp">-->
<!--                  <div class="d-flex justify-content-between align-items-center">-->
<!--                     <h3 class="mb-0">Add Customer</h3>-->
<!--                  </div>-->
<!--                  <div class="viewBox container px-0 mt-3">-->
<!--                     <div class="row">-->
<!--                        <div class="col-md-12">-->
<!--                           <div class="form-group">-->
<!--                              <label>Customer name</label>-->
<!--                              <input type="text" class="form-control" />-->
<!--                           </div>-->
						   
<!--						    <div class="form-group">-->
<!--                              <label>Shipping Address</label>-->
<!--                              <textarea type="text" class="form-control" /></textarea>-->
<!--                           </div> -->
<!--						   <div class="form-group">-->
<!--                              <label>Billing Address</label>-->
<!--                              <textarea type="text" class="form-control" /></textarea>-->
<!--                           </div>-->
<!--                        </div>-->
<!--                     </div>-->
<!--                  </div>-->
<!--               </div>-->
<!--            </div>-->
<!--         </div>-->
<!--         <div class="modal-footer">-->
<!--            <button type="button" class="btn btn-success">Add</button>-->
<!--            <button type="button" class="btn btn-danger" id="dismiss" data-dismiss="modal">Cancel</button>-->
<!--         </div>-->
<!--      </div>-->
<!--   </div>-->
<!--</div>-->


<!--<div class="modal fade addorderpopup" id="editcustomer-popup" role="dialog" aria-hidden="true">-->
<!--   <div class="modal-dialog modal-dialog-centered">-->
<!--      <div class="modal-content">-->
<!--         <div class="modal-body p0">-->
<!--            <div class="card-table mb-0">-->
<!--               <div class="body addorder p-0imp">-->
<!--                  <div class="d-flex justify-content-between align-items-center">-->
<!--                     <h3 class="mb-0">Update Customer</h3>-->
<!--                  </div>-->
<!--                  <div class="viewBox container px-0 mt-3">-->
<!--                     <div class="row">-->
<!--                        <div class="col-md-12">-->
<!--                           <div class="form-group">-->
<!--                              <label>Customer name</label>-->
<!--                              <input type="text" class="form-control" value="John Smith" />-->
<!--                           </div>-->
<!--						   <div class="form-group">-->
<!--                              <label>Shipping Address</label>-->
<!--                              <textarea type="text" class="form-control" value="" />1688 St Matthews Ave, Winnipeg, MB R3H 0A2, Canada</textarea>-->
<!--                           </div>-->
<!--						    <div class="form-group">-->
<!--                              <label>Billing  Address</label>-->
<!--                              <textarea type="text" class="form-control" value="" />1688 St Matthews Ave, Winnipeg, MB R3H 0A2, Canada</textarea>-->
<!--                           </div>-->
<!--                        </div>-->
<!--                     </div>-->
<!--                  </div>-->
<!--               </div>-->
<!--            </div>-->
<!--         </div>-->
<!--         <div class="modal-footer">-->
<!--            <button type="button" class="btn btn-success">Update</button>-->
<!--            <button type="button" class="btn btn-danger" id="dismiss" data-dismiss="modal">Cancel</button>-->
<!--         </div>-->
<!--      </div>-->
<!--   </div>-->
<!--</div>-->

<!--<div class="modal fade addorderpopup" id="order-notification-popup" role="dialog" aria-hidden="true">-->
<!--   <div class="modal-dialog modal-dialog-centered">-->
<!--      <div class="modal-content">-->
<!--         <div class="modal-body">-->
<!--			<h6>This will create an order without payment. You will be able to send an invoice and collect payment from the order page</h6> -->
<!--         </div>-->
<!--         <div class="modal-footer">-->
<!--            <a href="javascript:void(0)" class="btn btn-secondary" data-dismiss="modal">Save Order</a>-->
<!--            <a href="javascript:void(0)" class="btn btn-success" data-dismiss="modal">Create Order</a>-->
<!--            <button type="button" class="btn btn-danger" id="dismiss" data-dismiss="modal">Cancel</button>-->
<!--         </div>-->
<!--      </div>-->
<!--   </div>-->
<!--</div>-->

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