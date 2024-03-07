@extends('serviceprovider.layouts.app1')

@section('title', 'Login')
@section('content')   
<style>
   .header {
   display: none;
   }
   .main-wrapper
   {
   padding: 0;
   }
</style>
<div class="main-wrapper lgbg" style="background-image: url('{{ asset('assets/serviceprovider/img/loginbg.svg') }}');">
   <div class="login-page">
      <div class="login-body container">
         <div class="loginbox">
            <div class="login-right-wrap">
               <div class="account-header">
                  <div class="account-logo text-left mb-4">
                     <a href="login">
                     <img src="{{ asset('assets/serviceprovider/img/logo.png') }}" alt="" class="img-fluid">
                     </a>
                  </div>
               </div>
               <div class="login-header text-left mb-4">
                  <h3 class="mb-2">  Administrator Login</h3>
                  
               </div>
               
               <!-- @if ($errors->has('password'))
                <div class="help-block mb-5" style="color: red;">
                    <strong>{{ $errors->first('password') }}</strong>
                </div>
                @endif
                @if ($errors->has('email'))
                <div class="help-block mb-5" style="color: red;">
                    <strong>{{ $errors->first('email') }}</strong>
                </div>
                @endif -->
              <form method="POST" action="{{ route('admin.loginAdmin') }}" name="signIn">
                  @csrf
                  <div class="form-group">
                     <label class="control-label">Email</label>
                     <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group mb-4">
                     <label class="control-label">Password</label>
                     <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="current-password">
                     <i class="far fa-eye" id="togglePassword" style="position: relative;right: 24px;top: -32px;float: right;"></i>
                       @error('password')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                  </div>
                  <div class="form-group mb-4">
                     <div class="">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php if(isset($_COOKIE['admin_email'])){echo 'checked';}?>>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                  </div>
                  <div class="text-center">
                     <button class="btn btn-primary btn-block account-btn" type="submit">Login</button>
                  </div>
               </form>
               <div class="text-left forgotpass mt-3"><a href="{{ route('admin.password.request')}}">Forgot Password?</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('assets/serviceprovider/js/jquery.validate.min.js') }}"></script>
<script>
    $(function() {
    $("form[name='signIn']").validate({
    // Specify validation rules
    rules: {
    email: {
        required: true,
        email: true
      },
      password: {
        required: true,
        minlength: 8
      }
    },
    // Specify validation error messages
    messages: {
      email: {
          required: "<strong>Please enter your email</strong>",
          email: "<strong>Please enter your valid email id</strong>",
        },
      password: {
          required: "<strong>Please enter your password</strong>",
          minlength: "<strong>Password length should be atleast 8 characters.</strong>"
        }
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });
});

    $(document).ready(function(){
       const togglePassword = document.querySelector('#togglePassword');
     const password = document.querySelector('#password');
    
     togglePassword.addEventListener('click', function (e) {
       // toggle the type attribute
       const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
       password.setAttribute('type', type);
       // toggle the eye slash icon
       this.classList.toggle('fa-eye-slash');
   });
   });
</script>
@endsection