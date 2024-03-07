@extends('serviceprovider.layouts.app')
@section('title', 'Profile')
@section('content') 
<div class="content container-fluid">
   <div class="page-header">
      <div class="row">
         <div class="col">
            <h3 class="page-title">Profile Settings</h3>
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
      @if($errors->has('error_card'))
      <div class="alert alert-danger alert-dismissable">
       <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
       {{ $errors->first('error_card') }}
      </div>
      @endif
   </div>
   <form method="POST" id="profile_form" name="profile_form"  enctype="multipart/form-data" action="{{route('seller.update_profile')}}">
      @csrf
      <input type="hidden" name="sellerid" id="sellerid" value="{{$user_details->id}}">
      <div class="row">
         <div class="col-md-4">
            <div class="profile_user">
               <div class="card">
                  <div class="card-body text-center">
                     <div class="user-image">
                        <?php
                           if($user_details->avatar != '') {
                              $image =  asset('/assets/serviceprovider/img/seller/' .$user_details->avatar); 
                           }else { 
                              $image =  asset('/assets/serviceprovider/img/seller/default.jpg'); 
                           }
                        ?>
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
                  <h4 class="card-title">Personal Information</h4>
                     <div class="row">
                        <div class="col-xl-6">
                           <div class="form-group row">
                              <label class="col-lg-12 col-form-label">First Name</label>
                              <div class="col-lg-12">
                                 <input type="text" class="form-control" value="{{$user_details->first_name}}" id="first_name" name="first_name">
                              </div>
                           </div>
                           @error('first_name')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                           @enderror
                           <div class="form-group row">
                              <label class="col-lg-12 col-form-label">Last Name</label>
                              <div class="col-lg-12">
                                 <input type="text" class="form-control" value="{{$user_details->last_name}}" name="last_name" id="last_name">
                              </div>
                           </div>
                           @error('last_name')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                           @enderror
                        </div>
                        <div class="col-xl-6">
                           <div class="form-group row">
                              <label class="col-lg-12 col-form-label">Email Address</label>
                              <div class="col-lg-12">
                                 <input type="text" class="form-control" value="{{$user_details->email}}" id="email" name="email">
                              </div>
                           </div>
                           @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                           @enderror
                           <div class="form-group row">
                              <label class="col-lg-12 col-form-label">Phone Number</label>
                              <div class="col-lg-12">
                                 <input type="tel" class="form-control" value="{{$user_details->phone_number}}" id="phone_number" name="phone_number">
                              </div>
                           </div>
                           @error('phone_number')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                           @enderror
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-xl-6">
                           <div class="form-group row">
                              <label class="col-lg-12 col-form-label">Address Line 1</label>
                              <div class="col-lg-12">
                                 <input type="text" class="form-control" value="{{$user_details->address1}}" id="address1" name="address1">
                              </div>
                           </div>
                           @error('address1')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                           @enderror
                           <div class="form-group row">
                              <label class="col-lg-12 col-form-label">Address Line 2</label>
                              <div class="col-lg-12">
                                 <input type="text" class="form-control" value="{{$user_details->address2}}" id="address2" name="address2">
                              </div>
                           </div>
                           <div class="form-group row">
                              <label class="col-lg-12 col-form-label">State</label>
                              <div class="col-lg-12">
                                 <input type="text" class="form-control" value="{{$user_details->state}} " id="state" name="state">
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-6">
                           <div class="form-group row">
                              <label class="col-lg-12 col-form-label">City</label>
                              <div class="col-lg-12">
                                 <input type="text" class="form-control" value="{{$user_details->city}}" id="city" name="city">
                              </div>
                           </div>
                           <div class="form-group row">
                              <label class="col-lg-12 col-form-label">Country</label>
                              <div class="col-lg-12">
                                 <input type="text" class="form-control" value="{{$user_details->country}}" id="country" name="country">
                              </div>
                           </div>
                           <div class="form-group row">
                              <label class="col-lg-12 col-form-label">Zip Code</label>
                              <div class="col-lg-12">
                                 <input type="text" class="form-control" value="{{$user_details->zipcode}}" name="zipcode" id="zipcode">
                              </div>
                           </div>
                        </div>
                        <?php 
                        $is_checked =  '';
                        if($user_details->convert_estimate == '0'){
                           $is_checked = '';
                        }else{
                           $is_checked = 'checked';
                        }
                        ?>
                        <div class="col-xl-12">
                           <div class="form-group row">
                              <div class="col-lg-12 checkbox-profile">
                                 <input type="checkbox" id="convert_estimate" name="convert_estimate" {{$is_checked}} value="{{$user_details->convert_estimate}}">
                                 <label for="convert_estimate">Converts estimates to order automatically ?</label>
                              </div>
                           </div>
                        </div>
                     </div>
                      <div class="text-right">
                        <button type="submit" class="btn btn-primary">Save</button>
                     </div>
               </div>
            </div>
                </form>
            <div class="card">
               <div class="card-body">
                  <h4 class="card-title">Password Settings</h4>
                   <form method="POST" id="change_password" name="change_password"  enctype="multipart/form-data" action="{{route('seller.update_password')}}">
            @csrf
            <input type="hidden" name="sellerid" id="sellerid" value="{{$user_details->id}}">
                     <div class="row">
                        <div class="col-xl-12">
                           <div class="form-group row">
                              <label class="col-lg-12 col-form-label">Current Password</label>
                              <div class="col-lg-12">
                                 <input type="password" class="form-control" name="cpass" id="cpass">
                              </div>
                           </div>
                           @error('cpass')
                             <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                           @enderror
                        </div>
                        <div class="col-xl-6">
                           <div class="form-group row">
                              <label class="col-lg-12 col-form-label">New Password</label>
                              <div class="col-lg-12">
                                 <input type="password" class="form-control" name="newpass" id="newpass">
                              </div>
                           </div>
                           @error('newpass')
                             <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                           @enderror
                           <p id="passwordHelpBlock" class="form-text text-muted pb-0">
                                                       Your password must have atleast 8 characters.
                                                   </p>
                        </div>
                        <div class="col-xl-6">
                           <div class="form-group row">
                              <label class="col-lg-12 col-form-label">Confirm New Password</label>
                              <div class="col-lg-12">
                                 <input type="password" class="form-control" name="renewpass" id="renewpass">
                              </div>
                           </div>
                           @error('renewpass')
                                                   <span class="invalid-feedback" role="alert">
                                                       <strong>{{ $message }}</strong>
                                                   </span>
                                                   @enderror
                        </div>
                     </div>
                     <div class="text-right">
                        <button type="submit" class="btn btn-primary">Save</button>
                     </div>
               </div>
               </form>
            </div>         
         </div>
      </div>
   </div>
</div>
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
    $("form[name='profile_form']").validate({
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