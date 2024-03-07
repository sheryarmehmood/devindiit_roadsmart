@extends('admin.layouts.app1')
@section('title', 'Orders')
@section('head')

@endsection
@section('content')
<link  rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" >

   <div class="content container-fluid">
      <div class="page-header">
         <div class="row">
            <div class="col">
               <h3 class="page-title">Orders</h3>
            </div>
            <div class="col-auto text-right">
               <div class="actionMore">
                  <span class="nav-item dropdown noti-dropdown mx-3">
                     <a href="javascript:void(0)" class="dropdown-toggle nav-link ediio" data-toggle="dropdown">
                        Bulk Action<span class="badge badge-pill"></span>
                     </a> 
                     <div class="dropdown-menu dropdown-menu-right notifications">
                        <div class="noti-content">
                           <ul class="notification-list">
                              <!--<li class="notification-message">-->
                              <!--   <a href="{{route('admin.orderrequests')}}">-->
                              <!--      Customer Requests-->
                              <!--   </a>-->
                              <!--</li>-->
                              <li class="notification-message">
                                 <a href="{{route('admin.updateorder')}}">
                                    Order Updates
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
            <li class="nav-item active"><a class="nav-link" href="#1a" data-toggle="tab">All</a> </li>
         </ul>
         <div class="tab-content ordersTableTabs  ordertabstableitems clearfix ">
            <div class="tab-pane active" id="1a">
                  <div class="card card-table flex-fill">
					   <div class="card-header">
                            <h4 class="card-title">All Orders</h4>
                        </div>
                        <div class="card-body">
                           <div class="table-responsive">
                              <table class="table table-center datatable" id="ordersTable">
                                 <thead>
                                    <tr>
                                       <th style='padding-bottom:13px'>Order ID</th>
                                       <th  style='padding-bottom:13px'>Date</th>
                                       <th  style='padding-bottom:13px'>Customer Name</th>
									   <th  style='padding-bottom:13px'>Email </th>
									   <th  style='padding-bottom:13px'>Vehicle Name</th>
                                       <th  style='padding-bottom:13px'>Price</th>
                                       <th  style='padding-bottom:13px'>Delivry Address</th>
                                       <th  style='padding-bottom:13px'>Status</th>
                                       <th  style='padding-bottom:13px'>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody id="orderTableList">
                                    
                                 </tbody>
                              </table>
                           </div>
                        </div>
                </div>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/fixedheader/3.2.0/js/dataTables.fixedHeader.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.1.0/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.colVis.min.js"></script>

<script>
$('#datatable-parent').css('filter', 'blur(5px)');
$(document).ready(function() {
    var table = $('#ordersTable').DataTable(
    {
        fixedHeader: true,
        dom: 'Bfrtip',
       searching: false,
        buttons: [{
            extend: 'colvis',
            text: "Columns",
            postfixButtons: ['colvisRestore']
        }],
      
        
        "sDom": "<'row'<'col-sm-12'tr>>" +
                    "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
            bDestroy: true,
            processing: true,
             language: {
             processing: '<i class="fa fa-spinner fa-spin fa-3x fa-fw"  style="margin-top:-100px"></i><span class="sr-only">Loading...</span> '
        },
            serverSide: true,
            ajax: { 
                url: '{{Route("admin.get_orderListing")}}', 
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
                            name: 'Order ID'
                        },
                        
                        {
                            data: 'updated_at',
                            name: 'Date'
                        },
                        {
                            data: 'user_id',
                            name: 'Customer Name'
                        },
                        {
                            data: 'email',
                            name: 'Email'
                        },
                        {
                            data: 'vehicle_id',
                            name: 'Vehicle Name '
                        },
                        {
                            data: 'amount',
                            name: 'Price'
                        },
                        {
                            data: 'delivery_address_id',
                            name: 'Delivery Address'
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
    
     $(document).on('click', '.delete_order', function(e){
            var productid = $(this).attr('data-orderid');
            $('#storeid').val(productid);
            // $('#delete-popup').modal('show');
        });

         $(document).on('click', '#confirm', function(e){  
        var deleted_id = $('#storeid').val();
        $.ajax({
          url: '{{Route("admin.delete_order")}}',
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
    
    
     $('#search-tableForm').on('submit', function(e) {
        
	         table.order([0,'desc']).draw();
	        e.preventDefault();
	    });
    table.order([0,'desc']).draw();
    $.fn.dataTable.ext.errMode = 'none';
});

//


</script>
@endsection