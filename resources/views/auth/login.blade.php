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
                     <a href="index.html">
                     <img src="{{ asset('assets/serviceprovider/img/logo.png') }}" alt="" class="img-fluid">
                     </a>
                  </div>
               </div>
               <div class="login-header text-left mb-4">
                  <h3 class="mb-2">Login</h3>
                  <p class="mb-0 text-default">Continue to Roadsmart</p>
               </div>
               @if ($errors->has('password'))
                <div class="help-block mb-5" style="color: red;">
                    <strong>{{ $errors->first('password') }}</strong>
                </div>
                @endif
                @if ($errors->has('email'))
                <div class="help-block mb-5" style="color: red;">
                    <strong>{{ $errors->first('email') }}</strong>
                </div>
                @endif
              <form method="POST" action="{{ route('login') }}">
                  @csrf
                  <div class="form-group">
                     <label class="control-label">Username</label>
                     <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group mb-4">
                     <label class="control-label">Password</label>
                     <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                       @error('password')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                  </div>
                  <div class="form-group mb-4">
                     <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

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
               <div class="text-left forgotpass mt-3"><a href="{{ route('password.request') }}">Forgot Password?</a></div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection