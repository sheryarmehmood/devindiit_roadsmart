@extends('admin.layouts.app1')
@section('title', 'Add Customer')
@section('content')

 
   <div class="content container-fluid add-product-page">
         <form method="POST" id="product_form" name="product_form"  enctype="multipart/form-data" action="{{route('admin.add_newcustomer')}}">
             @csrf
      <div class="page-header">
         <div class="row">
            <div class="col">
               <h3 class="page-title"> Add New Customer</h3>
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
                                <div class="form-group">
                                    <input type="hidden" name="customer_id" id="customer_id" value=""> 
                                  <label class="col-form-label">First name</label>
                                   <input type="text" id="name" class="form-control" name="name" value="" placeholder="First name">
                               </div>
                            </div>
    						<!--<div class="col-xl-6">-->
          <!--                      <div class="form-group">-->
          <!--                        <label class="col-form-label">Last name   </label>-->
          <!--                        <input type="text" id="" class="form-control" name="" value="" placeholder="Last name">-->
          <!--                     </div>-->
          <!--                  </div>-->
    						
    						<div class="col-xl-6">
                                <div class="form-group">
                                  <label class="col-form-label">Email</label>
                                  <input type="text" id="email" class="form-control" name="email" value="">
                               </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group">
                                  <label class="col-form-label">Phone number   </label>
                                  <input type="phone" id="phone_num" class="form-control" name="phone_num" value="">
                               </div>
                            </div>
                            
    						<div class="col-xl-12">
                                <div class="form-group">
                                  <label class="col-form-label">Address   </label>
                                  <input type="text" id="address" class="form-control" name="address" value="" placeholder="Address">
                               </div>
                            </div>
    						<div class="col-xl-12">
                                <div class="form-group">
                                  <label class="col-form-label">State</label>
                                  <input type="text" id="state" class="form-control" name="state" value="" placeholder="State">
                               </div>
                            </div>
    						
    							<div class="col-xl-6">
                                <div class="form-group">
                                  <label class="col-form-label">City</label>
                                   <input type="text" id="city" class="form-control" name="city" value="" placeholder="City">
                               </div>
                            </div>
    						
    						<div class="col-xl-6">
                                <div class="form-group">
                                  <label class="col-form-label">Zip code   </label>
                                  <input type="text" id="zipcode" class="form-control" name="zipcode" value="" placeholder="Zip code">
                               </div>
                            </div>
    						<!--<div class="col-xl-12">-->
          <!--                      <div class="form-group">-->
          <!--                        <label class="col-form-label">Company   </label>-->
          <!--                        <input type="text" id="" class="form-control" name="" value="" placeholder="Company">-->
          <!--                     </div>-->
          <!--                  </div>-->
                            <div class="col-lg-12">
        					    <div class="form-group">
        						  <label class="col-form-label">Country/region  </label>
        						   <select name="country" id="country" class="my-select form-control">
        								<option value="Country/region">Country/region</option>
        								<option value="USA">USA</option>
        								<option value="UK">UK</option>
        								<option value="India">India</option>
                                <option value="UAE">UAE</option>
        							</select>
        					    </div>
        				    </div>
        				    <div class="col-xl-12">
                                <div class="form-group ">
                                    <label class="col-form-label">Status</label>
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
                                     <select name="status" id="status" class="my-select form-control">
                                <option value="" disbaled>Select Status</option>
                                <option value="1" selected>Active</option>
                                <option value="0">Inactive</option>
                            </select>
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
</script>
   @endsection