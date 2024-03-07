@extends('serviceprovider.layouts.app')
@section('title', 'Add Offer')
@section('content')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
	   <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
   <div class="content container-fluid add-offer-page">
      <div class="page-header">
         <div class="row">
            <div class="col">
               <h3 class="page-title">Add Offer</h3>
            </div>
            <div class="col-auto text-right">
               <!--a href="{{route('seller.services')}}" class="btn btn-primary">Save</a-->
               <a class="btn btn-secondary" href="{{route('seller.view_service')}}">
                  Back
               </a>
            </div>
         </div>
        
      </div>
      
        <div class="row">
			    <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
    					<div class="d-flex justify-content-between">
    						<div class="offertitleavatar">
                                    <img class="avatar-img img-fluid" alt="" src="{{ asset('assets/serviceprovider/img/engine.jpg') }}">
                            </div>
							<div class="offerTitledetails pl-3">
								<h5>Front Brakes Replacement</h5>
								<span class="active-text mb-3">Active</span>
								<p class="mb-2"> 4 Offers</p>
								<a href="{{route('seller.services')}}">Back to services</a>
							</div>
    					</div>
    					
    			    </div>
    			</div>  
				<div class="card mb-4">
                    <div class="card-body">
    					<div class="mb-3 d-flex justify-content-between align-items-center">
    						<h3 class="mb-0">Offers </h3>
    					</div>
						<div class="offersListMain">
							<div class="offersListItem d-flex align-items-center">
								 <div class="fileboxdiv">
                                    <i class="far fa-file-archive"></i>
                                 </div>
								 <p>BMW</p>
							</div>
							<div class="offersListItem d-flex align-items-center">
								 <div class="fileboxdiv">
                                    <i class="far fa-file-archive"></i>
                                 </div>
								 <p>Toyota</p>
							</div>
							<div class="offersListItem d-flex align-items-center">
								 <div class="fileboxdiv">
                                    <i class="far fa-file-archive"></i>
                                 </div>
								 <p>SUV & Trucks</p>
							</div>
							<div class="offersListItem d-flex align-items-center">
								 <div class="fileboxdiv">
                                    <i class="far fa-file-archive"></i>
                                 </div>
								 <p>Light Truck</p>
							</div>
						</div>
						
    					
    			    </div>
    			</div> 				
            </div>
       
            <div class="col-md-8">
                <div class="card mb-4">
                   <div class="card-body">
                         <div class="row">
    						
							<div class="col-xl-12 ml-auto">
                                <div class="form-group ">
								  <label class="col-form-label">Title </label>
								  <input type="text" id="" placeholder="" class="form-control" name="" value="">
							    </div>
                            </div>
    						
							<div class="col-xl-12">
								<label class="col-form-label">Description </label>
								<div class="form-group summmer_expand">
                                 
								   <small  class="form-text text-muted  mt-0 mb-2">Give your offer a brief descriptions to help you identify it</small>
                                   <textarea id="summernote"></textarea>
								  

                               </div>
							
							</div>
    						
							
    						<!---div class="col-xl-12">
                                <div class="form-group text-right">
                                    <a href="javascript:void(0)" class="btn btn-primary">Add Offer</a>
                               </div>
                            </div--->
								
								
						</div>
                   </div>
                </div>
				
				 <div class="card mb-4">
               <div class="card-body">
					<h4 class="cardTitle">Pricing</h4>
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
            </div>
			
			<div class="card mb-4">
               <div class="card-body">
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
			
			<div class="card mb-4">
               <div class="card-body">
							<h4 class="cardTitle">Media</h4>
							<div class="form-group mb-0">
								 <label class="fileupload" for="uploadimg">
                                    <i class="fa fa-upload"></i>
                                    <h3>Add image</h3>
                                 </label>
                                 <input  id="uploadimg" name="uploadimg" style="display:none" type="file" accept=".png, .jpg, .jpeg">
							</div>
                              <div class="formimg" style="display: none;">
                                 <img id ="imagePreview" src="assets/img/engine.jpg">
                                 <i class="fa fa-trash deleteimg"></i>
                              </div>  
							  
							  
					
				</div>
			</div>
			
			
         
                    
            </div>
			<div class="col-md-12">
			<div class="text-right mt-4 mb-4">
                        <button type="submit" class="btn btn-primary  product-save-btn">Save Offer</button>
                      
                     </div>
		 </div>
		 </div>
   </div>
	   @endsection
   @section('scripts')
   
 

   <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
	
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

$(".addnewconditionsbtn").click(function(){
  $(".addConditionsformgroup ").show();
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





   @endsection  