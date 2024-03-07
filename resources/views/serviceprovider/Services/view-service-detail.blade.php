@extends('serviceprovider.layouts.app')
@section('title', 'View Service Details')
@section('content')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
   <div class="content container-fluid add-product-page">
      <div class="page-header">
         <div class="row">
            <div class="col">
               <h3 class="page-title">Break Pad and Rotor Replacement</h3>
            </div>
            <div class="col-auto text-right">
               <a href="{{route('seller.add_offer')}}" class="btn btn-primary">Add Offer</a>
			   <a href="{{route('seller.services')}}" class="btn btn-primary">Save</a>
               <a class="btn btn-secondary" href="{{route('seller.services')}}">
                  Back
               </a>
            </div>
         </div>
        
      </div>
      
        <div class="row">
            <div class="col-md-8">
                <div class="card mb-4">
                   <div class="card-body">
                         <div class="row">
    						<div class="col-xl-12">
                                <div class="form-group dropdown_zindex d-inline-block w-100">
                                  <label class="col-form-label">Title  </label>
								   <input type="text" id="" class="form-control w-100" name="" placeholder="" value="Break Pad and Rotor Replacement">
                               </div>
                            </div>
    						
    						<div class="col-xl-12">
                                <div class="form-group">
                                  <label class="col-form-label">Description   </label>
                                   <textarea id="summernote">Break Pad and Rotor</textarea>
                               </div>
                            </div>
                        </div>
                   </div>
                </div>
            <div class="card card-table mb-3">
               <div class="card-body p-2 py-3 px-4">
                  <div class="d-flex justify-content-between align-items-center">
                     <h3 class="mb-0">Offer</h3>
                      <div class="d-flex justify-content-between align-items-center">
                        <a class="ml-3" href="{{route('seller.add_offer')}}">Add Offer</a>
                     </div>
                  </div>
                  <div class="servicesearch_input d-flex justify-content-between align-items-center">
                     <div class="input-group">
                        <div class="input-group-prepend">
                           <i class="fas fa-search"></i>
                        </div>
                        <input type="text" class="form-control" placeholder="Search Offers">
                     </div>
                     <a class="btn btn-primary ml-2" href="javascript: void(0);">
                        Browse
                     </a>
										 <div class="actionMore text-right ml-2">
									  
									  <span class="nav-item dropdown">
										 <a href="javascript:void(0)" class="dropdown-toggle btn btn-primary" data-toggle="dropdown">
											Sort
										 </a> 
										 <div class="dropdown-menu dropdown-menu-right notifications">
											<div class="noti-content">
											   <ul class="notification-list">
												  <li class="notification-message">
												   <a href="javascript:void(0)">
														 <div class="form-check">
														  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
														  <label class="form-check-label" for="exampleRadios1">
															
Last update
														  </label>
														</div>
													 </a>
												  </li>
												  
												   <li class="notification-message">
													<a href="javascript:void(0)">
														 <div class="form-check">
														  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option1" checked>
														  <label class="form-check-label" for="exampleRadios2">
															Amount spent
														  </label>
														</div>
													 </a>
													
												  </li>
												  
												  
												  <li class="notification-message">
													<a href="javascript:void(0)">
														 <div class="form-check">
														  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option1" checked>
														  <label class="form-check-label" for="exampleRadios3">
															
Total orders
														  </label>
														</div>
													 </a>
													
												  </li>
												  
												  
												    <li class="notification-message">
													<a href="javascript:void(0)">
														 <div class="form-check">
														  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option1" checked>
														  <label class="form-check-label" for="exampleRadios4">
															Last order date
														  </label>
														</div>
													 </a>
													
												  </li>
												  
												    <li class="notification-message">
													<a href="javascript:void(0)">
														 <div class="form-check">
														  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option1" checked>
														  <label class="form-check-label" for="exampleRadios4">
															
First order date
														  </label>
														</div>
													 </a>
													
												  </li>
												  
												  
												  <li class="notification-message">
													<a href="javascript:void(0)">
														 <div class="form-check">
														  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios5" value="option1" checked>
														  <label class="form-check-label" for="exampleRadios5">
															A–Z
														  </label>
														</div>
													 </a>
													
												  </li>
												  
												    <li class="notification-message">
													<a href="javascript:void(0)">
														 <div class="form-check">
														  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios6" value="option1" checked>
														  <label class="form-check-label" for="exampleRadios6">
															Z–A
														  </label>
														</div>
													 </a>
													
												  </li>
												  
												  
											   </ul>
											</div>
										 </div>
									  </span>
									  
									</div>                    
                  </div>
                  <div class="viewBox table-responsive pt-3 product-add-table">
                     <table class="table table-center">
                        <thead>
                            <th>#</th>     
                            <th>Image</th>     
                            <th class=" pl-0">Service Name</th>     
                            <th class=" pl-0">Price</th>     
                            <th>Type</th>     
                            <th></th>     
                        </thead>
                        <tbody>
                           <tr>
								<td>1</td>
								<td>
									<h2 class="table-avatar">
										<a href="#" class="avatar avatar-sm mr-2">
												<img class="avatar-img rounded-circle" alt="" src="{{ asset('assets/serviceprovider/img/engine.jpg') }}">
										</a>
									</h2>
								</td>                               
                              <td class="text-left  pl-0"> <a href="{{route('seller.view_offer')}}">Break Pad Replacement </a><br /> Engine: E65 ,B36 </td>
							  <td class="text-left  pl-0">	
    							  K 2300.00
                              </td>
                              <td class="text-left"><label class="badge badge-success">Package</label></td>
							  
                              <td class="text-right pr-0"> <a href="#" class="crosdel ml-3">X</a> </td>
                           </tr>
                           <tr>
								<td>2</td>
								<td>
									<h2 class="table-avatar">
										<a href="#" class="avatar avatar-sm mr-2">
												<img class="avatar-img rounded-circle" alt="" src="{{ asset('assets/serviceprovider/img/engine.jpg') }}">
										</a>
									</h2>
								</td> 
                              <td class="text-left  pl-0"> <a href="{{route('seller.view_offer')}}">Break Pad Replacement </a> <br /> Model: BMW ,VW </td>
							  <td class="text-left  pl-0">	
    							  K 800.00
                              </td>
                              <td class="text-left"><label class="badge badge-success">labour</label></td>
							  
                              <td class="text-right pr-0"> <a href="#" class="crosdel ml-3">X</a> </td>
                           </tr>
                        </tbody> 
                     </table>
                  </div>
               </div>
            </div>                
            </div>
		    <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
    					<div class="mb-3 d-flex justify-content-between align-items-center">
    						<h3 class="mb-0">Collection Availability</h3>
    						<div class="d-flex justify-content-between align-items-center">
    							<a href="javascript: void(0);">Manage</a>
    						</div>
    					</div>
    					<div class="saleschannelsitems">
    						<p><span class="active-circle"> </span> Online Store</p>
    						<a href="javascript: void(0);">Schedule Availability</a>
    					</div>
    			    </div>
    			</div>
				<div class="card mb-4">
                    <div class="card-body">
    					<div class="mb-3 d-flex justify-content-between align-items-center">
    						<h3 class="mb-0">Category </h3>
    					</div>
						<div class="mb-3">
							<select class="my-select form-control">
										<option>Select Category</option>
										<option value="Repairs" selected>Repairs</option>
										<option value="Insurance" >Insurance</option>
										<option value="Road Compliance">Road Compliance</option>
										<option value="Vehicle Finance">Vehicle Finance</option>
										<option value="Car Hire">Car Hire</option>
									</select>
						</div>
						
    					
    			    </div>
    			</div>
			 <div class="card mb-4">
               <div class="card-body">
					<h4 class="cardTitle">Collection Image</h4>
					 <div class="row">
							<div class="col-lg-12">
							<div class="form-group mb-0">
								 <label class="fileupload" for="uploadimg">
                                    <i class="fa fa-upload"></i>
                                    <h3>Image Upload</h3>
                                 </label>
                                 <input  id="uploadimg" name="uploadimg" style="display:none" type="file" accept=".png, .jpg, .jpeg">
							</div>
                              <div class="formimg" style="display: none;">
                                 <img id ="imagePreview" src="assets/img/engine.jpg">
                                 <i class="fa fa-trash deleteimg"></i>
                              </div>   
                              </div>
                             
						  
						 </div> 
				</div>
			</div> 
			 <div class="card mb-4">
               <div class="card-body">
					<h4 class="cardTitle">Online Store</h4>
					 <div class="row">
							<div class="col-lg-12">
    							<div class="form-group mb-3 d-inline-block w-100">
    								<label>Theme template</label>
    								<select name="onlinestore" class="my-select form-control">
    									<option value="">Default Collection</option>
    								</select>
    							</div>
    							<p>Assign a template from your current theme to define how the collection is displayed.</p>
                            </div>
                             
						  
						 </div> 
				</div>
			</div>    			
            </div>
        </div>

    </div>
@endsection
   @section('scripts')
   
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script>
<script>

$('textarea#summernote').summernote({
        placeholder: '',
        tabsize: 2,
        height: 100,
  toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'italic', 'underline', 'clear']],
        // ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],
        //['fontname', ['fontname']],
       // ['fontsize', ['fontsize']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['height', ['height']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'hr']],
        //['view', ['fullscreen', 'codeview']],
        ['help', ['help']]
      ],
      });

	
</script>

   @endsection    