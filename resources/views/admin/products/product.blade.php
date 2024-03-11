@extends('admin.layouts.app1')
@section('title', 'Product')
@section('content')
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
					
				    <a class="btn btn-primary addorder ml-3" href="{{route('admin.addproduct')}}">
                        Add Product
                    </a>
					</div> 
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
			<div class="tab-content ordertabstableitems clearfix">
				<div class="tab-pane fade show active" id="allproducts">
                    <div class="card card-table flex-fill">
    				    <div class="card-header">
                            <h4 class="card-title"> Products</h4>
                        </div>
                        <div class="card-body px-4 pt-2">
    						<div class="table-top-search-filter my-3">
    						     <form id="search-tableForm" method="POST">
        							<div class="row w-100">
        								<div class="col-md-10">
        									<div class="w-120 searchFilerwrap">
        										<input type="text" id="searchname" name="searchname" class="form-control w-120"  placeholder="Filterss products" >
        										<i class="fa fa-search"></i>
        									</div>
        								</div>
        								<div class="col-md-2">
        								    <div class="actionMore text-right">
            							    <div class="">
            									  <span class="nav-item mr-3">
            										 <button class="btn btn-primary " style="padding: 10px 18px;" >
            											Search
            										 </button> 
            									  </span>
            									  <!--<span class="nav-item mr-3">-->
            										 <!--<a href="javascript:void(0)" class="btn btn-primary filter-toggler morefilterbtn" data-toggle="dropdown" style="padding: 10px 18px; ">-->
            											<!--More filters-->
            										 <!--</a> -->
									              <!--</span>-->
									              <span class="nav-item dropdown">
            										<a href="javascript:void(0)" class="dropdown-toggle btn btn-primary" data-toggle="dropdown" style="padding: 10px 18px;" >
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
        							</div>
                                </form>
		                    </div>
		                </div> 
                        <div class="table-responsive"> 
                            <table class="table table-center datatable productListTable"   id="cat">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Category</th>
                                        <th>Product</th>
                                        <th>Inventory </th>
                                        <th>Brand</th>
                                        <th>Vendor</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="products_listing">
                                    <tr>
                                        <td>1</td>
                                        <td>Road Compliance</td>
                                        <td>Mud flaps, front set</td>
                                        <td>10 in stock</td>
                                        <td >Marvin Daniels</td>
                                        <td >Britanney Jacobson</td>
                                        <td class="text-nowrap"><label class="badge badge-success">In Stock</label></td>
                                        <td >
            								<a href="{{route('admin.viewproduct')}}" class="btn btn-sm bg-info-light">
            									<i class="far fa-eye mr-1"></i> View
            								</a>
            								<a href="{{route('admin.editproduct')}}" class="btn btn-sm bg-success-light">
            									<i class="fas fa-edit"></i> Edit
            								</a>
            								<a href="#" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#delete-popup">
            									<i class="fas fa-trash-alt"></i> Delete
            								</a>
            						    </td>
                                    </tr>
                                  6  <tr>
                                        <td>2</td>
                                        <td>Insurance</td>
                                        <td>Wheel Rim</td>
                                        <td>10 in stock</td>
                                        <td >Marvin Daniels</td>
                                        <td >Britanney Jacobson</td>
                                        <td class="text-nowrap"><label class="badge badge-success">In Stock</label></td>
                                        <td >
            								<a href="{{route('admin.viewproduct')}}" class="btn btn-sm bg-info-light">
            									<i class="far fa-eye mr-1"></i> View
            								</a>
            								<a href="{{route('admin.editproduct')}}" class="btn btn-sm bg-success-light">
            									<i class="fas fa-edit"></i> Edit
            								</a>
            								<a href="#" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#delete-popup">
            									<i class="fas fa-trash-alt"></i> Delete
            								</a>
            						    </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Repairs</td>
                                        <td>Mercedes-SecuraDrive</td>
                                        <td>10 in stock</td>
                                        <td >Marvin Daniels</td>
                                        <td >Britanney Jacobson</td>
                                        <td class="text-nowrap"><label class="badge badge-success">In Stock</label></td>
                                        <td >
            								<a href="{{route('admin.viewproduct')}}" class="btn btn-sm bg-info-light">
            									<i class="far fa-eye mr-1"></i> View
            								</a>
            								<a href="{{route('admin.editproduct')}}" class="btn btn-sm bg-success-light">
            									<i class="fas fa-edit"></i> Edit
            								</a>
            								<a href="#" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#delete-popup">
            									<i class="fas fa-trash-alt"></i> Delete
            								</a>
            						    </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Road Compliance</td>
                                        <td>Mercedes GLA12</td>
                                        <td>10 in stock</td>
                                        <td >Marvin Daniels</td>
                                        <td >Britanney Jacobson</td>
                                        <td class="text-nowrap"><label class="badge badge-success">In Stock</label></td>
                                        <td >
            								<a href="{{route('admin.viewproduct')}}" class="btn btn-sm bg-info-light">
            									<i class="far fa-eye mr-1"></i> View
            								</a>
            								<a href="{{route('admin.editproduct')}}" class="btn btn-sm bg-success-light">
            									<i class="fas fa-edit"></i> Edit
            								</a>
            								<a href="#" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#delete-popup">
            									<i class="fas fa-trash-alt"></i> Delete
            								</a>
            						    </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Road Compliance</td>
                                        <td>Windshield</td>
                                        <td>20 in stock</td>
                                        <td >Marvin Daniels</td>
                                        <td >Britanney Jacobson</td>
                                        <td class="text-nowrap"><label class="badge badge-success">InStock</label></td>
                                        <td >
            								<a href="{{route('admin.viewproduct')}}" class="btn btn-sm bg-info-light">
            									<i class="far fa-eye mr-1"></i> View
            								</a>
            								<a href="{{route('admin.editproduct')}}" class="btn btn-sm bg-success-light">
            									<i class="fas fa-edit"></i> Edit
            								</a>
            								<a href="#" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#delete-popup">
            									<i class="fas fa-trash-alt"></i> Delete
            								</a>
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


   @endsection