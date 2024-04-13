@extends('admin.layouts.app1')
@section('title', 'View Customer Requests')
@section('content')
<div class="content container-fluid viewproduct_page">
    <div class="page-header">
        <div class="row">
            <div class="col">
                <h3 class="page-title">View Customer Requests</h3>
            </div>
            <div class="col text-right">
                <a href="{{ route('admin.dashboard') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-table flex-fill">
                <div class="card-header">
                    <h4 class="card-title">All Customer Requests</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive px-3">
                        <table class="table table-center datatable" id="requestsTable">
                            <thead>
                                <tr>
                                    <th>Request ID</th>
                                    <th>Service</th>
                                    <th>Customer</th>
                                    <th>Service Subcategory</th>
                                    <th>quote_status</th>
                                    
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="requestTableList">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="delete-popup" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <input type="hidden" name="requestId" id="requestId"/>
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="delete-cont">
                    <p>Are you sure you want to delete this request?</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" id="confirmDelete">Delete</button>
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
$(document).ready(function() {
    var table = $('#requestsTable').DataTable({
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
            'paginate': {
                'previous': '<i class="fas fa-angle-left"></i>',
                'next': '<i class="fas fa-angle-right"></i>'
            },
            processing: '<i class="fa fa-spinner fa-spin fa-3x fa-fw" style="margin-top:-100px"></i><span class="sr-only">Loading...</span>'
        },
        serverSide: true,
        ajax: {
            url: '{{ route("admin.get_customer_requests", ["id" => $id]) }}',
            data: function(d) {
                d.search = $('input[name=search]').val();
                d.status = $('select[name=status]').val();
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
            { data: 'id', name: 'Request ID' },
            { data: 'request_type', name: 'Request type' },
            { data: 'name', name: 'User' },
            
            { data: 'sub_category_name', name: 'Service Subcategory' },
            // { data: 'service_subcat_id', name: 'Service Subcategory' },
            { data: 'quote_status', name: 'Quote Status' },
            { data: 'status', name: 'Status' },
            { data: 'action', name: 'Action', orderable: false },
        ]
    });

    $(document).on('click', '.delete_request', function(e) {
        var requestId = $(this).attr('data-requestid');
        $('#requestId').val(requestId);
    });

    $(document).on('click', '#confirmDelete', function(e) {
        var deletedRequestId = $('#requestId').val();
        $.ajax({
            url: '{{ route("admin.delete_customer_request") }}',
            type: 'POST',
            data: {
                '_token': "{{ csrf_token() }}",
                'id': deletedRequestId
            },
            success: function(response) {
                if (response.code == 200) {
                    Swal.fire({
                        title: 'Success',
                        text: response.message,
                        icon: "success",
                        showConfirmButton: false,
                    });
                    location.reload();
                } else {
                    Swal.fire('Error', response.message, "error");
                }
            },
            error: function(errorResponse) {
                if (errorResponse.status == 401) {
                    location.reload();
                }
            }
        });
    });

    $('#search-form').on('submit', function(e) {
        table.order([0, 'desc']).draw();
        e.preventDefault();
    });

    table.order([0, 'desc']).draw();
    $.fn.dataTable.ext.errMode = 'none';
});
</script>
@endsection
