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
             <h3 class="page-title d-flex align-items-center">
          <div class="d-flex titleSelect align-items-center">
             Customers Segment:
          </div>
               <select name="" id="" class="select-filter">
                   <option value="" selected>All Customers</option>
                   <option value="">Email subscribrs</option>
                   <option value="">Abandoned checkouts in the last 30 days</option>
                   <option value="">Customers who have purchased more than once</option>
                   <option value="">Customers who haven't purchased</option>
               </select>
       </h3>
           </div>
        <div class="col-auto text-right all-product-right d-flex align-items-center gx-1">
          <div class="actionMore d-flex align-items-center">
               <a class="btn btn-primary addorder" href="{{route('admin.addcustomer')}}">
                       Export
                   </a>
          </div>
          <div class="actionMore d-flex align-items-center">
               <a class="btn btn-primary addorder" href="{{route('admin.addcustomer')}}">
                       import
                   </a>
          </div>
          <div class="actionMore d-flex align-items-center">
               <a class="btn btn-primary addorder" href="{{route('admin.addcustomer')}}">
                       email segment
                   </a>
          </div>
               <div class="actionMore d-flex align-items-center">
               <a class="btn btn-primary addorder" href="{{route('admin.addcustomer')}}">
                       Add customer
                   </a>
          </div>
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
                     <div class="col-xl-6">
                        <div class="w-100 searchFilerwrap">
                           <input type="text" id="searchname" class="form-control w-100" name="searchname" placeholder="Search Customers" >
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
               <table class="table table-center datatable" id="customerList">
                       <thead>
                           <tr>
                               <th>Id</th>
                               <th>Name</th>
                               <th>Email</th>
                         <th>Phone Number</th>
                         <th>Status</th>
                               <th>Action</th>
                           </tr>
                       </thead>
                       <tbody id="customerTableList" >
   
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
                'paginate': {
                        'previous': '<i class="fas fa-angle-left"></i>',
                        'next': '<i class="fas fa-angle-right"></i>'
                    },
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
                            data: 'email',
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