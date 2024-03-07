@extends('serviceprovider.layouts.app')
@section('title', 'Create Inventory Transfer')
@section('head')
<style>

   .card-table .table td, 
   .card-table .table th
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
               <h3 class="page-title d-flex align-items-center">Create Inventory Transfer</p>
            </div>
            <div class="col text-right">
              <div class="actionMore d-flex align-items-center justify-content-end">
                  <a href="{{route('seller.transfers')}}" class="btn btn-primary mr-2">Back</a>
              </div>
            </div>
         </div>
      </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card card-table mb-3 createtransfer_div">
                   <div class="card-body">
                       <h4 class="cardTitle">Origin</h4>
                        <div class="row">
							<div class="col-md-6">
                                <div class="dropdown origin_dropdown">
                                	<button class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                		Select Origin
                                	</button>
                                	<div class="dropdown-menu" aria-labelledby="dropdown_user">
                                		<form>
                                			<input type="search" class="form-control search" placeholder="Search" autofocus="autofocus">
                                		</form>
                                		<h4 class="supplier_head">Suppliers</h4>
                                		<div class="suppliers_div">
                                			<p class="resultno_found">No Supplier Found.</p>
                                		</div>
                                		<a class="newsupplier_btn" href="javascript:void(0)" data-toggle="modal" data-target="#newsupplier_popup">Create New Supplier</a>
                                	</div>
                                </div>
							</div>    
						</div>    
                   </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-table mb-3 createtransfer_div">
                   <div class="card-body">
                       <h4 class="cardTitle">Destination</h4>
                        <div class="row">
							<div class="col-md-6">
                                <div class="dropdown origin_dropdown">
                                	<button class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                		Select Destination
                                	</button>
                                	<div class="dropdown-menu" aria-labelledby="dropdown_user">
                                		<form>
                                			<input type="search" class="form-control search" placeholder="Search" autofocus="autofocus">
                                		</form>
                                		<h4 class="supplier_head">Destination</h4>
                                		<div class="suppliers_div">
                                			<p class="resultno_found">No Destination Found.</p>
                                		</div>
                                	</div>
                                </div>
							</div>    
						</div>    
                   </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card card-table mb-3 createtransfer_div">
                   <div class="card-body">
                       <h4 class="cardTitle">Add Products</h4>
                        <div class="row">
							<div class="col-md-12">
								<div class="input-group">
							     <input type="search" id="" class="form-control" name="" placeholder="Search Products">
							     <button type="button" class="browse_btn input-group-append" href="javascript:void(0)"  data-toggle="modal" data-target="#browse-popup">Browse</button>
							    </div>
							</div>    
						</div>    
                   </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-table mb-3 createtransfer_div">
                   <div class="card-body">
                       <h4 class="cardTitle">Shipment Details</h4>
                        <div class="row">
							<div class="col-md-12">
								<div class="form-group">
								  <label class="col-form-label">Estimated Arrival</label>
							     <input type="date" id="" class="form-control" name="" value="">
							    </div>
							</div>  
							<div class="col-md-12">
								<div class="form-group">
								  <label class="col-form-label">Tracking Number</label>
							     <input type="text" id="" class="form-control" name="" value="">
							    </div>
							</div> 
							<div class="col-md-12">
								<div class="form-group">
								  <label class="col-form-label">Shipping Carrier</label>
							     <input type="text" id="" class="form-control" name="" value="">
							    </div>
							</div>    
						</div>    
                   </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-table mb-3 createtransfer_div">
                   <div class="card-body">
                       <h4 class="cardTitle">Additional Details</h4>
                        <div class="row">
							<div class="col-md-12">
								<div class="form-group">
								  <label class="col-form-label">Reference Number   </label>
							     <input type="text" id="" class="form-control" name="" value="">
							    </div>
							</div>                            
                            <div class="col-md-12">
    							<div class="form-group">
    							  <label class="col-form-label d-block">Tags <a class="manage_btn" href="javascript:void(0)" data-toggle="modal" data-target="#managetags-popup">Manage</a></label>
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
            </div>
            <div class="col-md-12">
				<div class="text-left mt-4">
					<a href="javascript:void(0)" class="btn btn-secondary">Discard</a>
					<a href="javascript:void(0)" class="btn btn-primary">Save</a>
                </div>                
            </div>
        </div>       
    </div> 
    <div class="modal browse_modal fade" id="addproduct-popup" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
             <div class="modal-header">
                <h5 class="modal-title"><a class="browseback_btn" href="javascript:void(0)" data-dismiss="modal" data-toggle="modal" data-target="#browse-popup"><i class="fas fa-arrow-left"></i></a>All Products</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
             </div>                
                <div class="modal-body">
                    <div class="browsemodal_div">
                        <input type="search" class="form-control" placeholder="Search Products" autofocus>
						<div class="table-responsive mt-4">
							<table class="table table-center datatable">
								<thead>
									<tr>
										<th><input name="select_all" value="1" type="checkbox"></th>
										<th>Products</th>
										<th>Available At Destination</th>
										<th>Total Available</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td style="width:20px"><input type="checkbox" name="type" value=""></td>
										<td>Break Pad and Rotor Replacement</td>
										<td><label class="badge badge-success">3</label></td>
										<td><label class="badge badge-success">3</label></td>
									</tr>
									<tr>
										<td style="width:20px"><input type="checkbox" name="type" value=""></td>
										<td>Break Pad and Rotor Replacement</td>
										<td><label class="badge badge-success">3</label></td>
										<td><label class="badge badge-success">3</label></td>
									</tr>
								</tbody>
							</table>
						</div>                        
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-success">Add To Transfer</button>
                </div>
            </div>
        </div>
    </div> 
    <div class="modal browse_modal fade" id="browse-popup" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
             <div class="modal-header">
                <h5 class="modal-title">Add Products</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
             </div>                
                <div class="modal-body">
                    <div class="browsemodal_div">
                        <input type="search" class="form-control" placeholder="Search Products" autofocus>
                        <ul class="modalproduct_list">
                            <li>
                                <a href="javascript:void(0)" data-dismiss="modal" data-toggle="modal" data-target="#addproduct-popup">All Products</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Product Types</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Vendors</a> 
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-success">Add To Transfer</button>
                </div>
            </div>
        </div>
    </div> 
    <div class="modal supplier_modal fade" id="newsupplier_popup" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
             <div class="modal-header">
                <h5 class="modal-title">Create Supplier</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
             </div>                
                <div class="modal-body">
                        <div class="row">
							<div class="col-md-12">
								<div class="form-group">
								  <label class="col-form-label">Supplier Name</label>
							     <input type="text" id="" class="form-control" name="" value="">
							    </div>
							</div> 
							<div class="col-md-12">
								<div class="form-group">
									<label class="col-form-label">Country/Region  </label>
									<select name="status" id="status" class="my-select form-control">
										<option value="Country/region">Select Country/region</option>
										<option value="USA">USA</option>
										<option value="UK">UK</option>
										<option value="India">India</option>
									</select>
							    </div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
								  <label class="col-form-label">Apartment, suite, etc.</label>
							     <input type="text" id="" class="form-control" name="" value="">
							    </div>
							</div> 
							<div class="col-md-4">
								<div class="form-group">
								  <label class="col-form-label">City</label>
							     <input type="text" id="" class="form-control" name="" value="">
							    </div>
							</div> 
							<div class="col-md-4">
								<div class="form-group">
									<label class="col-form-label">State</label>
									<select name="status" id="status" class="my-select form-control">
										<option value="Country/region">Select State</option>
										<option value="Alaska">Alaska</option>
										<option value="Washington">Washington DC</option>
										<option value="new-york">New York</option>
									</select>
							    </div>
							</div> 							
							<div class="col-md-4">
								<div class="form-group">
								  <label class="col-form-label">ZIP Code</label>
							     <input type="text" id="" class="form-control" name="" value="">
							    </div>
							</div> 						
							<div class="col-md-12">
								<div class="form-group">
								  <label class="col-form-label">Contact Name</label>
							     <input type="text" class="form-control" name="" value="">
							    </div>
							</div> 					
							<div class="col-md-6">
								<div class="form-group">
								  <label class="col-form-label">Email Address</label>
							     <input type="email" class="form-control" name="" value="">
							    </div>
							</div> 					
							<div class="col-md-6">
								<div class="form-group">
								  <label class="col-form-label">Phone Number</label>
							     <input type="text" class="form-control" name="" value="">
							    </div>
							</div> 
						</div> 	
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Done</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div> 
    <div class="modal fade" id="managetags-popup" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
             <div class="modal-header">
                <h5 class="modal-title">Manage Tags</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
             </div>                
                <div class="modal-body">
                    <div class="managetag_div">
                           <div class="chat-search">
    								 <div class="input-group">
    									<input type="text" id="exist-values" class="tagged2 form-control px-3" data-removeBtn="true" placeholder="Add Tags">
    								 </div>
    							  </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-success">Done</button>
                </div>
            </div>
        </div>
    </div>    
    @endsection
    @section('scripts')
    <script>
   $('.browse_modal').on('shown.bs.modal', function() {
  $(this).find('[autofocus]').focus();
});
    </script>
    @endsection