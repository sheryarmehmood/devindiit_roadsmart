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
   <div class="content container-fluid addorder view-customer-page">
      <div class="page-header">
         <div class="row">
            <div class="col">
               <h3 class="page-title d-flex align-items-center">Mary  Chirwa </h3>
               <p>Zambia <span class="dot-circle"></span> Customer for 10 days</p>
            </div>
            <div class="col text-right">
              <div class="actionMore d-flex align-items-center justify-content-end">
                  
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
               <div class="card-body p-0">
                  <div class="px-4 pt-3">
                     <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Last order placed</h3>
                        
                     </div>

                  </div>
                  <hr />
                  <div class="viewBox table-responsive px-4">
                     <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Order #1234  <span class="badge badge-warning fontpen mx-2">Unfulfilled </span></h3>
						<p class="text-muted">12 Jul at 9:14 pm</p>
                     </div>
					 <p class="text-muted mt-2 mb-0">K 1000 from Draft Orders</p>
                   <div class="viewBox table-responsive pt-3 unfulfilledTblBx">
                     <table class="table">
                        <tbody>
                           <tr>
                              <td class="text-left pl-0" style="width:70px">
                                  <div class="avatar avatar-sm">
                                    <img class="avatar-img rounded-circle" alt="" src="../assets/serviceprovider/img/engine.jpg">
                                 </div>
                              </td>
                              <td class="text-left pl-0 text-wrap"> <a href="{{route('seller.products')}}">Front Brakes</a> </td>
                            
                           </tr>
                           <tr>
							  
                              <td colspan="5" class="text-right pr-0"><a href="{{route('seller.orders')}}" class="mr-4">View all orders</a> <a href="{{route('seller.add_order')}}" class="btn btn-success text-white">Create Order</a> </td>
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
                           <div class="">
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
								 <p class="text-right"><small>Only you and other staff can see this reason.</small></p>
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
                     <h3 class="mb-0">Customer</h3>
					 <a data-toggle="modal" data-target="#customers-popup" href="javascript: void(0);">Edit</a>
                  </div>
                  
				  <div class="customerLists-item border-0 mt-0">
						
						<p class="d-flex justify-space-between mb-2"><a href="javascript:void();">marychirwa@gmail.com</a> <span class="ml-auto text-secondary"><i class="fa fa-copy" aria-hidden="true"></i></span></p>
						<p>+123 456 789</p>
						<p class="text-muted">Will receive notifications in English</p>
					</div>
					
					
                 <div class="customerLists">
					<div class="customerLists-item">
						<h4 class="d-flex">Default address  <a data-toggle="modal" class="edit-text-btn" data-target="#editaddress-popup" href="javascript: void(0);">Manage</a></h4>
						<p>1688 St Matthews Ave,</br> Winnipeg, MB R3H 0A2, Canada</p>
					</div>
					<a class="mt-3 d-inline-block" data-toggle="modal" data-target="#addaddress-popup" href="javascript: void(0);">Add New Address</a>
				 </div>
				 
				  <div class="customerLists">
					<div class="customerLists-item">
						<h4 class="d-flex">Tax Settings  <a class="edit-text-btn" data-toggle="modal" data-target="#edittax-popup" href="javascript: void(0);">Manage</a></h4>
						<p>No exemptions</p>
					</div>
					
				 </div>
               </div>
            </div>
			
			 <div class="card card-table mb-3">
               <div class="card-body p-2 py-3 px-4">
                  <div class="d-flex justify-content-between align-items-center">
                     <h3 class="mb-0">Marketing status</h3>
					 <a class="edit-text-btn" data-toggle="modal" data-target="#editmarking-popup" href="javascript: void(0);">Edit</a>
                  </div>
                  <div class="TagsCardLists customerMarketingStatus">
				  <span class="tagsitem">Email subscribed</span>
				  <span class="tagsitem">SMS subscribed</span>
			
                  </div>
				  <p class="text-muted mt-3">Last updated yesterday.</p>
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
			
			<div class="col-md-12">
			<div class="text-left mt-4 mb-4">
                        <button type="submit" class="btn btn-primary custom-save-btn">Delete Customer</button>
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
<div class="modal fade addorderpopup" id="editmarking-popup" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-body p0">
            <div class="card-table mb-0">
               <div class="card-body addorder p-0imp">
                  <div class="d-flex justify-content-between align-items-center">
                     <h3 class="mb-0">Edit marketing status</h3>
                  </div>
                  <div class="viewBox container px-0 mt-3">
                     <div class="row">                        
                        <div class="col-md-12">
								<div class="checkbox">
                                    <label class="mb-0">
                                       <input type="checkbox" name="checkbox" class="mr-2" checked> Customer agreed to receive marketing emails.
                                    </label>
									<label class="mb-3 text-muted w-100 pl-4">
                                      <small>Last updated yesterday.</small>
                                    </label>
									<label class="mb-0 text-muted">
                                       <input type="checkbox" name="checkbox" class="mr-2" checked> Customer agreed to receive SMS marketing text messages.

                                    </label>
									<label class="mb-3 text-muted w-100 pl-4">
                                     <small>Last updated yesterday.</small>
                                    </label>

									<label class="mb-3 text-muted">
                                    You should ask your customers for permission before you subscribe them to your marketing emails or SMS.
                                    </label>
									
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
         <div class="modal-body p0">
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



<div class="modal fade addorderpopup" id="editaddress-popup" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-body p0">
            <div class="card-table mb-0">
               <div class="body addorder p-0imp">
                  <div class="d-flex justify-content-between align-items-center">
                     <h3 class="mb-0">Edit address</h3>
                  </div>
                  <div class="viewBox container px-0 mt-3">
                     <div class="row">
                        <div class="col-lg-12">
										 <div class="form-group">
										  <label class="col-form-label">Country/region  </label>
										   <select name="status" id="status" class="my-select form-control">
												<option value="Country/region">Country/region</option>
												<option value="USA">USA</option>
												<option value="UK">UK</option>
												<option value="India">India</option>
											</select>
										 
										</div>
									</div>
						<div class="col-xl-6">
                            <div class="form-group">
                              <label class="col-form-label">First name</label>
                               <input type="text" id="" class="form-control" name="" value="" placeholder="First name">
                           </div>
                        </div>
						
						<div class="col-xl-6">
                            <div class="form-group">
                              <label class="col-form-label">Last name   </label>
                              <input type="text" id="" class="form-control" name="" value="" placeholder="Last name">
                           </div>
                        </div>
						
						
						
						
						
						<div class="col-xl-12">
                            <div class="form-group">
                              <label class="col-form-label">Company   </label>
                              <input type="text" id="" class="form-control" name="" value="" placeholder="Company">
                           </div>
                        </div>
						
						<div class="col-xl-12">
                            <div class="form-group">
                              <label class="col-form-label">Address   </label>
                              <input type="text" id="" class="form-control" name="" value="" placeholder="Address">
                           </div>
                        </div>
						<div class="col-xl-12">
                            <div class="form-group">
                              <label class="col-form-label">Apartment, suite, etc. </label>
                              <input type="text" id="" class="form-control" name="" value="" placeholder="Apartment, suite, etc.">
                           </div>
                        </div>
						
							<div class="col-xl-6">
                            <div class="form-group">
                              <label class="col-form-label">City</label>
                               <input type="text" id="" class="form-control" name="" value="" placeholder="City">
                           </div>
                        </div>
						
						<div class="col-xl-6">
                            <div class="form-group">
                              <label class="col-form-label">Postal code   </label>
                              <input type="text" id="" class="form-control" name="" value="" placeholder="Postal code">
                           </div>
                        </div>
						
						<div class="col-xl-12">
                            <div class="form-group">
                              <label class="col-form-label">Phone number   </label>
                              <input type="phone" id="" class="form-control" name="" value="">
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


<div class="modal fade addorderpopup" id="addaddress-popup" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-body p0">
            <div class="card-table mb-0">
               <div class="body addorder p-0imp">
                  <div class="d-flex justify-content-between align-items-center">
                     <h3 class="mb-0">Add address</h3>
                  </div>
                  <div class="viewBox container px-0 mt-3">
                     <div class="row">
                        <div class="col-lg-12">
										 <div class="form-group">
										  <label class="col-form-label">Country/region  </label>
										   <select name="status" id="status" class="my-select form-control">
												<option value="Country/region">Country/region</option>
												<option value="USA">USA</option>
												<option value="UK">UK</option>
												<option value="India">India</option>
											</select>
										 
										</div>
									</div>
						<div class="col-xl-6">
                            <div class="form-group">
                              <label class="col-form-label">First name</label>
                               <input type="text" id="" class="form-control" name="" value="" placeholder="First name">
                           </div>
                        </div>
						
						<div class="col-xl-6">
                            <div class="form-group">
                              <label class="col-form-label">Last name   </label>
                              <input type="text" id="" class="form-control" name="" value="" placeholder="Last name">
                           </div>
                        </div>
						
						
						
						
						
						<div class="col-xl-12">
                            <div class="form-group">
                              <label class="col-form-label">Company   </label>
                              <input type="text" id="" class="form-control" name="" value="" placeholder="Company">
                           </div>
                        </div>
						
						<div class="col-xl-12">
                            <div class="form-group">
                              <label class="col-form-label">Address   </label>
                              <input type="text" id="" class="form-control" name="" value="" placeholder="Address">
                           </div>
                        </div>
						<div class="col-xl-12">
                            <div class="form-group">
                              <label class="col-form-label">Apartment, suite, etc. </label>
                              <input type="text" id="" class="form-control" name="" value="" placeholder="Apartment, suite, etc.">
                           </div>
                        </div>
						
							<div class="col-xl-6">
                            <div class="form-group">
                              <label class="col-form-label">City</label>
                               <input type="text" id="" class="form-control" name="" value="" placeholder="City">
                           </div>
                        </div>
						
						<div class="col-xl-6">
                            <div class="form-group">
                              <label class="col-form-label">Postal code   </label>
                              <input type="text" id="" class="form-control" name="" value="" placeholder="Postal code">
                           </div>
                        </div>
						
						<div class="col-xl-12">
                            <div class="form-group">
                              <label class="col-form-label">Phone number   </label>
                              <input type="phone" id="" class="form-control" name="" value="">
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



<div class="modal fade addorderpopup" id="customers-popup" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-body p0">
            <div class="card-table mb-0">
               <div class="body addorder p-0imp">
                  <div class="d-flex justify-content-between align-items-center">
                     <h3 class="mb-0">Edit customer</h3>
                  </div>
                  <div class="viewBox container px-0 mt-3">
                     <div class="row">
                        <div class="col-xl-6">
                            <div class="form-group">
                              <label class="col-form-label">First name</label>
                               <input type="text" id="" class="form-control" name="" value="" placeholder="First name">
                           </div>
                        </div>
						
						<div class="col-xl-6">
                            <div class="form-group">
                              <label class="col-form-label">Last name   </label>
                              <input type="text" id="" class="form-control" name="" value="" placeholder="Last name">
                           </div>
                        </div>
						
						
						
						
						<div class="col-lg-12">
										 <div class="form-group">
										  <label class="col-form-label">Language  </label>
										   <select name="status" id="status" class="my-select form-control">
												<option value="Used">English(Default)</option>
											</select>
											<small class="form-text text-muted mt-2 float-left w-100">This customer will receive notifications in this language..</small>
										 
										</div>
									</div>
						
						<div class="col-xl-12">
                            <div class="form-group">
                              <label class="col-form-label">Email   </label>
                              <input type="email" id="" class="form-control" name="" value="" placeholder="Email">
                           </div>
                        </div>
						
						<div class="col-xl-12">
                            <div class="form-group">
                              <label class="col-form-label">Phone number   </label>
                              <input type="phone" id="" class="form-control" name="" value="" placeholder="Phone number">
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



<div class="modal fade addorderpopup" id="edittax-popup" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-body p0">
            <div class="card-table mb-0">
               <div class="card-body addorder p-0imp">
                  <div class="d-flex justify-content-between align-items-center">
                     <h3 class="mb-0">Edit tax exemption</h3>
                  </div>
                  <div class="viewBox container px-0 mt-3">
                     <div class="row">                        
                        <div class="col-md-12">
                           <div class="form-group">
								<label class="mb-0">
                                       <input type="checkbox" name="checkbox" class="mr-2"> Collect tax
                                    </label>
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


@endsection

