@extends('admin.layouts.app1')
@section('title', 'Update Orders')
@section('head')
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
@endsection
@section('content')
   <div class="content container-fluid">
       <div class="page-header">
         <div class="row">
            <div class="col">
               <h3 class="page-title">Order Updates</h3>
            </div>
         </div>
       </div>
       <div class="tab-content ordersTableTabs  ordertabstableitems clearfix ">
            <div class="tab-pane active" id="1a">
                <div class="card card-table mb-3" >
                    <div class="card-body p-2 py-3 px-4">
                        <div class="d-flex justify-content-between align-items-center">
                          <h3 class="mb-0">Deliverey Address</h3>
                        </div>
                        <div class="customerLists">
        					<div class="customerLists-item">
        						<h4 class="d-flex">John Smith </h4>
        						<h5>Shipping Address</h5>
        						<p>1688 St Matthews Ave, Winnipeg, MB R3H 0A2, Canada</p>
        						
        						<h5>Billing Address</h5>
        						<p>1688 St Matthews Ave, Winnipeg, MB R3H 0A2, Canada</p>
        					</div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card col-12">
            <div class="card-body p-2 py-3 px-4">
                <!--<div class="d-flex justify-content-between align-items-center">-->
                <!--    <h3 class="mb-0">Tracking Order </h3>-->
                <!--</div>-->
				<h4 class="cardTitle">Tracking Order </h4>
				<div class="row">
					<div class="col-lg-12">
						<div class="timelinebox">
                            <ul class="timeline">
                                <li class="event commentli">
                                   <h2 class="todaytex">Today</h2>
                                   <span class="username">DN</span>
                                   <h3>Davy Nanduba <small>Just now </small></h3>
                                   <!--<p>Insurance Purchased from hollard</p>-->
                                </li>
                                <li class="event">
                                   <p class="d-flex">Your Package has been picked up by your courier partner on Cairo Road  <span class="ml-auto text-right">Just Now</span></p>
                                </li>
                                <li class="event">
                                   <p class="d-flex">Carrier picked up the package Cairo Road  <span class="ml-auto text-right">10 Minutes ago</span></p>
                                </li>
                                <li class="event">
                                   <p class="d-flex">Packacge arrived at the delivery station from Cairo Road  <span class="ml-auto text-right">50 Minutes ago</span></p>
                                </li>
                            </ul>
                        </div>  
                    </div>
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
  $(function() {
    $('#toggle-two').bootstrapToggle({
      on: 'Active',
      off: 'Inactive'
    });
  })
</script>
<script>
$(document).ready(function() {
    var table = $('#cat').DataTable(
    {
        fixedHeader: true,
        dom: 'Bfrtip',
        buttons: [{
            extend: 'colvis',
            text: "Columns",
            postfixButtons: ['colvisRestore']
        }]
    });
    $.fn.dataTable.ext.errMode = 'none';
});

//
// Updates "Select all" control in a data table
//
function updateDataTableSelectAllCtrl(table) {
    var $table = table.table().node();
    var $chkbox_all = $('tbody input[type="checkbox"]', $table);
    var $chkbox_checked = $('tbody input[type="checkbox"]:checked', $table);
    var chkbox_select_all = $('thead input[name="select_all"]', $table).get(0);
    // If none of the checkboxes are checked
    if ($chkbox_checked.length === 0) {
        chkbox_select_all.checked = false;
        if ('indeterminate' in chkbox_select_all) {
            chkbox_select_all.indeterminate = false;
        }
        // If all of the checkboxes are checked
    } else if ($chkbox_checked.length === $chkbox_all.length) {
        chkbox_select_all.checked = true;
        if ('indeterminate' in chkbox_select_all) {
            chkbox_select_all.indeterminate = false;
        }
        // If some of the checkboxes are checked
    } else {
        chkbox_select_all.checked = true;
        if ('indeterminate' in chkbox_select_all) {
            chkbox_select_all.indeterminate = true;
        }
    }
}
$(document).ready(function() {
    // Array holding selected row IDs
    var rows_selected = [];
    var table = $('#cat').DataTable({
        'columnDefs': [{
            'targets': 0,
            'searchable': false,
            'orderable': false,
            'width': '1%',
            'className': 'dt-body-center',
            'render': function(data, type, full, meta) {
                return '<input type="checkbox">';
            }
        }],
        language: {
                'paginate': {
                        'previous': '<i class="fas fa-angle-left"></i>',
                        'next': '<i class="fas fa-angle-right"></i>'
                    }
        },
        'order': [
            [1, 'asc']
        ],
        'rowCallback': function(row, data, dataIndex) {
            // Get row ID
            var rowId = data[0];
            // If row ID is in the list of selected row IDs
            if ($.inArray(rowId, rows_selected) !== -1) {
                $(row).find('input[type="checkbox"]').prop('checked', true);
                $(row).addClass('selected');
            }
        }
    });
    // Handle click on checkbox
    $('#cat tbody').on('click', 'input[type="checkbox"]', function(e) {
        var $row = $(this).closest('tr');
        // Get row data
        var data = table.row($row).data();
        // Get row ID
        var rowId = data[0];
        // Determine whether row ID is in the list of selected row IDs
        var index = $.inArray(rowId, rows_selected);
        // If checkbox is checked and row ID is not in list of selected row IDs
        if (this.checked && index === -1) {
            rows_selected.push(rowId);
            // Otherwise, if checkbox is not checked and row ID is in list of selected row IDs
        } else if (!this.checked && index !== -1) {
            rows_selected.splice(index, 1);
        }
        if (this.checked) {
            $row.addClass('selected');
        } else {
            $row.removeClass('selected');
        }
        // Update state of "Select all" control
        updateDataTableSelectAllCtrl(table);
        // Prevent click event from propagating to parent
        e.stopPropagation();
    });
    // Handle click on table cells with checkboxes
    $('#cat').on('click', 'tbody td, thead th:first-child', function(e) {
        $(this).parent().find('input[type="checkbox"]').trigger('click');
    });
    // Handle click on "Select all" control
    $('thead input[name="select_all"]', table.table().container()).on('click', function(e) {
        if (this.checked) {
            $('#cat tbody input[type="checkbox"]:not(:checked)').trigger('click');
        } else {
            $('#cat tbody input[type="checkbox"]:checked').trigger('click');
        }
        // Prevent click event from propagating to parent
        e.stopPropagation();
    });
    // Handle table draw event
    table.on('draw', function() {
        // Update state of "Select all" control
        updateDataTableSelectAllCtrl(table);
    });
});
</script>
@endsection