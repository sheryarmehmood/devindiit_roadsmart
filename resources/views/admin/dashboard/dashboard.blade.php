@extends('admin.layouts.app1')

@section('title', 'Dashboard')
@section('content')
<link  rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" >

        <div class="content container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-12">
                        <h3 class="page-title">Welcome to Admin!</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon bg-primary">
                                    <i class="fas fa-archive"></i>
                                </span>
                                <div class="dash-widget-info">
                                    <h3>{{$sellers}}</h3>
                                    <h6 class="text-muted">Total<br>Sellers</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon bg-primary">
                                    <i class="fas fa-shopping-cart"></i>
                                </span>
                                <div class="dash-widget-info">
                                    <h3>{{$orders}}</h3>
                                    <h6 class="text-muted">Total <br>Orders</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon bg-primary">
                                    <i class="fas fa-clipboard-check"></i>
                                </span>
                                <div class="dash-widget-info">
                                    <h3>{{$products}}</h3>
                                    <h6 class="text-muted">Total<br> Products</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon bg-primary">
                                    <i class="fas fa-hourglass-half"></i>
                                </span>
                                <div class="dash-widget-info">
                                    <h3>{{$users}}</h3>
                                    <h6 class="text-muted">Total <br>Users</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 d-flex ordertabstableitems ">
                    <div class="card card-table flex-fill">
                        <div class="card-header">
                            <h4 class="card-title">Recent Orders</h4>
                        </div>
                        <div class="card-body px-4 pt-2">
                            <div class="table-responsive">
                                <table class="table table-center" id="dashboardList">
                                    <thead>
                                        <tr>
                                            <th >Order ID</th>
                                            <th >Service Name</th>
                                            <th >Client Name</th>
											<th >Order Status</th>
                                            <th >Address</th>
                                            <th >Date</th>
                                            <!--<th>Time</th>-->
                                            <th >Phone Number</th>
                                            <th >Action</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody id="dashboardTableList">
                                    </tbody>
                                </table>
                            </div>
                        </div>
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
    var table = $('#dashboardList').DataTable(
    {
        fixedHeader: true,
        dom: 'Bfrtip',
       searching: false,
        
        
        "sDom": "<'row'<'col-sm-12'tr>>" +
                    "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
            bDestroy: true,
            processing: true,
            language: {
             processing: '<i class="fa fa-spinner fa-spin fa-3x fa-fw"  style="margin-top:-90px"></i><span class="sr-only">Loading...</span> '
        },
            serverSide: true,
            ajax: { 
                url: '{{Route("admin.get_dashboardListing")}}', 
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
                            name: 'Order Id'
                        },
                        {
                            data: 'cartid',
                            name: 'Service Name'
                        },
                        
                        {
                            data: 'user_id',
                            name: 'Client Name'
                        },
                        {
                            data: 'status',
                            name: 'Order Status'
                        },
                        {
                            data: 'delivery_address_id',
                            name: 'Address'
                        },
                         {
                            data: 'updated_at',
                            name: 'Date'
                        },
                        {
                            data: 'phone_num',
                            name: 'Phone Number'
                        },
                        // {
                        //     data: 'price',
                        //     name: 'Price'
                        // },
                        // {
                        //     data: 'status',
                        //     name: 'Status'
                        // },
                          {
                            data: 'action',
                            name: 'Action',
                            orderable: false
                        },
                    ]
        
    }
    );
    
    
  
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
      
