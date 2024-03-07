@extends('serviceprovider.layouts.app')
@section('title', 'Products')
@section('content')
<link  rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" >

<style>
#cat_wrapper #cat_filter {
    position: absolute;
    top: -45px;
    right: 20px;
}

#cat_wrapper #cat_filter input
{
       height: 30px;
    background: transparent;
    border-radius: 5px;
    border: 1px solid #ddd;
}


div.dt-buttons {
   position: absolute;
   top: -50px;
   left: 182px;
}

.dt-button-collection {
   padding: 0 !important;
}
 
button.dt-button {
   background: transparent;
   border-radius: 5px;
   border: 1px solid #ddd;
}

.dt-button-collection .dt-button {
   border-radius: 0;
   background: #f8f9fa !important;
   color: #000;
   margin: 0 !important;
   box-shadow: none !important;
   border: 0;
   border-bottom: 0.1px solid #eaeaea;
   text-align: left;
}

.dt-button-collection .dt-button:hover {
   box-shadow: none !important;
   border: transparent !important;
   border-bottom: 0.1px solid #eaeaea !important;
   background: #ffffff !important;
   color: #000;
   background-color: #ffffff !important;
}


/*.dataTables_wrapper.no-footer #cat_paginate,
.dataTables_wrapper.no-footer #cat_info
{
display: none;
}*/

#cat_wrapper .row:nth-child(2) #cat_paginate,
#cat_wrapper .row:nth-child(2) #cat_info {
   display: none;
}

button.dt-button.buttons-columnVisibility.active {
   color: #c9343a !important;
}
</style>
    <div class="content container-fluid product-list-page">
        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Products</h3>
                </div>
                <div class="col-auto text-right all-product-right">
					<div class="actionMore d-flex align-items-center">
					 <a class="btn btn-primary addorder  button_export_csv" href="javascript:void(0)" >
					     <!--<a class="btn btn-primary addorder" href="#" data-toggle="modal" data-target="#export-popup">-->
                        Export Product
                    </a>
					 <!--<a class="btn btn-primary addorder ml-3" href="#" data-toggle="modal" data-target="#import-popup">-->
      <!--                  Import Product-->
      <!--              </a>-->
				    <a class="btn btn-primary addorder ml-3" href="{{route('seller.search_product')}}">
                        Add Product
                    </a>
					
					
					
					</div> 
                    
                    <!---a class="btn btn-primary" href="{{route('seller.add_service')}}">
                        Add Service
                    </a---->
                </div>
            </div>
        </div>
        <div id="response">
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
        <div id="exTab1" class="">
            <ul  class="nav nav-pills nav-tabs menu-tabs">
                <li class="nav-item"> 
                    <a class="nav-link active" href="#allproducts"  data-toggle="tab">All </a>
                </li>
                <li class="nav-item">
                	<a class="nav-link " href="#activeproducts" data-toggle="tab">Active</a>
				</li>
				<li class="nav-item">
                	<a class="nav-link " href="#draftproduct" data-toggle="tab">Draft</a>
				</li>
				<li class="nav-item">
                	<a class="nav-link " href="#archivedproduct" data-toggle="tab">Archived</a>
				</li>
			</ul>
			<div class="tab-content ordertabstableitems clearfix">
				<div class="tab-pane fade show active" id="allproducts">
						                     <div class="card card-table flex-fill">
				 <div class="card-header">
                            <h4 class="card-title">All Products</h4>
                        </div>
                    <div class="card-body px-4 pt-2">
                       
						<div class="table-top-search-filter my-3">
						     <form id="search-tableForm" method="POST">
							<div class="row w-100">
								<div class="col-md-9" >
									<div class="w-100 searchFilerwrap">
										<input type="text" id="searchname" name="searchname" class="form-control w-100"  placeholder="Filterss products" style="padding: 10px 38px;">
										<i class="fa fa-search"></i>
									</div>
									
								</div>
								<div class="col-md-3">
										 <div class="actionMore text-right">
							    <!--<div class="">-->
									  <!--<span class="nav-item dropdown mr-3">-->
										 <!--<a href="javascript:void(0)" class="dropdown-toggle btn btn-primary" data-toggle="dropdown">-->
											<!--Product Vendor-->
										 <!--</a> -->
										 <!--<div class="dropdown-menu dropdown-menu-right notifications">-->
											<!--<div class="noti-content">-->
											<!--   <ul class="notification-list">-->
											<!--	   <li class="notification-message">-->
											<!--	   <a href="javascript:void(0)">-->
											<!--			 <div class="form-check">-->
											<!--			  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios7" value="option1" checked>-->
											<!--			  <label class="form-check-label" for="exampleRadios7">-->
											<!--				Smart Store-->
											<!--			  </label>-->
											<!--			</div>-->
											<!--		 </a>-->
											<!--	  </li>-->
												  
											<!--	   <li class="notification-message">-->
											<!--		<a href="javascript:void(0)">-->
											<!--			 <div class="form-check">-->
											<!--			  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios6" value="option1" checked>-->
											<!--			  <label class="form-check-label" for="exampleRadios6">-->
											<!--				Smart Store 2-->
											<!--			  </label>-->
											<!--			</div>-->
											<!--		 </a>-->
													
											<!--	  </li>-->
											<!--   </ul>-->
											<!--</div>-->
										 <!--</div>-->
									  <!--</span>-->
									  
									  <span class="nav-item mr-3">
										 <!--<a href="javascript:void(0)" class="btn btn-primary filter-toggler morefilterbtn" data-toggle="dropdown">-->
											<!--Search-->
										 <!--</a> -->
										 <button class="btn btn-primary " style="padding: 10px 38px;" >
											Search
										 </button> 
									  </span>
									  <span class="nav-item dropdown">
										 <a href="javascript:void(0)" class="dropdown-toggle btn btn-primary" data-toggle="dropdown" style="padding: 10px 38px;">
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
															Product title A–Z
														  </label>
														</div>
													 </a>
												  </li>
												  
												   <li class="notification-message">
													<a href="javascript:void(0)">
														 <div class="form-check">
														  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option1" checked>
														  <label class="form-check-label" for="exampleRadios2">
															Product title Z–A
														  </label>
														</div>
													 </a>
													
												  </li>
												  
												  
												  <li class="notification-message">
													<a href="javascript:void(0)">
														 <div class="form-check">
														  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option1" checked>
														  <label class="form-check-label" for="exampleRadios3">
															Created (oldest first)
														  </label>
														</div>
													 </a>
													
												  </li>
												  
												  
												    <li class="notification-message">
													<a href="javascript:void(0)">
														 <div class="form-check">
														  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option1" checked>
														  <label class="form-check-label" for="exampleRadios4">
															Created (newest first)
														  </label>
														</div>
													 </a>
													
												  </li>
												  
												  <li class="notification-message">
													<a href="javascript:void(0)">
														 <div class="form-check">
														  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios5" value="option1" checked>
														  <label class="form-check-label" for="exampleRadios5">
															Vendor A–Z
														  </label>
														</div>
													 </a>
													
												  </li>
												  
												    <li class="notification-message">
													<a href="javascript:void(0)">
														 <div class="form-check">
														  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios6" value="option1" checked>
														  <label class="form-check-label" for="exampleRadios6">
															Vendor Z–A
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
							</div>
							<div class="tableseletefilter1 mt-3"  style="display:none;">
							 <div class="actionMore">
									<span class="nav-item mr-3">
										 <a href="javascript:void(0)" class="btn btn-primary" data-toggle="dropdown">
											2 selected
										 </a> 
										 
									  </span>
									  
									   <span class="nav-item mr-3">
										 <a href="{{route('seller.addedon_product')}}" class="btn btn-primary " data-toggle="dropdown">
											Edit Product
										 </a> 
										 
									  </span>
									  
									  <span class="nav-item dropdown mr-3">
										 <a href="javascript:void(0)" class="dropdown-toggle btn btn-primary" data-toggle="dropdown">
											More actions
										 </a> 
										 <div class="dropdown-menu dropdown-menu-right notifications">
                        <div class="noti-content">
                           <ul class="notification-list">
                              <li class="notification-message">
                                 <a href="javascript:void(0)">
                                   Set as active
                                 </a>
                              </li>
                              <li class="notification-message">
                                 <a href="javascript:void(0)">
                                   Set as draft
                                 </a>
                              </li>
                              <li class="notification-message">
                                 <a href="javascript:void(0)">
                                    Archive products
                                 </a>
                              </li>
							   <li class="notification-message">
                                 <a href="javascript:void(0)">
                                    Delete products 
                                 </a>
                              </li>
							  
                           </ul>
                        </div>
                     </div>
									  </span>
									</div>
							
					    	</div>
					
					  </form>
					  </div>
						
                        <div class="table-responsive"> 
                            <table class="table table-center datatable productListTable"   id="cat">
                                <thead>
                                    <tr>
                                        <!--<th style="width:50px"><input name="select_all" value="1"  type="checkbox" id="selectAllTable1"></th>-->
                                        <th style='padding-bottom: 12px'>Product</th>
                                        <th style='padding-bottom: 12px'>Status</th>
                                        <th style='padding-bottom: 12px'>Inventory </th>
                                        <th style='padding-bottom: 12px'>Brand</th>
                                        <th style='padding-bottom: 12px'>Vendor</th>
                                    </tr>
                                </thead>
                                <tbody id="products_listing">
                            
                                </tbody>
                            </table>
                        </div>
                    </div> 
                </div>
            
   			
				</div>
				<div class="tab-pane fade" id="activeproducts">
						
   						  <div class="card card-table flex-fill">
				 <div class="card-header">
                            <h4 class="card-title">Active</h4>
                        </div>
                    <div class="card-body px-4 pt-2">
						<div class="table-top-search-filter my-3">
							<div class="row w-100">
								<div class="col-md-6">
									<div class="w-100 searchFilerwrap">
										<input type="text" id="" class="form-control w-100" name="" placeholder="Filter products" value="">
										<i class="fa fa-search"></i>
									</div>
								</div>
								<div class="col-md-6">
										 <div class="actionMore text-right">
									  <span class="nav-item dropdown mr-3">
										 <a href="javascript:void(0)" class="dropdown-toggle btn btn-primary" data-toggle="dropdown">
											Product Vendor
										 </a> 
										 <div class="dropdown-menu dropdown-menu-right notifications">
											<div class="noti-content">
											   <ul class="notification-list">
												   <li class="notification-message">
												   <a href="javascript:void(0)">
														 <div class="form-check">
														  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios7" value="option1" checked>
														  <label class="form-check-label" for="exampleRadios7">
															Smart Store
														  </label>
														</div>
													 </a>
												  </li>
												  
												   <li class="notification-message">
													<a href="javascript:void(0)">
														 <div class="form-check">
														  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios6" value="option1" checked>
														  <label class="form-check-label" for="exampleRadios6">
															Smart Store 2
														  </label>
														</div>
													 </a>
													
												  </li>
											   </ul>
											</div>
										 </div>
									  </span>
									  
									  <span class="nav-item mr-3">
										 <a href="javascript:void(0)" class="btn btn-primary filter-toggler morefilterbtn" data-toggle="dropdown">
											More filters
										 </a> 
										 
									  </span>
									  
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
															Product title A–Z
														  </label>
														</div>
													 </a>
												  </li>
												  
												   <li class="notification-message">
													<a href="javascript:void(0)">
														 <div class="form-check">
														  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option1" checked>
														  <label class="form-check-label" for="exampleRadios2">
															Product title Z–A
														  </label>
														</div>
													 </a>
													
												  </li>
												  
												  
												  <li class="notification-message">
													<a href="javascript:void(0)">
														 <div class="form-check">
														  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option1" checked>
														  <label class="form-check-label" for="exampleRadios3">
															Created (oldest first)
														  </label>
														</div>
													 </a>
													
												  </li>
												  
												  
												    <li class="notification-message">
													<a href="javascript:void(0)">
														 <div class="form-check">
														  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option1" checked>
														  <label class="form-check-label" for="exampleRadios4">
															Created (newest first)
														  </label>
														</div>
													 </a>
													
												  </li>
												  
												  <li class="notification-message">
													<a href="javascript:void(0)">
														 <div class="form-check">
														  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios5" value="option1" checked>
														  <label class="form-check-label" for="exampleRadios5">
															Vendor A–Z
														  </label>
														</div>
													 </a>
													
												  </li>
												  
												    <li class="notification-message">
													<a href="javascript:void(0)">
														 <div class="form-check">
														  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios6" value="option1" checked>
														  <label class="form-check-label" for="exampleRadios6">
															Vendor Z–A
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
							</div>
							<div class="tableseletefilter2 mt-3"  style="display:none;">
							 <div class="actionMore">
									<span class="nav-item mr-3">
										 <a href="javascript:void(0)" class="btn btn-primary" data-toggle="dropdown">
											2 selected
										 </a> 
										 
									  </span>
									  
									   <span class="nav-item mr-3">
										 <a href="{{route('seller.addedon_product')}}" class="btn btn-primary " data-toggle="dropdown">
											Edit Product
										 </a> 
										 
									  </span>
									  
									  <span class="nav-item dropdown mr-3">
										 <a href="javascript:void(0)" class="dropdown-toggle btn btn-primary" data-toggle="dropdown">
											More actions
										 </a> 
										 <div class="dropdown-menu dropdown-menu-right notifications">
                        <div class="noti-content">
                           <ul class="notification-list">
                              <li class="notification-message">
                                 <a href="javascript:void(0)">
                                   Set as active
                                 </a>
                              </li>
                              <li class="notification-message">
                                 <a href="javascript:void(0)">
                                   Set as draft
                                 </a>
                              </li>
                              <li class="notification-message">
                                 <a href="javascript:void(0)">
                                    Archive products
                                 </a>
                              </li>
							   <li class="notification-message">
                                 <a href="javascript:void(0)">
                                    Delete products 
                                 </a>
                              </li>
							  
                           </ul>
                        </div>
                     </div>
									  </span>
									  
									  
									  
									 
									  
									 
									</div>
							
						</div>
						</div>
						
         <!--               <div class="table-responsive"> -->
         <!--                   <table class="table table-center datatable productListTable"   id="cat">-->
         <!--                       <thead>-->
         <!--                           <tr>-->
         <!--                               <th style="width:50px"><input name="select_all" value="1" type="checkbox" id="selectAllTable2"></th>-->
         <!--                               <th>Product</th>-->
         <!--                               <th>Status</th>-->
         <!--                               <th>Inventory </th>-->
         <!--                               <th>Type</th>-->
         <!--                               <th>Vendor</th>-->
         <!--                           </tr>-->
         <!--                       </thead>-->
         <!--                       <tbody>-->
         <!--                           <tr>-->
         <!--                               <td style="width:50px"><input type="checkbox" name="type" value=""></td>-->
         <!--                               <td><a class="productview_btn" href="{{route('seller.view_product')}}">Break Pad and Rotor Replacement</a></td>-->
         <!--                              <td>-->
         <!--                                 <span class="nav-item dropdown  orderitempopmain">-->
         <!--                                    <a href="javascript:void(0)" class="dropdown-toggle nav-link ediio status-badge  bg-success text-white"  data-toggle="dropdown">-->
									<!--		 Active-->
         <!--                                    </a> -->
         <!--                                    <div class="dropdown-menu dropdown-menu-right notifications orderitempop">-->
         <!--                                       <div class="noti-content">-->
         <!--                                          <h5>Sales Channels and apps</h5>-->
         <!--                                          <ul class="notification-list">-->
         <!--                                             <li class="notification-message viewBox ">-->
         <!--                                               <div class="saleschannelsitems">-->
									<!--						<p><span class="active-circle"> </span> Online Store &amp; Service Marketplace</p>-->
									<!--					 </div>-->
         <!--                                             </li>-->
         <!--                                          </ul>-->
         <!--                                       </div>-->
         <!--                                    </div>-->
         <!--                                 </span>-->
         <!--                              </td>-->
         <!--                               <td><span class="text-success">5 in stock</span> for 2 variants</td>-->
         <!--                               <td>Break Safety Inspection</td>-->
         <!--                               <td>Smart Store</td>-->
                                        
         <!--                           </tr>-->
									
									
									<!--<tr>-->
         <!--                               <td style="width:50px"><input type="checkbox" name="type" value=""></td>-->
         <!--                               <td><a class="productview_btn" href="{{route('seller.view_product')}}">Break Pad and Rotor Replacement</a></td>-->
         <!--                              <td>-->
         <!--                                 <span class="nav-item dropdown  orderitempopmain">-->
         <!--                                    <a href="javascript:void(0)" class="dropdown-toggle nav-link ediio status-badge  bg-success text-white"  data-toggle="dropdown">-->
									<!--		 Active-->
         <!--                                    </a> -->
         <!--                                    <div class="dropdown-menu dropdown-menu-right notifications orderitempop">-->
         <!--                                       <div class="noti-content">-->
         <!--                                          <h5>Sales Channels and apps</h5>-->
         <!--                                          <ul class="notification-list">-->
         <!--                                             <li class="notification-message viewBox ">-->
         <!--                                               <div class="saleschannelsitems">-->
									<!--						<p><span class="active-circle"> </span> Online Store &amp; Service Marketplace</p>-->
									<!--					 </div>-->
         <!--                                             </li>-->
         <!--                                          </ul>-->
         <!--                                       </div>-->
         <!--                                    </div>-->
         <!--                                 </span>-->
         <!--                              </td>-->
         <!--                               <td><span class="text-success">5 in stock</span> for 2 variants</td>-->
         <!--                               <td>Break Safety Inspection</td>-->
         <!--                               <td>Smart Store</td>-->
                                        
         <!--                           </tr>-->
									
									
									<!--<tr>-->
         <!--                               <td style="width:50px"><input type="checkbox" name="type" value=""></td>-->
         <!--                               <td><a class="productview_btn" href="{{route('seller.view_product')}}">Break Pad and Rotor Replacement</a></td>-->
         <!--                              <td>-->
         <!--                                 <span class="nav-item dropdown  orderitempopmain">-->
         <!--                                    <a href="javascript:void(0)" class="dropdown-toggle nav-link ediio status-badge  bg-success text-white"  data-toggle="dropdown">-->
									<!--		 Active-->
         <!--                                    </a> -->
         <!--                                    <div class="dropdown-menu dropdown-menu-right notifications orderitempop">-->
         <!--                                       <div class="noti-content">-->
         <!--                                          <h5>Sales Channels and apps</h5>-->
         <!--                                          <ul class="notification-list">-->
         <!--                                             <li class="notification-message viewBox ">-->
         <!--                                               <div class="saleschannelsitems">-->
									<!--						<p><span class="active-circle"> </span> Online Store &amp; Service Marketplace</p>-->
									<!--					 </div>-->
         <!--                                             </li>-->
         <!--                                          </ul>-->
         <!--                                       </div>-->
         <!--                                    </div>-->
         <!--                                 </span>-->
         <!--                              </td>-->
         <!--                               <td><span class="text-success">5 in stock</span> for 2 variants</td>-->
         <!--                               <td>Break Safety Inspection</td>-->
         <!--                               <td>Smart Store</td>-->
                                        
         <!--                           </tr>-->
									
									
									<!--<tr>-->
         <!--                               <td style="width:50px"><input type="checkbox" name="type" value=""></td>-->
         <!--                               <td><a class="productview_btn" href="{{route('seller.view_product')}}">Break Pad and Rotor Replacement</a></td>-->
         <!--                              <td>-->
         <!--                                 <span class="nav-item dropdown  orderitempopmain">-->
         <!--                                    <a href="javascript:void(0)" class="dropdown-toggle nav-link ediio status-badge  bg-success text-white"  data-toggle="dropdown">-->
									<!--		 Active-->
         <!--                                    </a> -->
         <!--                                    <div class="dropdown-menu dropdown-menu-right notifications orderitempop">-->
         <!--                                       <div class="noti-content">-->
         <!--                                          <h5>Sales Channels and apps</h5>-->
         <!--                                          <ul class="notification-list">-->
         <!--                                             <li class="notification-message viewBox ">-->
         <!--                                               <div class="saleschannelsitems">-->
									<!--						<p><span class="active-circle"> </span> Online Store &amp; Service Marketplace</p>-->
									<!--					 </div>-->
         <!--                                             </li>-->
         <!--                                          </ul>-->
         <!--                                       </div>-->
         <!--                                    </div>-->
         <!--                                 </span>-->
         <!--                              </td>-->
         <!--                               <td><span class="text-success">5 in stock</span> for 2 variants</td>-->
         <!--                               <td>Break Safety Inspection</td>-->
         <!--                               <td>Smart Store</td>-->
                                        
         <!--                           </tr>-->
									
									
                                  
         <!--                       </tbody>-->
         <!--                   </table>-->
         <!--               </div>-->
                    </div> 
                </div>
            
				</div>
				
				<div class="tab-pane fade" id="draftproduct">
					  <div class="card card-table flex-fill">
				 <div class="card-header">
                            <h4 class="card-title">Draft</h4>
                        </div>
                    <div class="card-body px-4 pt-2">
						<div class="table-top-search-filter my-3">
							<div class="row w-100">
								<div class="col-md-6">
									<div class="w-100 searchFilerwrap">
										<input type="text" id="" class="form-control w-100" name="" placeholder="Filter products" value="">
										<i class="fa fa-search"></i>
									</div>
								</div>
								<div class="col-md-6">
										 <div class="actionMore text-right">
									  <span class="nav-item dropdown mr-3">
										 <a href="javascript:void(0)" class="dropdown-toggle btn btn-primary" data-toggle="dropdown">
											Product Vendor
										 </a> 
										 <div class="dropdown-menu dropdown-menu-right notifications">
											<div class="noti-content">
											   <ul class="notification-list">
												   <li class="notification-message">
												   <a href="javascript:void(0)">
														 <div class="form-check">
														  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios7" value="option1" checked>
														  <label class="form-check-label" for="exampleRadios7">
															Smart Store
														  </label>
														</div>
													 </a>
												  </li>
												  
												   <li class="notification-message">
													<a href="javascript:void(0)">
														 <div class="form-check">
														  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios6" value="option1" checked>
														  <label class="form-check-label" for="exampleRadios6">
															Smart Store 2
														  </label>
														</div>
													 </a>
													
												  </li>
											   </ul>
											</div>
										 </div>
									  </span>
									  
									  <span class="nav-item mr-3">
										 <a href="javascript:void(0)" class="btn btn-primary filter-toggler morefilterbtn" data-toggle="dropdown">
											More filters
										 </a> 
										 
									  </span>
									  
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
															Product title A–Z
														  </label>
														</div>
													 </a>
												  </li>
												  
												   <li class="notification-message">
													<a href="javascript:void(0)">
														 <div class="form-check">
														  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option1" checked>
														  <label class="form-check-label" for="exampleRadios2">
															Product title Z–A
														  </label>
														</div>
													 </a>
													
												  </li>
												  
												  
												  <li class="notification-message">
													<a href="javascript:void(0)">
														 <div class="form-check">
														  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option1" checked>
														  <label class="form-check-label" for="exampleRadios3">
															Created (oldest first)
														  </label>
														</div>
													 </a>
													
												  </li>
												  
												  
												    <li class="notification-message">
													<a href="javascript:void(0)">
														 <div class="form-check">
														  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option1" checked>
														  <label class="form-check-label" for="exampleRadios4">
															Created (newest first)
														  </label>
														</div>
													 </a>
													
												  </li>
												  
												  <li class="notification-message">
													<a href="javascript:void(0)">
														 <div class="form-check">
														  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios5" value="option1" checked>
														  <label class="form-check-label" for="exampleRadios5">
															Vendor A–Z
														  </label>
														</div>
													 </a>
													
												  </li>
												  
												    <li class="notification-message">
													<a href="javascript:void(0)">
														 <div class="form-check">
														  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios6" value="option1" checked>
														  <label class="form-check-label" for="exampleRadios6">
															Vendor Z–A
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
							</div>
							<div class="tableseletefilter3 mt-3"  style="display:none;">
							 <div class="actionMore">
									<span class="nav-item mr-3">
										 <a href="javascript:void(0)" class="btn btn-primary" data-toggle="dropdown">
											2 selected
										 </a> 
										 
									  </span>
									  
									   <span class="nav-item mr-3">
										 <a href="{{route('seller.addedon_product')}}" class="btn btn-primary " data-toggle="dropdown">
											Edit Product
										 </a> 
										 
									  </span>
									  
									  <span class="nav-item dropdown mr-3">
										 <a href="javascript:void(0)" class="dropdown-toggle btn btn-primary" data-toggle="dropdown">
											More actions
										 </a> 
										 <div class="dropdown-menu dropdown-menu-right notifications">
                        <div class="noti-content">
                           <ul class="notification-list">
                              <li class="notification-message">
                                 <a href="javascript:void(0)">
                                   Set as active
                                 </a>
                              </li>
                              <li class="notification-message">
                                 <a href="javascript:void(0)">
                                   Set as draft
                                 </a>
                              </li>
                              <li class="notification-message">
                                 <a href="javascript:void(0)">
                                    Archive products
                                 </a>
                              </li>
							   <li class="notification-message">
                                 <a href="javascript:void(0)">
                                    Delete products 
                                 </a>
                              </li>
							 
                           </ul>
                        </div>
                     </div>
									  </span>
									  
									  
									  
									 
									  
									 
									</div>
							
						</div>
						</div>
						
         <!--               <div class="table-responsive"> -->
         <!--                   <table class="table table-center datatable productListTable"   id="cat">-->
         <!--                       <thead>-->
         <!--                           <tr>-->
         <!--                               <th style="width:50px"><input name="select_all" value="1" type="checkbox" id="selectAllTable3"></th>-->
         <!--                               <th>Product</th>-->
         <!--                               <th>Status</th>-->
         <!--                               <th>Inventory </th>-->
         <!--                               <th>Type</th>-->
         <!--                               <th>Vendor</th>-->
         <!--                           </tr>-->
         <!--                       </thead>-->
         <!--                       <tbody>-->
         <!--                           <tr>-->
         <!--                               <td style="width:50px"><input type="checkbox" name="type" value=""></td>-->
         <!--                               <td><a class="productview_btn" href="{{route('seller.view_product')}}">Break Pad and Rotor Replacement</a></td>-->
         <!--                              <td>-->
         <!--                                 <span class="nav-item dropdown  orderitempopmain">-->
         <!--                                    <a href="javascript:void(0)" class="dropdown-toggle nav-link ediio status-badge  bg-warning text-dark"  data-toggle="dropdown">-->
									<!--		 Draft-->
         <!--                                    </a> -->
         <!--                                    <div class="dropdown-menu dropdown-menu-right notifications orderitempop">-->
         <!--                                       <div class="noti-content">-->
         <!--                                          <h5>Sales Channels and apps</h5>-->
         <!--                                          <ul class="notification-list">-->
         <!--                                             <li class="notification-message viewBox ">-->
         <!--                                               <div class="saleschannelsitems">-->
									<!--						<p><span class="active-circle"> </span> Online Store &amp; Service Marketplace</p>-->
									<!--					 </div>-->
         <!--                                             </li>-->
         <!--                                          </ul>-->
         <!--                                       </div>-->
         <!--                                    </div>-->
         <!--                                 </span>-->
         <!--                              </td>-->
         <!--                               <td><span class="text-success">5 in stock</span> for 2 variants</td>-->
         <!--                               <td>Break Safety Inspection</td>-->
         <!--                               <td>Smart Store</td>-->
                                        
         <!--                           </tr>-->
									
									
									<!--<tr>-->
         <!--                               <td style="width:50px"><input type="checkbox" name="type" value=""></td>-->
         <!--                               <td><a class="productview_btn" href="{{route('seller.view_product')}}">Break Pad and Rotor Replacement</a></td>-->
         <!--                              <td>-->
         <!--                                 <span class="nav-item dropdown  orderitempopmain">-->
         <!--                                    <a href="javascript:void(0)" class="dropdown-toggle nav-link ediio status-badge  bg-warning text-dark"  data-toggle="dropdown">-->
									<!--		 Draft-->
         <!--                                    </a> -->
         <!--                                    <div class="dropdown-menu dropdown-menu-right notifications orderitempop">-->
         <!--                                       <div class="noti-content">-->
         <!--                                          <h5>Sales Channels and apps</h5>-->
         <!--                                          <ul class="notification-list">-->
         <!--                                             <li class="notification-message viewBox ">-->
         <!--                                               <div class="saleschannelsitems">-->
									<!--						<p><span class="active-circle"> </span> Online Store &amp; Service Marketplace</p>-->
									<!--					 </div>-->
         <!--                                             </li>-->
         <!--                                          </ul>-->
         <!--                                       </div>-->
         <!--                                    </div>-->
         <!--                                 </span>-->
         <!--                              </td>-->
         <!--                               <td><span class="text-success">5 in stock</span> for 2 variants</td>-->
         <!--                               <td>Break Safety Inspection</td>-->
         <!--                               <td>Smart Store</td>-->
                                        
         <!--                           </tr>-->
									
									
									<!--<tr>-->
         <!--                               <td style="width:50px"><input type="checkbox" name="type" value=""></td>-->
         <!--                               <td><a class="productview_btn" href="{{route('seller.view_product')}}">Break Pad and Rotor Replacement</a></td>-->
         <!--                              <td>-->
         <!--                                 <span class="nav-item dropdown  orderitempopmain">-->
         <!--                                    <a href="javascript:void(0)" class="dropdown-toggle nav-link ediio status-badge  bg-warning text-dark"  data-toggle="dropdown">-->
									<!--		 Draft-->
         <!--                                    </a> -->
         <!--                                    <div class="dropdown-menu dropdown-menu-right notifications orderitempop">-->
         <!--                                       <div class="noti-content">-->
         <!--                                          <h5>Sales Channels and apps</h5>-->
         <!--                                          <ul class="notification-list">-->
         <!--                                             <li class="notification-message viewBox ">-->
         <!--                                               <div class="saleschannelsitems">-->
									<!--						<p><span class="active-circle"> </span> Online Store &amp; Service Marketplace</p>-->
									<!--					 </div>-->
         <!--                                             </li>-->
         <!--                                          </ul>-->
         <!--                                       </div>-->
         <!--                                    </div>-->
         <!--                                 </span>-->
         <!--                              </td>-->
         <!--                               <td><span class="text-success">5 in stock</span> for 2 variants</td>-->
         <!--                               <td>Break Safety Inspection</td>-->
         <!--                               <td>Smart Store</td>-->
                                        
         <!--                           </tr>-->
									
									
									<!--<tr>-->
         <!--                               <td style="width:50px"><input type="checkbox" name="type" value=""></td>-->
         <!--                               <td><a class="productview_btn" href="{{route('seller.view_product')}}">Break Pad and Rotor Replacement</a></td>-->
         <!--                              <td>-->
         <!--                                 <span class="nav-item dropdown  orderitempopmain">-->
         <!--                                    <a href="javascript:void(0)" class="dropdown-toggle nav-link ediio status-badge  bg-warning text-dark"  data-toggle="dropdown">-->
									<!--		 Draft-->
         <!--                                    </a> -->
         <!--                                    <div class="dropdown-menu dropdown-menu-right notifications orderitempop">-->
         <!--                                       <div class="noti-content">-->
         <!--                                          <h5>Sales Channels and apps</h5>-->
         <!--                                          <ul class="notification-list">-->
         <!--                                             <li class="notification-message viewBox ">-->
         <!--                                               <div class="saleschannelsitems">-->
									<!--						<p><span class="active-circle"> </span> Online Store &amp; Service Marketplace</p>-->
									<!--					 </div>-->
         <!--                                             </li>-->
         <!--                                          </ul>-->
         <!--                                       </div>-->
         <!--                                    </div>-->
         <!--                                 </span>-->
         <!--                              </td>-->
         <!--                               <td><span class="text-success">5 in stock</span> for 2 variants</td>-->
         <!--                               <td>Break Safety Inspection</td>-->
         <!--                               <td>Smart Store</td>-->
                                        
         <!--                           </tr>-->
									
									
                                  
         <!--                       </tbody>-->
         <!--                   </table>-->
         <!--               </div>-->
                    </div> 
                </div>
            
				</div>
				
				<div class="tab-pane fade" id="archivedproduct">
					  <div class="card card-table flex-fill">
				 <div class="card-header">
                            <h4 class="card-title">Archived</h4>
                        </div>
                    <div class="card-body px-4 pt-2">
						<div class="table-top-search-filter my-3">
							<div class="row w-100">
								<div class="col-md-6">
									<div class="w-100 searchFilerwrap">
										<input type="text" id="" class="form-control w-100" name="" placeholder="Filter products" value="">
										<i class="fa fa-search"></i>
									</div>
								</div>
								<div class="col-md-6">
										 <div class="actionMore text-right">
									  <span class="nav-item dropdown mr-3">
										 <a href="javascript:void(0)" class="dropdown-toggle btn btn-primary" data-toggle="dropdown">
											Product Vendor
										 </a> 
										 <div class="dropdown-menu dropdown-menu-right notifications">
											<div class="noti-content">
											   <ul class="notification-list">
												   <li class="notification-message">
												   <a href="javascript:void(0)">
														 <div class="form-check">
														  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios7" value="option1" checked>
														  <label class="form-check-label" for="exampleRadios7">
															Smart Store
														  </label>
														</div>
													 </a>
												  </li>
												  
												   <li class="notification-message">
													<a href="javascript:void(0)">
														 <div class="form-check">
														  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios6" value="option1" checked>
														  <label class="form-check-label" for="exampleRadios6">
															Smart Store 2
														  </label>
														</div>
													 </a>
													
												  </li>
											   </ul>
											</div>
										 </div>
									  </span>
									  
									  <span class="nav-item mr-3">
										 <a href="javascript:void(0)" class="btn btn-primary filter-toggler morefilterbtn" data-toggle="dropdown">
											More filters
										 </a> 
										 
									  </span>
									  
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
															Product title A–Z
														  </label>
														</div>
													 </a>
												  </li>
												  
												   <li class="notification-message">
													<a href="javascript:void(0)">
														 <div class="form-check">
														  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option1" checked>
														  <label class="form-check-label" for="exampleRadios2">
															Product title Z–A
														  </label>
														</div>
													 </a>
													
												  </li>
												  
												  
												  <li class="notification-message">
													<a href="javascript:void(0)">
														 <div class="form-check">
														  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option1" checked>
														  <label class="form-check-label" for="exampleRadios3">
															Created (oldest first)
														  </label>
														</div>
													 </a>
													
												  </li>
												  
												  
												    <li class="notification-message">
													<a href="javascript:void(0)">
														 <div class="form-check">
														  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option1" checked>
														  <label class="form-check-label" for="exampleRadios4">
															Created (newest first)
														  </label>
														</div>
													 </a>
													
												  </li>
												  
												  <li class="notification-message">
													<a href="javascript:void(0)">
														 <div class="form-check">
														  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios5" value="option1" checked>
														  <label class="form-check-label" for="exampleRadios5">
															Vendor A–Z
														  </label>
														</div>
													 </a>
													
												  </li>
												  
												    <li class="notification-message">
													<a href="javascript:void(0)">
														 <div class="form-check">
														  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios6" value="option1" checked>
														  <label class="form-check-label" for="exampleRadios6">
															Vendor Z–A
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
							</div>
							<div class="tableseletefilter4 mt-3"  style="display:none;">
							 <div class="actionMore">
									<span class="nav-item mr-3">
										 <a href="javascript:void(0)" class="btn btn-primary" data-toggle="dropdown">
											2 selected
										 </a> 
										 
									  </span>
									  
									   <span class="nav-item mr-3">
										 <a href="{{route('seller.addedon_product')}}" class="btn btn-primary " data-toggle="dropdown">
											Edit Product
										 </a> 
										 
									  </span>
									  
									  <span class="nav-item dropdown mr-3">
										 <a href="javascript:void(0)" class="dropdown-toggle btn btn-primary" data-toggle="dropdown">
											More actions
										 </a> 
										 <div class="dropdown-menu dropdown-menu-right notifications">
                        <div class="noti-content">
                           <ul class="notification-list">
                              <li class="notification-message">
                                 <a href="javascript:void(0)">
                                   Set as active
                                 </a>
                              </li>
                              <li class="notification-message">
                                 <a href="javascript:void(0)">
                                   Set as draft
                                 </a>
                              </li>
                              <li class="notification-message">
                                 <a href="javascript:void(0)">
                                    Archive products
                                 </a>
                              </li>
							   <li class="notification-message">
                                 <a href="javascript:void(0)">
                                    Delete products 
                                 </a>
                              </li>
							  
                           </ul>
                        </div>
                     </div>
									  </span>
									  
									  
									  
									 
									  
									 
									</div>
							
						</div>
						</div>
						
         <!--               <div class="table-responsive"> -->
         <!--                   <table class="table table-center datatable productListTable"   id="cat">-->
         <!--                       <thead>-->
         <!--                           <tr>-->
         <!--                               <th style="width:50px"><input name="select_all" value="1" type="checkbox" id="selectAllTable4"></th>-->
         <!--                               <th>Product</th>-->
         <!--                               <th>Status</th>-->
         <!--                               <th>Inventory </th>-->
         <!--                               <th>Type</th>-->
         <!--                               <th>Vendor</th>-->
         <!--                           </tr>-->
         <!--                       </thead>-->
         <!--                       <tbody>-->
         <!--                           <tr>-->
         <!--                               <td style="width:50px"><input type="checkbox" name="type" value=""></td>-->
         <!--                               <td><a class="productview_btn" href="{{route('seller.view_product')}}">Break Pad and Rotor Replacement</a></td>-->
         <!--                              <td>-->
         <!--                                 <span class="nav-item dropdown  orderitempopmain">-->
         <!--                                    <a href="javascript:void(0)" class="dropdown-toggle nav-link ediio status-badge  bg-info text-white"  data-toggle="dropdown">-->
									<!--		 Archived-->
         <!--                                    </a> -->
         <!--                                    <div class="dropdown-menu dropdown-menu-right notifications orderitempop">-->
         <!--                                       <div class="noti-content">-->
         <!--                                          <h5>Sales Channels and apps</h5>-->
         <!--                                          <ul class="notification-list">-->
         <!--                                             <li class="notification-message viewBox ">-->
         <!--                                               <div class="saleschannelsitems">-->
									<!--						<p><span class="active-circle"> </span> Online Store &amp; Service Marketplace</p>-->
									<!--					 </div>-->
         <!--                                             </li>-->
         <!--                                          </ul>-->
         <!--                                       </div>-->
         <!--                                    </div>-->
         <!--                                 </span>-->
         <!--                              </td>-->
         <!--                               <td><span class="text-success">5 in stock</span> for 2 variants</td>-->
         <!--                               <td>Break Safety Inspection</td>-->
         <!--                               <td>Smart Store</td>-->
                                        
         <!--                           </tr>-->
									
									
									<!--<tr>-->
         <!--                               <td style="width:50px"><input type="checkbox" name="type" value=""></td>-->
         <!--                               <td><a class="productview_btn" href="{{route('seller.view_product')}}">Break Pad and Rotor Replacement</a></td>-->
         <!--                              <td>-->
         <!--                                 <span class="nav-item dropdown  orderitempopmain">-->
         <!--                                    <a href="javascript:void(0)" class="dropdown-toggle nav-link ediio status-badge  bg-info text-white"  data-toggle="dropdown">-->
									<!--		 Archived-->
         <!--                                    </a> -->
         <!--                                    <div class="dropdown-menu dropdown-menu-right notifications orderitempop">-->
         <!--                                       <div class="noti-content">-->
         <!--                                          <h5>Sales Channels and apps</h5>-->
         <!--                                          <ul class="notification-list">-->
         <!--                                             <li class="notification-message viewBox ">-->
         <!--                                               <div class="saleschannelsitems">-->
									<!--						<p><span class="active-circle"> </span> Online Store &amp; Service Marketplace</p>-->
									<!--					 </div>-->
         <!--                                             </li>-->
         <!--                                          </ul>-->
         <!--                                       </div>-->
         <!--                                    </div>-->
         <!--                                 </span>-->
         <!--                              </td>-->
         <!--                               <td><span class="text-success">5 in stock</span> for 2 variants</td>-->
         <!--                               <td>Break Safety Inspection</td>-->
         <!--                               <td>Smart Store</td>-->
                                        
         <!--                           </tr>-->
									
									
									<!--<tr>-->
         <!--                               <td style="width:50px"><input type="checkbox" name="type" value=""></td>-->
         <!--                               <td><a class="productview_btn" href="{{route('seller.view_product')}}">Break Pad and Rotor Replacement</a></td>-->
         <!--                              <td>-->
         <!--                                 <span class="nav-item dropdown  orderitempopmain">-->
         <!--                                    <a href="javascript:void(0)" class="dropdown-toggle nav-link ediio status-badge  bg-info text-white"  data-toggle="dropdown">-->
									<!--		 Archived-->
         <!--                                    </a> -->
         <!--                                    <div class="dropdown-menu dropdown-menu-right notifications orderitempop">-->
         <!--                                       <div class="noti-content">-->
         <!--                                          <h5>Sales Channels and apps</h5>-->
         <!--                                          <ul class="notification-list">-->
         <!--                                             <li class="notification-message viewBox ">-->
         <!--                                               <div class="saleschannelsitems">-->
									<!--						<p><span class="active-circle"> </span> Online Store &amp; Service Marketplace</p>-->
									<!--					 </div>-->
         <!--                                             </li>-->
         <!--                                          </ul>-->
         <!--                                       </div>-->
         <!--                                    </div>-->
         <!--                                 </span>-->
         <!--                              </td>-->
         <!--                               <td><span class="text-success">5 in stock</span> for 2 variants</td>-->
         <!--                               <td>Break Safety Inspection</td>-->
         <!--                               <td>Smart Store</td>-->
                                        
         <!--                           </tr>-->
									
									
									<!--<tr>-->
         <!--                               <td style="width:50px"><input type="checkbox" name="type" value=""></td>-->
         <!--                               <td><a class="productview_btn" href="{{route('seller.view_product')}}">Break Pad and Rotor Replacement</a></td>-->
         <!--                              <td>-->
         <!--                                 <span class="nav-item dropdown  orderitempopmain">-->
         <!--                                    <a href="javascript:void(0)" class="dropdown-toggle nav-link ediio status-badge  bg-info text-white"  data-toggle="dropdown">-->
									<!--		 Archived-->
         <!--                                    </a> -->
         <!--                                    <div class="dropdown-menu dropdown-menu-right notifications orderitempop">-->
         <!--                                       <div class="noti-content">-->
         <!--                                          <h5>Sales Channels and apps</h5>-->
         <!--                                          <ul class="notification-list">-->
         <!--                                             <li class="notification-message viewBox ">-->
         <!--                                               <div class="saleschannelsitems">-->
									<!--						<p><span class="active-circle"> </span> Online Store &amp; Service Marketplace</p>-->
									<!--					 </div>-->
         <!--                                             </li>-->
         <!--                                          </ul>-->
         <!--                                       </div>-->
         <!--                                    </div>-->
         <!--                                 </span>-->
         <!--                              </td>-->
         <!--                               <td><span class="text-success">5 in stock</span> for 2 variants</td>-->
         <!--                               <td>Break Safety Inspection</td>-->
         <!--                               <td>Smart Store</td>-->
                                        
         <!--                           </tr>-->
									
									
                                  
         <!--                       </tbody>-->
         <!--                   </table>-->
         <!--               </div>-->
                    </div> 
                </div>
            
				</div>
			</div> 		
		</div> 		
        </div>
    </div>
    <div class="modal fade" id="delete-popup" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    	<input type="hidden" name="productid" id ="productid"/>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="delete-cont">
                        <p>Are you sure you want to delete this item ?</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" id="confirm">Delete</button>
                </div>
            </div>
        </div>
    </div>
	
	

<div class="modal fade addorderpopup" id="import-popup" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-body p0">
            <div class="card-table mb-0">
               <div class="body addorder p-0imp">
                  <div class="d-flex justify-content-between align-items-center">
                     <h3 class="mb-0">Import Product</h3>
                  </div>
                  <div class="viewBox container px-0 mt-3">
                     <div class="row">
                        <div class="col-md-12">
							<p>Download a <a href="#">sample CSV template</a>to see an example of the format required.</p>
                           <div class="form-group mb-5">
                             <label>Upload File</label>
                              <input type="file" class="form-control"  />
                           </div>
						   <p class="mb-3 text-muted">
                                       <input type="checkbox" name="checkbox" class="mr-2" checked> 
Overwrite any current products that have the same handle. Existing values will be used for any missing columns.
                                    </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-success">Upload and continue</button>
            <button type="button" class="btn btn-danger" id="dismiss" data-dismiss="modal">Cancel</button>
         </div>
      </div>
   </div>
</div>


<!--<div class="modal fade addorderpopup" id="export-popup" role="dialog" aria-hidden="true">-->
<!--   <div class="modal-dialog modal-dialog-centered">-->
<!--      <div class="modal-content">-->
<!--         <div class="modal-body p0">-->
<!--            <div class="card-table mb-0">-->
<!--               <div class="card-body addorder p-0imp">-->
<!--                  <div class="d-flex justify-content-between align-items-center">-->
<!--                     <h3 class="mb-0">Export products</h3>-->
<!--                  </div>-->
<!--                  <div class="viewBox container px-0 mt-3">-->
<!--                     <div class="row">                        -->
<!--                        <div class="col-md-12">-->
<!--								<div class="checkbox">-->
<!--									<p class="mb-3">This CSV file can update all product information. To update just inventory quantities use the <a href="#">CSV file for inventory.</a></p>-->
<!--									<p>Export</p>-->
<!--                                    <label class="mb-3 w-100">-->
<!--                                       <input type="radio" name="checkbox" class="mr-2" checked>  Current page-->
<!--                                    </label>-->
									
<!--									<label class="mb-3 w-100">-->
<!--                                       <input type="radio" name="checkbox" class="mr-2"> All customers-->
<!--                                    </label>-->
									
<!--									<hr>-->
									
<!--									<p>Export as</p>-->
<!--                                    <label class="mb-3 w-100">-->
<!--                                       <input type="radio" name="checkbox2" class="mr-2" checked> CSV for Excel, Numbers, or other spreadsheet programs-->
<!--                                    </label>-->
									
<!--									<label class="mb-3 w-100">-->
<!--                                       <input type="radio" name="checkbox2" class="mr-2"> Plain CSV file-->
<!--                                    </label>-->

<!--									<p class="mb-3 text-muted">-->
<!--										Learn more about <a href="">exporting customers to CSV file</a> or the <a href="">bulk editor.</a>-->
<!--                                    </p>-->
									
<!--                                 </div> -->
<!--						</div>-->
<!--                     </div>-->
<!--                  </div>-->
<!--               </div>-->
<!--            </div>-->
<!--         </div>-->
<!--         <div class="modal-footer">-->
<!--            <button type="button" class="btn btn-success">Export products</button>-->
<!--            <button type="button" class="btn btn-danger" id="dismiss" data-dismiss="modal">Cancel</button>-->
<!--         </div>-->
<!--      </div>-->
<!--   </div>-->
<!--</div>-->


	<div class="v-sidebar-wrapper morefiltersidebar">
   <div class="v-sidebar">
      <div class="v-sidebar-header">
         <h3>More filters</h3> <button id="sidebar-close-btn"><i class="fa fa-times fa-2x"></i></button>
      </div>
	 
	 <div class="morefilterlists">
	 
	
		<ul>
			<li class="dropdown"> 
				<a   class="dropdown-toggle" href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >Search </a>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					<div class="morefilter-search">
						<input type="text" class="form-control" value="">
					</div>
				  </div>
			</li>
			
				<li class="dropdown"> 
				<a   class="dropdown-toggle" href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >Product Vendor </a>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					 <div class="form-check mb-3">
						<input type="checkbox" class="form-check-input" id="exampleCheck1">
						<label class="form-check-label" for="exampleCheck1">Smart Store</label>
					  </div>
					   <div class="form-check">
						<input type="checkbox" class="form-check-input" id="exampleCheck2">
						<label class="form-check-label" for="exampleCheck2">Tire Store</label>
					  </div>
				  </div>
			</li>
			
			<li class="dropdown"> 
				<a   class="dropdown-toggle" href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >Tagged with </a>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					<div class="morefilter-search">
						<input type="text" class="form-control" value="">
					</div>
				  </div>
			</li>
			
			
				<li class="dropdown"> 
				<a   class="dropdown-toggle" href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >Status </a>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					 <div class="form-check mb-3">
						<input type="checkbox" class="form-check-input" id="exampleCheck3">
						<label class="form-check-label" for="exampleCheck3">Active</label>
					  </div>
					   <div class="form-check">
						<input type="checkbox" class="form-check-input" id="exampleCheck4">
						<label class="form-check-label" for="exampleCheck4">Draft</label>
					  </div>
				  </div>
			</li>
			<li> <a class="" href="#">More filters </a></li>
			<li> <a class="" href="#">Sort</a></li>
		</ul>
		
	 </div>
   </div>
   <div class="v-sidebar-fade">
   </div>
   </div>
  
   @endsection
   @section('scripts')
  
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/fixedheader/3.2.0/js/dataTables.fixedHeader.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.1.0/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.colVis.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>

<script>

   
      
      $(document).ready(function(){
 $(".clic-show").click(function(){
   $(".sows").toggle(400);
 });

 
});

	$('.filter-toggler').click(function () {
   $('.v-sidebar-wrapper').toggleClass('sidebar-control', 500);
   $('.v-sidebar-fade').fadeIn(500);
   $('body').addClass('openSidebar');
});
$('#sidebar-close-btn').click(function () {
   $('.v-sidebar-wrapper').toggleClass('sidebar-control', 500);
   $('.v-sidebar-fade').fadeOut(500);
   $('body').removeClass('openSidebar');
});
</script>

<script>
$(document).ready(function() {
    var table = $('#cat').DataTable(
    {
        fixedHeader: true,
        dom: 'Bfrtip',
        // buttons: [{
        //     extend: 'colvis',
        //     text: "Columns",
        //     postfixButtons: ['colvisRestore']
        // }],
        buttons: [
           'csv', 'pdf'
        ],
        
        "sDom": "<'row'<'col-sm-12'tr>>" +
                    "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
            bDestroy: true,
            processing: true,
             language: {
             processing: '<i class="fa fa-spinner fa-spin fa-3x fa-fw"  style="margin-top:-100px"></i><span class="sr-only">Loading...</span> '
        },
          
            serverSide: true,
            ajax: { 
                url: '{{Route("seller.get_productListing")}}', 
                data : function (d) {
                    d.name = $('input[name=name]').val();
                    d.status = $('select[name=status]').val();
                    d.search = $('input[name=searchname]').val();
                }
            },
            ordering: true,
            buttons: false,
            scrollX: true,
            scrollCollapse: true,
			autoWidth: false,
            oLanguage: {
                sEmptyTable: 'No records found!!',
            },
            columns: [    
                        
                        {
                            data: 'product_name',
                            name: 'Product'
                        },
                        {
                            data: 'status',
                            name: 'Status'
                        },
                        {
                            data: 'quantity',
                            name: 'Inventory'
                        },
                        {
                            data: 'brand_name',
                            name: 'Brand'
                        },
                        {
                            data: 'vendor',
                            name: 'Vendor'
                        }
                    ]
        
    }
    );
    
      $('.button_export_csv').click(() => {
          console.log($('#cat').DataTable());
		    $('#cat').DataTable().buttons(0,1).trigger()
		});

// 	    $('.button_export_pdf').click(() => {
// 		    $('#cat').DataTable().buttons(0,0).trigger()
// 		});
    
     $('#search-tableForm').on('submit', function(e) {
        
	         table.order([0,'desc']).draw();
	        e.preventDefault();
	    });
    table.order([0,'desc']).draw();
    $.fn.dataTable.ext.errMode = 'none';
});




$(function () {
        $("#selectAllTable1").click(function () {
            if ($(this).is(":checked")) {
                $(".tableseletefilter1").show();
            } else {
                $(".tableseletefilter1").hide();
            }
        });
    });
	
	
	
	$(function () {
        $("#selectAllTable2").click(function () {
            if ($(this).is(":checked")) {
                $(".tableseletefilter2").show();
            } else {
                $(".tableseletefilter2").hide();
            }
        });
    });
	
	$(function () {
        $("#selectAllTable3").click(function () {
            if ($(this).is(":checked")) {
                $(".tableseletefilter3").show();
            } else {
                $(".tableseletefilter3").hide();
            }
        });
    });
	
		$(function () {
        $("#selectAllTable4").click(function () {
            if ($(this).is(":checked")) {
                $(".tableseletefilter4").show();
            } else {
                $(".tableseletefilter4").hide();
            }
        });
    });
	
	
</script>

   @endsection