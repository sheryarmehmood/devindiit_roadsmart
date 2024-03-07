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
<div class="main-wrapper">
<div class="login-page">
<div class="login-body container">
<div class="loginbox login-mt">
<div class="login-right-wrap">
<div class="account-header">
<div class="account-logo text-center mb-4">
<a href="index.html">
<img src="{{ asset('assets/serviceprovider/img/logo.png') }}" alt="" class="img-fluid">
</a>
</div>
</div>
<div class="login-header text-center">
<h3><strong>Sign Up</strong></h3>
</div>
<form action="https://truelysell-admin.dreamguystech.com/template/index.html">
<div class="form-group">
<label class="control-label">Full Name</label>
<input class="form-control" type="text" placeholder="Enter your Full Name">
</div>
<div class="form-group">
<label class="control-label">Email</label>
<input class="form-control" type="text" placeholder="Enter your Email Address">
</div>
<div class="form-group mb-4">
<label class="control-label">Password</label>
<input class="form-control" type="password" placeholder="Enter your password">
</div>
<div class="form-group mb-4">
<label class="control-label">Confirm Password</label>
<input class="form-control" type="password" placeholder="Confirm your password">
</div>
<div class="text-center">
<button class="btn btn-primary btn-block account-btn" type="submit">Sign Up</button>
</div>
</form>



<div class="text-center dont-have">Already have an account? <a href="login.html">Login</a></div>
</div>
</div>
</div>
</div>
</div>
@endsection