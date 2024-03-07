@extends('serviceprovider.layouts.app')
@section('title', 'View Quotation')
@section('head')
<style>
	.table-responsive {
    padding: 0 20px;
}
</style>
@endsection
@section('content')

    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title d-flex align-items-center">#3456 <span class=" ml-1 badge badge-success active-badge">Active</span></h3>
                </div>
                 <div class="col text-right">
					<button class="btn bg-success-light" data-toggle="modal" data-target="#convert-popup"> <i class="fas fa-sync-alt"></i> Convert</button> 
					<a href="{{route('seller.quotation')}}" class="btn btn-primary">Back</a>
                </div>
               
            </div>
        </div>
		<div class="row">
                <div class="col-md-3">
                    <!--div class="service-image-detail new-desig">
                        <img src="assets/img/user.jpg">
                        <h5>John Smith</h5>
                        <button class="btn bg-primary-light"><a href="messages.php"><i class="far fa-comment-dots"></i> Chat</a></button>
                    </div-->
                    <div class="request-detail">
                         <h5>Services</h5>
                        <ul>
                            <li>Wheel alignment</li>
                            <li>Road brake pads</li>
                            <li>Ball Joints</li>
                        </ul>
                    </div>
                    <div class="vehicle-detail request-detail mb-4">
                         <h5>Vehicle</h5>
                        <ul>
							<li>2010 BMW x3 B48 Hundai India</li>
							
                            <!--li>Vehicle Year: <span>2010</span></li>
                            <li>Model: <span>BMW x3</span></li>
                            <li>Make: <span>Hundai India</span></li>
                            <li>Engine: <span>B48</span></li-->
                        </ul>
                    </div>
                </div>
			<div class="col-md-9">
        <div id="exTab1" class="">
            <ul  class="nav nav-pills nav-tabs menu-tabs">
                <!--li class="nav-item ">
                    <a class="nav-link" href="#information" data-toggle="tab">Information</a>
                </li-->
                <li class="nav-item active"><a class="nav-link" href="#estimate" data-toggle="tab">Estimate</a>
				</li>
                <li class="nav-item"><a class="nav-link" href="#orders" data-toggle="tab">Orders</a>
				</li>
                <li class="nav-item"><a class="nav-link" href="#messages" data-toggle="tab">Messages</a>
				</li>
			</ul> 
			<div class="tab-content clearfix">
				<!--div class="tab-pane " id="information">	
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-md-4">
									<div class="service-image-detail new-desig">
										<img src="assets/img/user.jpg">
										<h5>John Smith</h5>
									</div>
								</div>
								<div class="col-md-4">
									<div class="request-detail new-desig quatation_border mt-0 mb-3">
										 <h5>Services</h5>
										<ul>
											<li>Wheel alignment</li>
											<li>Road brake pads</li>
											<li>Ball Joints</li>
										</ul>
									</div>						
								</div>
								<div class="col-md-4">
									<div class="vehicle-detail new-desig mt-0 mb-3">
										 <h5>Vehicle</h5>
										<ul>
											<li>2010 BMW x3 B48 Hundai India</li>
										</ul>
									</div>	
								</div>
							</div>			
						</div>			
					</div>			
				</div-->    
				<div class="tab-pane active" id="estimate">
					<div class="row">
						<div class="col-md-12 d-flex">
							<div class="card card-table flex-fill">
								<div class="card-body">
									<div class="card-title-hdr">
									<h4 class="serc-ttl"> Estimate</h4>
									<a href="{{route('seller.edit_quotation')}}" class="btn btn-primary">Edit</a>
									</div>
									<div class="table-responsive">
										<table class="table table-center">
											<thead>
												<tr>
													<th>Description</th>
													<th>Type</th>
													<th>Quantity</th>
													<th>Status</th>
													<th>Price</th>
													<th>Amount</th>
													
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
													   <h4>Wheel alignments</h4>
													   <p><strong>Notes:</strong> Check new tyres</p>
													</td>
													<td><label class="badge bg-info-light">Product</label></td>
													<td>1 set</td>
													<td><label class="badge badge-success">Accepted</label></td>
													<td>63</td>
													<td>zmw 5000</td>
												</tr>
												 <tr>
													<td>
													   <h4>Road Brakes Pads</h4>
													   <p><strong>Notes:</strong> Check new tyres</p>
													</td>
													<td><label class="badge bg-warning-light">Service</label></td>
													<td>1 set</td>
													<td><label class="badge badge-success">Accepted</label></td>
													<td>63</td>
													<td>zmw 5000</td>
												</tr>
												 <tr>
													<td>
													   <h4>Wheel alignments</h4>
													   <p><strong>Notes:</strong> Check new tyres</p>
													</td>
													<td><label class="badge bg-info-light">Product</label></td>
													<td>1 set</td>
													<td><label class="badge badge-danger">Rejected</label></td>
													<td>63</td>
													<td>zmw 5000</td>
												</tr>
												 <tr>
													<td>
													   <h4>Road Brakes Pads</h4>
													   <p><strong>Notes:</strong> Check new tyres</p>
													</td>
													<td><label class="badge bg-warning-light">Service</label></td>
													<td>1 set</td>
													<td><label class="badge badge-success">Accepted</label></td>
													<td>63</td>
													<td>zmw 5000</td>
												</tr>
												 <tr>
													<td>
													   <h4>Wheel alignments</h4>
													   <p><strong>Notes:</strong> Check new tyres</p>
													</td>
													<td><label class="badge bg-info-light">Product</label></td>
													<td>1 set</td>
													<td><label class="badge badge-danger">Rejected</label></td>
													<td>63</td>
													<td>zmw 5000</td>
												</tr>
												 <tr>
													<td>
													   <h4><b>Total:</b></h4>
													</td>
													<td></td>
													<td><b>1 set</b></td>
													<td></td>
													<td><b>315</b></td>
													<td><b>zmw 5000</b></td>
												</tr>
												
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>				
				</div>     
				<div class="tab-pane" id="orders">
					<div class="row">
						<div class="col-md-12 d-flex">
							<div class="card card-table flex-fill">
								<div class="card-body">
									<h4 class="serc-ttl">Orders</h4>
									<div class="table-responsive">
										<table class="table table-center">
											<thead>
												<tr>
													<th>Name</th>
													<th>Service Type</th>
													<th>Type</th>
													<th>Price</th>
													<th>Brand</th>
													<th>Compatible Vehicles</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="text-nowrap">
													   Ceat Tyres
													</td>
													<td class="text-nowrap">Break Safety..</td>
													<td><label class="badge bg-info-light">Product</label></td>
													<td>$ 40.00</td>
													<td>Ceat India</td>
													<td>
														Hundai, Honda...
													</td>
													<td>
														<a href="order-detail.php" class="btn bg-primary-light">View</a>
													</td>
												</tr>
												<tr>
													<td class="text-nowrap">
													   Electrical
													</td>
													<td class="text-nowrap">Lighting Inspection..</td>
													<td><label class="badge bg-warning-light">Service</label></td>
													<td>$ 14.00</td>
													<td>James Electrical</td>
													<td>
														Hundai, Honda...
													</td>
													<td>
														<a href="order-detail.php" class="btn bg-primary-light">View</a>
													</td>
												</tr>
												<tr>
													<td class="text-nowrap">
													   Exhaust
													</td>
													<td class="text-nowrap">Engine Inspection..</td>
													<td><label class="badge bg-info-light">Product</label></td>
													<td>$ 420.00</td>
													<td>Hundai Motors</td>
													<td>
														Hundai, Honda...
													</td>
													<td>
														<a href="order-detail.php" class="btn bg-primary-light">View</a>
													</td>
												</tr>
												<tr>
													<td class="text-nowrap">
													   Cleaning
													</td>
													<td class="text-nowrap">Cleaning Inspection..</td>
													<td><label class="badge bg-warning-light">Service</label></td>
													<td>$ 24.00</td>
													<td>Cleaning</td>
													<td>
														Hundai, Honda...
													</td>
													<td>
														<a href="order-detail.php" class="btn bg-primary-light">View</a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
					   </div>				   
					</div>				
				</div>     
				<div class="tab-pane" id="messages">
					<div class="row">
						<div class="col-sm-12">
							<div class="chat-window quatation-msg">
							   <div class="chat-cont-right">
								  <div class="chat-header">
									 <a id="back_user_list" href="javascript:void(0)" class="back-user-list">
									 <i class="material-icons">chevron_left</i>
									 </a>
									 <div class="media">
										<div class="media-img-wrap">
										   <div class="avatar avatar-online">
											  <img src="{{ asset('assets/serviceprovider/img/profiles/avatar-02.jpg') }}" alt="User Image" class="avatar-img rounded-circle">
										   </div>
										</div>
										<div class="media-body">
										   <div class="user-name">John Doe</div>
										   <div class="user-status">online</div>
										</div>
									 </div>
									 <div class="chat-options">
										<div class="nav-item dropdown">
										   <a href="javascript:void(0)" class=" user-link  nav-link" data-toggle="dropdown">
										   <i class="material-icons">more_vert</i>
										   </a>
										   <div class="dropdown-menu dropdown-menu-right">
											  <a class="dropdown-item" href="javascript:void(0)">Block</a>
											  <a class="dropdown-item" href="javascript:void(0)">Report</a>
										   </div>
										</div>
									 </div>
								  </div>
								  <div class="chat-body">
									 <div class="chat-scroll">
										<ul class="list-unstyled">
										   <li class="media sent">
											  <div class="media-body">
												 <div class="msg-box">
													<div>
													   <p>Hello. What can I do for you?</p>
													   <ul class="chat-msg-info">
														  <li>
															 <div class="chat-time">
																<span>8:30 AM</span>
															 </div>
														  </li>
													   </ul>
													</div>
												 </div>
											  </div>
										   </li>
										   <li class="media received">
											  <div class="avatar">
												 <img src="{{ asset('assets/serviceprovider/img/profiles/avatar-02.jpg') }}" alt="User Image" class="avatar-img rounded-circle">
											  </div>
											  <div class="media-body">
												 <div class="msg-box">
													<div>
													   <p>I'm just looking around.</p>
													   <p>Will you tell me something about yourself?</p>
													   <ul class="chat-msg-info">
														  <li>
															 <div class="chat-time">
																<span>8:35 AM</span>
															 </div>
														  </li>
													   </ul>
													</div>
												 </div>
												 <div class="msg-box">
													<div>
													   <p>Are you there? That time!</p>
													   <ul class="chat-msg-info">
														  <li>
															 <div class="chat-time">
																<span>8:40 AM</span>
															 </div>
														  </li>
													   </ul>
													</div>
												 </div>
												 <div class="msg-box">
													<div>
													   <div class="chat-msg-attachments">
														  <div class="chat-attachment">
															 <img src="{{ asset('assets/serviceprovider/img/engine.jpg') }}" alt="Product Image">
															 <div class="chat-attach-caption">placeholder.jpg</div>
															 <a href="#" class="chat-attach-download">
															 <i class="fas fa-download"></i>
															 </a>
														  </div>
														  <div class="chat-attachment">
															 <img src="{{ asset('assets/serviceprovider/img/engine.jpg') }}" alt="Product Image">
															 <div class="chat-attach-caption">placeholder.jpg</div>
															 <a href="#" class="chat-attach-download">
															 <i class="fas fa-download"></i>
															 </a>
														  </div>
													   </div>
													   <ul class="chat-msg-info">
														  <li>
															 <div class="chat-time">
																<span>8:41 AM</span>
															 </div>
														  </li>
													   </ul>
													</div>
												 </div>
											  </div>
										   </li>
										   <li class="media sent">
											  <div class="media-body">
												 <div class="msg-box">
													<div>
													   <p>Where?</p>
													   <ul class="chat-msg-info">
														  <li>
															 <div class="chat-time">
																<span>8:42 AM</span>
															 </div>
														  </li>
													   </ul>
													</div>
												 </div>
												 <div class="msg-box">
													<div>
													   <p>OK, my name is Limingqiang. I like singing, playing basketballand so on.</p>
													   <ul class="chat-msg-info">
														  <li>
															 <div class="chat-time">
																<span>8:42 AM</span>
															 </div>
														  </li>
													   </ul>
													</div>
												 </div>
												 <div class="msg-box">
													<div>
													   <div class="chat-msg-attachments">
														  <div class="chat-attachment">
															 <img src="{{ asset('assets/serviceprovider/img/engine.jpg') }}" alt="Product Image">
															 <div class="chat-attach-caption">placeholder.jpg</div>
															 <a href="#" class="chat-attach-download">
															 <i class="fas fa-download"></i>
															 </a>
														  </div>
													   </div>
													   <ul class="chat-msg-info">
														  <li>
															 <div class="chat-time">
																<span>8:50 AM</span>
															 </div>
														  </li>
													   </ul>
													</div>
												 </div>
											  </div>
										   </li>
										   <li class="media received">
											  <div class="avatar">
												 <img src="{{ asset('assets/serviceprovider/img/profiles/avatar-02.jpg') }}" alt="User Image" class="avatar-img rounded-circle">
											  </div>
											  <div class="media-body">
												 <div class="msg-box">
													<div>
													   <p>You wait for notice.</p>
													   <p>Consectetuorem ipsum dolor sit?</p>
													   <p>Ok?</p>
													   <ul class="chat-msg-info">
														  <li>
															 <div class="chat-time">
																<span>8:55 PM</span>
															 </div>
														  </li>
													   </ul>
													</div>
												 </div>
											  </div>
										   </li>
										   <li class="chat-date">Today</li>
										   <li class="media received">
											  <div class="avatar">
												 <img src="{{ asset('assets/serviceprovider/img/profiles/avatar-02.jpg') }}" alt="User Image" class="avatar-img rounded-circle">
											  </div>
											  <div class="media-body">
												 <div class="msg-box">
													<div>
													   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</p>
													   <ul class="chat-msg-info">
														  <li>
															 <div class="chat-time">
																<span>10:17 AM</span>
															 </div>
														  </li>
														  <li><a href="#">Edit</a></li>
													   </ul>
													</div>
												 </div>
											  </div>
										   </li>
										   <li class="media sent">
											  <div class="media-body">
												 <div class="msg-box">
													<div>
													   <p>Lorem ipsum dollar sit</p>
													   <div class="chat-msg-actions dropdown">
														  <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														  <i class="fas fa-ellipsis-v"></i>
														  </a>
														  <div class="dropdown-menu dropdown-menu-right">
															 <a class="dropdown-item" href="#">Delete</a>
														  </div>
													   </div>
													   <ul class="chat-msg-info">
														  <li>
															 <div class="chat-time">
																<span>10:19 AM</span>
															 </div>
														  </li>
														  <li><a href="#">Edit</a></li>
													   </ul>
													</div>
												 </div>
											  </div>
										   </li>
										   <li class="media received">
											  <div class="avatar">
												 <img src="{{ asset('assets/serviceprovider/img/profiles/avatar-02.jpg') }}" alt="User Image" class="avatar-img rounded-circle">
											  </div>
											  <div class="media-body">
												 <div class="msg-box">
													<div>
													   <div class="msg-typing">
														  <span></span>
														  <span></span>
														  <span></span>
													   </div>
													</div>
												 </div>
											  </div>
										   </li>
										</ul>
									 </div>
								  </div>
								  <div class="chat-footer">
									 <div class="input-group">
										<div class="input-group-prepend">
										   <div class="btn-file btn">
											  <i class="fas fa-paperclip"></i>
											  <input type="file">
										   </div>
										</div>
										<input type="text" class="input-msg-send form-control" placeholder="Type something">
										<div class="input-group-append">
										   <button type="button" class="btn msg-send-btn"><i class="fas fa-paper-plane"></i></button>
										</div>
									 </div>
								  </div>
							   </div>
							</div>
						</div>
					</div>				
				</div>     
			</div>     
        </div>     
        </div>     
        </div>     
<!--div class="row">
               <div class="col-md-9">
                   <div class="card card-table">
                       <div class="card-body">
                           <div class="viewBox">
                               <table class="table table-bordered">
                                   <tbody>
                                    <tr>
                                       <th> Order Id </th>
                                       <td> #3456</td>
                                   </tr>
                                    <tr>
                                       <th> Order Type </th>
                                       <td> Repair</td>
                                   </tr>
                                   <tr>
                                       <th> Customer </th>
                                       <td> John Smith</td>
                                   </tr>
                                   <tr>
                                       <th> Amount</th>
                                       <td> $62.00 </td>
                                   </tr>
                                   <tr>
                                       <th> Status </th>
                                       <td> Pending </td>
                                   </tr>
                               </tbody></table>
                           </div>
                       </div>
                   </div>
               </div>

           </div-->
			
    </div>

<div class="modal fade" id="convert-popup" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">
				<div class="convert-cont">
					<p>Are you sure you wants to convert this estimate to order ?</p>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-success">Yes</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
			</div>
		</div>
	</div>
</div>
@endsection
@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
@endsection