@extends('serviceprovider.layouts.app')
@section('title', 'View Offer')
@section('content')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
   <div class="content container-fluid add-offer-page">
      <div class="page-header">
         <div class="row">
            <div class="col">
               <h3 class="page-title">View Offer</h3>
            </div>
            <div class="col-auto text-right">
               <a href="{{route('seller.edit_offer')}}" class="btn btn-primary">Edit</a>
               <a class="btn btn-secondary" href="{{route('seller.services')}}">
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
    						
    					
    						<div class="col-xl-12">
							  <div class="form-group ">
								  <label class="col-form-label">Title </label>
								  <input type="text" id="" placeholder="" class="form-control" name="" value="Rotor Replacement" readonly>
							    </div>
							
							</div>
    						
							<div class="col-lg-12">
										<label class="col-form-label">Description </label>
								<div class="form-group summmer_expand">
                                 
								   <small  class="form-text text-muted  mt-0 mb-2">Give your offer a brief descriptionsto help you identify it</small>
                                    <textarea id="" class="textarea-form-control" readonly>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</textarea>
								  

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
					<h4 class="cardTitle mb-3">Pricing</h4>
						<div class="checkbox">
                                    <label class="mb-3">
                                       <input type="checkbox" name="pricepackagecheck" id="price_package_check" checked disabled>   Offer as a package
                                    </label>
                    </div> 
					 <div class="row" id="price_package_details" style="display: block">
        							<div class="col-md-12">
										<div class="d-flex justify-content-between align-items-center my-2">
											<h6 class="m-0">Products</h6>
                                            
                                        </div>
										
                                       <div class="viewBox table-responsive pt-3 product-add-table">
                                            <table class="table table-center">
                                                <tbody>
                                                   <tr>
                                                      <th class="text-left"> Items </th>
                                                      <th class="text-left"> Price </th>
                                                      <th class="text-left"> Quantity </th>                             
                                                      
                                                   </tr>
                                                   <tr>
                                                      <td class="text-left">Front Brakes</td>
													    <td class="text-left" style="width:120px">
                                                         <input type="text" value="K 560.00" class="form-control m-auto" name="" readonly>
                                                      </td>	
                                                      <td class="text-left" style="width:120px">
                                                         <input type="number" value="1" class="form-control m-auto" name="" readonly>
                                                      </td>							  
                                                 
                                                   </tr>
                                                   <tr>
                                                      <td class="text-left">Front Rotors</td>
                                                      <td class="text-left" style="width:120px">
                                                         <input type="text" value="K 1000.00" class="form-control m-auto" name="" readonly>
                                                      </td>	
                                                      <td class="text-left" style="width:120px">
                                                         <input type="number" value="1" class="form-control m-auto" name="" readonly>
                                                      </td>							  
                                                     
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
        								<div class="form-group">
        								  <label class="col-form-label">Discount & Type </label>
        								  <input type="text"  class="form-control" name="" value="35% off up to $ 99.00 " readonly>
        									
        							    </div>
        							</div>
        							
        							
								 </div>                                 
					
                    <div class="row">
							<div class="col-md-6">
								<div class="form-group ">
								  <label class="col-form-label">Price </label>
								  <input type="text" id="" placeholder="K 0.00" class="form-control" name="" value="K 500.00" readonly>
							    </div>
							</div>
							<div class="col-md-6">
								<div class="form-group ">
								  <label class="col-form-label">Compare at price</label>
								  <input type="text" id="" placeholder="K 0.00" class="form-control" name="" value="K 620.00" readonly>
							    </div>
							</div>
							<div class="col-md-12">
								<div class="checkbox">
                                    <label class="mb-3">
                                       <input type="checkbox" name="checkbox" checked  disabled> Charge tax on this offer. 
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
											   <input type="radio" name="conditions" id="allconditions" checked disabled> All Conditions</label>
										</div> 
									    <div class="checkbox ml-3">
											   <label class="mr-2" for="anycondition">
											   <input type="radio" name="conditions" id="anycondition" disabled> Any Condition</label>
										 </div> 
									 </div> 
									
									
									
									
								</div>
    					    </div>
    					    <div class="col-md-12">
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
                            
							  
                             
                           </tr>
						     <tr>
							  <td>2</td>                       
                              <td class="text-left  pl-0">Audi</td>
                              <td class="text-left  pl-0">is not equal to</td>
							  <td class="text-left  pl-0">	
    							  Break Pad and Rotor
                              </td>
                            
							  
                              
                           </tr>
						    <tr>
							  <td>3</td>                       
                              <td class="text-left  pl-0">Toyota</td>
                              <td class="text-left  pl-0">is equal to</td>
							  <td class="text-left  pl-0">	
    							  Break Pad and Rotor
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
			
			<div class="card mb-4">
               <div class="card-body">
					<h4 class="cardTitle">Media  </h4>
                             
							  <div class="d-flex">
									<div class="formimg" >
									 <img id ="imagePreview" src="{{ asset('assets/serviceprovider/img/engine.jpg') }}">
									 <!--i class="fa fa-trash deleteimg"></i-->
									</div> 
									 <div class="formimg" >
									 <img id ="imagePreview" src="{{ asset('assets/serviceprovider/img/engine.jpg') }}">
									 <!--i class="fa fa-trash deleteimg"></i-->
								  </div> 
							  </div>
							  
							  
				
				</div> 
			</div>
			
         
                    
            </div>
			
		 </div>
   </div>
	   @endsection
   @section('scripts')
   
 

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
		disable:true,
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








   @endsection  