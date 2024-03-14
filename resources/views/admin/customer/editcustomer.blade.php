@extends('admin.layouts.app1')
@section('title', 'Edit Customer')
@section('content')

 
   <div class="content container-fluid add-product-page">
       <form method="POST" id="edit_customer" name="edit_customer"  enctype="multipart/form-data" action="{{route('admin.post_editCustomer')}}">
               @csrf
      <div class="page-header">
           
         <div class="row">
            <div class="col">
               <h3 class="page-title">Edit customer</h3>
            </div>
            <div class="col-auto text-right">
			 <a class="btn btn-secondary mr-3" href="{{route('admin.customers')}}">
                  Discard
               </a>
               <button type="submit" class="btn btn-primary ">Save</button>
			   <!--<a class="btn btn-primary" href="{{route('admin.customers')}}">-->
      <!--            Save-->
      <!--         </a>-->
            </div>
         </div>
        
      </div> 
	   
    	   <div class="row mt-4">
             <div class="col-md-">
                <div class="card mb-12"> 
                   <div class="card-body">
                         <div class="row">
                             <div class="col-xl-12">
                                  <div id="response">
                                    @if(Session::has('message'))
                                    <div class="alert alert-success alert-dismissable">
                                       <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                       {{ Session::get('message') }}
                                    </div>
                                    @endif
                                    @if(Session::has('error'))
                                    <div class="alert alert-danger alert-dismissable">
                                       <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                       {{ Session::get('error') }}
                                    </div>
                                    @endif
                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                       <ul>
                                          @foreach ($errors->all() as $error)
                                          <li>{{ $error }}</li>
                                          @endforeach
                                       </ul>
                                    </div>
                                    @endif
                                 </div>
                             </div>
    						<div class="col-xl-6">
    						    <input type="hidden" class="form-control" name="id" value="{{ $customerDetails->id }}" id="id">
                                <div class="form-group">
                                  <label class="col-form-label">Name</label>
                                   <input type="text" id="name" class="form-control" name="name" value="{{$customerDetails->name}}" >
                               </div>
                            </div>
    						<!--<div class="col-xl-6">-->
          <!--                      <div class="form-group">-->
          <!--                        <label class="col-form-label">Last name   </label>-->
          <!--                        <input type="text" id="" class="form-control" name="" value="Smith" >-->
          <!--                     </div>-->
          <!--                  </div>-->
    						<div class="col-xl-6">
                                <div class="form-group">
                                  <label class="col-form-label">Email</label>
                                  <input type="text" id="email" class="form-control" name="email" value="{{$customerDetails->email}}">
                                  <span class="text-danger error-text email_err" id="email_err"></span>
                               </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group">
                                  <label class="col-form-label">Phone number </label>
                                  <input type="phone" id="phone_num" class="form-control" name="phone_num" value="{{$customerDetails->phone_num}}">
                                  <span class="text-danger error-text phone_number_err" id="phone_number_err"></span>
                               </div>
                            </div>
    						<div class="col-xl-12">
                                <div class="form-group">
                                  <label class="col-form-label">Address   </label>
                                  <input type="text" id="address" class="form-control" name="address" value="{{$customerDetails->userAddress ?$customerDetails->userAddress: '' }}" placeholder='Please enter your address'>
                               </div>
                            </div>
                            	<div class="col-xl-12">
                                <div class="form-group">
                                  <label class="col-form-label">State  </label>
                                  <input type="text" id="state" class="form-control" name="state" value="{{$customerDetails->userState ?$customerDetails->userState: '' }}" placeholder='Please enter your State'>
                               </div>
                            </div>
    						<!--<div class="col-xl-12">-->
          <!--                      <div class="form-group">-->
          <!--                        <label class="col-form-label">Apartment, suite, etc. </label>-->
          <!--                        <input type="text" id="" class="form-control" name="" value="Eastern apartment" >-->
          <!--                     </div>-->
          <!--                  </div>-->
    						
    							<div class="col-xl-6">
                                <div class="form-group">
                                  <label class="col-form-label">City</label>
                                   <input type="text" id="city" class="form-control" name="city" value="{{$customerDetails->userCity ?$customerDetails->userCity: '' }}" placeholder='Please enter your city' >
                               </div>
                            </div>
    						
    						<div class="col-xl-6">
                                <div class="form-group">
                                  <label class="col-form-label">Zip code   </label>
                                  <input type="text" id="zipcode" class="form-control" name="zipcode" value="{{$customerDetails->userZipCode ?$customerDetails->userZipCode: '' }}" placeholder='Please enter your zip code' >
                               </div>
                            </div>
                            <div class="col-lg-12">
        					    <div class="form-group">
        						  <label class="col-form-label">Country/region  </label>
        						   <select name="country" id="country" class="my-select form-control">
        								<option value="Country/region">Country/region</option>
        								<option value="USA">USA</option>
        								<option value="UK">UK</option>
        								<option value="India">India</option>
        							</select>
        							<span class="text-danger error-text country_err" id="country_err"></span>
        					    </div>
        				    </div>
        				    <div class="col-xl-12">
                                <div class="form-group text-left d-flex">
                                    <label class="ml-1 mr-3 mt-2">Status</label>
                                      <span class="switch switch-sm">
                                        <label>

                                            <!-- <input type="checkbox" {{ $customerDetails->status == 1 ? 'checked' : '' }} name="status"> -->
                                            <!-- <input type="checkbox" {{ $customerDetails->status == 1 ? 'checked' : '' }} name="status" value="1"> -->
                                            <!-- <input type="checkbox" id="status" class="form-control" name="status" value="{{$customerDetails->status   }}"> -->
                                            <!-- <input type="checkbox" id="status" class="form-control" name="status" value="{{ $customerDetails->status == 1 ? 'checked' : '' }}"> -->
                                       <!-- <input type="checkbox" id="status" class="form-control" value="{{$customerDetails->status}}" name="status" {{ $customerDetails->status == 1 ? 'checked' : '' }} > -->
                                            <!-- <input type="checkbox" id="status" class="form-control" name="status" {{ $customerDetails->status == 1 ? 'checked="checked"' : '' }} value="1"> -->
                                            <!-- <input type="checkbox" id="status" class="form-control" name="status" {{ $customerDetails->status == 1 ? 'checked' : '' }} value="1"> -->
                                            <!-- <input type="checkbox" id="status" class="form-control" name="status" {{ $customerDetails->status == 1 ? 'checked' : '' }}>
<input type="hidden" name="status" value="0"> -->
<input type="hidden" name="status" value="0">
<input type="checkbox" id="status" class="form-control" value="1" name="status" {{ $customerDetails->status == 1 ? 'checked' : '' }}>



                                            <span></span>
                                        </label>
                                    </span>
                                    <!--<div class="radio-inline ml-3">-->
                                    <!--    <label class="radio m-0">-->
                                    <!--    <input type="radio" name="status"  value="1" checked/>-->
                                    <!--    <span></span>Active-->
                                    <!--    </label>-->
                                    <!--</div>-->
                                    <!--<div class="radio-inline ml-3">-->
                                    <!--    <label class="radio m-0">-->
                                    <!--    <input type="radio" name="status" value="0" />-->
                                    <!--    <span></span>Inactive-->
                                    <!--    </label>-->
                                    <!--</div>-->
                                     <div class="form-text text-muted text-center"></div> 
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
    
<script>
	$(function() {
  	$("form[name='edit_customer']").validate({
  	ignore: [],
    rules: {
        name: "required",
		email: {
	        required: true,
	        email: true
	      },
		phone_num: {
	        required: true,
	        maxlength: 15,
			minlength: 10
	      },
	       city: "required",
	       state: "required",
	       country: "required",
	       zipcode: "required",
	  
    },
    errorPlacement: function(error, element) {
    	if (element.attr("name") == "email") {
          error.insertAfter("#email_err");
        }
        else if (element.attr("name") == "phone_num") {
          error.insertAfter("#phone_number_err");
        }else if (element.attr("name") == "country") {
          error.insertAfter("#country_err");
        }else{
          error.insertAfter(element);
        }
      },
    // Specify validation error messages
    messages: 
    {
		name: "Please enter name",
		email: "Please enter valid email id",
		phone_num: {
	        required: "Please enter valid phone number",
	        maxlength: "Your phone number should not be more than 15 character",
			minlength: "Your phone number must have at least 10 characters"
	      },
	      city: "Please enter city",
	       state: "Please enter state",
	       country: "Please select country",
	      zipcode: "Please enter postcode",
    },
    submitHandler: function(form) {
      form.submit();
    }
  });
});
</script>





   @endsection