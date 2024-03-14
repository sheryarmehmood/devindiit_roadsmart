@extends('serviceprovider.layouts.app')
@section('title', 'Online Store')
@section('content')
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Online Store</h3>
                </div>
                <div class="col-auto text-right">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add-store-popup">
                        Add New
                    </button>
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
            @if ($errors->any())
            <div class="alert alert-danger">
               <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
               </ul>
            </div>
            @endif
         </div>
          <div class="card">
              <div class="card-body pb-0 pt-2">
                  <div class="table-responsive">
                      <table class="table datatable-table data-table" id="onlinestore_table">
                      <thead class="datatable-head">
                        <tr class="datatable-row">
                            <th>Serial No.</th>
                            <th>Domain Name</th>
                            <th>Website Link</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                      </thead>
                      <tbody class="datatable-body blockSpinnerArea"
                       id="onlinestore_tableListing">
                        
                      </tbody>
                     </table>
                  </div>
              </div>
          </div>
    </div>
<div class="modal online_store_modal fade" id="add-store-popup" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form method="POST" id="add_online_store" name="add_online_store"  enctype="multipart/form-data" action="{{route('seller.save_online_store')}}">
        @csrf
        <input type="hidden" name="seller_id" id="seller_id" value="{{$seller_id}}"> 
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <h1 class="main_head">Add Online Store</h1>
                        <div class="form-group" id="domainerr">
                            <label>Domain Name</label>
                            <input class="form-control" type="text" placeholder="Enter Domain Name" name="add_domain_name" id="add_domain_name">
                        </div>
                        <div class="form-group" id="linkerr">
                            <label>Website Link</label>
                            <input class="form-control" type="link" placeholder="Enter Website Link" name="add_website_link" id="add_website_link">
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" id="status" class="my-select form-control">
                                <option value="" disbaled>Select Status</option>
                                <option value="1" selected>Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>                  
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </form>
</div>
<div class="modal online_store_modal fade" id="edit-store-popup" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true" data-backdrop="false">
    <form method="POST" id="edit_online_store" name="edit_online_store"  enctype="multipart/form-data" action="{{route('seller.update_online_store')}}">
        @csrf
        <input type="hidden" name="edit_seller_id" id="edit_seller_id" value=""> 
        <input type="hidden" name="edit_shop_id" id="edit_shop_id" value=""> 
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <h1 class="main_head">Edit Online Store</h1>
                        <div class="form-group"  id="editdomainerr">
                            <label>Domain Name</label>
                            <input class="form-control" type="text" id="edit_domain_name" name="edit_domain_name" placeholder="Enter Domain Name">
                        </div>
                        <div class="form-group" id="editwebsiteerr">
                            <label>Website Link</label>
                            <input class="form-control" type="link" placeholder="Enter Website Link" id="edit_website_link" name="edit_website_link">
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select name="edit_Status" id="edit_Status" class="my-select form-control">
                                <option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>
                            </select>
                        </div>                  
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </form>
</div>
<div class="modal fade" id="delete-popup" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel3" aria-hidden="true" data-backdrop="false">
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
<script>

    $(function() {
    $("form[name='add_online_store']").validate({
      ignore: [],
    // Specify validation rules
    rules: {
    add_domain_name: {
        required: true,
      },
      add_website_link: {
        required: true,
      }
    },
    errorPlacement: function(error, element) {
        if (element.attr("name") == "add_domain_name") {
          error.insertAfter("#domainerr");
        }
        else if (element.attr("name") == "add_website_link") {
          error.insertAfter("#linkerr");
        }
        else {
          error.insertAfter(element);
        }
      },
    // Specify validation error messages
    messages: {
      add_domain_name:{
         required: "<strong>Please add domain name</strong>",
      },
      add_website_link:{
         required: "<strong>Please add website link</strong>",
      }
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });

    $("form[name='edit_online_store']").validate({
      ignore: [],
    // Specify validation rules
    rules: {
    edit_domain_name: {
        required: true,
      },
      edit_website_link: {
        required: true,
      }
    },
    errorPlacement: function(error, element) {
        if (element.attr("name") == "edit_domain_name") {
          error.insertAfter("#editdomainerr");
        }
        else if (element.attr("name") == "edit_website_link") {
          error.insertAfter("#editwebsiteerr");
        }
        else {
          error.insertAfter(element);
        }
      },
    // Specify validation error messages
    messages: {
      add_domain_name:{
         required: "<strong>Please add domain name</strong>",
      },
      add_website_link:{
         required: "<strong>Please add website link</strong>",
      }
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });
});
</script>

<script type="text/javascript">
    $(document).ready(function(e){      
        var oTable = $('#onlinestore_table').DataTable({
            "sDom": "<'row'<'col-sm-12'tr>>" +
                    "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
            bDestroy: true,
            processing: true,
            serverSide: true,
            ajax: { 
                url: '{{Route("seller.get_storeListing")}}', 
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
      language: {
                'paginate': {
                        'previous': '<i class="fas fa-angle-left"></i>',
                        'next': '<i class="fas fa-angle-right"></i>'
                    }
        },
            oLanguage: {
                sEmptyTable: 'No records found!!',
            },
            
            columns: [     
                        {
                            data: 'id',
                            name: 'Serial No.'
                        },
                        {
                            data: 'domain_name',
                            name: 'Domain Name'
                        },
                        {
                            data: 'website_link',
                            name: 'Website Link'
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

          $(document).on('click', '.delete_store', function(e){
            var productid = $(this).attr('data-storeid');
            $('#storeid').val(productid);
            // $('#delete-popup').modal('show');
        });

        $(document).on('click', '.edit_store', function(e){
            var productid = $(this).attr('data-storeid');
            $('#storeid').val(productid);
            $.ajax({
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              url: '{{ route("seller.getonlinestore") }}',
              type: 'POST',
              data: {
                id: productid
              },
              success: function(response) {
                $.each(response.store_data, function(i, d) {
                  $('#edit_seller_id').val(d.seller_id);
                  $('#edit_shop_id').val(d.id);
                  $('#edit_website_link').val(d.website_link);
                  $('#edit_domain_name').val(d.domain_name);
                  $('#edit_Status').val(d.status);
                  $('#edit_Status option[value="'+d.Status+'"]').attr('selected','selected');
                });
               
                // $('#edit-store-popup').modal('show');
              }
    });
           
        });

         $(document).on('click', '#confirm', function(e){  
        var deleted_id = $('#storeid').val();
        $.ajax({
          url: '{{Route("seller.delete_store")}}',
          type: 'POST',
          data : {
                  '_token': "{{ csrf_token() }}",
                  'deleted_id' : deleted_id
              },
          success: function(response) {
              if ($.isEmptyObject(response.error)) {
                  window.location.href = "{{route('seller.online_store')}}";
                  $(window).scrollTop(0);
              } else {
                  printErrorMsg(response.error);
              }
            }
        });
      });

     $(document).on('change', '.updatestatus', function(e) {
      e.preventDefault();
      if ($(this).val() == '1') {
        $('.updatestatus').val('0');
      } else if ($(this).val() == '0') {
        $('.updatestatus').val('1');
      } else {
        $('.updatestatus').val('1');
      }
      var toupdatestatus = $('.updatestatus').val();
      var user_id = $(this).attr('data-id');
      $.ajax({
        url: '{{ route("seller.updatestatus") }}',
        type: 'POST',
        dataType: 'json',
        data: {
          '_token': "{{ csrf_token() }}",
          user_id: user_id,
          status: toupdatestatus

        },
        success: function(response) {
          if (response.data.status == 1) {
            window.location.reload();
          } else {
            alert(' status not updated ');
          }

        }
      });
    });
     });
</script>
@endsection
