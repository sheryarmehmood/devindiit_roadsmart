@extends('admin.layouts.app2')

@section('title', 'Reset Password')
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
                       <h3 class="mb-2">Reset Password ?</h3>
                         <p class="mb-0 text-default">Enter new password</p>
                    </div>
                </div>
                <div id="response">
                            @if (isset($errors) && count($errors))
                            <!-- <ul> -->
                                @foreach($errors->all() as $error)
                                    <div class="alert alert-danger alert-dismissable">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        {{ $error }}
                                    </div>
                                @endforeach
                            <!-- </ul> -->
                            @endif
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
                <form  method="POST" action="{{ route($passwordUpdateRoute) }}"  name="password_reset">
                         @csrf
                          <input type="hidden" name="token" value="{{ $token }}">
                    <div class="form-group mb-4">
                       <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>
                    <div class="form-group mb-4">
                        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>
                    <div class="form-group mb-4">
                       <label for="password-confirm" class="col-md-5 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div> 
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary btn-block account-btn" type="submit">Reset Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('assets/serviceprovider/js/jquery.validate.min.js') }}"></script>
<script>
    $(function() {
    $("form[name='password_reset']").validate({
    // Specify validation rules
    rules: {
        email: {
        required: true,
        email: true
      },
        password: {
        required: true,
        minlength: 8
      },
      password_confirmation: "required"
    },
    // Specify validation error messages
    messages: {
        email: "Please enter your valid email id",
        password: {
        required: "Please enter your new password",
        minlength: "Password length should be atleast 8 characters"
      },
      password_confirmation: "Please re-enter the above password"
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
