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
                    <a href="{{ route('seller.view-customer-chats') }}" class="btn btn-primary active">Chats</a>
                    <a href="{{ route('seller.view-customer-profile') }}" class="btn btn-primary">Account Info</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-12">
                            <div class="py-2 px-4 border-bottom d-none d-lg-block">
                                <div class="d-flex align-items-center py-1">
                                    <div class="position-relative">
                                        <!--<img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">-->
                                        <img class="avatar-img rounded-circle" alt="Sharon Lessman"
                                            src="{{ asset('assets/serviceprovider/img/customer/user-01.jpg') }}"
                                            width="40" height="40">
                                    </div>
                                    <div class="flex-grow-1 pl-3">
                                        <strong> Brian <span class="fas fa-circle chat-online"></span></strong>
                                        <div class="text-muted small"><em>Typing...</em></div>
                                    </div>
                                </div>
                            </div>

                            <div class="position-relative">
                                <div class="chat-messages p-4">

                                    <div class="chat-message-right pb-4">
                                        <div>
                                            <img class="avatar-img rounded-circle" alt="Sharon Lessman"
                                                src="{{ asset('assets/serviceprovider/img/user1.jpg') }}" width="40"
                                                height="40">

                                            <div class="text-muted small text-nowrap mt-2">2:33 am</div>
                                        </div>
                                        <div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">
                                            <div class="font-weight-bold mb-1">You</div>
                                            Hi Sharon Lessman, how are you? How is the project coming along?
                                        </div>
                                    </div>

                                    <div class="chat-message-left pb-4">
                                        <div>
                                            <!--<img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">-->
                                            <img class="avatar-img rounded-circle" alt="Sharon Lessman"
                                                src="{{ asset('assets/serviceprovider/img/customer/user-01.jpg') }}"
                                                width="40" height="40">
                                            <div class="text-muted small text-nowrap mt-2">2:34 am</div>
                                        </div>
                                        <div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
                                            <div class="font-weight-bold mb-1"> Brian</div>
                                            Are we meeting today?
                                        </div>
                                    </div>

                                    <div class="chat-message-right mb-4">
                                        <div>
                                            <img class="avatar-img rounded-circle" alt="Sharon Lessman"
                                                src="{{ asset('assets/serviceprovider/img/user1.jpg') }}" width="40"
                                                height="40">
                                            <div class="text-muted small text-nowrap mt-2">2:35 am</div>
                                        </div>
                                        <div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">
                                            <div class="font-weight-bold mb-1">You</div>
                                            Well I am not sure.
                                            I have results to show you.
                                        </div>
                                    </div>

                                    <div class="chat-message-left pb-4">
                                        <div>
                                            <!--<img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">-->
                                            <img class="avatar-img rounded-circle" alt="Sharon Lessman"
                                                src="{{ asset('assets/serviceprovider/img/customer/user-01.jpg') }}"
                                                width="40" height="40">
                                            <div class="text-muted small text-nowrap mt-2">2:36 am</div>
                                        </div>
                                        <div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
                                            <div class="font-weight-bold mb-1"> Brian</div>
                                            Project has been already finished and I have results to show you.
                                        </div>
                                    </div>

                                    <div class="chat-message-left pb-4">
                                        <div>
                                            <!--<img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">-->
                                            <img class="avatar-img rounded-circle" alt="Sharon Lessman"
                                                src="{{ asset('assets/serviceprovider/img/customer/user-01.jpg') }}"
                                                width="40" height="40">
                                            <div class="text-muted small text-nowrap mt-2">2:37 am</div>
                                        </div>
                                        <div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
                                            <div class="font-weight-bold mb-1"> Brian</div>
                                            The rest of the team is not here yet.Maybe in an hour or so?
                                        </div>
                                    </div>

                                    <div class="chat-message-right mb-4">
                                        <div>
                                            <!--<img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="rounded-circle mr-1" alt="Chris Wood" width="40" height="40">-->
                                            <img class="avatar-img rounded-circle" alt="Sharon Lessman"
                                                src="{{ asset('assets/serviceprovider/img/user1.jpg') }}" width="40"
                                                height="40">
                                            <div class="text-muted small text-nowrap mt-2">2:38 am</div>
                                        </div>
                                        <div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">
                                            <div class="font-weight-bold mb-1">You</div>
                                            Have you faced any problems at the last phase of the project?
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex-grow-0 py-3 px-4 border-top">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Type your message">
                                    <button class="btn ml-1 btn-primary">Send</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
