@extends('serviceprovider.layouts.app2')
@section('title', 'Users and Permissions')
@section('content')
<style>
    .table-responsive
    {
        padding: 0 20px;
    }

</style>

    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Users & Permissions</h3>
                </div>
                <div class="col-auto text-right">
                    <a class="btn btn-primary" href="{{route('seller.add_user_permissions')}}">
                        Add New
                    </a>                
                    <a class="btn btn-secondary" href="{{route('seller.dashboard')}}">Back</a>
                </div>              
            </div>
        </div>

        <div class="row">
                    <div class="col-md-12 d-flex">
                        <div class="card card-table flex-fill pt-2">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-center mb-0 datatable" id="users_table">
                                                    <thead>
                                                       <tr>
                                                            <th title="Field #1">Image</th>
                                                            <th title="Field #2">Name</th>
                                                            <th title="Field #3">Email</th>
                                                            <th title="Field #4">Phone No.</th>
                                                            <th title="Field #5">Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="users_tableListing">
                                                        
                                                    </tbody>
                                            </table>
                                    <!-- <table class="table table-center">
                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone No.</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a href="#" class="avatar avatar-sm">
                                                        <img class="avatar-img rounded-circle" alt="" src="assets/img/customer/user-05.jpg">
                                                    </a>
                                                </td>
                                                <td>John Smith</td>
                                                <td class="text-nowrap">john@gmail.com</td>
                                                <td class="text-nowrap">+1234 567 890</td>
                                                <td><label class="badge badge-success">Active</label></td>
                                                <td>
                                                    <a href="edit-users-permissions.php" class="btn bg-warning-light ">
                                                        <i class="fas fa-edit"></i> Edit
                                                    </a>
                                                    <a href="javascript:void(0)" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#delete-popup">
                                                        <i class="fas fa-trash-alt"></i> Delete
                                                    </a>                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="#" class="avatar avatar-sm">
                                                        <img class="avatar-img rounded-circle" alt="" src="assets/img/customer/user-01.jpg">
                                                    </a>
                                                </td>
                                                <td>David Smith</td>
                                                <td class="text-nowrap">david@gmail.com</td>
                                                <td class="text-nowrap">+1234 567 890</td>
                                                <td><label class="badge badge-success">Active</label></td>
                                                <td>
                                                    <a href="edit-users-permissions.php" class="btn bg-warning-light ">
                                                        <i class="fas fa-edit"></i> Edit
                                                    </a>
                                                    <a href="javascript:void(0)" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#delete-popup">
                                                        <i class="fas fa-trash-alt"></i> Delete
                                                    </a>                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="#" class="avatar avatar-sm">
                                                        <img class="avatar-img rounded-circle" alt="" src="assets/img/customer/user-02.jpg">
                                                    </a>
                                                </td>
                                                <td>Adelmo</td>
                                                <td class="text-nowrap">adelmo@gmail.com</td>
                                                <td class="text-nowrap">+1234 567 890</td>
                                                <td><label class="badge badge-danger">Inactive</label></td>
                                                <td>
                                                    <a href="edit-users-permissions.php" class="btn bg-warning-light ">
                                                        <i class="fas fa-edit"></i> Edit
                                                    </a>
                                                    <a href="javascript:void(0)" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#delete-popup">
                                                        <i class="fas fa-trash-alt"></i> Delete
                                                    </a>                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="#" class="avatar avatar-sm">
                                                        <img class="avatar-img rounded-circle" alt="" src="assets/img/customer/user-03.jpg">
                                                    </a>
                                                </td>
                                                <td>Johnson</td>
                                                <td class="text-nowrap">johnson@gmail.com</td>
                                                <td class="text-nowrap">+1234 567 890</td>
                                                <td><label class="badge badge-danger">Inactive</label></td>
                                                <td>
                                                    <a href="edit-users-permissions.php" class="btn bg-warning-light ">
                                                        <i class="fas fa-edit"></i> Edit
                                                    </a>
                                                    <a href="javascript:void(0)" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#delete-popup">
                                                        <i class="fas fa-trash-alt"></i> Delete
                                                    </a>                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="#" class="avatar avatar-sm">
                                                        <img class="avatar-img rounded-circle" alt="" src="assets/img/customer/user-04.jpg">
                                                    </a>
                                                </td>
                                                <td>Steve Smith</td>
                                                <td class="text-nowrap">steve@gmail.com</td>
                                                <td class="text-nowrap">+1234 567 890</td>
                                                <td><label class="badge badge-success">Active</label></td>
                                                <td>
                                                    <a href="edit-users-permissions.php" class="btn bg-warning-light ">
                                                        <i class="fas fa-edit"></i> Edit
                                                    </a>
                                                    <a href="javascript:void(0)" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#delete-popup">
                                                        <i class="fas fa-trash-alt"></i> Delete
                                                    </a>                                                    
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>


        </div>
@endsection
    <div class="modal fade" id="delete-popup" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <input type="hidden" name="userid" id ="userid"/>
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
@section('scripts')
   <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> -->
<script type="text/javascript">
    $(document).ready(function(e){      
        var oTable = $('#users_table').DataTable({
            "sDom": "<'row'<'col-sm-12'tr>>" +
                    "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
            bDestroy: true,
            processing: true,
            serverSide: true,
            ajax: { 
                url: '{{Route("seller.get_usersListing")}}', 
                data : function (d) {
                    d.name = $('input[name=name]').val();
                    d.status = $('select[name=status]').val();
                    // d.daterange = $('input[name=daterange]').val();
                }
            },
            ordering: true,
            button: false,
            scrollX: true,
            scrollCollapse: true,
			autoWidth: false,
            oLanguage: {
                sEmptyTable: 'No records found!!',
            },
            
            columns: [     
                        {
                            data: 'avatar',
                            name: 'Image'
                        },
                        {
                            data: 'first_name',
                            name: 'Name'
                        },
                        {
                            data: 'email',
                            name: 'Email'
                        },
                        {
                            data: 'phone_number',
                            name: 'Phone No.'
                        },
                        {
                            data: 'status',
                            name: 'Status'
                        },
                        {
                            data: 'action',
                            name: 'Action',
                            orderable: false
                        }
                    ]
        });

          $(document).on('click', '.delete_user', function(e){
            var userid = $(this).attr('data-userid');
            $('#userid').val(userid);
            $('#delete-popup').modal('show');
        });

         $(document).on('click', '#confirm', function(e){  
        var deleted_id = $('#userid').val();
        $.ajax({
          url: '{{Route("seller.delete_user")}}',
          type: 'POST',
          data : {
                  '_token': "{{ csrf_token() }}",
                  'deleted_id' : deleted_id
              },
          success: function(response) {
              if ($.isEmptyObject(response.error)) {
                  window.location.href = "{{route('seller.user_permissions')}}";
                  $(window).scrollTop(0);
              } else {
                  printErrorMsg(response.error);
              }
            }
        });
      });
     });
</script>

 @endsection
