@extends('serviceprovider.layouts.app') 
@section('title', 'Jobs') 
@section('content') 
<style>
    #customerList_wrapper #cat_filter {
        position: absolute;
        top: -45px;
        right: 20px;
    }

    #customerList_wrapper #customerList_filter input {
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
                <h3 class="page-title">Jobs</h3>
            </div>
            <div class="col-auto text-right all-product-right">
                <div class="actionMore d-flex align-items-center">
                    <a class="btn btn-primary addorder mr-3" href="javascript:void(0)">Export</a>
                    <a class="btn btn-primary addorder" href="{{route('seller.add_job')}}"> Add Job </a>
                </div>
            </div>
        </div>
        <div class="requestmain_tab" id="exTab1">
            <div class="card card-table flex-fill">
                <div class="card-body px-4 pt-2">
                    <div class="row w-100 my-3">
                        <div class="col">
                            <div class="w-100 searchFilerwrap">
                                <input type="text" id="" class="form-control w-100" name="" placeholder="Filter Jobs" value="">
                                <i class="fa fa-search"></i>
                            </div>
                        </div>
                        <div class="col">
                            <div class="actionMore text-right">
                                <span class="nav-item dropdown">
                                    <a href="javascript:void(0)" class="dropdown-toggle btn btn-primary" data-toggle="dropdown"> Sort </a>
                                    <div class="dropdown-menu dropdown-menu-right notifications">
                                        <div class="noti-content">
                                            <ul class="notification-list">
                                                <li class="notification-message">
                                                    <a href="javascript:void(0)">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                                            <label class="form-check-label" for="exampleRadios1"> Last update </label>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="notification-message">
                                                    <a href="javascript:void(0)">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option1" checked>
                                                            <label class="form-check-label" for="exampleRadios2"> Amount spent </label>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="notification-message">
                                                    <a href="javascript:void(0)">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option1" checked>
                                                            <label class="form-check-label" for="exampleRadios3"> Total orders </label>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="notification-message">
                                                    <a href="javascript:void(0)">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option1" checked>
                                                            <label class="form-check-label" for="exampleRadios4"> Last order date </label>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="notification-message">
                                                    <a href="javascript:void(0)">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option1" checked>
                                                            <label class="form-check-label" for="exampleRadios4"> First order date </label>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="notification-message">
                                                    <a href="javascript:void(0)">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios5" value="option1" checked>
                                                            <label class="form-check-label" for="exampleRadios5"> A–Z </label>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="notification-message">
                                                    <a href="javascript:void(0)">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios6" value="option1" checked>
                                                            <label class="form-check-label" for="exampleRadios6"> Z–A </label>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive requesttable_div">
                        <table class="table table-center  datatable" id="cat">
                            <thead>
                                <tr>
                                    <th>Job ID</th>
                                    <th>Date</th>
                                    <th>Service</th>
                                    <th>Request</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#1001</td>
                                    <td>26 Jul at 6:24 pm</td>
                                    <td>Tune Up</td>
                                    <td>Tune Up</td>
                                    <td>
                                        <label class="badge badge-success">Completed</label>
                                    </td>
                                    <td>
                                        <a href="{{route('seller.job_details')}}" class="btn bg-primary-light">View</a>
                                        <a href="{{route('seller.edit_job')}}" class="btn btn-sm bg-success-light">
                                            <i class="fas fa-edit"></i> Edit </a>
                                        <button class="btn btn-sm bg-danger-light">
                                            <i class="fas fa-times"></i> Reject </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#1002</td>
                                    <td>26 Jul at 6:24 pm</td>
                                    <td>Brake Replacement</td>
                                    <td>Brake Replacement</td>
                                    <td>
                                        <label class="badge badge-danger">Pending</label>
                                    </td>
                                    <td>
                                          <a href="{{route('seller.job_details')}}" class="btn bg-primary-light">View</a>
                                        <a href="{{route('seller.edit_job')}}" class="btn btn-sm bg-success-light">
                                            <i class="fas fa-edit"></i> Edit </a>
                                        <button class="btn btn-sm bg-danger-light">
                                            <i class="fas fa-times"></i> Reject </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#1003</td>
                                    <td>26 Jul at 6:24 pm</td>
                                    <td>Front Shock Replacement</td>
                                    <td>Wheel Alignment</td>
                                    <td>
                                        <label class="badge badge-success">Completed</label>
                                    </td>
                                    <td>
                                         <a href="{{route('seller.job_details')}}" class="btn bg-primary-light">View</a>
                                        <a href="{{route('seller.edit_job')}}" class="btn btn-sm bg-success-light">
                                            <i class="fas fa-edit"></i> Edit </a>
                                        <button class="btn btn-sm bg-danger-light">
                                            <i class="fas fa-times"></i> Reject </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#1004</td>
                                    <td>26 Jul at 6:24 pm</td>
                                    <td>Exhaust Cleaning</td>
                                    <td>Other</td>
                                    <td>
                                        <label class="badge badge-info">Started</label>
                                    </td>
                                    <td>
                                         <a href="{{route('seller.job_details')}}" class="btn bg-primary-light">View</a>
                                        <a href="{{route('seller.edit_job')}}" class="btn btn-sm bg-success-light">
                                            <i class="fas fa-edit"></i> Edit </a>
                                        <button class="btn btn-sm bg-danger-light">
                                            <i class="fas fa-times"></i> Reject </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#1005</td>
                                    <td>26 Jul at 6:24 pm</td>
                                    <td>Change Of Ownership</td>
                                    <td>Other</td>
                                    <td>
                                        <label class="badge badge-success">Completed</label>
                                    </td>
                                    <td>
                                          <a href="{{route('seller.job_details')}}" class="btn bg-primary-light">View</a>
                                        <a href="{{route('seller.edit_job')}}" class="btn btn-sm bg-success-light">
                                            <i class="fas fa-edit"></i> Edit </a>
                                        <button class="btn btn-sm bg-danger-light">
                                            <i class="fas fa-times"></i> Reject </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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
            var table = $('#customerList').DataTable({
                fixedHeader: true,
                dom: 'Bfrtip',
                "searching": false,
                language: {
                'paginate': {
                        'previous': '<i class="fas fa-angle-left"></i>',
                        'next': '<i class="fas fa-angle-right"></i>'
                    }
        },
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
                    }
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