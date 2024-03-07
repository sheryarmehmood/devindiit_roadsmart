@extends('serviceprovider.layouts.app')
@section('title', 'Create Service')
@section('content')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
   <div class="content container-fluid add-product-page">
      <div class="page-header">
         <div class="row">
            <div class="col">
               <h3 class="page-title">Create Service</h3>
            </div>
            <div class="col-auto text-right">
             <a href="{{route('seller.add_offer')}}" class="btn btn-primary">Add Offer</a>
               <a href="{{route('seller.services')}}" class="btn btn-primary">Save</a>
               <a class="btn btn-secondary" href="{{route('seller.services')}}">
                  Back
               </a>
            </div>
         </div>
        
      </div>
      
        <div class="row">
            <div class="col-md-8">
                <div class="card mb-4">
                   <div class="card-body">
                         <div class="row">
    						<!---div class="col-xl-12">
									<div class="w-100 searchFilerwrap mb-2">
										<input type="text" id="" class="form-control w-100" name="" placeholder="Search Service" value="" data-toggle="modal" data-target="#searchservices-popup">
										<i class="fa fa-search"></i>
									</div>    						    
    						</div---->
    						<div class="col-xl-12">
                                <div class="form-group dropdown_zindex d-inline-block w-100">
                                  <label class="col-form-label">Title  </label>
								   <input type="text" id="" class="form-control w-100" name="" placeholder="Enter Title" value="Brake Pad and Rotor Replacement">
                               </div>
                            </div>
    						
    						<div class="col-xl-12">
                                <div class="form-group summmer_expand">
                                  <label class="col-form-label">Description   </label>
                                   <textarea id="summernote">Break Pad and Rotor</textarea>
                               </div>
                            </div>
    						<div class="col-xl-12">
                                <div class="form-group text-right">
                                    <a href="javascript:void(0)" class="showofferbtn btn btn-primary"  >Add Offer</a>
                               </div>
                            </div>
							
							<div id="showoffersection" style="display:none;">
										<div class="col-xl-12">
							<hr class="seperateDevider mb-30">
								 <div class="d-flex justify-content-between align-items-center">
									 <h3 class="mb-3">Pricing</h3>
									   
								  </div>
								  	<div class="checkbox">
                                    <label class="mb-3">
                                       <input type="checkbox" name="pricepackagecheck" id="price_package_check"> Offer as a package
                                    </label>
                    </div> 
					 <div class="row" id="price_package_details" style="display: none">
        							<div class="col-md-12">
										<div class="d-flex justify-content-between align-items-center my-2">
											<h6 class="m-0">Products</h6>
                                            <a href="javascript: void(0);">Add custom item</a>
                                        </div>
										 <div class="servicesearch_input d-flex justify-content-between align-items-center">
										 <div class="input-group">
											<div class="input-group-prepend">
											   <i class="fas fa-search"></i>
											</div>
											<input type="text" class="form-control" placeholder="Search Products" >
										 </div>
										 <a class="btn btn-primary ml-2" href="javascript: void(0);" >
											Browse
										 </a>
										</div>
                  
                                       
                                       <div class="viewBox table-responsive pt-3 product-add-table">
                                            <table class="table table-center">
                                                <tbody>
                                                   <tr>
                                                      <th class="text-left"> Items </th>
                                                      <th class="text-left"> Price </th>
                                                      <th class="text-left"> Quantity </th>                             
                                                      <th class="text-right">  </th>
                                                   </tr>
                                                   <tr>
                                                      <td class="text-left">Front Brakes</td>
													    <td class="text-left" style="width:120px">
                                                         <input type="text" value="K 560.00" class="form-control m-auto" name="">
                                                      </td>	
                                                      <td class="text-left" style="width:120px">
                                                         <input type="number" value="1" class="form-control m-auto" name="">
                                                      </td>							  
                                                      <td class="text-right"><a href="javascript: void(0);" class="crosdel">X</a></td>
                                                   </tr>
                                                   <tr>
                                                      <td class="text-left">Front Rotors</td>
                                                      <td class="text-left" style="width:120px">
                                                         <input type="text" value="K 1000.00" class="form-control m-auto" name="">
                                                      </td>	
                                                      <td class="text-left" style="width:120px">
                                                         <input type="number" value="1" class="form-control m-auto" name="">
                                                      </td>							  
                                                      <td class="text-right"><a href="javascript: void(0);" class="crosdel">X</a></td>
                                                   </tr>
                                                   <tr>
                                                      <td class="text-left"><b>Amount</b></td>
                                                      <td class="text-left"><b>K 1560.00</b></td>
                                                      <td colspan="2"></td>
                                                   </tr>
                                                </tbody> 
                                            </table>
                                        </div>        							    
        							</div>
        							<div class="col-md-6">
        								<div class="form-group row">
        								  <label class="col-lg-12 col-form-label">Discount & Type </label>
        								   <div class="col-lg-12">
        									 <select name="status" id="status" class="my-select form-control">
        										<option value="Fixed Price">35% off up to $ 99.00 </option>
        										<option value="Auction">15% off up to $ 199.00</option>
        									 </select>
        								  </div>
        							    </div>
        							</div>
        							
        							
								 </div>                                 
								
						<div class="row">
							<div class="col-md-6">
								<div class="form-group ">
								  <label class="col-form-label">Price </label>
								  <input type="text" id="" placeholder="K 0.00" class="form-control" name="" value="">
							    </div>
							</div>
							<div class="col-md-6">
								<div class="form-group ">
								  <label class="col-form-label">Compare at price</label>
								  <input type="text" id="" placeholder="K 0.00" class="form-control" name="" value="">
							    </div>
							</div>
							<div class="col-md-12">
								<div class="checkbox">
                                    <label class="mb-3">
                                       <input type="checkbox" name="checkbox"> Charge tax on this offer. 
                                    </label>
                                 </div> 
							</div>
						 
						 </div>
               
							</div>
								
								
							<div class="col-xl-12">
							<hr class="seperateDevider mb-30 mt-4">
										<div class="d-flex justify-content-between align-items-center">
						<h3 class="mb-2">Conditions</h3>
					</div>
					<div class="offertype_package">
					    <div class="row">
    					    <div class="col-md-12">
								<div class="form-group mb-0">
									<label class="col-form-label">Products must match:</label>
									
									<div class="form-check-inline ml-3">
										<div class="checkbox">
											<label class="mr-2" for="allconditions">
											   <input type="radio" name="conditions" id="allconditions" checked> All Conditions</label>
										</div> 
									    <div class="checkbox ml-3">
											   <label class="mr-2" for="anycondition">
											   <input type="radio" name="conditions" id="anycondition"> Any Condition</label>
										 </div> 
									 </div> 
									
									
									
									
								</div>
    					    </div>
    					    <div class="col-md-12">
								
    					       <div id="allconditionsitems">
								
								 <div class="viewBox table-responsive mb-3 product-add-table">
                     <table class="table table-center">
                        <thead>
                            <th>#</th>     
                            <th style="width:31%;">Vehicle Make</th>     
                            <th style="width:34%;" class=" pl-0">Type</th>     
                            <th class=" pl-0">Description</th>     
                            <th></th>
                        </thead>
                        <tbody>
                           <tr>
							  <td>1</td>                       
                              <td class="text-left  pl-0">Toyota</td>
                              <td class="text-left  pl-0">is equal to</td>
							  <td class="text-left  pl-0">	
    							  Break Pad and Rotor
                              </td>
                            
							  
                              <td class="text-right pr-0"> <a href="javascript:void(0);" class="crosdel ml-3">X</a> </td>
                           </tr>
						     <tr>
							  <td>2</td>                       
                              <td class="text-left  pl-0">Audi</td>
                              <td class="text-left  pl-0">is not equal to</td>
							  <td class="text-left  pl-0">	
    							  Break Pad and Rotor
                              </td>
                            
							  
                              <td class="text-right pr-0"> <a href="javascript:void(0);" class="crosdel ml-3">X</a> </td>
                           </tr>
						    <tr>
							  <td>3</td>                       
                              <td class="text-left  pl-0">Toyota</td>
                              <td class="text-left  pl-0">is equal to</td>
							  <td class="text-left  pl-0">	
    							  Break Pad and Rotor
                              </td>
                            
							  
                              <td class="text-right pr-0"> <a href="javascript:void(0);" class="crosdel ml-3">X</a> </td>
                           </tr>
                          
                        </tbody> 
                     </table>
                  </div>
				  
				  
							  
								  
							   <div class="form-row addConditionsfields">
										<div class="col-md-4">
											<div class="form-group ">
												 <select class="my-select form-control">
													<option>Vehicle Make</option>
													<option value="Toyota">Toyota</option>
													<option value="Audi">Audi</option>
												</select>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
											  <select class="my-select form-control">
													<option>is equal to</option>
													<option value="1">is not equal to</option>
													<option value="2">is less then</option>
											   </select>
											</div>
										</div>
										<div class="form-group col-md-4">
										  <input type="text" class="form-control" id="">
										</div>
									  </div>
									  
									   <div id="dynamicTable">
									
									   </div>
							   </div>
							    
    					    </div>
							 <div class="col-md-12">
    					        <a class="btn btn-primary clone-btn" id="add" href="javascript:void(0)">Add Another Conditions</a>
    					    </div>
							
					    </div>
					</div>
				
							</div>
                       
							</div>
					 </div>
                   </div>
                </div>
         
                    
            </div>
		    <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
    					<div class="mb-3 d-flex justify-content-between align-items-center">
    						<h3 class="mb-0">Service Availability</h3>
    						<div class="d-flex justify-content-between align-items-center">
    							<a href="javascript: void(0);">Manage</a>
    						</div>
    					</div>
    					<div class="saleschannelsitems">
    						<p><span class="active-circle"> </span> Service Market Place</p>
    						<a href="javascript: void(0);">Schedule Availability</a>
    					</div>
    			    </div>
    			</div>  
				<div class="card mb-4">
                    <div class="card-body">
    					<div class="mb-3 d-flex justify-content-between align-items-center">
    						<h3 class="mb-0">Category </h3>
    					</div>
						<div class="mb-3">
							<select class="my-select form-control">
										<option>Select Category</option>
										<option value="Repairs">Repairs</option>
										<option value="Insurance">Insurance</option>
										<option value="Road Compliance">Road Compliance</option>
										<option value="Vehicle Finance">Vehicle Finance</option>
										<option value="Car Hire">Car Hire</option>
									</select>
						</div>
						
    					
    			    </div>
    			</div> 				
            </div>
        </div>
   </div>
	   @endsection
   @section('scripts')
   
   <div class="modal fade searchservicespopup" id="searchservices-popup" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-body p0">
            <div class="card-table mb-0">
               <div class="card-body addorder p-0imp">
                  <div class="d-flex justify-content-between align-items-center">
                     <h3 class="mb-0">Search Services</h3>
                  </div>
                  <div class="viewBox container px-0 mt-3">
                     <div class="row">
                        <div class="col-md-12">
								<div class="w-100 searchFilerwrap mb-2">
										<input type="text" id="" class="form-control w-100" name="" placeholder="Search Service" value="">
										<i class="fa fa-search"></i>
									</div> 
								<ul class="search-selected-listings">
								<li><a href="#" data-dismiss="modal">Brake Pad and Rotor Replacement <i class="fa fa-angle-right"></i></a></li>
								<li><a href="#" data-dismiss="modal">Motul Engin Oil <i class="fa fa-angle-right"></i></a></li>
								<li><a href="#" data-dismiss="modal">Steering & Suspension <i class="fa fa-angle-right"></i></a></li>
								<li><a href="#" data-dismiss="modal">Air Conditioner <i class="fa fa-angle-right"></i></a></li>
							 </ul>
                        </div>
                       
                     </div>
                    
                  </div>
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <!--button type="button" class="btn btn-success">Done</button-->
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

   <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script>
	
	<script>
	var i = 0;
       
    $("#add").click(function(){
   
        ++i;
   
        $("#dynamicTable").append('<div class="form-row addConditionsfields"><div class="col-md-4"><div class="form-group "><select class="my-select form-control" name="dddd"><option>Vehicle Make</option><option value="Toyota">Toyota</option><option value="Audi">Audi</option></select></div></div><div class="col-md-4"><div class="form-group"><select class="my-select form-control"><option>is equal to</option><option value="1">is not equal to</option><option value="2">is less then</option></select></div></div><div class="form-group col-md-4 d-flex align-items-center"><input type="text" class="form-control" id=""><a href="javascript:void();" class="remove-tr crosdel ml-3">X</a></div></div>');
		
		
    });
   
    $(document).on('click', '.remove-tr', function(){  
         $(this).parents('.addConditionsfields').remove();
    });  
	</script>
<script>

$('textarea#summernote').summernote({
        placeholder: '',
        tabsize: 2,
        height: 100,
  toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'italic', 'underline', 'clear']],
        // ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],
        //['fontname', ['fontname']],
       // ['fontsize', ['fontsize']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['height', ['height']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'hr']],
        //['view', ['fullscreen', 'codeview']],
        ['help', ['help']]
      ],
      });

	
</script>

<script>
 $(function() {
   $("input[name='pricepackagecheck']").click(function() {
     if ($("#price_package_check").is(":checked")) {
       $("#price_package_details").show();
     } else {
       $("#price_package_details").hide();
     }
   });
  
 });    
</script>

<script>

$(".showofferbtn").click(function(){
  $("#showoffersection").show();
});


</script>








   @endsection  