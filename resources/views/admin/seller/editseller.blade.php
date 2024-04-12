@extends('admin.layouts.app1')
@section('title', 'Edit Seller')
@section('content')

 
<div class="content container-fluid add-product-page">
<form method="POST" id="edit_seller" name="edit_seller"  enctype="multipart/form-data" action="{{route('admin.post_editSeller')}}">
@csrf
  <div class="page-header">
     <div class="row">
        <div class="col">
           <h3 class="page-title">Edit Seller</h3>
        </div>
        <div class="col-auto text-right">
		    <a class="btn btn-secondary mr-3" href="{{route('admin.sellers')}}">
              Discard
           </a>
           <button type="submit" class="btn btn-primary ">Save</button>
		   <!-- <a class="btn btn-primary" href="{{route('admin.post_editSeller')}}"> -->
              <!-- Save -->
           </a>
        </div>
     </div>
  </div> 

  @if(Session::has('message'))
                                    <div class="alert alert-success alert-dismissable">
                                       <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                       {{ Session::get('message') }}
                                    </div>
                                    @endif
  <!-- <form method="POST" id="product_form" name="product_form"  enctype="multipart/form-data" action="{{route('seller.save_product')}}"> -->
   <!-- <div class="row">
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
   </div> -->
    <div class="row">
            <div class="card mb-12">

            <!-- <div class="card-header"> -->
                    <!-- <h4 class="card-title">Edit personal detail</h4> -->
                    <!-- </div> -->
                    <div class="card-body">
                        <div class="row">
                        
                        <input type="hidden" class="form-control" name="id" value="{{ $sellerDetails->id }}" id="id">

        					<div class="col-xl-6">
                                <div class="form-group">
                                  <label class="col-form-label">First name</label>
                                   <input type="text" name="first_name" id="first_name" class="form-control" name="" value="{{$sellerDetails->first_name}}" >
                               </div>
                            </div>
        					<div class="col-xl-6">
                                <div class="form-group">
                                  <label class="col-form-label">Last name   </label>
                                  <input type="text" name="last_name" id="last_name" class="form-control" name="" value="{{$sellerDetails->last_name}}">
                               </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group">
                                  <label class="col-form-label">Email Address</label>
                                  <input type="text" name="email" id="email" class="form-control" name="" value="{{$sellerDetails->email}}" >
                               </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group">
                                  <label class="col-form-label">Phone number   </label>
                                  <input type="phone" name="phone_number" id="phone_number" class="form-control" name="" value="{{$sellerDetails->phone_number}}">
                               </div>
                            </div>
        					<div class="col-xl-12">
                                <div class="form-group">
                                  <label class="col-form-label">Address   </label>
                                  <input type="text" name="address1" id="address1" class="form-control" name="" value="{{$sellerDetails->address1}}" >
                               </div>
                            </div>
        					<!-- <div class="col-xl-12">
                                <div class="form-group">
                                  <label class="col-form-label">Apartment, suite, etc. </label>
                                  <input type="text" id="" class="form-control" name="" value="">
                               </div>
                            </div> -->
        					<div class="col-xl-6">
                                <div class="form-group">
                                  <label class="col-form-label">City</label>
                                   <input type="text" name="city" id="city" class="form-control" name="" value="{{$sellerDetails->city}}">
                               </div>
                            </div>
        					<div class="col-xl-6">
                                <div class="form-group">
                                  <label class="col-form-label">Zip code   </label>
                                  <input type="text" name="zipcode" id="zipcode" class="form-control" name="" value="{{$sellerDetails->zipcode}}" >
                               </div>
                            </div>
                            <div class="col-lg-12">
        					    <div class="form-group">
        						  <label class="col-form-label">Country/region  </label>{{$sellerDetails->country}}
                            <select name="country" id="country" class="my-select form-control">
                                 <option value="Country/region" {{ $sellerDetails->country == "Country/region" ? 'selected' : '' }}>Country/region</option>
                                 <option value="USA" {{ $sellerDetails->country == "USA" ? 'selected' : '' }}>USA</option>
                                 <option value="UK" {{ $sellerDetails->country == "UK" ? 'selected' : '' }}>UK</option>
                                 <option value="India" {{ $sellerDetails->country == "India" ? 'selected' : '' }}>India</option>
                                 <option value="UAE" {{ $sellerDetails->country == "UAE" ? 'selected' : '' }}>UAE</option>
                           </select>
        						   <!-- <select name="status" id="status" class="my-select form-control">
        								<option value="Country/region">Country/region</option>
        								<option value="USA">USA</option>
        								<option value="UK">UK</option>
        								<option value="India">India</option>
        							</select> -->
        					    </div>
        				    </div>
        				         <!-- <div class="col-xl-12"> -->
                                <!-- <div class="form-group">
                                  <label class="col-form-label">Personal Image</label>
                                  <input type="file" id="" class="form-control" name="" value="">
                               </div> -->
                            <!-- </div> -->
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