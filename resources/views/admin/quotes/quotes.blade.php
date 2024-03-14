@extends('admin.layouts.app1')
@section('title', 'Quotes')
@section('content')
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


    <div class="content container-fluid estimate_table  customer-list-page pb-3">
        <div class="page-header">
            <div class="row mb-4">
                <div class="col">
                  <h3 class="page-title">Quotes</h3>
                </div>
            </div>           
        <div class="requestmain_tab" id="exTab1">
            <div class="tab-content">
				<div class="tab-pane fade show active" id="allrequest">
					<div class="card card-table flex-fill">
						<div class="card-body px-4 pt-2">
								<div class="row w-100 my-3">
									<div class="col">
										<div class="w-100 searchFilerwrap">
											<input type="text" id="" class="form-control w-100" name="" placeholder="Filter Requests" value="">
											<i class="fa fa-search"></i>
										</div>
									</div>
									<div class="col">
									     <div class="actionMore text-right">
										</div>
									</div>
								</div> 
							<div class="table-responsive requesttable_div">
								<table class="table table-center  datatable"  id="cat">
									<thead>
										<tr>
											<th>Quote ID </th>
											<th>Customer Name</th>
											<th>Customer Email</th>
											<th>Total Quote Price</th>
											<th>Status</th>
											<th>Created Date</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>#141</td>
											<td>BrianSmith</td>
											<td>BrianSmith@yopmail.com</td>
											<td>$12,396.00</td>
											<td><label class="badge badge-danger">Pending</label></td>
											<td>26 Dec, 2022 at 6:24 pm</td>
											<td>
											  <a href="{{route('admin.viewquotes')}}" class="btn bg-primary-light"><i class="fas fa-eye"></i> View Quotes</a>
											</td>
										</tr>
										<tr>
											<td>#69</td>
											<td>BrianSmith</td>
											<td>BrianSmith@yopmail.com</td>
											<td>$22,396.00</td>
											<td><label class="badge badge-success">Completed</label></td>
											<td>25 March 2020 at 6:24 pm</td>
											<td>
											  <a href="{{route('admin.viewquotes')}}" class="btn bg-primary-light"><i class="fas fa-eye"></i> View Quotes</a>
											</td>
										</tr>
										<tr>
											<td>#140</td>
											<td>BrianSmith</td>
											<td>BrianSmith@yopmail.com</td>
											<td>$18,396.00</td>
											<td><label class="badge badge-danger">Pending</label></td>
											<td>27 Dec 2021 at 7:24 pm</td>
											<td>
											  <a href="{{route('admin.viewquotes')}}" class="btn bg-primary-light"><i class="fas fa-eye"></i> View Quotes</a>
											</td>
										</tr>
										<tr>
											<td>#68</td>
											<td>BrianSmith</td>
											<td>BrianSmith@yopmail.com</td>
											<td>$15,396.00</td>
											<td><label class="badge badge-success">Completed</label></td>
											<td>26 Dec 2022 at 6:45 pm</td>
											<td>
											  <a href="{{route('admin.viewquotes')}}" class="btn bg-primary-light"><i class="fas fa-eye"></i> View Quotes</a>
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
    </div>
	   
@endsection
@section('scripts')

<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.1.0/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/fixedheader/3.2.0/js/dataTables.fixedHeader.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.colVis.min.js"></script>

<script>


$(document).ready(function() {
    var table = $('#customerList').DataTable(
    {
        fixedHeader: true,
        dom: 'Bfrtip',
		"searching": false,
		language: {
                'paginate': {
                        'previous': '<i class="fas fa-angle-left"></i>',
                        'next': '<i class="fas fa-angle-right"></i>'
                    },
                },
    });
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
      $(document).ready(function(){
 $(".clic-show").click(function(){
   $(".sows").toggle(400);
 });

 
});
</script>
<script>
$(document).ready(function() {
    var table = $('#cat').DataTable(
    {
        fixedHeader: true,
        dom: 'Bfrtip',
		language: {
                'paginate': {
                        'previous': '<i class="fas fa-angle-left"></i>',
                        'next': '<i class="fas fa-angle-right"></i>'
                    },
                },
        buttons: [{
            extend: 'colvis',
            text: "Columns",
            postfixButtons: ['colvisRestore']
        }]
    });
    $.fn.dataTable.ext.errMode = 'none';
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