@extends('admin.layouts.app1')
@section('title', 'View Seller')
@section('content')
    <div class="content container-fluid viewproduct_page">
        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">View Seller Detail</h3>
                </div>
                 <div class="col text-right">
                   <a href="{{route('admin.sellers')}}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card addpad">
                    <div class="card-body">
                        <div class="card-header">
                            <h4 class="card-title">Store Information</h4>
                        </div>
                        <div class="viewBox">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th>Store Name</th>
                                        <td>Smart Store</td>
                                   </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>smartstore@gamil.com</td>
                                    </tr>
                                    <tr>
                                        <th>Phone Number</th>
                                        <td><label>+123456789</label></td>
                                    </tr>
                                    <tr>
                                        <th>Country</th>
                                        <td>Usa</td>
                                    </tr>
                                    <tr>
                                        <th>State</th>
                                        <td>Florida</td>
                                    </tr>
                                    <tr>
                                        <th>City</th>
                                        <td>Mexico</td>
                                    </tr>
                                    <tr>
                                        <th>Address</th>
                                        <td>31 Avenew Road</td>
                                    </tr>
                                    
                                    <tr>
                                        <th>Opening Hours</th>
                                        <td>10:00 AM</td>
                                    </tr>
                                    <tr>
                                        <th>Closing Hours</th>
                                        <td>05:00 AM</td>
                                    </tr>
                                    
                                    <tr>
                                        <th>Status</th>
                                        <td><label class="badge badge-danger">Inctive</label></td>
                                    </tr>
                                    <tr>
                                        <th>Store Image</th>
                                        <td> <img class="viewproduct_img" src="{{ asset('assets/serviceprovider/img/logo.png') }}"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card addpad">
                    <div class="card-body">
                        <div class="card-header">
                        <h4 class="card-title">Personal Information</h4>
                        </div>
                        <div class="viewBox">
                            <table class="table table-bordered">
                               <tbody>
                                    <tr>
                                        <th>Name</th>
                                         @if($sellerDetails->first_name || $sellerDetails->last_name )
                                        <td>{{$sellerDetails->first_name }} {{$sellerDetails->last_name }}</td>
                                        @else
                                         <td>N/A</td>
                                         @endif
                                   </tr>
                                    <tr>
                                        <th>Email</th>
                                        @if($sellerDetails->email)
                                        <td>{{$sellerDetails->email}}</td>
                                        @else
                                         <td>N/A</td>
                                         @endif
                                    </tr>
                                    <tr>
                                        <th>Phone Number</th>
                                         @if($sellerDetails->phone_number)
                                        <td>{{$sellerDetails->phone_number}}</td>
                                        @else
                                         <td>N/A</td>
                                         @endif
                                    </tr>
                                    <tr>
                                        <th>Country</th>
                                       @if($sellerDetails->country)
                                        <td>{{$sellerDetails->country}}</td>
                                        @else
                                         <td>N/A</td>
                                         @endif
                                    </tr>
                                    <tr>
                                        <th>Address</th>
                                          @if($sellerDetails->address1 ||$sellerDetails->address2 )
                                        <td>{{$sellerDetails->address1  }} {{$sellerDetails->address2  }}, {{$sellerDetails->city  }} ,{{$sellerDetails->state}},{{$sellerDetails->zipcode  }}</td>
                                        @else
                                         <td>N/A</td>
                                         @endif
                                    </tr>
                                    <tr>
                                        <th> Image</th>
                                        
                                         <td> <img class="viewproduct_img" style="height: 66px;
    width: 70px;" src="https://cdn-icons-png.flaticon.com/512/21/21104.png"></td>
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
