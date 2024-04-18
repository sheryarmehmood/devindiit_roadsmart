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
                <a href="{{ route('admin.viewcustomer')}}" class="btn btn-primary">Back</a>
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
                                        <a href="{{ route('admin.editService', $service->id) }}" class="btn btn-sm bg-success-light"><i class="fas fa-edit"></i> Edit</a>
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
<script>
    $(document).ready(function() {
        var table = $('#servicesTable').DataTable({
            fixedHeader: true,
        });
    });
</script>
@endsection