@extends('admin.layouts.app1')
@section('title', 'Sellers')

@section('content')
<link  rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" >

    <div class="content container-fluid customer-list-page">
        <div class="page-header">
            <div class="row">
                <div class="col">
                  <h3 class="page-title">
					<div class="d-flex titleSelect align-items-center">
						Sellers
					</div>
				</h3>
                </div>
				 <div class="col-auto text-right all-product-right">
					<div class="actionMore d-flex align-items-center">
    				    <a class="btn btn-primary addorder" href="{{route('admin.addseller')}}">
                            Add Seller
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
        <div class="card card-table flex-fill ordertabstableitems">
        	 <div class="card-header">
                        <h4 class="card-title">Sellers</h4>
                    </div>
                <div class="card-body px-4 pt-2"> 
        				<div class="table-top-search-filter my-3">
        				    <form id="search-tableForm" method="POST">
        					<div class="row w-100">
        						<div class="col-xl-6">
        							<div class="w-100 searchFilerwrap">
        								<input type="text" id="searchname" class="form-control w-100" name="searchname" placeholder="Search Sellers" >
        								<i class="fa fa-search"></i>
        							</div>
        						</div>
        						<div class="col-md-6">
							    <div class="">
									  <span class="nav-item mr-3">
										 <button class="btn btn-primary " style="padding: 10px 38px;" >
											Search
										 </button> 
									  </span>
									  
									</div>
							
								</div>
        					</div>
        						
        					</form>
                    	</div>
        				<table class="table table-center datatable" id="sellerTableList">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Store Name</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
        							<th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="sellerList" >
         
                            </tbody>
                        </table>
                    </div> 
                </div>
        	</div>
        </div>
        <div class="modal fade" id="delete-popup" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <input type="hidden" name="storeid" id ="storeid"/>
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
<script>

$(document).ready(function() {
    var table = $('#sellerTableList').DataTable(
    {
        fixedHeader: true,
        dom: 'Bfrtip',
       searching: false,
        // buttons: [{
        //     extend: 'colvis',
        //     text: "Columns",
        //     postfixButtons: ['colvisRestore']
        // }],
      
        
        "sDom": "<'row'<'col-sm-12'tr>>" +
                    "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
            bDestroy: true,
            processing: true,
             language: {
                'paginate': {
                        'previous': '<i class="fas fa-angle-left"></i>',
                        'next': '<i class="fas fa-angle-right"></i>'
                    },
             processing: '<i class="fa fa-spinner fa-spin fa-3x fa-fw"  style="margin-top:-90px"></i><span class="sr-only">Loading...</span> '
        },
            serverSide: true,
            ajax: { 
                url: '{{Route("admin.get_sellerListing")}}', 
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
                            data: 'id',
                            name: 'Id'
                        },
                        {
                            data: 'stored_permissions',
                            name: 'Store'
                        },
                        {
                            data: 'name',
                            name: 'Name'
                        },
                        {
                            data: 'email',
                            name: 'Email'
                        },
                        {
                            data: 'phone_number',
                            name: 'Phone Number'
                        },
                        {
                            data: 'status',
                            name: 'Status'
                        },
                          {
                            data: 'action',
                            name: 'Action',
                            orderable: false
                        },
                    ]
        
    }
    );
    
    
     $('#search-tableForm').on('submit', function(e) {
        
	         table.order([0,'desc']).draw();
	        e.preventDefault();
	    });
    table.order([0,'desc']).draw();
    $.fn.dataTable.ext.errMode = 'none';
});


  $(document).on('click', '.delete_seller', function(e){
            var productid = $(this).attr('data-sellerid');
            console.log('productid',productid)
            $('#storeid').val(productid);
            // $('#delete-popup').modal('show');
        });

         $(document).on('click', '#confirm', function(e){  
        var deleted_id = $('#storeid').val();
        $.ajax({
          url: '{{Route("admin.delete_seller")}}',
          type: 'POST',
          data : {
                  '_token': "{{ csrf_token() }}",
                  'id' : deleted_id
              },
              success:function(response)
		        {
		           if(response.code==200)
		           {
			               Swal.fire({
			           	   	title: 'Success',
			           	   	text: response.message,
			           	   	icon: "success",
			           	   	showConfirmButton: false,
			           	   });
                          location.reload();
		           }
		           else
		           {
		               Swal.fire('Error',response.message, "error");
		           }
		        },error:function(errorResponse)
		        {
		           if(errorResponse.status == 401)
		           {
		             location.reload();
		           }
		        }
        
        });
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