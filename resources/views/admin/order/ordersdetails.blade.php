@extends('admin.layouts.app1')
@section('title', 'Orders Details')
@section('content')
    <div class="content container-fluid viewproduct_page">
        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Order Detail</h3>
                </div>
                 <div class="col text-right">
                   <a href="{{route('admin.orders')}}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card addpad">
                    <div class="card-body">
                        <div class="viewBox">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th>Order Id</th>
                                         @if($orderDetails->id)
                                        <td>{{$orderDetails->id}}</td>
                                        @else
                                         <td>N/A</td>
                                         @endif
                                   </tr>
                                    <tr>
                                        <th>Customer Name</th>
                                         @if($orderDetails->user_id)
                                        <td>{{$orderDetails->user_id}}</td>
                                        @else
                                         <td>N/A</td>
                                         @endif
                                   </tr>
                                    <tr>
                                        <th>Email</th>
                                         @if($orderDetails->email)
                                        <td>{{$orderDetails->email}}</td>
                                        @else
                                         <td>N/A</td>
                                         @endif
                                    </tr>
                                     <tr>
                                        <th>Vehicle Name</th>
                                         @if($orderDetails->vehicle_id)
                                        <td>{{$orderDetails->vehicle_id}}</td>
                                        @else
                                         <td>N/A</td>
                                         @endif
                                    </tr>
                                    <tr>
                                        <th>Price</th>
                                          @if($orderDetails->amount)
                                        <td>{{$orderDetails->amount}}</td>
                                        @else
                                         <td>N/A</td>
                                         @endif
                                    </tr>
                                     <tr>
                                        <th>Date</th>
                                         @if($orderDetails->updated_at)
                                        <td>{{$orderDetails->updated_at}}</td>
                                        @else
                                         <td>N/A</td>
                                         @endif
                                    </tr>
                                     <tr>
                                        <th>Delivery Address</th>
                                          @if($orderDetails->delivery_address_id)
                                        <td>{{$orderDetails->delivery_address_id}}</td>
                                        @else
                                         <td>N/A</td>
                                         @endif
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                       <td>@if($orderDetails->status == '0')<label class="badge badge-info">Pending Delivery</label>
                                       @elseif($orderDetails->status == '1')<label class="badge badge-primary">In-progress</label>
                                       @elseif($orderDetails->status == '2')<label class="badge badge-danger">On-Hold</label>
                                       @elseif($orderDetails->status == '3')<label class="badge badge-warning">Dispactched</label>
                                       @else<label class="badge badge-success">Delivered</label>
                                       @endif</td>
                                    </tr>
                                    <!--<tr>-->
                                    <!--    <th>Image</th>-->
                                    <!--    <td> <img class="viewproduct_img" src="{{ asset('assets/serviceprovider/img/logo.png') }}"></td>-->
                                    <!--</tr>-->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection