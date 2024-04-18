<?php $activePage = basename($_SERVER['PHP_SELF'], ".php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
  <!-- <title>Road Smart Solutions</title> -->
  <title>@yield('title')</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="shortcut icon" href="{{ asset('assets/serviceprovider/img/favicon.png') }}">
  <link rel="stylesheet" href="{{ asset('assets/serviceprovider/plugins/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/serviceprovider/plugins/fontawesome/css/fontawesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/serviceprovider/plugins/fontawesome/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/serviceprovider/css/bootstrap-datetimepicker.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/serviceprovider/plugins/datatables/datatables.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/serviceprovider/plugins/fullcalendar/fullcalendar.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/serviceprovider/css/animate.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/serviceprovider/css/nice-select.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/serviceprovider/css/semantic/semantic.min.css') }}">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Spartan:wght@300;400;500;600;700&display=swap">
  <link rel="stylesheet" href="{{ asset('assets/serviceprovider/css/admin.css') }}">
  <!--<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedheader/3.2.0/css/fixedHeader.dataTables.min.css">-->
  <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.1.0/css/buttons.dataTables.min.css">-->
  <!-- <link rel="stylesheet" href="{{ asset('assets/serviceprovider/css/responsive.css') }}"> -->
  @yield('head')
</head>

<body>

  <div class="main-wrapper">
    <div class="header">
      <div class="header-left">
        <a href="{{route('seller.index')}}" class="logo logo-small">
          <img src="{{ asset('assets/serviceprovider/img/logo-icon.png') }}" alt="Logo" width="30" height="30">
        </a>
      </div>
      <a href="javascript:void(0);" id="toggle_btn">
        <i class="fas fa-align-left"></i>
      </a>
      <a class="mobile_btn" id="mobile_btn" href="javascript:void(0);">
        <i class="fas fa-align-left"></i>
      </a>
      <ul class="nav user-menu">
        <li class="nav-item dropdown noti-dropdown" style=" margin-right: 20px">
          <a href="javascript:void(0)" class="dropdown-toggle user-link  nav-link" data-toggle="dropdown">
            <i class="far fa-user" style="margin-left: 3px;"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right ">
            <a class="dropdown-item" href="{{route('admin.profile')}}">Profile</a>
            <a class="dropdown-item" href="{{route('admin.logout')}}">Logout</a>
          </div>
        </li>
      </ul>
    </div>
    <div class="page-wrapper">
      @include('admin.layouts.sidebar')
      
      @yield('content')
    </div>

    @include('admin.layouts.footer')

    <!--<script src="{{ asset('assets/serviceprovider/js/jquery_3.5.1/jquery.min.js') }}"></script>-->
    <!--<script src="{{ asset('assets/serviceprovider/js/popper.min.js') }}"></script>-->
    <!--<script src="{{ asset('assets/serviceprovider/plugins/bootstrap/js/bootstrap.min.js') }}"></script>-->
    <!--<script src="{{ asset('assets/serviceprovider/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>-->
    <!--<script src="{{ asset('assets/serviceprovider/js/moment.min.js') }}"></script>-->
    <!--<script src="{{ asset('assets/serviceprovider/js/bootstrap-datetimepicker.min.js') }}"></script>-->
    <!--<script src="{{ asset('assets/serviceprovider/plugins/datatables/datatables.min.js') }}"></script>-->
    <!--<script src="{{ asset('assets/serviceprovider/js/jquery-ui.min.js') }}"></script>-->
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.3.1/fullcalendar.js"></script>-->
    <!--<script src="{{ asset('assets/serviceprovider/plugins/fullcalendar/jquery.fullcalendar.js') }}"></script>-->
    <!--<script src="{{ asset('assets/serviceprovider/js/jquery.nice-select.min.js') }}"></script>-->
    <!--<script type="text/javascript" src="{{ asset('assets/serviceprovider/js/semantic/semantic.min.js') }}"></script>-->
    <!--<script src="{{ asset('assets/serviceprovider/js/dropdowncustom.js') }}"></script>-->
    <!--<script src="{{ asset('assets/serviceprovider/js/admin.js') }}"></script>-->
    <!--<script src="{{ asset('assets/serviceprovider/js/jquery.validate.min.js') }}"></script>-->

</body>

</html>