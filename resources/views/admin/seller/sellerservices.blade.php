@extends('admin.layouts.app1')
@section('title', 'View Seller Services')
@section('content')
<div class="content container-fluid viewproduct_page">
    <div class="page-header">
        <div class="row">
            <div class="col">
                <h3 class="page-title">View Seller Services</h3>
            </div>
            <div class="col text-right">
                <a href="{{ route('admin.viewcustomer', ['id' => $id]) }}" class="btn btn-primary">Back</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <!-- Additional buttons can be added here if needed -->
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-table flex-fill">
                <div class="card-header">
                    <h4 class="card-title">All Seller Services</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive px-3">
                        <table class="table table-center datatable" id="servicesTable">
                            <thead>
                                <tr>
                                    <th style='padding-bottom:13px'>Service ID</th>
                                    <th style='padding-bottom:13px'>Service Category</th>
                                    <th style='padding-bottom:13px'>Service Subcategory</th>
                                    <th style='padding-bottom:13px'>Seller</th>
                                    <th style='padding-bottom:13px'>Price</th>                 
                                    <th style='padding-bottom:13px'>Status</th>
                                    <th style='padding-bottom:13px'>Action</th>
                                </tr>
                            </thead>
                            <tbody id="servicesTableList">
                                <!-- Service data will be loaded dynamically here -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="delete-popup" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <input type="hidden" name="serviceid" id="serviceid" />
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="delete-cont">
                    <p>Are you sure you want to delete this item?</p>
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
        var table = $('#servicesTable').DataTable({
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
                processing: '<i class="fa fa-spinner fa-spin fa-3x fa-fw"  style="margin-top:-100px"></i><span class="sr-only">Loading...</span> '
            },
            serverSide: true,
            ajax: {
                url: '{{ route("admin.get_sellerservicesListing", ["id" => $id]) }}',
                data: function(d) {
                    // Additional parameters can be added here if needed
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

            columns: [{
                    data: 'id',
                    name: 'Service ID'
                },
                {
                    data: 'category_name',
                    name: 'Service Category'
                },
                {
                    data: 'sub_category_name',
                    name: 'Service Subcategory'
                },
                {
                    data: 'first_name ',
                    name: 'Seller'
                },
                {
                    data: 'price',
                    name: 'Price'
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

        });

        $(document).on('click', '.delete_service', function(e) {
            var serviceId = $(this).attr('data-serviceid');
            $('#serviceid').val(serviceId);
        });

        $(document).on('click', '#confirmDelete', function(e) {
            var serviceId = $('#serviceid').val();
            $.ajax({
                url: '{{ route("admin.delete_service") }}',
                type: 'POST',
                data: {
                    '_token': "{{ csrf_token() }}",
                    'id': serviceId
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

        $('#search-tableForm').on('submit', function(e) {
            table.order([0, 'desc']).draw();
            e.preventDefault();
        });
        table.order([0, 'desc']).draw();
        $.fn.dataTable.ext.errMode = 'none';
    });
</script>
@endsection
