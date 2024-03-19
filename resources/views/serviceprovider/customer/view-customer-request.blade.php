@extends('serviceprovider.layouts.app')
@section('title', 'View Order')
@section('head')
    <style>
        .card-table .table td,
        .card-table .table th {
            padding: 12px 0.75rem;
        }
    </style>
@endsection
@section('content')
    <div class="content container-fluid addorder view-customer-page estimate_table  customer-list-page">
        <div class="page-header">
            <div class="row">
                <div class="col d-flex position-relative pl-5">
                    <span class="back-arrow"><a href="{{ route('seller.customers') }}"><i style="font-size: 26px;"
                                class="far fa-arrow-alt-circle-left"></i></a></span>
                    <div>
                        <h3 class="page-title d-flex align-items-center">Mary Chirwa </h3>
                        <p>Zambia <span class="dot-circle"></span> Customer for 10 days</p>
                    </div>
                </div>
                <div class="col text-right">
                    <div class="actionMore d-flex align-items-center justify-content-end">

                        <nav aria-label="Page navigation example">
                            <ul class="pagination mb-0">
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <a href="{{ route('seller.view-customer') }}" class="btn btn-primary ">Orders</a>
                    <a href="{{ route('seller.view-customer-request') }}" class="btn btn-primary active">Requests</a>
                    <a href="{{ route('seller.view-customer-vehicles') }}" class="btn btn-primary">Vehicles</a>
                    <a href="{{ route('seller.view-customer-chats') }}" class="btn btn-primary">Chats</a>
                    <a href="{{ route('seller.view-customer-profile') }}" class="btn btn-primary">Account Info</a>
                </div>
            </div>
        </div>
        <div class="requestmain_tab pt-3" id="exTab1">
            <ul class="nav nav-pills nav-tabs menu-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#allrequest" data-toggle="tab">All </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#openrequest" data-toggle="tab">Pending Requests</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#unpaidrequest" data-toggle="tab">Approved Requests</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="allrequest">
                    <div class="card card-table flex-fill">
                        <div class="card-body px-4 pt-2">
                            <div class="row w-100 my-3">
                                <div class="col">
                                    <div class="w-100 searchFilerwrap">
                                        <input type="text" id="" class="form-control w-100" name=""
                                            placeholder="Filter Requests" value="">
                                        <i class="fa fa-search"></i>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="actionMore text-right">
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive requesttable_div">
                                <table class="table table-center  datatable" id="cat">
                                    <thead>
                                        <tr>
                                            <th>Request</th>
                                            <th>Date</th>
                                            <th>Customer</th>
                                            <th>Status</th>
                                            <th>Total</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>#1001</td>
                                            <td>26 Jul at 6:24 pm</td>
                                            <td>Brian Smith</td>
                                            <td><label class="badge badge-danger">Pending</label></td>
                                            <td>k9,396.00</td>
                                            <td>
                                                <a href="{{ route('admin.viewrequest') }}" class="btn bg-primary-light"><i
                                                        class="fas fa-eye"></i> View</a>
                                                <!--<button class="btn btn-sm bg-success-light"><i class="fas fa-check"></i> Accept </button>-->
                                                <!--<button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i> Reject </button>-->
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#1002</td>
                                            <td>26 Jul at 6:24 pm</td>
                                            <td>Brian Smith</td>
                                            <td><label class="badge badge-success">Approved</label></td>
                                            <td>k9,396.00</td>
                                            <td>
                                                <a href="{{ route('admin.viewrequest') }}" class="btn bg-primary-light"><i
                                                        class="fas fa-eye"></i> View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#1003</td>
                                            <td>26 Jul at 6:24 pm</td>
                                            <td>Brian Smith</td>
                                            <td><label class="badge badge-danger">Pending</label></td>
                                            <td>k9,396.00</td>
                                            <td>
                                                <a href="{{ route('admin.viewrequest') }}" class="btn bg-primary-light"><i
                                                        class="fas fa-eye"></i> View</a>
                                                <!--<button class="btn btn-sm bg-success-light"><i class="fas fa-check"></i> Accept </button>-->
                                                <!--<button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i> Reject </button>-->
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#1004</td>
                                            <td>26 Jul at 6:24 pm</td>
                                            <td>Brian Smith</td>
                                            <td><label class="badge badge-success">Approved</label></td>
                                            <td>k9,396.00</td>
                                            <td>
                                                <a href="{{ route('admin.viewrequest') }}" class="btn bg-primary-light"><i
                                                        class="fas fa-eye"></i> View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#1005</td>
                                            <td>26 Jul at 6:24 pm</td>
                                            <td>Brian Smith</td>
                                            <td><label class="badge badge-danger">Pending</label></td>
                                            <td>k9,396.00</td>
                                            <td>
                                                <a href="{{ route('admin.viewrequest') }}" class="btn bg-primary-light"><i
                                                        class="fas fa-eye"></i>
                                                    View</a>
                                                <!--<button class="btn btn-sm bg-success-light"><i class="fas fa-check"></i> Accept </button>-->
                                                <!--<button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i> Reject </button>-->
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#1006</td>
                                            <td>26 Jul at 6:24 pm</td>
                                            <td>Brian Smith</td>
                                            <td><label class="badge badge-success">Approved</label></td>
                                            <td>k9,396.00</td>
                                            <td>
                                                <a href="{{ route('admin.viewrequest') }}" class="btn bg-primary-light"><i
                                                        class="fas fa-eye"></i>
                                                    View</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="openrequest">
                    <div class="card card-table flex-fill">
                        <div class="card-body px-4 pt-2">
                            <div class="row w-100 my-3">
                                <div class="col">
                                    <div class="w-100 searchFilerwrap">
                                        <input type="text" id="" class="form-control w-100" name=""
                                            placeholder="Filter Requests" value="">
                                        <i class="fa fa-search"></i>
                                    </div>
                                </div>

                            </div>
                            <div class="table-responsive requesttable_div">
                                <table class="table table-center  datatable" id="cat">
                                    <thead>
                                        <tr>
                                            <th>Request</th>
                                            <th>Date</th>
                                            <th>Customer</th>
                                            <th>Status</th>
                                            <th>Total</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>#1001</td>
                                            <td>26 Jul at 6:24 pm</td>
                                            <td>Brian Smith</td>
                                            <td><label class="badge badge-danger">Pending</label></td>
                                            <td>k9,396.00</td>
                                            <td>
                                                <a href="{{ route('admin.viewrequest') }}" class="btn bg-primary-light"><i
                                                        class="fas fa-eye"></i>
                                                    View</a>
                                                <button class="btn btn-sm bg-success-light"><i class="fas fa-check"></i>
                                                    Accept </button>
                                                <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>
                                                    Reject </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#1002</td>
                                            <td>26 Jul at 6:24 pm</td>
                                            <td>Brian Smith</td>
                                            <td><label class="badge badge-danger">Pending</label></td>
                                            <td>k9,396.00</td>
                                            <td>
                                                <a href="{{ route('admin.viewrequest') }}"
                                                    class="btn bg-primary-light"><i class="fas fa-eye"></i>
                                                    View</a>
                                                <button class="btn btn-sm bg-success-light"><i class="fas fa-check"></i>
                                                    Accept </button>
                                                <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>
                                                    Reject </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#1003</td>
                                            <td>26 Jul at 6:24 pm</td>
                                            <td>Brian Smith</td>
                                            <td><label class="badge badge-danger">Pending</label></td>
                                            <td>k9,396.00</td>
                                            <td>
                                                <a href="{{ route('admin.viewrequest') }}"
                                                    class="btn bg-primary-light"><i class="fas fa-eye"></i>
                                                    View</a>
                                                <button class="btn btn-sm bg-success-light"><i class="fas fa-check"></i>
                                                    Accept </button>
                                                <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>
                                                    Reject </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#1004</td>
                                            <td>26 Jul at 6:24 pm</td>
                                            <td>Brian Smith</td>
                                            <td><label class="badge badge-danger">Pending</label></td>
                                            <td>k9,396.00</td>
                                            <td>
                                                <a href="{{ route('admin.viewrequest') }}"
                                                    class="btn bg-primary-light"><i class="fas fa-eye"></i>
                                                    View</a>
                                                <button class="btn btn-sm bg-success-light"><i class="fas fa-check"></i>
                                                    Accept </button>
                                                <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>
                                                    Reject </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#1005</td>
                                            <td>26 Jul at 6:24 pm</td>
                                            <td>Brian Smith</td>
                                            <td><label class="badge badge-danger">Pending</label></td>
                                            <td>k9,396.00</td>
                                            <td>
                                                <a href="{{ route('admin.viewrequest') }}"
                                                    class="btn bg-primary-light"><i class="fas fa-eye"></i>
                                                    View</a>
                                                <button class="btn btn-sm bg-success-light"><i class="fas fa-check"></i>
                                                    Accept </button>
                                                <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>
                                                    Reject </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#1006</td>
                                            <td>26 Jul at 6:24 pm</td>
                                            <td>Brian Smith</td>
                                            <td><label class="badge badge-danger">Pending</label></td>
                                            <td>k9,396.00</td>
                                            <td>
                                                <a href="{{ route('admin.viewrequest') }}"
                                                    class="btn bg-primary-light"><i class="fas fa-eye"></i>
                                                    View</a>
                                                <button class="btn btn-sm bg-success-light"><i class="fas fa-check"></i>
                                                    Accept </button>
                                                <button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>
                                                    Reject </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="unpaidrequest">
                    <div class="card card-table flex-fill">
                        <div class="card-body px-4 pt-2">
                            <div class="row w-100 my-3">
                                <div class="col">
                                    <div class="w-100 searchFilerwrap">
                                        <input type="text" id="" class="form-control w-100" name=""
                                            placeholder="Filter Requests" value="">
                                        <i class="fa fa-search"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive requesttable_div">
                                <table class="table table-center  datatable" id="cat">
                                    <thead>
                                        <tr>
                                            <th>Request</th>
                                            <th>Date</th>
                                            <th>Customer</th>
                                            <th>Status</th>
                                            <th>Total</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>#1001</td>
                                            <td>26 Jul at 6:24 pm</td>
                                            <td>Brian Smith</td>
                                            <td><label class="badge badge-success">Approved</label></td>
                                            <td>k9,396.00</td>
                                            <td>
                                                <a href="{{ route('admin.viewrequest') }}"
                                                    class="btn bg-primary-light"><i class="fas fa-eye"></i>
                                                    View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#1002</td>
                                            <td>26 Jul at 6:24 pm</td>
                                            <td>Brian Smith</td>
                                            <td><label class="badge badge-success">Approved</label></td>
                                            <td>k9,396.00</td>
                                            <td>
                                                <a href="{{ route('admin.viewrequest') }}"
                                                    class="btn bg-primary-light"><i class="fas fa-eye"></i>
                                                    View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#1003</td>
                                            <td>26 Jul at 6:24 pm</td>
                                            <td>Brian Smith</td>
                                            <td><label class="badge badge-success">Approved</label></td>
                                            <td>k9,396.00</td>
                                            <td>
                                                <a href="{{ route('admin.viewrequest') }}"
                                                    class="btn bg-primary-light"><i class="fas fa-eye"></i>
                                                    View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#1004</td>
                                            <td>26 Jul at 6:24 pm</td>
                                            <td>Brian Smith</td>
                                            <td><label class="badge badge-success">Approved</label></td>
                                            <td>k9,396.00</td>
                                            <td>
                                                <a href="{{ route('admin.viewrequest') }}"
                                                    class="btn bg-primary-light"><i class="fas fa-eye"></i>
                                                    View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#1005</td>
                                            <td>26 Jul at 6:24 pm</td>
                                            <td>Brian Smith</td>
                                            <td><label class="badge badge-success">Approved</label></td>
                                            <td>k9,396.00</td>
                                            <td>
                                                <a href="{{ route('admin.viewrequest') }}"
                                                    class="btn bg-primary-light"><i class="fas fa-eye"></i>
                                                    View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#1006</td>
                                            <td>26 Jul at 6:24 pm</td>
                                            <td>Brian Smith</td>
                                            <td><label class="badge badge-success">Approved</label></td>
                                            <td>k9,396.00</td>
                                            <td>
                                                <a href="{{ route('admin.viewrequest') }}"
                                                    class="btn bg-primary-light"><i class="fas fa-eye"></i>
                                                    View</a>
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
    <script type="text/javascript" language="javascript"
        src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript"
        src="https://cdn.datatables.net/buttons/2.1.0/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" language="javascript"
        src="https://cdn.datatables.net/fixedheader/3.2.0/js/dataTables.fixedHeader.min.js"></script>
    <script type="text/javascript" language="javascript"
        src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.colVis.min.js"></script>

    <script>
        $(document).ready(function() {
            var table = $('#customerList').DataTable({
                fixedHeader: true,
                dom: 'Bfrtip',
                "searching": false,
                language: {
                    'paginate': {
                        'previous': '<i class="fas fa-angle-left"></i>',
                        'next': '<i class="fas fa-angle-right"></i>'
                    },
                }
            });
            $.fn.dataTable.ext.errMode = 'none';
        });

        $(function() {
            $("#selectAllTable").click(function() {
                if ($(this).is(":checked")) {
                    $(".tableseletefilter").show();
                } else {
                    $(".tableseletefilter").hide();
                }
            });
        });


        $(document).ready(function() {
            $(".clic-show").click(function() {
                $(".sows").toggle(400);
            });


        });
        $(document).ready(function() {
            $(".clic-show").click(function() {
                $(".sows").toggle(400);
            });


        });
    </script>
    <script>
        $(document).ready(function() {
            var table = $('#cat').DataTable({
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
        $('.filter-toggler').click(function() {
            $('.v-sidebar-wrapper').toggleClass('sidebar-control', 500);
            $('.v-sidebar-fade').fadeIn(500);
            $('body').addClass('openSidebar');
        });
        $('#sidebar-close-btn').click(function() {
            $('.v-sidebar-wrapper').toggleClass('sidebar-control', 500);
            $('.v-sidebar-fade').fadeOut(500);
            $('body').removeClass('openSidebar');
        });
    </script>
@endsection
