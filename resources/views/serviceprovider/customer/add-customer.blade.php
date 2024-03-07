@extends('serviceprovider.layouts.app')
@section('title', 'Products')
@section('content')

 
   <div class="content container-fluid add-product-page">
      <div class="page-header">
         <div class="row">
            <div class="col">
               <h3 class="page-title">New customer</h3>
            </div>
            <div class="col-auto text-right">
			 <a class="btn btn-secondary mr-3" href="#">
                  Discard
               </a>
			   <a class="btn btn-primary" href="{{route('seller.customers')}}">
                  Save
               </a>
            </div>
         </div>
        
      </div> 
	   <form method="POST" id="product_form" name="product_form"  enctype="multipart/form-data" action="{{route('seller.save_product')}}">
      <div class="row">
	   <div class="col-md-4">
            <h3 class="customer-subtitle">Customer overview</h3>
		 </div>
         <div class="col-md-8">
            <div class="card mb-2"> 
               <div class="card-body">
                     <div class="row">
						
							<div class="col-lg-12">
										 <div class="form-group">
										  <label class="col-form-label">Customer Type  </label>
										   <select name="status" id="status" class="my-select form-control">
												<option value="Business">Business</option>
												<option value="Individual">Individual</option>
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
						
						
						
						
						<div class="col-lg-12">
										 <div class="form-group">
										  <label class="col-form-label">Company Name  </label>
										   <input type="text" id="" class="form-control" name="" value="" placeholder="Company Name">
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
						
						<div class="col-md-12">
								<div class="checkbox">
                                    <label class="mb-3 text-muted">
                                       <input type="checkbox" name="checkbox" class="mr-2"> Customer agreed to receive marketing emails.

                                    </label>
									<label class="mb-3 text-muted">
                                       <input type="checkbox" name="checkbox" class="mr-2"> Customer agreed to receive SMS marketing text messages.
                                    </label>
									<label class="mb-3">
                                      You should ask your customers for permission before you subscribe them to your marketing emails or SMS.

                                    </label>
                                 </div> 
						</div>
						
							
					
                     </div>
               </div>
            </div>
			
         </div>
		 
		
      </div>
	   
	   <hr>
	   
	   <div class="row mt-4">
	   <div class="col-md-4">
            <h3 class="customer-subtitle">Address</h3>
			<p>The primary address of this customer</p>
		 </div>
         <div class="col-md-8">
            <div class="card mb-2"> 
               <div class="card-body">
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
	  
	  
	   <hr>
	   
	   <div class="row mt-4">
	   <div class="col-md-4">
            <h3 class="customer-subtitle">Tax exemptions</h3>
		 </div>
         <div class="col-md-8">
            <div class="card mb-2"> 
               <div class="card-body">
                     <div class="row">
						
						<div class="col-xl-12">
                            <div class="form-group mb-0">
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
	  
	   <hr>
	   
	   <div class="row mt-4">
	   <div class="col-md-4">
            <h3 class="customer-subtitle">Notes</h3>
			<p>Add notes about your customer.</p>
		 </div>
         <div class="col-md-8">
            <div class="card mb-2"> 
               <div class="card-body">
                     <div class="row">
					
						<div class="col-xl-12">
                            <div class="form-group">
                              <label class="col-form-label">Note</label>
                               <input type="text" id="" class="form-control" name="" value="" placeholder="">
                           </div>
                        </div>
						
						
						
                     </div>
               </div>
            </div>
         </div>
      </div>
	  
	  <hr>
	   
	   <div class="row mt-4">
	   <div class="col-md-4">
            <h3 class="customer-subtitle">Tags</h3>
			<p>Tags can be used to categorize customers into groups.</p>
		 </div>
         <div class="col-md-8">
            <div class="card mb-2"> 
               <div class="card-body">
                     <div class="row">
					
						<div class="col-xl-12">
                            <div class="form-group">
                              <label class="col-form-label">Tags</label>
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
      </div>
	  
	   
	   </form>
   </div>
	   @endsection
   @section('scripts')
   
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    

$(function () {
        


</script>



   @endsection