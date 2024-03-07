@extends('admin.layouts.app1')
@section('title', 'Setting')
@section('content') 
<div class="content container-fluid">
   <div class="page-header">
      <div class="row">
         <div class="col">
            <h3 class="page-title">Setting</h3>
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
   <form method="POST" id="profile_form" name="profile_form"  enctype="multipart/form-data" >
      @csrf
      <input type="hidden" name="sellerid" id="sellerid" >
      <div class="row">
         <div class="col-md-4">
            <div class="profile_user">
               <div class="card">
                  <div class="card-body text-center">
                     <div class="user-image">
                        
                        <img class="rounded-circle img-thumbnail" id="imagePreview"/>
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
                  <!--<h4 class="card-title">Personal Information</h4>-->
                     <div class="col">
                         <div class="col-xl-6">
                           <div class="form-group row">
                              <label class="col-lg-12 col-form-label">App Name</label>
                              <div class="col-lg-12">
                                 <input type="text" class="form-control"  id="" name="">
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-6">
                           <div class="form-group row">
                              <label class="col-lg-12 col-form-label">Email Address</label>
                              <div class="col-lg-12">
                                 <input type="text" class="form-control"  id="email" name="email">
                              </div>
                           </div>
                           @error('email')
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
            </div>
        </form>
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
      email: {
        required: true,
        checkEmail: true
      },
      
    },
    // Specify validation error messages
    messages: {
      
      email: {
          required: "<strong>Please enter your email</strong>",
          checkEmail: "<strong>Please enter your valid email id</strong>",
        },
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