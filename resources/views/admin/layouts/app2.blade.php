<?php $activePage = basename($_SERVER['PHP_SELF'], ".php");
?>
<!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
       <!-- <title>Road Smart Solutions</title> -->
       <title>@yield('title')</title>
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
       <!-- <link rel="stylesheet" href="{{ asset('assets/serviceprovider/css/responsive.css') }}"> -->
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
                                <span class="textName">AD</span>
                                <span class="pl-1">Admin</span>
                               <!--  <img class="rounded-circle" src="assets/img/user.jpg" width="40" alt="Admin"> -->
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{route('seller.my_profile')}}">Profile</a>
                            <a class="dropdown-item" href="login.php">Logout</a>
                        </div>
                    </li>
                </ul>
            </div> 
    

            <div class="row">
                @yield('content')
            </div>      

<script src="{{ asset('assets/serviceprovider/js/jquery_3.5.1/jquery.min.js') }}"></script>
<script src="{{ asset('assets/serviceprovider/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/serviceprovider/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/serviceprovider/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('assets/serviceprovider/js/moment.min.js') }}"></script>
<script src="{{ asset('assets/serviceprovider/js/bootstrap-datetimepicker.min.js') }}"></script>
<script src="{{ asset('assets/serviceprovider/plugins/datatables/datatables.min.js') }}"></script>
<script src="{{ asset('assets/serviceprovider/js/jquery-ui.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.3.1/fullcalendar.js"></script>
<!--script src="https://www.jqueryscript.net/demo/Full-Size-Drag-Drop-Calendar-Plugin-FullCalendar/fullcalendar.min.js"></script-->
<script src="{{ asset('assets/serviceprovider/plugins/fullcalendar/jquery.fullcalendar.js') }}"></script>
<script src="{{ asset('assets/serviceprovider/js/jquery.nice-select.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/serviceprovider/js/semantic/semantic.min.js') }}"></script>
<script src="{{ asset('assets/serviceprovider/js/dropdowncustom.js') }}"></script>
<script src="{{ asset('assets/serviceprovider/js/admin.js') }}"></script>
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
@yield('scripts')
</body>
</html>