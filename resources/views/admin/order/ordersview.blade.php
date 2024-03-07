@extends('admin.layouts.app1')
@section('title', 'Recent Orders')
@section('content')
    <div class="content container-fluid viewproduct_page">
        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Order Detail</h3>
                </div>
                 <div class="col text-right">
                   <a href="{{route('admin.dashboard')}}" class="btn btn-primary">Back</a>
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
                                        <th>Service Name</th>
                                         @if($orderDetails->cartid)
                                         <td>{{$orderDetails->cartid}}</td>
                                        @else
                                         <td>N/A</td>
                                         @endif
                                       
                                   </tr>
                                    <tr>
                                        <th>Client Name</th>
                                         @if($orderDetails->userName)
                                        <td>{{$orderDetails->userName}}</td>
                                        @else
                                         <td>N/A</td>
                                         @endif
                                       
                                   </tr>
                                    <tr>
                                        <th>Email</th>
                                         @if($orderDetails->userEmail)
                                        <td>{{$orderDetails->userEmail}}</td>
                                        @else
                                         <td>N/A</td>
                                         @endif
                                        
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td>
                                            @if($orderDetails->status == '0')<label class="badge badge-danger">In-Active</label>@else<label class="badge badge-success">Active</label>@endif
                                            </td>
                                    </tr>
                                     <tr>
                                        <th>Address</th>
                                        <td>{{$orderDetails->delivery_address_id}}/td>
                                    </tr>
                                     <tr>
                                        <th>Date</th>
                                        <td>{{$orderDetails->updated_at}}</td>
                                    </tr>
                                   
                                    <tr>
                                        <th>Phone Number</th>
                                         @if($orderDetails->userPhone)
                                        <td><label>{{$orderDetails->userPhone}}</label></td>
                                        @else
                                         <td>N/A</td>
                                         @endif
                                       
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