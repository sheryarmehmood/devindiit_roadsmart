@extends('serviceprovider.layouts.app1')

@section('title', 'Forgot Password')
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
                       <h3 class="mb-2">Forgot Password?</h3>
                       <p class="mb-0 text-default">Enter your email to get a password reset link</p>
                    </div>
                </div>
                <form  name="forget_password" method="POST"
                        action="{{ route('password.email') }}">
                         @csrf
                         @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif
                    <div class="form-group mb-4">
                        <label class="control-label">Email</label>
                     <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary btn-block account-btn" type="submit">Reset Password</button>
                    </div>
                </form>
                <div class="text-left dont-have mt-3">Remember your password? <a href="{{route('seller.login')}}">Login</a></div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('assets/serviceprovider/js/jquery.validate.min.js') }}"></script>
<script>
    $(function() {
    $("form[name='forget_password']").validate({
    // Specify validation rules
    rules: {
        email: {
        required: true,
        email: true
      }
    },
    // Specify validation error messages
    messages: {
        email: "Please enter your valid email id"
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
