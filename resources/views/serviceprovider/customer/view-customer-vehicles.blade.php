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
                <div class="col pl-5">
                    <a href="{{ route('seller.view-customer') }}" class="btn btn-primary ">Orders</a>
                    <a href="{{ route('seller.view-customer-request') }}" class="btn btn-primary ">Requests</a>
                    <a href="{{ route('seller.view-customer-vehicles') }}" class="btn btn-primary active">Vehicles</a>
                    <a href="{{ route('seller.view-customer-chats') }}" class="btn btn-primary">Chats</a>
                    <a href="{{ route('seller.view-customer-profile') }}" class="btn btn-primary">Account Info</a>
                </div>
            </div>
        </div>
        <div class="card card-table flex-fill ordertabstableitems">
            <div class="card-header">
                <h4 class="card-title">Vehicles</h4>
            </div>
            <div class="card-body px-4 pt-2">
                <div class="table-top-search-filter my-3">
                    <form id="search-tableForm" method="POST">
                        <div class="row w-100">
                            <div class="col-xl-6">
                                <div class="w-100 searchFilerwrap">
                                    <input type="text" id="searchname" class="form-control w-100" name="searchname"
                                        placeholder="Search Vehicles">
                                    <i class="fa fa-search"></i>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <span class="nav-item mr-3">
                                        <button class="btn btn-primary " style="padding: 10px 38px;">
                                            Search
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="table-responsive">
                    <table class="table table-center datatable" id="vehiclesList">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Vehicles Name</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Reg. Number</th>
                                <th>Vehicles Varaints</th>
                                <th>Models Year</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="vehiclesTableList">
                            <!--                       <tr>-->
                            <!--                          <td>1</td>-->
                            <!--                          <td>Honda</td>-->
                            <!--                          <td> John </td>-->
                            <!--                          <td>Johnsmith@yopmail.com </td>-->
                            <!--                          <td >MH-09 2786567 </td>-->
                            <!--                          <td > Suv</td>-->
                            <!--                          <td >2016</td>-->
                            <!--                          <td class="text-nowrap"><label class="badge badge-danger">Inactive</label></td>-->
                            <!--                          <td><label >$500</label></td>-->
                            <!--                          <td >-->
                            <!--						<a href="{{ route('admin.viewvehicle') }}" class="btn btn-sm bg-info-light">-->
                            <!--							<i class="far fa-eye mr-1"></i> View-->
                            <!--						</a>-->
                            <!--						<a href="{{ route('admin.editvehicle') }}" class="btn btn-sm bg-success-light">-->
                            <!--							<i class="fas fa-edit"></i> Edit-->
                            <!--						</a>-->
                            <!--  							<a href="#" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#delete-popup">-->
                            <!--	<i class="fas fa-trash-alt"></i> Delete-->
                            <!--</a>-->
                            <!--				    </td>-->
                            <!--                      </tr>-->
                            <!--                      <tr>-->
                            <!--                          <td>2</td>-->
                            <!--                          <td>BMW</td>-->
                            <!--                          <td> Mark </td>-->
                            <!--                          <td>Markloofer@yopmail.com </td>-->
                            <!--                          <td >MH-09 2768502 </td>-->
                            <!--                          <td >S-Class S 350d</td>-->
                            <!--                          <td >2014</td>-->
                            <!--                          <td class="text-nowrap"><label class="badge badge-success">Active</label></td>-->
                            <!--                          <td><label >$245</label></td>-->
                            <!--                          <td >-->
                            <!--						<a href="{{ route('admin.viewvehicle') }}" class="btn btn-sm bg-info-light">-->
                            <!--							<i class="far fa-eye mr-1"></i> View-->
                            <!--						</a>-->
                            <!--						<a href="{{ route('admin.editvehicle') }}" class="btn btn-sm bg-success-light">-->
                            <!--							<i class="fas fa-edit"></i> Edit-->
                            <!--						</a>-->
                            <!--						<a href="#" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#delete-popup">-->
                            <!--							<i class="fas fa-trash-alt"></i> Delete-->
                            <!--						</a>-->
                            <!--				    </td>-->
                            <!--                      </tr>-->
                            <!--                      <tr>-->
                            <!--                          <td>3</td>-->
                            <!--                          <td>Innova hycross</td>-->
                            <!--                          <td>Robert </td>-->
                            <!--                          <td>Robertwang@yopmail.com </td>-->
                            <!--                          <td >MH-09 2857602 </td>-->
                            <!--                          <td >Crossover</td>-->
                            <!--                          <td >2015</td>-->
                            <!--                          <td class="text-nowrap"><label class="badge badge-danger">Inactive</label></td>-->
                            <!--                          <td><label >$445</label></td>-->
                            <!--                          <td >-->
                            <!--						<a href="{{ route('admin.viewvehicle') }}" class="btn btn-sm bg-info-light">-->
                            <!--							<i class="far fa-eye mr-1"></i> View-->
                            <!--						</a>-->
                            <!--						<a href="{{ route('admin.editvehicle') }}" class="btn btn-sm bg-success-light">-->
                            <!--							<i class="fas fa-edit"></i> Edit-->
                            <!--						</a>-->
                            <!--						<a href="#" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#delete-popup">-->
                            <!--							<i class="fas fa-trash-alt"></i> Delete-->
                            <!--						</a>-->
                            <!--				    </td>-->
                            <!--                      </tr>-->
                            <!--                      <tr>-->
                            <!--                          <td>4</td>-->
                            <!--                          <td>Audi</td>-->
                            <!--                          <td>Rich Parker </td>-->
                            <!--                          <td>RichPaker@yopmail.com </td>-->
                            <!--                          <td >MH-09 2758260 </td>-->
                            <!--                          <td >MPV</td>-->
                            <!--                          <td >2017</td>-->
                            <!--                          <td class="text-nowrap"><label class="badge badge-success">Active</label></td>-->
                            <!--                          <td><label >$789</label></td>-->
                            <!--                          <td >-->
                            <!--						<a href="{{ route('admin.viewvehicle') }}" class="btn btn-sm bg-info-light">-->
                            <!--							<i class="far fa-eye mr-1"></i> View-->
                            <!--						</a>-->
                            <!--						<a href="{{ route('admin.editvehicle') }}" class="btn btn-sm bg-success-light">-->
                            <!--							<i class="fas fa-edit"></i> Edit-->
                            <!--						</a>-->
                            <!--						<a href="#" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#delete-popup">-->
                            <!--							<i class="fas fa-trash-alt"></i> Delete-->
                            <!--						</a>-->
                            <!--				    </td>-->
                            <!--                      </tr>-->
                            <!--                      <tr>-->
                            <!--                          <td>5</td>-->
                            <!--                          <td>Nissan Sunny</td>-->
                            <!--                          <td>Luke Pops</td>-->
                            <!--                          <td>Luke Pops@yopmail.com </td>-->
                            <!--                          <td >MH-09 2502768 </td>-->
                            <!--                          <td >Sedan</td>-->
                            <!--                          <td >2017</td>-->
                            <!--                          <td class="text-nowrap"><label class="badge badge-danger">Inctive</label></td>-->
                            <!--                          <td><label >$982</label></td>-->
                            <!--                          <td >-->
                            <!--						<a href="{{ route('admin.viewvehicle') }}" class="btn btn-sm bg-info-light">-->
                            <!--							<i class="far fa-eye mr-1"></i> View-->
                            <!--						</a>-->
                            <!--						<a href="{{ route('admin.editvehicle') }}" class="btn btn-sm bg-success-light">-->
                            <!--							<i class="fas fa-edit"></i> Edit-->
                            <!--						</a>-->
                            <!--						<a href="#" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#delete-popup">-->
                            <!--							<i class="fas fa-trash-alt"></i> Delete-->
                            <!--						</a>-->
                            <!--				    </td>-->
                            <!--                      </tr>-->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="delete-popup" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <input type="hidden" name="storeid" id ="storeid" />
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
    <script type="text/javascript" language="javascript"
        src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript"
        src="https://cdn.datatables.net/fixedheader/3.2.0/js/dataTables.fixedHeader.min.js"></script>
    <script type="text/javascript" language="javascript"
        src="https://cdn.datatables.net/buttons/2.1.0/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" language="javascript"
        src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.colVis.min.js"></script>
    <script>
        $(document).ready(function() {
            var table = $('#vehiclesList').DataTable({
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
                    processing: '<i class="fa fa-spinner fa-spin fa-3x fa-fw"  style="margin-top:-90px"></i><span class="sr-only">Loading...</span> ',
                    'paginate': {
                        'previous': '<i class="fas fa-angle-left"></i>',
                        'next': '<i class="fas fa-angle-right"></i>'
                    }
                },
                serverSide: true,
                ajax: {
                    url: '{{ Route('admin.get_vehicleListing') }}',
                    data: function(d) {
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
                        data: 'name',
                        name: 'Vehicles Name'
                    },

                    {
                        data: 'userid',
                        name: 'Name'
                    },
                    {
                        data: 'email',
                        name: 'Email'
                    },
                    {
                        data: 'reg_no',
                        name: 'Reg. Number'
                    },
                    {
                        data: 'variant_id',
                        name: 'Vehicles Varaints'
                    },
                    {
                        data: 'model_year',
                        name: 'Models Year'
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


            $('#search-tableForm').on('submit', function(e) {

                table.order([0, 'desc']).draw();
                e.preventDefault();
            });
            table.order([0, 'desc']).draw();
            $.fn.dataTable.ext.errMode = 'none';

            $(document).on('click', '.delete_vehicle', function(e) {
                var productid = $(this).attr('data-vehicleid');

                $('#storeid').val(productid);
                // $('#delete-popup').modal('show');
            });

            $(document).on('click', '#confirm', function(e) {
                var deleted_id = $('#storeid').val();
                console.log('deleted_id', deleted_id);
                $.ajax({
                    url: '{{ Route('admin.delete_vehicle') }}',
                    type: 'POST',
                    data: {
                        '_token': "{{ csrf_token() }}",
                        'id': deleted_id
                    },
                    success: function(response) {
                        console.log('response', response.code);
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
    </script>



@endsection
