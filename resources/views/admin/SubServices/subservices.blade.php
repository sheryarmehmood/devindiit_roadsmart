@extends('admin.layouts.app1')
@section('title', 'Services')

@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

<div class="content container-fluid customer-list-page">
    <div class="page-header">
        <div class="row">
            <div class="col">
                <h3 class="page-title">
                    <div class="d-flex titleSelect align-items-center">
                        Sub Services
                    </div>
                </h3>
            </div>
            <div class="col-auto text-right all-product-right">
                <div class="actionMore d-flex align-items-center">
                    <a class="btn btn-primary addorder" href="{{route('admin.addSubservice')}}">
                        Add Sub Service
                    </a>
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
            <h4 class="card-title">Sub Services</h4>
        </div>
        <div class="card-body px-4 pt-2">
            <table class="table table-center datatable" id="serviceTableList">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Sub Service</th>
                        <th>Service Category</th>
                        <th>Provider</th>
                        <th>Location</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($services as $service)
                    <tr>
                        <td>{{$service->id}}</td>
                        <td>{{$service->service_name}}</td>
                        <td>{{$service->serviceCategory->category_name ?? ''}}</td>
                        <td>{{$service->serviceSeller->first_name ?? ''}} {{$service->serviceSeller->last_name ?? ''}}</td>
                        <td>{{$service->service_location}}</td>
                        <td>{{$service->service_charges}}</td>
                        <td>
                            <a href="{{ route('admin.sellerservices', $service->id) }}" class="btn btn-sm bg-info-light"><i class="far fa-eye mr-1"></i> View</a>
                            <a href="{{ route('admin.editsubService', $service->id) }}" class="btn btn-sm bg-success-light"><i class="fas fa-edit"></i> Edit</a>
                            <button class="btn btn-sm btn-danger delete_service" data-toggle="modal" data-target="#delete-popup" data-service-id="{{$service->id}}"><i class="fas fa-trash-alt"></i> Delete</button>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
<div class="modal fade" id="delete-popup" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="delete-cont">
                    <p>Are you sure you want to delete this item?</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" id="confirm-delete">Delete</button>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    $(document).ready(function() {
        var table = $('#serviceTableList').DataTable({
            fixedHeader: true,
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('.delete_service').click(function() {
            var serviceId = $(this).data('service-id');
            $('#delete-popup').modal('show');
            $('#confirm-delete').data('service-id', serviceId);
        });

        $('#confirm-delete').click(function() {
            var serviceId = $(this).data('service-id');
            $('#delete-popup').modal('hide');
            window.location.href = "{{ url('admin/deletesubService') }}/" + serviceId;
        });
    });
</script>




@endsection