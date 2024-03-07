@extends('serviceprovider.layouts.app2')
@section('title', 'Users and Permissions')
@section('content')
	<div class="content container-fluid">
		<div class="page-header">
			<div class="row">
				<div class="col">
					<h3 class="page-title">Add Users Permissions</h3>
				</div>
				<div class="col-auto text-right">			
					<a class="btn btn-secondary" href="{{route('seller.user_permissions')}}">Back</a>
				</div>				
			</div>
		</div>
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
   <form method="POST" id="add_seller_form" name="add_seller_form"  enctype="multipart/form-data" action="{{route('seller.save_new_seller')}}">
      @csrf
		<div class="row">
			<div class="col-md-4">
				<div class="profile_user">
					<div class="card">
						<div class="card-body text-center">
							<div class="user-image">
								<?php
                              $image =  asset('/assets/serviceprovider/img/seller/default.jpg'); ?>
							<img class="rounded-circle img-thumbnail" src="{{$image}}" id="imagePreview"/>
                        <label  for="avatar">Upload Picture</label>
                        <input  id="avatar" name="avatar" style="display:none" type="file" accept=".png, .jpg, .jpeg">
							</div>
							<span class="form-text text-muted">Allowed file types: png, jpg,jpeg.</span>
						</div>
					</div>
				</div>
			</div>	  
			<div class="col-md-8">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Basic Info</h4>
							<div class="row">
								<div class="col-xl-6">
									<div class="form-group row">
										<label class="col-lg-12 col-form-label">First Name</label>
										<div class="col-lg-12">
											<input type="text" class="form-control" placeholder="Enter First Name" id="first_name" name="first_name">
										</div>
									</div>
									@error('first_name')
                              			<span class="invalid-feedback" role="alert">
                                  			<strong>{{ $message }}</strong>
                              			</span>
                           			@enderror
								</div>
								<div class="col-xl-6">
									<div class="form-group row">
										<label class="col-lg-12 col-form-label">Last Name</label>
										<div class="col-lg-12">
											<input type="text" class="form-control" placeholder="Enter Last Name" id="last_name" name="last_name">
										</div>
									</div>
								</div>
								@error('last_name')
                              		<span class="invalid-feedback" role="alert">
                                  		<strong>{{ $message }}</strong>
                              		</span>
                           		@enderror
								<div class="col-xl-6">
									<div class="form-group row">
										<label class="col-lg-12 col-form-label">Email Address</label>
										<div class="col-lg-12">
											<input type="text" class="form-control" placeholder="Enter Email Address" id="email" name="email">
										</div>
									</div>
								</div>
								@error('email')
	                              <span class="invalid-feedback" role="alert">
	                                  <strong>{{ $message }}</strong>
	                              </span>
                           		@enderror
								<div class="col-xl-6">
									<div class="form-group row">
										<label class="col-lg-12 col-form-label">Phone Number</label>
										<div class="col-lg-12">
											<input type="tel" class="form-control" placeholder="Enter Phone Number" id="phone_number" name="phone_number">
										</div>
									</div>
								</div>
								@error('phone_number')
	                              <span class="invalid-feedback" role="alert">
	                                  <strong>{{ $message }}</strong>
	                              </span>
                           		@enderror
								<div class="col-xl-6">
									<div class="form-group row">
										<label class="col-lg-12 col-form-label">Address</label>
										<div class="col-lg-12">
											<input type="text" class="form-control" placeholder="Enter Address" id="address1" name="address1">
										</div>
									</div>
								</div>
								@error('address1')
	                              <span class="invalid-feedback" role="alert">
	                                  <strong>{{ $message }}</strong>
	                              </span>
                           		@enderror
								<div class="col-xl-6">
									<div class="form-group row">
										<label class="col-lg-12 col-form-label">Country</label>
										<div class="col-lg-12">
											<select name="country" id = 'country' class="form-control">
												<option value="Select">Select Country</option>
												<option value="USA">USA</option>
												<option value="Canada">Canada</option>
												<option value="Australia">Australia</option>
												<option value="Australia">India</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-xl-6">
									<div class="form-group row">
										<label class="col-lg-12 col-form-label">State</label>
										<div class="col-lg-12">
											<input type="text" class="form-control" placeholder="Enter State" id="state" name="state">
										</div>
									</div>
								</div>
								<div class="col-xl-6">
									<div class="form-group row">
										<label class="col-lg-12 col-form-label">City</label>
										<div class="col-lg-12">
											<input type="text" class="form-control" placeholder="Enter City" id="city" name="city">
										</div>
									</div>
								</div>
								<div class="col-xl-6">
									<div class="form-group row">
										<label class="col-lg-12 col-form-label">Zip Code</label>
										<div class="col-lg-12">
											<input type="text" class="form-control" placeholder="Enter Zip Code" id="zipcode" name="zipcode">
										</div>
									</div>
								</div>
								<div class="col-xl-6">
									<div class="form-group row">
										<label class="col-lg-12 col-form-label">Status</label>
										<div class="col-lg-12">
											<select name="status" id="status" class="form-control">
												<option value="">Select Status</option>
												<option value="1" selected>Active</option>
												<option value="0">Inactive</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-xl-6">
								   <div class="form-group row">
										<label class="col-lg-12 col-form-label">New Password</label>
										<div class="col-lg-12">
											<input type="password" class="form-control" name="new_password" id="new_password">
										</div>
								   </div>
								</div>
								@error('new_password')
	                              <span class="invalid-feedback" role="alert">
	                                  <strong>{{ $message }}</strong>
	                              </span>
                           		@enderror
								<div class="col-xl-6">
								   <div class="form-group row">
										<label class="col-lg-12 col-form-label">Confirm New Password</label>
										<div class="col-lg-12">
											<input type="password" class="form-control" name="confirm_password" id="confirm_password">
										</div>
								   </div>
								</div>
								@error('confirm_passowrd')
	                              <span class="invalid-feedback" role="alert">
	                                  <strong>{{ $message }}</strong>
	                              </span>
                           		@enderror
							</div>
							<br>
							<h4 class="card-title">Permissions</h4>
						<div class="table-responsive">
							<table class="table table-center">
								<thead>
									<tr>
										<th>Title</th>
										<th>Add</th>
										<th>Edit</th>
										 <th>Delete</th>                                               
									</tr>
								</thead>
								<tbody>
									<?php 
									foreach ($permissionsList as $key => $perm_sec) {
									?> 
                                    <tr> 
									    <td class="text-nowrap">
											{{ucfirst($key)}}
										</td>
										<?php 
								          foreach ($perm_sec as $keyIn => $child) {
								          ?>
										<td class="text-nowrap">
											<label class="checkbox checkbox-outline checkbox-theme">
									            <input class="permission_checkbox" type="checkbox" name="permissions[]" id="permissions" value="{{ $child['id'] }}" />
									            <span></span>
									            <!-- {{  ucfirst($child['value']) }} -->
									        </label>
										</td>
										<?php }?>
									</tr> 
									<?php }?>
								</tbody>
							</table>
						</div>
						<div class="text-right">
							<button type="submit" class="btn btn-primary">Save</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
@endsection


@section('scripts')
<script type="text/javascript">
$(function(){
$('#avatar').on('change', function() {
    var file = $(this).get(0).files;
    var reader = new FileReader();
    reader.readAsDataURL(file[0]);
    reader.addEventListener("load", function(e) {
    var image = e.target.result;
$("#imagePreview").attr('src', image);
});
});
});

$.validator.methods.checkEmail = function( value, element ) {
        return this.optional( element ) || /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test( value );
    }

    $.validator.methods.phoneUS = function( value, element ) {
        var filter = /^(\+91-|\+91|0)?\d{7,15}$/;
    if (filter.test(value)) {
      
        return true;
    }
    else {
     
        return false;
    }
    }

    $('#convert_estimate').change(function(){
      var getvalue = $(this).val();
      if(getvalue == '0'){
         $('#convert_estimate').val('1');
      }else{
         $('#convert_estimate').val('0');
      }
    });

</script>

<script>
    $(function() {
    $("form[name='add_seller_form']").validate({
    // Specify validation rules
    rules: {
    first_name: {
        required: true,
      },
      last_name: {
        required: true,
      },
      email: {
        required: true,
        checkEmail: true
      },
      address1:{
         required: true
      }, 
       phone_number: {
        required: true,
        phoneUS:true
      },
      new_password:{
      	required:true,
      	minlength: 8
      },
      confirm_password: {
            required: true,
            equalTo: '[name="new_password"]'
       },
    },
    // Specify validation error messages
    messages: {
      first_name:{
         required: "<strong>Please enter your first name</strong>",
      },
      last_name:{
         required: "<strong>Please enter your last name</strong>",
      },
      email: {
          required: "<strong>Please enter your email</strong>",
          checkEmail: "<strong>Please enter your valid email id</strong>",
        },
        address1:{
         required: "<strong>Please enter your address</strong>",
        },
        phone_number: {
        required: "<strong>Please enter your phone number</strong>",
        phoneUS: "<strong>Phone number length should be in between 7-15 digits</strong>"
      },
      new_password: {
            required: "Please enter password",
            minlength: "Password length should be atleast 8 characters"
          },
       confirm_password: {
            required: "Please enter confirm password",
            equalTo: "Password and confirm password must be same"
          }
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });
});
</script>

<script>
    $(function() {
    $("form[name='change_password']").validate({
    // Specify validation rules
    rules: {
        cpass: "required",
        newpass: {
        required: true,
        minlength: 8
      },
      renewpass: {
        required: true,
        minlength: 8,
        equalTo : '[name="newpass"]'
      },
    },
    // Specify validation error messages
    messages: {
        cpass: "Please enter your old password",
        newpass: {
        required: "Please enter your new password",
        minlength: "Password length should be atleast 8 characters."
      },
      renewpass: {
        required: "Please re-enter the above password",
        minlength: "Password length should be atleast 8 characters.",
        equalTo:"New password and confirm password must be same"
      }
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });
});
</script>

@endsection