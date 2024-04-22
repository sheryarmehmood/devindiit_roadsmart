@extends('admin.layouts.app1')
@section('title', 'viewBundle')

@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

<div class="content container-fluid customer-list-page">
    <div class="page-header">
        <div class="row">
            <div class="col">
                <h3 class="page-title">
                    <div class="d-flex titleSelect align-items-center">
                        Bundle Details
                    </div>
                </h3>
            </div>
            <div class="col-auto text-right all-product-right">
                <div class="actionMore d-flex align-items-center">
                    <a class="btn btn-primary addorder" href="{{route('admin.addservice')}}">
                        Add Bundle
                    </a>
                    <a class="btn btn-primary addorder" href="{{URL::previous()}}">
                        Back
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-table flex-fill ordertabstableitems">
        <div class="card-header">
            <h4 class="card-title">Bundle Services</h4>
        </div>
        <div class="card-body px-4 pt-2">
            <table class="table table-center datatable" id="serviceTableList">
                <thead>
                    <tr>
                        <th>Bundle Id</th>
                        <th>Service</th>
                        <th>Sub Service</th>
                        <th>Availabilty</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach(json_decode($bundle->services) as $service)
                    @foreach($services as $single)
                    @if($single->id == $service)
                    <tr>
                        <td>{{$bundle->id}}</td>
                        <td>{{$single->service_name}}</td>
                            @foreach(json_decode($bundle->sub_services) as $sub_service)
                                @foreach($subServices as $sub)
                                    @if($sub->id == $sub_service)
                                        <td>{{$sub->name}}</td>
                                    @endif
                                @endforeach
                            @endforeach
                        <td>{{$single->service_status}}</td>
                        <td>{{$single->price}}</td>
                    </tr>
                    @endif
                    @endforeach
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection