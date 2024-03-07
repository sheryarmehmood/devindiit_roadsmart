@extends('serviceprovider.layouts.app')
@section('title', 'Customers')
@section('content')
<link  rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" >
<style>
#customerList_wrapper #cat_filter {
    position: absolute;
    top: -45px;
    right: 20px;
}

#customerList_wrapper #customerList_filter input
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
   display:none;
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

#customerList_wrapper .row:nth-child(2) #cat_paginate,
#customerList_wrapper .row:nth-child(2) #cat_info {
   display: none;
}

button.dt-button.buttons-columnVisibility.active {
   color: #c9343a !important;
}

</style>


    <div class="content container-fluid customer-list-page">
        <div class="page-header">
            <div class="row">
                <div class="col">
                  <h3 class="page-title">
					<div class="d-flex titleSelect align-items-center">
						Customer segment:
						<select name="status" id="" class="my-select form-control">
							<option value="All customers">All customers</option>
							<option value="Email subscribers">Email subscribers</option>
							<option value="Abandoned checkouts in the last 30 days">Abandoned checkouts in the last 30 days</option>
							<option value="Customers who have purchased more than once">Customers who have purchased more than once</option>
							<option value="Customers who haven't purchased">Customers who haven't purchased</option>
						</select>
					</div>
					
				</h3>
                </div>
                <div class="col-auto text-right all-product-right" style="margin-top: 7px;">
					<div class="actionMore d-flex align-items-center">
					<a class="btn btn-primary addorder mr-3 button_export_csv" href="javascript:void(0)">
                        Export
                    </a>
					
					<!--<a class="btn btn-primary addorder mr-3" href="#" data-toggle="modal" data-target="#import-popup">-->
     <!--                   Import-->
     <!--               </a>-->
					<!--<a class="btn btn-primary addorder mr-3" href="#" data-toggle="modal" data-target="#email-segement-popup">-->
     <!--                   Email segment-->
     <!--               </a>-->
				    <a class="btn btn-primary addorder" href="{{route('seller.add_customer')}}">
                        Add customer
                    </a>
					</div>
                </div>
            </div>
			
			<div id="accordion">
				  <div class="card page-header-filter  mt-4">
					<div class="card-header" id="headingOne">
					  <h4><p class="customer-count">2 customers <span class="devide-vertical-line"></span> <span>No filters applied</span></p> 
								<div class="customer-filter-actions">
									<a href="#"><i class="fa fa-undo" aria-hidden="true"></i></a>
									<a href="#"><i class="fa fa-redo" aria-hidden="true"></i></a>
									<span class="devide-vertical-line"></span>
									<a href="#"><i class="fa fa-filter" aria-hidden="true"></i></a>
									<a href="#"><i class="fa fa-table" aria-hidden="true"></i></a>
									<a href="#"><i class="fa fa-question-circle" aria-hidden="true"></i></a>
								</div>
							</h4>
							
                            <a href="#" class="btn btn-link filterdownbtn" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"><i class="fa fa-chevron-down" aria-hidden="true"></i></a>
					</div>

					<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
					  <div class="card-body p-0">
						<div class="form-group m-0">
							<textarea class="form-control" id="" rows="3"></textarea>
						  </div>
					  </div>
					   <div class="card-footer text-right">
						  <a class="btn btn-primary ml-auto" href="javascript:void(0);">
						Apply           </a>
					   </div> 
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
         <div class="card card-table flex-fill ordertabstableitems">
				 <div class="card-header">
                            <h4 class="card-title">Customers</h4>
                        </div>
                    <div class="card-body px-4 pt-2"> 
							<div class="table-top-search-filter my-3">
							    <form id="search-tableForm" method="POST">
							<div class="row w-100">
								<div class="col">
									<div class="w-100 searchFilerwrap" >
										<input type="text" id="searchname" name="searchname" class="form-control w-100"  style='padding-top:6px' placeholder="Search Customers" >
										<i class="fa fa-search"></i>
									</div>
								</div>
								<div class="col">
								    <span class="nav-item mr-3">
										 <button class="btn btn-primary " style="padding: 10px 38px;" >
											Search
										 </button> 
									  </span>
<!--										 <div class="actionMore text-right">-->
									  
<!--									  <span class="nav-item dropdown">-->
<!--										 <a href="javascript:void(0)" class="dropdown-toggle btn btn-primary" data-toggle="dropdown">-->
<!--											Sort-->
<!--										 </a> -->
<!--										 <div class="dropdown-menu dropdown-menu-right notifications">-->
<!--											<div class="noti-content">-->
<!--											   <ul class="notification-list">-->
<!--												  <li class="notification-message">-->
<!--												   <a href="javascript:void(0)">-->
<!--														 <div class="form-check">-->
<!--														  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>-->
<!--														  <label class="form-check-label" for="exampleRadios1">-->
															
<!--Last update-->
<!--														  </label>-->
<!--														</div>-->
<!--													 </a>-->
<!--												  </li>-->
												  
<!--												   <li class="notification-message">-->
<!--													<a href="javascript:void(0)">-->
<!--														 <div class="form-check">-->
<!--														  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option1" checked>-->
<!--														  <label class="form-check-label" for="exampleRadios2">-->
<!--															Amount spent-->
<!--														  </label>-->
<!--														</div>-->
<!--													 </a>-->
													
<!--												  </li>-->
												  
												  
<!--												  <li class="notification-message">-->
<!--													<a href="javascript:void(0)">-->
<!--														 <div class="form-check">-->
<!--														  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option1" checked>-->
<!--														  <label class="form-check-label" for="exampleRadios3">-->
															
<!--Total orders-->
<!--														  </label>-->
<!--														</div>-->
<!--													 </a>-->
													
<!--												  </li>-->
												  
												  
<!--												    <li class="notification-message">-->
<!--													<a href="javascript:void(0)">-->
<!--														 <div class="form-check">-->
<!--														  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option1" checked>-->
<!--														  <label class="form-check-label" for="exampleRadios4">-->
<!--															Last order date-->
<!--														  </label>-->
<!--														</div>-->
<!--													 </a>-->
													
<!--												  </li>-->
												  
<!--												    <li class="notification-message">-->
<!--													<a href="javascript:void(0)">-->
<!--														 <div class="form-check">-->
<!--														  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option1" checked>-->
<!--														  <label class="form-check-label" for="exampleRadios4">-->
															
<!--First order date-->
<!--														  </label>-->
<!--														</div>-->
<!--													 </a>-->
													
<!--												  </li>-->
												  
												  
<!--												  <li class="notification-message">-->
<!--													<a href="javascript:void(0)">-->
<!--														 <div class="form-check">-->
<!--														  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios5" value="option1" checked>-->
<!--														  <label class="form-check-label" for="exampleRadios5">-->
<!--															A–Z-->
<!--														  </label>-->
<!--														</div>-->
<!--													 </a>-->
													
<!--												  </li>-->
												  
<!--												    <li class="notification-message">-->
<!--													<a href="javascript:void(0)">-->
<!--														 <div class="form-check">-->
<!--														  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios6" value="option1" checked>-->
<!--														  <label class="form-check-label" for="exampleRadios6">-->
<!--															Z–A-->
<!--														  </label>-->
<!--														</div>-->
<!--													 </a>-->
													
<!--												  </li>-->
												  
												  
<!--											   </ul>-->
<!--											</div>-->
<!--										 </div>-->
<!--									  </span>-->
									  
<!--									</div>-->
							
								</div>
							</div>
							<div class="tableseletefilter mt-3"  style="display:none;">
							 <div class="actionMore">
									<span class="nav-item mr-3">
										 <a href="javascript:void(0)" class="btn btn-primary" data-toggle="dropdown">
											2 selected
										 </a> 
										 
									  </span>
									  
									   <span class="nav-item mr-3">
										 <a href="{{route('seller.view_customer')}}" class="btn btn-primary " data-toggle="dropdown">
											Edit Customer
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
                                   Delete selected customers
                                 </a>
                              </li>
                              <li class="notification-message">
                                 <a href="javascript:void(0)">
                                   Add tags
                                 </a>
                              </li>
                              <li class="notification-message">
                                 <a href="javascript:void(0)">
                                   Remove tags
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
				<table class="table table-center datatable" id="customerList">
                                        <thead>
                                            <tr>
                                                <th>Customer name</th>
                                               <th>Email Subscription </th>
												 <th>Location</th>
                                                <th>Order ID</th>
                                                <th>Spent</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody id="customerTableList">
            <!--                                <tr>-->
            <!--                                    <td style="width:50px"><input type="checkbox" name="type" value=""></td>-->
            <!--                                    <td><a class="customerTitle" href="{{route('seller.view_customer')}}">John Smith</a>  <i class="fa fa fa-file ml-5 customtooltip tooltips" tooltip="Lorem Ipsum is simply dummy text of the printing and typesetting industry" tooltip-position="bottom"></i></td>-->
            <!--                                    <td><label class="badge badge-success">Subscribed</label></td>-->
												<!--<td>Individual</td>-->
            <!--                                    <td class="text-nowrap">1688 St Matthews Ave,</br> Winnipeg, MB R3H 0A2, Canada</td>-->
												<!--<td class="text-nowrap">2</td>-->
												<!--<td class="text-nowrap">K 100.00</td>-->
                                                
            <!--                                </tr>-->
                                        </tbody>
                                    </table>
                            
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
                     <h3 class="mb-0">Import customers by CSV</h3>
                  </div>
                  <div class="viewBox container px-0 mt-3">
                     <div class="row">
                        <div class="col-md-12">
						 <p>Make sure that customers set to ”Accepts Email Marketing” and ”Accepts SMS Marketing” have given you permission. </p>
                           <div class="form-group">
							  <label>Upload File</label>
                              <input type="file" class="form-control"  />
                           </div>
						  <p class="mb-3 text-muted">
                                       <input type="checkbox" name="checkbox" class="mr-2" checked> 
Overwrite existing customers that have the same email or phone

                                    </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-success">Upload</button>
            <button type="button" class="btn btn-danger" id="dismiss" data-dismiss="modal">Cancel</button>
         </div>
      </div>
   </div>
</div>

<div class="modal fade addorderpopup" id="export-popup" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-body p0">
            <div class="card-table mb-0">
               <div class="card-body addorder p-0imp">
                  <div class="d-flex justify-content-between align-items-center">
                     <h3 class="mb-0">Export customers</h3>
                  </div>
                  <div class="viewBox container px-0 mt-3">
                     <div class="row">                        
                        <div class="col-md-12">
								<div class="checkbox">
									<p>Export</p>
                                    <label class="mb-3 w-100">
                                       <input type="radio" name="checkbox" class="mr-2" checked>  Current page
                                    </label>
									
									<label class="mb-3 w-100">
                                       <input type="radio" name="checkbox" class="mr-2"> All customers
                                    </label>
									
									<hr>
									
									<p>Export as</p>
                                    <label class="mb-3 w-100">
                                       <input type="radio" name="checkbox2" class="mr-2" checked> CSV for Excel, Numbers, or other spreadsheet programs
                                    </label>
									
									<label class="mb-3 w-100">
                                       <input type="radio" name="checkbox2" class="mr-2"> Plain CSV file
                                    </label>

									<p class="mb-3 text-muted">
										Learn more about <a href="">exporting customers to CSV file</a>

                                    </p>
									
                                 </div> 
						</div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-success">Export customers</button>
            <button type="button" class="btn btn-danger" id="dismiss" data-dismiss="modal">Cancel</button>
         </div>
      </div>
   </div>
</div>



<div class="modal fade addorderpopup" id="email-segement-popup" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-body p0">
            <div class="card-table mb-0">
               <div class="body addorder p-0imp">
                  <div class="d-flex justify-content-between align-items-center">
                     <h3 class="mb-0">Email the All customers segment</h3>

                  </div>
                  <div class="viewBox container px-0 mt-3">
                     <div class="row">
                        <div class="col-md-12">
                          <div class="checkbox">
									<p>Only email subscribers will receive this email</p>
								
									<div class="email-segement-inner">
										<a href="javascript:void(0);">
											<i class="fas fa-envelope"></i>
										<h6>Email segment using Email</h6>
										<p>10,000 free emails per month; $1 per 1,000 additional emails</p>
										</a>
									</div>
									
									<hr>
									
									<p>Export segement</p>
                                    <label class="mb-3 w-100">
                                       <input type="radio" name="checkbox2" class="mr-2" checked> CSV for Excel, Numbers, or other spreadsheet programs
                                    </label>
									
									<label class="mb-3 w-100">
                                       <input type="radio" name="checkbox2" class="mr-2"> Plain CSV file
                                    </label>

									
									
                                 </div> 
						  
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-success">Export segment</button>
            <button type="button" class="btn btn-danger" id="dismiss" data-dismiss="modal">Cancel</button>
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
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js" ></script>
<script>


$(document).ready(function() {
    var table = $('#customerList').DataTable(
    {
        fixedHeader: true,
        dom: 'Bfrtip',
		"searching": false,
// 		 buttons: [
//           'csv', 'pdf'
//         ],
    
     "sDom": "<'row'<'col-sm-12'tr>>" +
                    "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
            bDestroy: true,
            processing: true,
             language: {
             processing: '<i class="fa fa-spinner fa-spin fa-3x fa-fw"  style="margin-top:-100px"></i><span class="sr-only">Loading...</span> '
        },
            serverSide: true,
            ajax: { 
                url: '{{Route("seller.get_customerListing")}}', 
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
            // paging: false,
			autoWidth: false,
            oLanguage: {
                sEmptyTable: 'No records found!!',
            },
            
            columns: [    
                        
                        {
                            data: 'name',
                            name: 'Customer name'
                        },
                        {
                            data: 'status',
                            name: 'Email Subscription'
                        },
                         {
                            data: 'location',
                            name: 'Location'
                        },
                         {
                            data: 'order_id',
                            name: 'Order Id'
                        },
                         {
                            data: 'spent',
                            name: 'Spent'
                        },
                        
                    ]
        
    }
    );
    
     $('.button_export_csv').click(() => {
		    $('#customerList').DataTable().buttons(0,1).trigger()
		});
		
     $('#search-tableForm').on('submit', function(e) {
        
	         table.order([0,'desc']).draw();
	        e.preventDefault();
	    });
    table.order([0,'desc']).draw();
    $.fn.dataTable.ext.errMode = 'none';
});

$(function () {
        $("#selectAllTable").click(function () {
            if ($(this).is(":checked")) {
                $(".tableseletefilter").show();
            } else {
                $(".tableseletefilter").hide();
            }
        });
    });
    
      
      $(document).ready(function(){
 $(".clic-show").click(function(){
   $(".sows").toggle(400);
 });

 
});
</script>



   @endsection