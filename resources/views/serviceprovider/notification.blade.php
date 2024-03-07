@extends('serviceprovider.layouts.app')

@section('title', 'Notifications')
@section('content')
<div class="content container-fluid">
  <div class="page-header">
    <div class="row">
        <div class="col-12">
            <h3 class="page-title">Notification</h3>
        </div>
    </div>
  </div>
  <div class="box-content">
     <div class="row clearfix">
        <div class="col-lg-12">
           <div class="card chat-app">
              <div id="plist" class="people-list">
                 <ul class="list-unstyled chat-list mt-2 mb-0">
                    <li class="clearfix"> <img src="{{ asset('assets/serviceprovider/img/customer/user-04.jpg') }}" alt="avatar">
                       <div class="about">
                          <div class="name">Vincent Porter</div>
                          <div class="message">Order has been placed successfully</div>
                       </div>
                       <div class="date-time text-right">
                          <div class="time"><i class="fa fa-clock-o" aria-hidden="true"></i> 8 Hours ago</div>
                       </div>
                    </li>
                    <li class="clearfix active"> <img src="{{ asset('assets/serviceprovider/img/customer/user-05.jpg') }}" alt="avatar">
                       <div class="about">
                          <div class="name">Aiden Chavez</div>
                          <div class="message">Liked your all the services and products</div>
                       </div>
                       <div class="date-time text-right">
                          <div class="time"><i class="fa fa-clock-o" aria-hidden="true"></i> 8 Hours ago</div>
                       </div>
                    </li>
                    <li class="clearfix"> <img src="{{ asset('assets/serviceprovider/img/customer/user-06.jpg') }}" alt="avatar">
                       <div class="about">
                          <div class="name">Mike Thomas</div>
                          <div class="message">Order has been completed successfully </div>
                       </div>
                       <div class="date-time text-right">
                          <div class="time"><i class="fa fa-clock-o" aria-hidden="true"></i> 8 Hours ago</div>
                       </div>
                    </li>
                    <li class="clearfix"> <img src="{{ asset('assets/serviceprovider/img/customer/user-07.jpg') }}" alt="avatar">
                       <div class="about">
                          <div class="name">Christian Kelly</div>
                           <div class="message">Order has been placed successfully</div>
                       </div>
                       <div class="date-time text-right">
                          <div class="time"><i class="fa fa-clock-o" aria-hidden="true"></i> 8 Hours ago</div>
                       </div>
                    </li>
                    <li class="clearfix"> <img src="{{ asset('assets/serviceprovider/img/customer/user-08.jpg') }}" alt="avatar">
                       <div class="about">
                          <div class="name">Monica Ward</div>
                      <div class="message">Liked your all the services and products</div>
                       </div>
                       <div class="date-time text-right">
                          <div class="time"><i class="fa fa-clock-o" aria-hidden="true"></i> 8 Hours ago</div>
                       </div>
                    </li>
                    <li class="clearfix"> <img src="{{ asset('assets/serviceprovider/img/customer/user-10.jpg') }}" alt="avatar">
                       <div class="about">
                          <div class="name">Dean Henry</div>
                          <div class="message">Order has been completed successfully </div>
                       </div>
                       <div class="date-time text-right">
                          <div class="time"><i class="fa fa-clock-o" aria-hidden="true"></i> 8 Hours ago</div>
                       </div>
                    </li>
                 </ul>
              </div>
           </div>
        </div>
     </div>
    </div>  
  </div>
@endsection