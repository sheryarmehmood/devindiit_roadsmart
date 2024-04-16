@extends('admin.layouts.app1')
@section('title', 'View Customer')
@section('content')
    <div class="content container-fluid viewproduct_page">
        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">{{$customerDetails->name}} Details</h3>
                </div>
                <div class="col text-right">
                    <a href="{{ route('admin.customers') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="card card-table mb-3">
                    <div class="card-body p-0">
                        <div class="px-4 pt-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3 class="mb-0">Last order placed</h3>
                            </div>
                        </div>
                        <hr />
                        <div class="viewBox table-responsive px-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3 class="mb-0">Order # 1234 <span class="badge badge-success fontpen mx-2">c
                                    </span></h3>
                                <p class="text-muted">12 Jul at 9:14 pm</p>
                            </div>
                            <p class="text-muted mt-2 mb-0">K 1000 from Draft Orders</p>
                            <div class="viewBox table-responsive pt-3 unfulfilledTblBx">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td class="text-left pl-0" style="width:70px">
                                                <div class="avatar avatar-sm">
                                                    <img class="avatar-img rounded-circle" alt=""
                                                        src="../assets/serviceprovider/img/engine.jpg">
                                                </div>
                                            </td>
                                            <td class="text-left pl-0 text-wrap"> 
                                                <!-- <a
                                                    href="{{ route('seller.products') }}">Front Brakes</a> </td> -->

                                        </tr>
                                        <tr>

                                            <td colspan="5" class="text-right pr-0"><a
                                                    href="{{ route('admin.customerorders', ['id' => $customerDetails->id]) }}" class="mr-4">View all orders</a> 
                                                    <!-- <td colspan="5" class="text-right pr-0">
                                            <a href="{{ route('admin.customerorders', ['customerId' => $customerDetails->id]) }}" class="mr-4">View all orders</a>
                                        </td> -->

                                                <a href="{{ route('admin.viewcustomeraddorder', ['id' => $customerDetails->id]) }}"
                                                    class="btn btn-success text-white">Create Order</a> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                
                 
                <div class="card card-table mb-3">
                    <div class="card-body p-0">
                        <div class="px-4 pt-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3 class="mb-0">Last Vehicle Registered</h3>
                            </div>
                        </div>
                        <hr />
                        <div class="viewBox table-responsive px-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3 class="mb-0">Vehicle # 711-2457-9 </h3>
                                <p class="text-muted">01 Jul at 01:14 pm</p>
                            </div>
                            <!-- <p class="text-muted mt-2 mb-0">K 1000 from Draft Vehicle</p> -->
                            <div class="viewBox table-responsive pt-3 unfulfilledTblBx">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td class="text-left pl-0" style="width:70px">
                                                <div class="avatar avatar-sm">
                                                    <img class="avatar-img rounded-circle" alt=""
                                                        src="../assets/serviceprovider/img/engine.jpg">
                                                </div>
                                            </td>
                                            <td class="text-left pl-0 text-wrap"> 
                                                <!-- <a href="{{ route('seller.products') }}">Front Brakes</a>  -->
                                            </td>

                                        </tr>
                                        <tr>
                                        
                                            <td colspan="5" class="text-right pr-0"><a
                                                    href="{{ route('admin.viewcustomervehicles', ['id' => $customerDetails->id]) }}" class="mr-4">View all Vehicles</a>
                                                <a href="{{ route('admin.addvehicle') }}"
                                                    class="btn btn-success text-white">Register Vehicle</a> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="card card-table mb-3">
                    <div class="card-body p-0">
                        <div class="px-4 pt-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3 class="mb-0">Last Request placed</h3>
                            </div>
                        </div>
                        <hr />
                        <div class="viewBox table-responsive px-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3 class="mb-0">Request # 2092 <span class="badge badge-warning fontpen mx-2">Unfulfilled
                                    </span></h3>
                                <p class="text-muted">26 Jul at 03:19 pm</p>
                            </div>
                            <!-- <p class="text-muted mt-2 mb-0">K 1000 from Draft Request</p> -->
                            <div class="viewBox table-responsive pt-3 unfulfilledTblBx">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td class="text-left pl-0" style="width:70px">
                                                <div class="avatar avatar-sm">
                                                    <img class="avatar-img rounded-circle" alt=""
                                                        src="../assets/serviceprovider/img/engine.jpg">
                                                </div>
                                            </td>
                                            <td class="text-left pl-0 text-wrap"> 
                                                <!-- <a
                                                    href="{{ route('seller.products') }}">Front Brakes</a> -->
                                                 </td>

                                        </tr>
                                        <tr>

                                            <!-- <td colspan="5" class="text-right pr-0"><a
                                                    href="{{ route('admin.viewcustomerrequest') }}" class="mr-4">View all Requests</a> -->
                                            <td colspan="5" class="text-right pr-0"><a
                                            href="{{ route('admin.viewcustomerrequest', ['id' => $customerDetails->id]) }}" class="mr-4">View all Requests</a> 
                                            <a href="{{ route('admin.viewcustomeraddrequest', ['id' => $customerDetails->id]) }}"
                                            class="btn btn-success text-white">Create Request</a> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="card card-table mb-3">
                    <div class="card-body p-2 py-3 px-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="mb-0">Timeline</h3>
                            <div class="checkbox">
                                <label class="mb-0">
                                    <input type="checkbox" name="checkbox" checked> Show comments
                                </label>
                            </div>
                        </div>
                        <hr />
                        <div class="timelinebox">
                            <ul class="timeline">
                                <li class="event">
                                    <span class="username">DN</span>
                                    <div class="">
                                        <div class="timlinecomenntwrap">
                                            <div class="input-group mr-3">
                                                <input type="text" class="form-control px-3" placeholder="Add Comments">
                                            </div>
                                            <div class="d-flex align-items-center timlinecomenntactions">
                                                <div class="customer-filter-actions">
                                                    <a href="javascript:void(0);"><i class="fa fa-smile"
                                                            aria-hidden="true"></i></a>
                                                    <a href="javascript:void(0);"><i class="fa fa-at"
                                                            aria-hidden="true"></i></a>
                                                    <a href="javascript:void(0);"><i class="fa fa-hashtag"
                                                            aria-hidden="true"></i></a>
                                                    <a href="javascript:void(0);"><i class="fa fa-paperclip"
                                                            aria-hidden="true"></i></a>
                                                </div>
                                                <button class="btn btn-primary ml-auto">Post</button>
                                            </div>
                                            <p class="text-right"><small>Only you and other staff can see this
                                                    reason.</small></p>
                                        </div>


                                    </div>
                                </li>
                                <li class="event commentli">
                                    <h2 class="todaytex">Today</h2>
                                    <span class="username">DN</span>
                                    <h3>Davy Nanduba <small>Just now (edited)</small></h3>
                                    <p>Insurance Purchased from hollard</p>
                                </li>
                                <li class="event">
                                    <p class="d-flex">You fullfilled 1 item from Cairo Road <span
                                            class="ml-auto text-right">Just Now</span></p>
                                </li>
                                <li class="event">
                                    <p class="d-flex">You fullfilled 1 item from Cairo Road <span
                                            class="ml-auto text-right">1 Minutes ago</span></p>
                                </li>
                                <li class="event">
                                    <p class="d-flex">You fullfilled 1 item from Cairo Road <span
                                            class="ml-auto text-right">5 Minutes ago</span></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-md-4">
                <div class="card card-table mb-3">
                    <div class="card-body p-2 py-3 px-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="mb-0">Notes</h3>
                            <a data-toggle="modal" data-target="#notes-popup" href="javascript: void(0);">Edit</a>
                        </div>
                        <div class="chat-search mt-32">
                            <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        </div>
                    </div>
                </div>

                <div class="card card-table mb-3">
                    <div class="card-body p-2 py-3 px-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="mb-0">Customer</h3>
                            <a data-toggle="modal" data-target="#customers-popup" href="javascript: void(0);">Edit</a>
                        </div>

                        <div class="customerLists-item border-0 mt-0">

                            <p class="d-flex justify-space-between mb-2"><a
                                    href="javascript:void();">{{$customerDetails->email}}</a> <span
                                    class="ml-auto text-secondary"><i class="fa fa-copy" aria-hidden="true"></i></span>
                            </p>
                            <p>{{$customerDetails->phone_num}}</p>
                            <p class="text-muted">Will receive notifications in English</p>
                        </div>


                        <div class="customerLists">
                            <div class="customerLists-item">
                                <h4 class="d-flex">Default address <a data-toggle="modal" class="edit-text-btn"
                                        data-target="#editaddress-popup" href="javascript: void(0);">Manage</a></h4>
                                        {{$customerDetails->userAddress}}
                                <!-- <p>1688 St Matthews Ave,</br> Winnipeg, MB R3H 0A2, Canada</p> -->
                            </div>
                            <!-- <a class="mt-3 d-inline-block" data-toggle="modal" data-target="#addaddress-popup" -->
                                <!-- href="javascript: void(0);">Add New Address</a> -->
                        </div>

                        <div class="customerLists">
                            <div class="customerLists-item">
                                <h4 class="d-flex">Tax Settings <a class="edit-text-btn" data-toggle="modal"
                                        data-target="#edittax-popup" href="javascript: void(0);">Manage</a></h4>
                                <p>No exemptions</p>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="card card-table mb-3">
                    <div class="card-body p-2 py-3 px-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="mb-0">Marketing status</h3>
                            <a class="edit-text-btn" data-toggle="modal" data-target="#editmarking-popup"
                                href="javascript: void(0);">Edit</a>
                        </div>
                        <div class="TagsCardLists customerMarketingStatus">
                            <span class="tagsitem">Email subscribed</span>
                            <span class="tagsitem">SMS subscribed</span>

                        </div>
                        <p class="text-muted mt-3">Last updated yesterday.</p>
                    </div>
                </div>
                <div class="card card-table mb-3">
                    <div class="card-body p-2 py-3 px-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="mb-0">Tags</h3>
                        </div>
                        <div class="chat-search">
                            <div class="input-group">
                                <input type="text" id="exist-values" class="tagged form-control px-3"
                                    data-removeBtn="true" placeholder="Add Tags">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="text-left mt-4 mb-4">
                    <button type="submit" class="btn btn-primary custom-save-btn">Delete Customer</button>
                </div>
            </div>

        </div>
    </div>
@endsection
