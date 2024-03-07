@extends('admin.layouts.app1')
@section('title', 'Edit Seller')
@section('content')

 
<div class="content container-fluid add-product-page">
  <div class="page-header">
     <div class="row">
        <div class="col">
           <h3 class="page-title">Edit Seller</h3>
        </div>
        <div class="col-auto text-right">
		    <a class="btn btn-secondary mr-3" href="{{route('admin.sellers')}}">
              Discard
           </a>
		   <a class="btn btn-primary" href="{{route('admin.sellers')}}">
              Save
           </a>
        </div>
     </div>
  </div> 
  <form method="POST" id="product_form" name="product_form"  enctype="multipart/form-data" action="{{route('seller.save_product')}}">
    <div class="row">
            <div class="card mb-12"> 
                <div class="card-header">
                    <h4 class="card-title">Edit store detail</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
        					<div class="col-xl-6">
                                <div class="form-group">
                                  <label class="col-form-label">Store Name</label>
                                   <input type="text" id="" class="form-control" name="" value="Smart Store">
                               </div>
                            </div>
        					<div class="col-xl-6">
                                <div class="form-group">
                                  <label class="col-form-label">Email Address</label>
                                  <input type="text" id="" class="form-control" name="" value="smartstore@gamil.com" >
                               </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group">
                                  <label class="col-form-label">Phone number   </label>
                                  <input type="phone" id="" class="form-control" name="" value="+123456789">
                               </div>
                            </div>
        					<div class="col-xl-6">
                                <div class="form-group">
                                  <label class="col-form-label">Address   </label>
                                  <input type="text" id="" class="form-control" name="" value="31 Avenew Road" >
                               </div>
                            </div>
        					<div class="col-xl-6">
                                <div class="form-group">
                                  <label class="col-form-label">Country</label>
                                  <input type="text" id="" class="form-control" name="" value="USA" >
                               </div>
                            </div>
        					<div class="col-xl-6">
                                <div class="form-group">
                                  <label class="col-form-label">State</label>
                                   <input type="text" id="" class="form-control" name="" value="Florida" >
                               </div>
                            </div>
        					<div class="col-xl-6">
                                <div class="form-group">
                                  <label class="col-form-label">Zip code   </label>
                                  <input type="text" id="" class="form-control" name="" value="236636" >
                               </div>
                            </div>
        					<div class="col-xl-6">
                                <div class="form-group">
                                  <label class="col-form-label">City</label>
                                  <input type="text" id="" class="form-control" name="" value="Mexico" >
                               </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group">
                                  <label class="col-form-label">Opening Hours</label>
                                  <input type="time" id="" class="form-control" name="" value="10:00 AM" >
                               </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group">
                                  <label class="col-form-label">Closing Hours</label>
                                  <input type="time" id="" class="form-control" name="" value="05:00 AM">
                               </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group">
                                  <label class="col-form-label">Store Image</label>
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
                    <h4 class="card-title">Edit personal detail</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
        					<div class="col-xl-6">
                                <div class="form-group">
                                  <label class="col-form-label">First name</label>
                                   <input type="text" id="" class="form-control" name="" value="Jem " >
                               </div>
                            </div>
        					<div class="col-xl-6">
                                <div class="form-group">
                                  <label class="col-form-label">Last name   </label>
                                  <input type="text" id="" class="form-control" name="" value="Rusty">
                               </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group">
                                  <label class="col-form-label">Email Address</label>
                                  <input type="text" id="" class="form-control" name="" value="JemRusty@yopmail.com" >
                               </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group">
                                  <label class="col-form-label">Phone number   </label>
                                  <input type="phone" id="" class="form-control" name="" value="+123456789">
                               </div>
                            </div>
        					<div class="col-xl-12">
                                <div class="form-group">
                                  <label class="col-form-label">Address   </label>
                                  <input type="text" id="" class="form-control" name="" value="30 Avenew Road" >
                               </div>
                            </div>
        					<div class="col-xl-12">
                                <div class="form-group">
                                  <label class="col-form-label">Apartment, suite, etc. </label>
                                  <input type="text" id="" class="form-control" name="" value="East Apartment,Mexico">
                               </div>
                            </div>
        					<div class="col-xl-6">
                                <div class="form-group">
                                  <label class="col-form-label">City</label>
                                   <input type="text" id="" class="form-control" name="" value="Mexico">
                               </div>
                            </div>
        					<div class="col-xl-6">
                                <div class="form-group">
                                  <label class="col-form-label">Zip code   </label>
                                  <input type="text" id="" class="form-control" name="" value="236636" >
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
                                  <label class="col-form-label">Personal Image</label>
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