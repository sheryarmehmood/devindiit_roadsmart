@extends('admin.layouts.app1')
@section('title', 'Add Vehicle')
@section('content')

 
<div class="content container-fluid add-product-page">
  <div class="page-header">
     <div class="row">
        <div class="col">
           <h3 class="page-title"> Add New Vehicle</h3>
        </div>
        <div class="col-auto text-right">
		    <a class="btn btn-secondary mr-3" href="{{route('admin.vehicles')}}">
              Discard
           </a>
		   <a class="btn btn-primary" href="{{route('admin.vehicles')}}">
              Save
           </a>
        </div>
     </div>
  </div> 
  <form method="POST" id="product_form" name="product_form"  enctype="multipart/form-data" action="{{route('seller.save_product')}}">
    <div class="row">
            <div class="card mb-12"> 
                <div class="card-header">
                    <h4 class="card-title"> Add Vehicle Detail</h4>
                </div>
                    <div class="card-body">
                        <div class="row">
        					<div class="col-xl-6">
                                <div class="form-group">
                                  <label class="col-form-label">Vehicle Name</label>
                                   <input type="text" id="" class="form-control" name="" value="">
                               </div>
                            </div>
        					<div class="col-xl-6">
                                <div class="form-group">
                                  <label class="col-form-label">Vehicle Model Year</label>
                                  <input type="text" id="" class="form-control" name="" value="" >
                               </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group">
                                  <label class="col-form-label">Registration Number</label>
                                  <input type="text" id="" class="form-control" name="" value="" >
                               </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group">
                                  <label class="col-form-label">License Plate  </label>
                                  <input type="text" id="" class="form-control" name="" value="" >
                               </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group">
        						  <label class="col-form-label">Transmissions</label>
        						   <select name="status" id="status" class="my-select form-control">
        								<option value="Automatic">Automatic</option>
        								<option value="Mannual">Mannual</option>
        							</select>
        					    </div>
                            </div>
                            <div class="col-lg-6">
        					    <div class="form-group">
        						  <label class="col-form-label">Company Make </label>
        						   <select name="status" id="status" class="my-select form-control">
        								<option value="Country/region">Mercedes-Benz</option>
        								<option value="blue">Audi</option>
        								<option value="black">Hyundai</option>
        								<option value="grey">Honda</option>
        								<option value="black">Nissan</option>
        								<option value="black">GMC</option>
        								<option value="grey">Toyota</option>
        							</select>
        					    </div>
    				         </div>
                            <div class="col-xl-6">
                                <div class="form-group">
        						  <label class="col-form-label">Model Name</label>
        						   <select name="status" id="status" class="my-select form-control">
        								<option value="Hatchback">Altima</option>
        								<option value="Sedan">A-Class</option>
        								<option value="MPV">A-3</option>
        								<option value="SUV">A-4</option>
        								<option value="Crossover">A6</option>
        								<option value="Coupe">A6 allroad</option>
        								<option value="Convertible">S-Class</option>
        								<option value="S-Class S 350d">Bolt EUV</option>
        								<option value="S-Class S450 4Matic">S-Class</option>
        							</select>
        					    </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group">
        						  <label class="col-form-label">Varaint Name</label>
        						   <select name="status" id="status" class="my-select form-control">
        								<option value="Hatchback">Hatchback</option>
        								<option value="Sedan">Sedan</option>
        								<option value="MPV">MPV</option>
        								<option value="SUV">SUV</option>
        								<option value="Crossover">Crossover</option>
        								<option value="Coupe">Coupe</option>
        								<option value="Convertible">Convertible</option>
        								<option value="S-Class S 350d">S-Class S 350d</option>
        								<option value="S-Class S450 4Matic">S-Class S450 4Matic</option>
        							</select>
        					    </div>
                            </div>
                            <div class="col-lg-6">
        					    <div class="form-group">
        						  <label class="col-form-label">Color </label>
        						   <select name="status" id="status" class="my-select form-control">
        								<option value="Country/region">Color</option>
        								<option value="blue">blue</option>
        								<option value="black">black</option>
        								<option value="grey">grey</option>
        							</select>
        					    </div>
    				         </div>
    				         
        					<div class="col-xl-6">
                                <div class="form-group">
                                  <label class="col-form-label">Weight</label>
                                  <input type="text" id="" class="form-control" name="" value="" >
                               </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group">
                                  <label class="col-form-label">Wheels Tires </label>
                                  <input type="text" id="" class="form-control" name="" value="" >
                               </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group">
                                  <label class="col-form-label">Provider </label>
                                  <input type="text" id="" class="form-control" name="" value="" >
                               </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group">
                                  <label class="col-form-label">Cover </label>
                                  <input type="text" id="" class="form-control" name="" value="" >
                               </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group">
                                  <label class="col-form-label">Owner Current </label>
                                  <input type="text" id="" class="form-control" name="" value="" >
                               </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group">
                                  <label class="col-form-label">Ownership </label>
                                  <input type="text" id="" class="form-control" name="" value="" >
                               </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group">
        						  <label class="col-form-label">Engine </label>
        						   <select name="status" id="status" class="my-select form-control">
        								<option value="blue">Flat</option>
        								<option value="black">Twin Clyinder</option>
        								<option value="grey">Four Clyinder</option>
        							</select>
        					    </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group">
                                  <label class="col-form-label">Vehicle  Image</label>
                                  <input type="file" id="" class="form-control" name="" value="">
                               </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group text-left d-flex">
                                    <label class="ml-1 mr-3">Status</label>
                                    <div class="radio-inline ml-3">
                                        <label class="radio m-0">
                                        <input type="radio" name="status"  value="1" checked/>
                                        <span></span>Active
                                        </label>
                                    </div>
                                    <div class="radio-inline ml-3">
                                        <label class="radio m-0">
                                        <input type="radio" name="status" value="0" />
                                        <span></span>Inactive
                                        </label>
                                    </div>
                                     <div class="form-text text-muted text-center"></div> 
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    <div class="row">
        <div class="card mb-12"> 
            <div class="card-header">
                <h4 class="card-title">Add Personal Detail</h4>
            </div>
                <div class="card-body">
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
                        <div class="col-xl-6">
                            <div class="form-group">
                              <label class="col-form-label">Email Address</label>
                              <input type="text" id="" class="form-control" name="" value=""  placeholder="Email">
                           </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="form-group">
                              <label class="col-form-label">Phone number   </label>
                              <input type="phone" id="" class="form-control" name="" value=""  placeholder="Phone No.">
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
                              <label class="col-form-label">Zip code   </label>
                              <input type="text" id="" class="form-control" name="" value="" placeholder="Zip code">
                           </div>
                        </div>
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
    				    <div class="col-xl-12">
                            <div class="form-group">
                              <label class="col-form-label"> Image</label>
                              <input type="file" id="" class="form-control" name="" value="">
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
@endsection