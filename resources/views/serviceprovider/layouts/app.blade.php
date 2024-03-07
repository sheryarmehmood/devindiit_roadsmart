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
                    <li class="nav-item noti-dropdown">
                        <a href="{{route('seller.calender')}}" class="nav-link">
                            <i class="fas fa-calendar-alt"></i>
                        </a>
                    </li>
                    <li class="nav-item noti-dropdown">
                        <a href="{{route('seller.messages')}}" class="nav-link">
                            <i class="fas fa-comment"></i> <span class="badge badge-pill"></span>
                        </a>
                    </li>   
                    <li class="nav-item dropdown noti-dropdown">
                        <a href="javascript:void(0)" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <i class="far fa-bell"></i> <span class="badge badge-pill"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right notifications">
                            <div class="topnav-dropdown-header">
                                <span class="notification-title">Notifications</span>
                                <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                            </div>
                            <div class="noti-content">
                                <ul class="notification-list">
                                    <li class="notification-message">
                                        <a href="javascript:void(0)">
                                            <div class="media">
                                                <span class="avatar avatar-sm">
                                                    <img class="avatar-img rounded-circle" alt="" src="{{ asset('assets/serviceprovider/img/provider/provider-01.jpg') }}">
                                                </span>
                                                <div class="media-body">
                                                    <p class="noti-details">
                                                        <span class="noti-title">Thomas Herzberg placed a order successfully</span>
                                                    </p>
                                                    <p class="noti-time">
                                                        <span class="notification-time">15 Sep 2020 10:20 PM</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="javascript:void(0)">
                                            <div class="media">
                                                <span class="avatar avatar-sm">
                                                    <img class="avatar-img rounded-circle" alt="" src="{{ asset('assets/serviceprovider/img/provider/provider-02.jpg') }}">
                                                </span>
                                                <div class="media-body">
                                                    <p class="noti-details">
                                                        <span class="noti-title">Matthew Garcia  liked your services</span>
                                                    </p>
                                                    <p class="noti-time">
                                                        <span class="notification-time">13 Sep 2020 03:56 AM</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="javascript:void(0)">
                                            <div class="media">
                                                <span class="avatar avatar-sm">
                                                    <img class="avatar-img rounded-circle" alt="" src="{{ asset('assets/serviceprovider/img/provider/provider-03.jpg') }}">
                                                </span>
                                                <div class="media-body">
                                                    <p class="noti-details">
                                                        <span class="noti-title">Yolanda Potter's order has been completed</span>
                                                    </p>
                                                    <p class="noti-time">
                                                        <span class="notification-time">12 Sep 2020 09:25 PM</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="javascript:void(0)">
                                            <div class="media">
                                                <span class="avatar avatar-sm">
                                                    <img class="avatar-img rounded-circle" alt="User Image" src="{{ asset('assets/serviceprovider/img/provider/provider-04.jpg') }}">
                                                </span>
                                                <div class="media-body">
                                                    <p class="noti-details">
                                                        <span class="noti-title">Ricardo Flemings posted a review on product</span>
                                                    </p>
                                                    <p class="noti-time">
                                                        <span class="notification-time">11 Sep 2020 06:36 PM</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="javascript:void(0)">
                                            <div class="media">
                                                <span class="avatar avatar-sm">
                                                    <img class="avatar-img rounded-circle" alt="User Image" src="{{ asset('assets/serviceprovider/img/provider/provider-05.jpg') }}">
                                                </span>
                                                <div class="media-body">
                                                    <p class="noti-details">
                                                        <span class="noti-title">Maritza Wasson's order has been shipped</span>
                                                    </p>
                                                    <p class="noti-time">
                                                        <span class="notification-time">10 Sep 2020 08:42 AM</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="javascript:void(0)">
                                            <div class="media">
                                                <span class="avatar avatar-sm">
                                                    <img class="avatar-img rounded-circle" alt="User Image" src="{{ asset('assets/serviceprovider/img/provider/provider-07.jpg') }}">
                                                </span>
                                                <div class="media-body">
                                                    <p class="noti-details">
                                                        <span class="noti-title">Richard Hughes placed a order successfully</span>
                                                    </p>
                                                    <p class="noti-time">
                                                        <span class="notification-time">8 Sep 2020 06:23 AM</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="topnav-dropdown-footer">
                                <a href="{{route('seller.notifications')}}">View all Notifications</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="javascript:void(0)" class="dropdown-toggle user-link  nav-link" data-toggle="dropdown">
                            <span class="user-img">
                                <?php
                                $result1 = substr(Auth::user()->first_name, 0, 1);
                                $result2 = substr(Auth::user()->last_name, 0, 1);
                                $name1 = strtoupper($result1);
                                $name2 = strtoupper($result2); 
                                ?>
                                 <?php
                           if(Auth::user()->avatar != '') {
                              $image =  asset('/assets/serviceprovider/img/seller/' .Auth::user()->avatar); 
                           }else { 
                              $image =  asset('/assets/serviceprovider/img/seller/default.jpg'); 
                           }
                        ?>
                                <!--<span class="textName">{{$name1}} {{$name2}}</span>-->
                               
                                <!-- <img class="rounded-circle" src="assets/img/user.jpg" width="40" alt="Admin"> -->
                                 <img class="rounded-circle " src="{{$image}}" width="40" alt="Admin" />
                                  <span class="pl-1">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</span>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{route('seller.my_profile')}}">Profile</a>
                            <a class="dropdown-item" href="{{route('seller.logout')}}">Logout</a>
                        </div>
                    </li>
                </ul>
            </div> 
    <div class="page-wrapper">
            <div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="{{ (\Request::route()->getName() =='seller.dashboard') ?  'menu-item-active ' : '' }}">
                    <a href="{{route('seller.index')}}"><i class="fas fa-columns"></i> <span>Dashboard</span></a>
                </li>
				<!--li class="child-menu" class="{{ (\Request::route()->getName() =='seller.estimates') ?  'menu-item-active ' : '' }}"-->
				<li class="child-menu">
                            <a href="{{route('seller.estimates')}}" class=""><i class="fas fa-calculator"></i> <span>Requests</span></a>
                        <span class="toggle-down" data-toggle="collapse" href="#requestdrop" role="button" aria-expanded="false" aria-controls="collapseExample"></span>
					    <span class="badge nav_badgecount">2</span>
					<div class="submenu-dropdown collapse" id="requestdrop">
						  <ul class="submenu-dropdown">
								<li class="">
									<a href="{{route('seller.request_draft')}}" class=""> <span>Drafts</span></a>
								</li>
								<li class="">
									<a href="{{route('seller.jobs')}}" class=""> <span>Jobs</span></a>
								</li>
						  </ul>
					</div>                            
                </li>
                <!---li class="{{ (\Request::route()->getName() =='seller.quotation') ?  'menu-item-active ' : '' }}">
                    <a href="{{route('seller.quotation')}}"><i class="fas fa-quote-left"></i> <span>Requests</span></a>
                </li-->
			
	
                <li class="child-menu">
                    <a href="{{route('seller.orders')}}"><i class="fas fa-shopping-cart"></i> <span>Orders</span></a><span class="toggle-down" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"></span>
					<span class="badge nav_badgecount">13</span>
					<div class="submenu-dropdown collapse" id="collapseExample">
						  <ul class="submenu-dropdown">
								<li class="{{ (\Request::route()->getName() =='seller.drafts') ?  'menu-item-active ' : '' }}">
									<a href="{{route('seller.drafts')}}" class=""> <span>Drafts</span></a>
								</li>
								<li class="{{ (\Request::route()->getName() =='seller.abondonedcheckout') ?  'menu-item-active ' : '' }}">
									<a href="{{route('seller.abondonedcheckout')}}" class=""> <span>Abandoned Checkouts </span></a>
								</li>
						  </ul>
					</div>


                </li>
                <!--li class="">
                <a href="services-provider.php"><i class="fas fa-bullhorn"></i> <span>Services</span></a>
            </li-->
            <li class="child-menu">
                <a href="{{route('seller.products')}}"><i class="fas fa-shopping-bag"></i> <span>Products</span></a><span class="toggle-down" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2"></span>
				
				<div class="submenu-dropdown collapse" id="collapseExample2">
					 <ul class="submenu-dropdown">
                    <!---li class="{{ (\Request::route()->getName() =='seller.products') ?  'menu-item-active ' : '' }}">
                        <a href="{{route('seller.products')}}" class=""> <span>All Products</span></a>
					</li--->
					<li class="{{ (\Request::route()->getName() =='seller.inventory') ?  'menu-item-active ' : '' }}">
						<a href="{{route('seller.inventory')}}" class=""> <span>Inventory</span></a>
				    </li>
					<li class="{{ (\Request::route()->getName() =='seller.packages') ?  'menu-item-active ' : '' }}">
						<a href="{{route('seller.transfers')}}" class=""> <span>Transfers </span></a>
				    </li>
					
					<li class="{{ (\Request::route()->getName() =='seller.bundles') ?  'menu-item-active ' : '' }}">
						<a href="#" class=""> <span>Bundles</span></a>
				    </li>
                </ul>
				</div>
               
            </li>
			
			 <li class="child-menu">
                <a href="{{route('seller.services')}}"><i class="fas fa-cogs"></i> <span>Services</span></a> <span class="toggle-down" data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample3"></span>
				
				<div class="submenu-dropdown collapse" id="collapseExample3">
				  <ul class="submenu-dropdown">
                    <li class="{{ (\Request::route()->getName() =='seller.services_draft') ?  'menu-item-active ' : '' }}">
                        <a href="{{route('seller.services_draft')}}" class=""> <span>Drafts</span></a>
                    </li>
				   </ul>
				</div>
              
            </li>
			
			
			<!---li class="">
                    <a href="{{route('seller.services')}}"><i class="fas fa-cogs"></i> <span>Services </span></a>
            </li--->
			<li class="">
                    <a href="{{route('seller.customers')}}"><i class="fas fa-users"></i> <span>Customers </span></a>
            </li>
            <li class="{{ (\Request::route()->getName() =='seller.reviews') ?  'menu-item-active ' : '' }}">
                    <a href="{{route('seller.reviews')}}"><i class="fas fa-star"></i> <span>Reviews / Ratings</span></a>
            </li> 
            <li class="child-menu">
                <a href="javascript:void(0)"><i class="fas fa-chart-bar"></i> <span>Analytics</span></a>
				
				<span class="toggle-down" data-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample4"></span>
				
				<div class="submenu-dropdown collapse" id="collapseExample4">
				  <ul class="submenu-dropdown">
                     <li class="{{ (\Request::route()->getName() =='seller.reports') ?  'menu-item-active ' : '' }}">
                        <a href="{{route('seller.reports')}}" class=""> <span>Report</span></a>         
                    </li>
				   </ul>
				</div>
            </li>
            

            <!--li  class="">
            <a href="calender.php"><i class="fas fa-calendar-alt"></i> <span>Bookings/Calendar</span></a>
        </li-->
            <h3 class="tagsales">Sales Channels</h3>
            <li class="{{ (\Request::route()->getName() =='seller.online_store') ?  'menu-item-active ' : '' }}">
                <a href="{{route('seller.online_store')}}" class=""><i class="fas fa-store"></i> <span>Online Store</span></a>
                <a href="{{route('seller.services')}}" class=""><i class="fas fa-bullhorn"></i> <span>Service Marketplace</span></a>
            </li>
        <li class="{{ (\Request::route()->getName() =='seller.settings') ?  'menu-item-active ' : '' }}">
            <a href="{{route('seller.store_details')}}"><i class="fas fa-cog"></i> <span>Settings</span></a>
        </li>
        <!--li class="submenu">
        <a href="javascript:void(0)"><i class="fas fa-shopping-bag"></i> <span>Settings</span><span class="menu-arrow"></span></a>
                                        <ul>
                                                <li>
                                                        <a href="javascript:void(0)"> <span>Store Details</span></a>
                                                        <a href="javascript:void(0)"> <span>Plan</span></a>
                                                        <a href="javascript:void(0)"> <span>Users & Permissions </span></a>
                <a href="bank-details.php" class=""> <span>Payments</span></a>
                <a href="javascript:void(0)"> <span>Shipping & Delivery </span></a>
                <a href="javascript:void(0)"> <span>Locations</span></a>
                <a href="javascript:void(0)"> <span>Sales Channels</span></a>
            </li>
        </ul>
    </li-->
    <!--li  class="">
    <a href="package.php"><i class="fas fa-box"></i> <span>Packages</span></a>
</li-->
<!--li  class="">
<a href="review.php"><i class="fas fa-star-half-alt"></i> <span>Reviews / Ratings</span></a>
</li-->
<!--li  class="">
<a href="transaction.php"><i class="fas fa-money-check-alt"></i> <span>Transactions</span></a>
</li-->
<!--li  class="">
<a href="bank-details.php"><i class="fas fa-university"></i> <span>Bank Details</span></a>
</li-->
<!--li  class="">
<a href="messages.php"><i class="fas fa-comment"></i> <span>Messages</span></a>
</li-->
<!--li  class="">
<a href="notification.php"><i class="fas fa-bell"></i> <span>Notification</span></a>
</li-->
<!--li  class="">
<a href="profile-setting.php"><i class="fas fa-cog"></i> <span>Profile Settings</span></a>
</li-->
<!--li>
<a href="login.php"><i class="fas fa-sign-out-alt"></i> <span>Logout</span></a>
</li-->
<!--   <li class="submenu">
<a href="#"><i class="fab fa-wpforms"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="form-basic-inputs.html">Basic Inputs </a></li>
<li><a href="form-input-groups.html">Input Groups </a></li>
<li><a href="form-horizontal.html">Horizontal Form </a></li>
<li><a href="form-vertical.html"> Vertical Form </a></li>
<li><a href="form-mask.html"> Form Mask </a></li>
<li><a href="form-validation.html"> Form Validation </a></li>
</ul>
</li> -->

</ul>
</div>
</div>
</div>  
        @yield('content')
    </div>

       

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

<script src="https://zebrazookeeper.com/assets//admin/assets/plugins/global/plugins.bundle.js"></script>
<script src="https://zebrazookeeper.com/assets//admin/assets/plugins/plugins/custom/prismjs/prismjs.bundle.js"></script>
<script src="https://zebrazookeeper.com/assets//admin/assets/js/scripts.bundle.js"></script>
<script src="https://zebrazookeeper.com/assets//admin/assets/plugins/datatables/datatables.bundle.js"></script>
<script src="https://zebrazookeeper.com/assets//admin/assets/plugins/datatables/pagination.js"></script>
<script>

  // https://github.com/k-ivan/Tags
(function() {

  'use strict';

  // Helpers
  function $$(selectors, context) {
    return (typeof selectors === 'string') ? (context || document).querySelectorAll(selectors) : [selectors];
  }
  function $(selector, context) {
    return (typeof selector === 'string') ? (context || document).querySelector(selector) : selector;
  }
  function create(tag, attr) {
    var element = document.createElement(tag);
    if(attr) {
      for(var name in attr) {
        if(element[name] !== undefined) {
          element[name] = attr[name];
        }
      }
    }
    return element;
  }
  function whichTransitionEnd() {
    var root = document.documentElement;
    var transitions = {
      'transition'       : 'transitionend',
      'WebkitTransition' : 'webkitTransitionEnd',
      'MozTransition'    : 'mozTransitionEnd',
      'OTransition'      : 'oTransitionEnd otransitionend'
    };

    for(var t in transitions){
      if(root.style[t] !== undefined){
        return transitions[t];
      }
    }
    return false;
  }
  function oneListener(el, type, fn, capture) {
    capture = capture || false;
    el.addEventListener(type, function handler(e) {
      fn.call(this, e);
      el.removeEventListener(e.type, handler, capture)
    }, capture);
  }
  function hasClass(cls, el) {
    return new RegExp('(^|\\s+)' + cls + '(\\s+|$)').test(el.className);
  }
  function addClass(cls, el) {
    if( ! hasClass(cls, el) )
      return el.className += (el.className === '') ? cls : ' ' + cls;
  }
  function removeClass(cls, el) {
    el.className = el.className.replace(new RegExp('(^|\\s+)' + cls + '(\\s+|$)'), '');
  }
  function toggleClass(cls, el) {
    ( ! hasClass(cls, el)) ? addClass(cls, el) : removeClass(cls, el);
  }

  function Tags(tag) {

    var el = $(tag);

    if(el.instance) return;
    el.instance = this;

    var type = el.type;
    var transitionEnd = whichTransitionEnd();

    var tagsArray = [];
    var KEYS = {
      ENTER: 13,
      COMMA: 188,
      BACK: 8
    };
    var isPressed = false;

    var timer;
    var wrap;
    var field;

    function init() {

      // create and add wrapper
      wrap = create('div', {
        'className': 'tags-container',
      });
      field = create('input', {
        'type': 'text',
        'className': 'tag-input',
        'placeholder': el.placeholder || ''
      });

      wrap.appendChild(field);

      if(el.value.trim() !== '') {
        hasTags();
      }

      el.type = 'hidden';
      el.parentNode.insertBefore(wrap, el.nextSibling);

      wrap.addEventListener('click', btnRemove, false);
      wrap.addEventListener('keydown', keyHandler, false);
      wrap.addEventListener('keyup', backHandler, false);
    }

    function hasTags() {
      var arr = el.value.trim().split(',');
      arr.forEach(function(item) {
        item = item.trim();
        if(~tagsArray.indexOf(item)) {
          return;
        }
        var tag = createTag(item);
        tagsArray.push(item);
        wrap.insertBefore(tag, field);
      });
    }

    function createTag(name) {
      var tag = create('div', {
        'className': 'tag',
        'innerHTML': '<span class="tag__name">' + name + '</span>'+
                     '<button class="tag__remove">&times;</button>'
      });
//       var tagName = create('span', {
//         'className': 'tag__name',
//         'textContent': name
//       });
//       var delBtn = create('button', {
//         'className': 'tag__remove',
//         'innerHTML': '&times;'
//       });
      
//       tag.appendChild(tagName);
//       tag.appendChild(delBtn);
      return tag;
    }

    function btnRemove(e) {
      e.preventDefault();
      if(e.target.className === 'tag__remove') {
        var tag  = e.target.parentNode;
        var name = $('.tag__name', tag);
        wrap.removeChild(tag);
        tagsArray.splice(tagsArray.indexOf(name.textContent), 1);
        el.value = tagsArray.join(',')
      }
      field.focus();
    }

    function keyHandler(e) {

      if(e.target.tagName === 'INPUT' && e.target.className === 'tag-input') {

        var target = e.target;
        var code = e.which || e.keyCode;

        if(field.previousSibling && code !== KEYS.BACK) {
          removeClass('tag--marked', field.previousSibling);
        }

        var name = target.value.trim();

        // if(code === KEYS.ENTER || code === KEYS.COMMA) {
        if(code === KEYS.ENTER) {

          target.blur();

          addTag(name);

          if(timer) clearTimeout(timer);
          timer = setTimeout(function() { target.focus(); }, 10 );
        }
        else if(code === KEYS.BACK) {
          if(e.target.value === '' && !isPressed) {
            isPressed = true;
            removeTag();
          }
        }
      }
    }
    function backHandler(e) {
      isPressed = false;
    }

    function addTag(name) {

      // delete comma if comma exists
      name = name.toString().replace(/,/g, '').trim();

      if(name === '') return field.value = '';

      if(~tagsArray.indexOf(name)) {

        var exist = $$('.tag', wrap);

        Array.prototype.forEach.call(exist, function(tag) {
          if(tag.firstChild.textContent === name) {

            addClass('tag--exists', tag);

            if(transitionEnd) {
              oneListener(tag, transitionEnd, function() {
                removeClass('tag--exists', tag);
              });
            } else {
              removeClass('tag--exists', tag);
            }


          }

        });

        return field.value = '';
      }

      var tag = createTag(name);
      wrap.insertBefore(tag, field);
      tagsArray.push(name);
      field.value = '';
      el.value += (el.value === '') ? name : ',' + name;
    }

    function removeTag() {
      if(tagsArray.length === 0) return;

      var tags = $$('.tag', wrap);
      var tag = tags[tags.length - 1];

      if( ! hasClass('tag--marked', tag) ) {
        addClass('tag--marked', tag);
        return;
      }

      tagsArray.pop();

      wrap.removeChild(tag);

      el.value = tagsArray.join(',');
    }

    init();

    /* Public API */

    this.getTags = function() {
      return tagsArray;
    }

    this.clearTags = function() {
      if(!el.instance) return;
      tagsArray.length = 0;
      el.value = '';
      wrap.innerHTML = '';
      wrap.appendChild(field);
    }

    this.addTags = function(name) {
      if(!el.instance) return;
      if(Array.isArray(name)) {
        for(var i = 0, len = name.length; i < len; i++) {
          addTag(name[i])
        }
      } else {
        addTag(name);
      }
      return tagsArray;
    }

    this.destroy = function() {
      if(!el.instance) return;

      wrap.removeEventListener('click', btnRemove, false);
      wrap.removeEventListener('keydown', keyHandler, false);
      wrap.removeEventListener('keyup', keyHandler, false);

      wrap.parentNode.removeChild(wrap);

      tagsArray = null;
      timer = null;
      wrap = null;
      field = null;
      transitionEnd = null;

      delete el.instance;
      el.type = type;
    }
  }

  window.Tags = Tags;

})();

// Use
var tags = new Tags('.tagged');

document.getElementById('get').addEventListener('click', function(e) {
  e.preventDefault();
  alert(tags.getTags());
});
document.getElementById('clear').addEventListener('click', function(e) {
  e.preventDefault();
  tags.clearTags();
});
document.getElementById('add').addEventListener('click', function(e) {
  e.preventDefault();
  tags.addTags('New');
});
document.getElementById('addArr').addEventListener('click', function(e) {
  e.preventDefault();
  tags.addTags(['Steam Machines', 'Nintendo Wii U', 'Shield Portable']);
});
document.getElementById('destroy').addEventListener('click', function(e) {
  e.preventDefault();
  if(this.textContent === 'destroy') {
    tags.destroy();
    this.textContent = 'reinit';
  } else {
    this.textContent = 'destroy';
    tags = new Tags('.tagged');
  }
  
});

</script>


<script>

 $(document).ready(function() {
 $('.my-select').niceSelect();
 });

$('.label.ui.dropdown')
  .dropdown();

$('.no.label.ui.dropdown')
  .dropdown({
  useLabels: false
});

$('.ui.button').on('click', function () {
  $('.ui.dropdown')
    .dropdown('restore defaults')
})

$(document).ready(function(){
  $('.tooltips').append("<span></span>");
  $('.tooltips:not([tooltip-position])').attr('tooltip-position','bottom');


  $(".tooltips").mouseenter(function(){
    $(this).find('span').empty().append($(this).attr('tooltip'));
  });
});


</script>
<script>

  // https://github.com/k-ivan/Tags
(function() {

  'use strict';

  // Helpers
  function $$(selectors, context) {
    return (typeof selectors === 'string') ? (context || document).querySelectorAll(selectors) : [selectors];
  }
  function $(selector, context) {
    return (typeof selector === 'string') ? (context || document).querySelector(selector) : selector;
  }
  function create(tag, attr) {
    var element = document.createElement(tag);
    if(attr) {
      for(var name in attr) {
        if(element[name] !== undefined) {
          element[name] = attr[name];
        }
      }
    }
    return element;
  }
  function whichTransitionEnd() {
    var root = document.documentElement;
    var transitions = {
      'transition'       : 'transitionend',
      'WebkitTransition' : 'webkitTransitionEnd',
      'MozTransition'    : 'mozTransitionEnd',
      'OTransition'      : 'oTransitionEnd otransitionend'
    };

    for(var t in transitions){
      if(root.style[t] !== undefined){
        return transitions[t];
      }
    }
    return false;
  }
  function oneListener(el, type, fn, capture) {
    capture = capture || false;
    el.addEventListener(type, function handler(e) {
      fn.call(this, e);
      el.removeEventListener(e.type, handler, capture)
    }, capture);
  }
  function hasClass(cls, el) {
    return new RegExp('(^|\\s+)' + cls + '(\\s+|$)').test(el.className);
  }
  function addClass(cls, el) {
    if( ! hasClass(cls, el) )
      return el.className += (el.className === '') ? cls : ' ' + cls;
  }
  function removeClass(cls, el) {
    el.className = el.className.replace(new RegExp('(^|\\s+)' + cls + '(\\s+|$)'), '');
  }
  function toggleClass(cls, el) {
    ( ! hasClass(cls, el)) ? addClass(cls, el) : removeClass(cls, el);
  }

  function Tags(tag) {

    var el = $(tag);

    if(el.instance) return;
    el.instance = this;

    var type = el.type;
    var transitionEnd = whichTransitionEnd();

    var tagsArray = [];
    var KEYS = {
      ENTER: 13,
      COMMA: 188,
      BACK: 8
    };
    var isPressed = false;

    var timer;
    var wrap;
    var field;

    function init() {

      // create and add wrapper
      wrap = create('div', {
        'className': 'tags-container',
      });
      field = create('input', {
        'type': 'text',
        'className': 'tag-input',
        'placeholder': el.placeholder || ''
      });

      wrap.appendChild(field);

      if(el.value.trim() !== '') {
        hasTags();
      }

      el.type = 'hidden';
      el.parentNode.insertBefore(wrap, el.nextSibling);

      wrap.addEventListener('click', btnRemove, false);
      wrap.addEventListener('keydown', keyHandler, false);
      wrap.addEventListener('keyup', backHandler, false);
    }

    function hasTags() {
      var arr = el.value.trim().split(',');
      arr.forEach(function(item) {
        item = item.trim();
        if(~tagsArray.indexOf(item)) {
          return;
        }
        var tag = createTag(item);
        tagsArray.push(item);
        wrap.insertBefore(tag, field);
      });
    }

    function createTag(name) {
      var tag = create('div', {
        'className': 'tag',
        'innerHTML': '<span class="tag__name">' + name + '</span>'+
                     '<button class="tag__remove">&times;</button>'
      });
//       var tagName = create('span', {
//         'className': 'tag__name',
//         'textContent': name
//       });
//       var delBtn = create('button', {
//         'className': 'tag__remove',
//         'innerHTML': '&times;'
//       });
      
//       tag.appendChild(tagName);
//       tag.appendChild(delBtn);
      return tag;
    }

    function btnRemove(e) {
      e.preventDefault();
      if(e.target.className === 'tag__remove') {
        var tag  = e.target.parentNode;
        var name = $('.tag__name', tag);
        wrap.removeChild(tag);
        tagsArray.splice(tagsArray.indexOf(name.textContent), 1);
        el.value = tagsArray.join(',')
      }
      field.focus();
    }

    function keyHandler(e) {

      if(e.target.tagName === 'INPUT' && e.target.className === 'tag-input') {

        var target = e.target;
        var code = e.which || e.keyCode;

        if(field.previousSibling && code !== KEYS.BACK) {
          removeClass('tag--marked', field.previousSibling);
        }

        var name = target.value.trim();

        // if(code === KEYS.ENTER || code === KEYS.COMMA) {
        if(code === KEYS.ENTER) {

          target.blur();

          addTag(name);

          if(timer) clearTimeout(timer);
          timer = setTimeout(function() { target.focus(); }, 10 );
        }
        else if(code === KEYS.BACK) {
          if(e.target.value === '' && !isPressed) {
            isPressed = true;
            removeTag();
          }
        }
      }
    }
    function backHandler(e) {
      isPressed = false;
    }

    function addTag(name) {

      // delete comma if comma exists
      name = name.toString().replace(/,/g, '').trim();

      if(name === '') return field.value = '';

      if(~tagsArray.indexOf(name)) {

        var exist = $$('.tag', wrap);

        Array.prototype.forEach.call(exist, function(tag) {
          if(tag.firstChild.textContent === name) {

            addClass('tag--exists', tag);

            if(transitionEnd) {
              oneListener(tag, transitionEnd, function() {
                removeClass('tag--exists', tag);
              });
            } else {
              removeClass('tag--exists', tag);
            }


          }

        });

        return field.value = '';
      }

      var tag = createTag(name);
      wrap.insertBefore(tag, field);
      tagsArray.push(name);
      field.value = '';
      el.value += (el.value === '') ? name : ',' + name;
    }

    function removeTag() {
      if(tagsArray.length === 0) return;

      var tags = $$('.tag', wrap);
      var tag = tags[tags.length - 1];

      if( ! hasClass('tag--marked', tag) ) {
        addClass('tag--marked', tag);
        return;
      }

      tagsArray.pop();

      wrap.removeChild(tag);

      el.value = tagsArray.join(',');
    }

    init();

    /* Public API */

    this.getTags = function() {
      return tagsArray;
    }

    this.clearTags = function() {
      if(!el.instance) return;
      tagsArray.length = 0;
      el.value = '';
      wrap.innerHTML = '';
      wrap.appendChild(field);
    }

    this.addTags = function(name) {
      if(!el.instance) return;
      if(Array.isArray(name)) {
        for(var i = 0, len = name.length; i < len; i++) {
          addTag(name[i])
        }
      } else {
        addTag(name);
      }
      return tagsArray;
    }

    this.destroy = function() {
      if(!el.instance) return;

      wrap.removeEventListener('click', btnRemove, false);
      wrap.removeEventListener('keydown', keyHandler, false);
      wrap.removeEventListener('keyup', keyHandler, false);

      wrap.parentNode.removeChild(wrap);

      tagsArray = null;
      timer = null;
      wrap = null;
      field = null;
      transitionEnd = null;

      delete el.instance;
      el.type = type;
    }
  }

  window.Tags = Tags;

})();

// Use
var tags = new Tags('.tagged2');

document.getElementById('get').addEventListener('click', function(e) {
  e.preventDefault();
  alert(tags.getTags());
});
document.getElementById('clear').addEventListener('click', function(e) {
  e.preventDefault();
  tags.clearTags();
});
document.getElementById('add').addEventListener('click', function(e) {
  e.preventDefault();
  tags.addTags('New');
});
document.getElementById('addArr').addEventListener('click', function(e) {
  e.preventDefault();
  tags.addTags(['Steam Machines', 'Nintendo Wii U', 'Shield Portable']);
});
document.getElementById('destroy').addEventListener('click', function(e) {
  e.preventDefault();
  if(this.textContent === 'destroy') {
    tags.destroy();
    this.textContent = 'reinit';
  } else {
    this.textContent = 'destroy';
    tags = new Tags('.tagged2');
  }
  
});

</script>
@yield('scripts')
</body>
</html>