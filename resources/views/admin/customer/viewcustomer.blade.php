@extends('admin.layouts.app1')
@section('title', 'View Customer')
@section('content')
    <div class="content container-fluid viewproduct_page">
        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">View Customer Detail</h3>
                </div>
                <div class="col text-right">
                    <a href="{{ route('admin.customers') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <a href="" class="btn btn-primary">Orders</a>
                    <a href="" class="btn btn-primary">Requests</a>
                    <a href="" class="btn btn-primary">Vehicles</a>
                    <a href="" class="btn btn-primary">Chats</a>
                    <a href="" class="btn btn-primary">Account Info</a>
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
                                        <th>Name</th>
                                        @if ($customerDetails->name)
                                            <td>{{ $customerDetails->name }} </td>
                                        @else
                                            <td>N/A</td>
                                        @endif
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        @if ($customerDetails->email)
                                            <td>{{ $customerDetails->email }}</td>
                                        @else
                                            <td>N/A</td>
                                        @endif
                                    </tr>

                                    <tr>
                                        <th>Address</th>
                                        @if ($customerDetails->userAddress)
                                            <td>{{ $customerDetails->userAddress }}</td>
                                        @else
                                            <td>N/A</td>
                                        @endif
                                    </tr>
                                    <tr>
                                        <th>Phone Number</th>
                                        @if ($customerDetails->phone_num)
                                            <td>{{ $customerDetails->phone_num }}</td>
                                        @else
                                            <td>N/A</td>
                                        @endif
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        @if ($customerDetails->status = 1)
                                            <td><label class="badge badge-success">Active</label></td>
                                        @else
                                            <td><label class="badge badge-danger">In-Active</label></td>
                                        @endif

                                    </tr>
                                    <tr>
                                        <th>Image</th>
                                        @if ($customerDetails->image)
                                            <td> <img class="viewproduct_img" src="{{ $customerDetails->image }}"></td>
                                        @else
                                            <td> <img class="viewproduct_img" style="height: 66px;
    width: 70px;"
                                                    src="https://cdn-icons-png.flaticon.com/512/21/21104.png"></td>
                                        @endif
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
