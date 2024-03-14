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
                    <a href="{{ route('seller.view-customer-vehicles') }}" class="btn btn-primary ">Vehicles</a>
                    <a href="{{ route('seller.view-customer-chats') }}" class="btn btn-primary">Chats</a>
                    <a href="{{ route('seller.view-customer-profile') }}" class="btn btn-primary active">Account Info</a>
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
                                        <td>N/A</td>                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>N/A</td>                                    </tr>

                                    <tr>
                                        <th>Address</th>
                                        <td>N/A</td>                                    </tr>
                                    <tr>
                                        <th>Phone Number</th>
                                        <td>N/A</td>                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td><label class="badge badge-danger">In-Active</label></td>
                                    </tr>
                                    <tr>
                                        <th>Image</th>
                                        <td> <img class="viewproduct_img" style="height: 66px;
            width: 70px;"
                                                src="https://cdn-icons-png.flaticon.com/512/21/21104.png"></td>                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
