@extends('admin.layouts.app1')
@section('title', 'Chat')
@section('head')
<style>

   .card-table .table .ul .li div,
   .container {
      border: 2px solid #dedede;
      background-color: #f1f1f1;
      border-radius: 5px;
      padding: 10px;
      margin: 10px 0;
    }

    /* Darker chat container */
    .darker {
      border-color: #ccc;
      background-color: #ddd;
    }

    /* Clear floats */
    .container::after {
      content: "";
      clear: both;
      display: table;
    }
    
    /* Style images */
    .container img {
      float: left;
      max-width: 60px;
      width: 100%;
      margin-right: 20px;
      border-radius: 50%;
    }

    /* Style the right image */
    .container img.right {
      float: right;
      margin-left: 20px;
      margin-right:0;
    }

    /* Style time text */
    .time-right {
      float: right;
      color: #aaa;
    }

    /* Style time text */
    .time-left {
      float: left;
      color: #999;
    }
    
    body{margin-top:20px;}

    .chat-online {
        color: #34ce57
    }
    
    .chat-offline {
        color: #e4606d
    }
    
    .chat-messages {
        display: flex;
        flex-direction: column;
        max-height: 800px;
        overflow-y: scroll
    }
    
    .chat-message-left,
    .chat-message-right {
        display: flex;
        flex-shrink: 0
    }
    
    .chat-message-left {
        margin-right: auto
    }
    
    .chat-message-right {
        flex-direction: row-reverse;
        margin-left: auto
    }
    .py-3 {
        padding-top: 1rem!important;
        padding-bottom: 1rem!important;
    }
    .px-4 {
        padding-right: 1.5rem!important;
        padding-left: 1.5rem!important;
    }
    .flex-grow-0 {
        flex-grow: 0!important;
    }
    .border-top {
        border-top: 1px solid #dee2e6!important;
    }
</style>
@endsection
@section('content')
    <div class="content container-fluid addorder">
        <div class="page-header">
            <div class="row">
                <div class="col">
                   <h3 class="page-title d-flex align-items-center">Chat </h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!--<div class="card card-table mb-3">-->
                <!--    <div class="card-body p-2 py-3 px-4">-->
                        <!--<div class="d-flex justify-content-between align-items-center" >-->
                        <!-- <h3 class="mb-0 ">Chat list </h3>-->
                        <!--</div>-->
                        <!--<div class="col-xl-12" style="top: 20px">-->
                        <!--    <div class="w-120 searchFilerwrap">-->
                        <!--        <input type="text" id="searchname" class="form-control w-120" name="searchname" placeholder="Search " >-->
                        <!--        <i class="fa fa-search"></i>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div class="col-xl-12" style="top: 20px">-->
                            <!--<ul style="top:10px">-->
                            <!--    <li style="list-style: none; " >-->
                            <!--       <a href:"#"></a>  -->
                            <!--       <div>-->
                            <!--            <div class="container" >-->
                            <!--              <img class="avatar-img rounded-circle" alt="Avata" src="{{ asset('assets/serviceprovider/img/customer/user-07.jpg') }}">-->
                            <!--              <p>Hello. How are you today?</p>-->
                            <!--              <span class="time-right">11:00 AM</span>-->
                            <!--            </div>-->
                            <!--       </div>-->
                            <!--    </li>-->
                            <!--</ul>-->
                            <!--<main class="content">-->
                              <!--  <div class="container p-0">-->
                            
                            		<!--<h1 class="h3 mb-3">Messages</h1>-->
                            
                            		<div class="card">
                            			<div class="row g-0">
                            				<div class="col-12 col-lg-5 col-xl-3 border-right">
                            
                            					<div class="px-4 d-none d-md-block">
                            						<div class="d-flex align-items-center">
                            							<div class="flex-grow-1">
                            								<input type="text" class="form-control my-3" placeholder="Search...">
                            							</div>
                            						</div>
                            					</div>
                            
                            					<a href="#" class="list-group-item list-group-item-action border-0">
                            						<div class="badge bg-success float-right">5</div>
                            						<div class="d-flex align-items-start">
                            							<!--<img src="https://bootdey.com/img/Content/avatar/avatar5.png" class="rounded-circle mr-1" alt="Vanessa Tucker" width="40" height="40">-->
                            							<img class="avatar-img rounded-circle" alt="Vanessa Tucker" src="{{ asset('assets/serviceprovider/img/customer/user-09.jpg') }}" width="40" height="40">
                            							<div class="flex-grow-1 ml-3">
                            								Greeky
                            								<div class="small"><span class="fas fa-circle chat-online"></span> Online</div>
                            							</div>
                            						</div>
                            					</a>
                            					<a href="#" class="list-group-item list-group-item-action border-0">
                            						<div class="badge bg-success float-right">2</div>
                            						<div class="d-flex align-items-start">
                            							<!--<img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="rounded-circle mr-1" alt="William Harris" width="40" height="40">-->
                            							<img class="avatar-img rounded-circle" alt="William Harris" src="{{ asset('assets/serviceprovider/img/customer/user-07.jpg') }} "width="40" height="40">
                            							<div class="flex-grow-1 ml-3">
                            								John Smith
                            								<div class="small"><span class="fas fa-circle chat-online"></span> Online</div>
                            							</div>
                            						</div>
                            					</a>
                            					<a href="#" class="list-group-item list-group-item-action border-0">
                            						<div class="d-flex align-items-start">
                            							<!--<img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">-->
                            							<img class="avatar-img rounded-circle" alt="Sharon Lessman" src="{{ asset('assets/serviceprovider/img/customer/user-01.jpg') }}" width="40" height="40">
                            							<div class="flex-grow-1 ml-3">
                            								Brian
                            								<div class="small"><span class="fas fa-circle chat-online"></span> Online</div>
                            							</div>
                            						</div>
                            					</a>
                            					<a href="#" class="list-group-item list-group-item-action border-0">
                            						<div class="d-flex align-items-start">
                            							<!--<img src="https://bootdey.com/img/Content/avatar/avatar4.png" class="rounded-circle mr-1" alt="Christina Mason" width="40" height="40">-->
                            							<img class="avatar-img rounded-circle" alt="Christina Mason" src="{{ asset('assets/serviceprovider/img/customer/user-06.jpg') }}"width="40" height="40">
                            							<div class="flex-grow-1 ml-3">
                            								Arren
                            								<div class="small"><span class="fas fa-circle chat-offline"></span> Offline</div>
                            							</div>
                            						</div>
                            					</a>
                            					<a href="#" class="list-group-item list-group-item-action border-0">
                            						<div class="d-flex align-items-start">
                            							<!--<img src="https://bootdey.com/img/Content/avatar/avatar5.png" class="rounded-circle mr-1" alt="Fiona Green" width="40" height="40">-->
                            							<img class="avatar-img rounded-circle" alt="Fiona Green" src="{{ asset('assets/serviceprovider/img/customer/user-04.jpg') }}" width="40" height="40">
                            							<div class="flex-grow-1 ml-3">
                            								 Mike
                            								<div class="small"><span class="fas fa-circle chat-offline"></span> Offline</div>
                            							</div>
                            						</div>
                            					</a>
                            					<hr class="d-block d-lg-none mt-1 mb-0">
                            				</div>
                            				<div class="col-12 col-lg-7 col-xl-9">
                            					<div class="py-2 px-4 border-bottom d-none d-lg-block">
                            						<div class="d-flex align-items-center py-1">
                            							<div class="position-relative">
                            								<!--<img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">-->
                            							<img class="avatar-img rounded-circle" alt="Sharon Lessman" src="{{ asset('assets/serviceprovider/img/customer/user-01.jpg') }}" width="40" height="40">
                            							</div>
                            							<div class="flex-grow-1 pl-3">
                            								<strong> Brian</strong>
                            								<div class="text-muted small"><em>Typing...</em></div>
                            							</div>
                            							<!--<div>-->
                            							<!--	<button class="btn btn-primary btn-lg mr-1 px-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone feather-lg"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg></button>-->
                            							<!--	<button class="btn btn-info btn-lg mr-1 px-3 d-none d-md-inline-block"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-video feather-lg"><polygon points="23 7 16 12 23 17 23 7"></polygon><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect></svg></button>-->
                            							<!--	<button class="btn btn-light border btn-lg px-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal feather-lg"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg></button>-->
                            							<!--</div>-->
                            						</div>
                            					</div>
                            
                            					<div class="position-relative">
                            						<div class="chat-messages p-4">
                            
                            							<div class="chat-message-right pb-4">
                            								<div>
                            								<img class="avatar-img rounded-circle" alt="Sharon Lessman" src="{{ asset('assets/serviceprovider/img/user1.jpg') }}" width="40" height="40">
                            									
                            									<div class="text-muted small text-nowrap mt-2">2:33 am</div>
                            								</div>
                            								<div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">
                            									<div class="font-weight-bold mb-1">You</div>
                            									Hi Sharon Lessman, how are you? How is the project coming along?
                            								</div>
                            							</div>
                            
                            							<div class="chat-message-left pb-4">
                            								<div>
                            									<!--<img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">-->
                            									<img class="avatar-img rounded-circle" alt="Sharon Lessman" src="{{ asset('assets/serviceprovider/img/customer/user-01.jpg') }}" width="40" height="40">
                            									<div class="text-muted small text-nowrap mt-2">2:34 am</div>
                            								</div>
                            								<div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
                            									<div class="font-weight-bold mb-1"> Brian</div>
                            								Are we meeting today?
                            								</div>
                            							</div>
                            
                            							<div class="chat-message-right mb-4">
                            								<div>
                            									<img class="avatar-img rounded-circle" alt="Sharon Lessman" src="{{ asset('assets/serviceprovider/img/user1.jpg') }}" width="40" height="40">
                            									<div class="text-muted small text-nowrap mt-2">2:35 am</div>
                            								</div>
                            								<div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">
                            									<div class="font-weight-bold mb-1">You</div>
                            									Well I am not sure.
                            									I have results to show you.
                            								</div>
                            							</div>
                            
                            							<div class="chat-message-left pb-4">
                            								<div>
                            									<!--<img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">-->
                            									<img class="avatar-img rounded-circle" alt="Sharon Lessman" src="{{ asset('assets/serviceprovider/img/customer/user-01.jpg') }}" width="40" height="40">
                            									<div class="text-muted small text-nowrap mt-2">2:36 am</div>
                            								</div>
                            								<div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
                            									<div class="font-weight-bold mb-1"> Brian</div>
                            									Project has been already finished and I have results to show you.
                            								</div>
                            							</div>
                            
                            							<div class="chat-message-left pb-4">
                            								<div>
                            									<!--<img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">-->
                            									<img class="avatar-img rounded-circle" alt="Sharon Lessman" src="{{ asset('assets/serviceprovider/img/customer/user-01.jpg') }}" width="40" height="40">
                            									<div class="text-muted small text-nowrap mt-2">2:37 am</div>
                            								</div>
                            								<div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
                            									<div class="font-weight-bold mb-1"> Brian</div>
                            									The rest of the team is not here yet.Maybe in an hour or so?
                            								</div>
                            							</div>
                            
                            							<div class="chat-message-right mb-4">
                            								<div>
                            									<!--<img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="rounded-circle mr-1" alt="Chris Wood" width="40" height="40">-->
                            									<img class="avatar-img rounded-circle" alt="Sharon Lessman" src="{{ asset('assets/serviceprovider/img/user1.jpg') }}" width="40" height="40">
                            									<div class="text-muted small text-nowrap mt-2">2:38 am</div>
                            								</div>
                            								<div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">
                            									<div class="font-weight-bold mb-1">You</div>
                            								Have you faced any problems at the last phase of the project?
                            								</div>
                            							</div>
                            						</div>
                            					</div>
                            
                            					<div class="flex-grow-0 py-3 px-4 border-top">
                            						<div class="input-group">
                            							<input type="text" class="form-control" placeholder="Type your message">
                            							<button class="btn btn-primary">Send</button>
                            						</div>
                            					</div>
                            
                            				</div>
                            			</div>
                            		</div>
                            	<!--</div>-->
                            <!--</main>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->
            </div>
            <!--<div class="col-md-6">-->
            <!--    <div class="card card-table mb-3">-->
            <!--        <div class="card-body p-2 py-3 px-4">-->
            <!--            <div class="container" >-->
            <!--              <img class="avatar-img rounded-circle" alt="Avata" src="{{ asset('assets/serviceprovider/img/customer/user-07.jpg') }}">-->
            <!--              <p>Hello. How are you today?</p>-->
            <!--              <span class="time-right">11:00</span>-->
            <!--            </div>-->
                        
            <!--            <div class="container darker">-->
            <!--              <img class="right avatar-img rounded-circle" alt="Avatar" src="{{ asset('assets/serviceprovider/img/customer/user-09.jpg') }}">-->
            <!--              <p>Hey! I'm fine. Thanks for asking!</p>-->
            <!--              <span class="time-left">11:01</span>-->
            <!--            </div>-->
                        
            <!--            <div class="container">-->
            <!--              <img class="avatar-img rounded-circle" alt="Avatar" src="{{ asset('assets/serviceprovider/img/customer/user-07.jpg') }}">-->
            <!--              <p>Sweet! So, what do you wanna do today?</p>-->
            <!--              <span class="time-right">11:02</span>-->
            <!--            </div>-->
                        
            <!--            <div class="container darker">-->
            <!--               <img class="right avatar-img rounded-circle" alt="Avatar" src="{{ asset('assets/serviceprovider/img/customer/user-09.jpg') }}">-->
            <!--              <p>Thank you for your update</p>-->
            <!--              <span class="time-left">11:05</span>-->
            <!--            </div>-->
            <!--            <div class="col-auto text-right">-->
            <!--              <img src="/w3images/avatar_g2.jpg" alt="Avatar" class="right">-->
            <!--              <p>Nah, I dunno. Play soccer.. or learn more coding perhaps?</p>-->
            <!--              <span class="time-left">11:05</span>-->
            <!--              <input type="text" class="form-control w-40" placeholder="Write message" value="" >-->
            <!--              <a class="btn btn-primary" href="https://dev.indiit.solutions/roadsmart_dev/public/admin/chat"> Send</a>-->
            <!--              <button type="submit" class="btn btn-primary product-save-btn" style="size:20px"> Send</button>-->
            <!--            </div>-->
                        
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
        </div>
    </div>
 
@endsection

