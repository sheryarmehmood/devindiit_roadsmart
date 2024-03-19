@extends('admin.layouts.app1')
@section('title', 'View Vehicle')
@section('content')
    <div class="content container-fluid viewproduct_page">
        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Vechile Detail</h3>
                </div>
                 <div class="col text-right">
                   <!-- <a href="{{route('admin.vehicles')}}" class="btn btn-primary">Back</a> -->
                   <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card addpad">
                    <div class="card-body">
                        <div class="card-header">
                            <h4 class="card-title">Vehicle Information</h4>
                        </div>
                        <div class="viewBox">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th>Vehicle Name</th>
                                         @if($vehicleDetails->title)
                                        <td>{{$vehicleDetails->title}}</td>
                                        @else
                                         <td>N/A</td>
                                         @endif
                                        
                                   </tr>
                                    <tr>
                                        <th>Vehicle Model Year</th>
                                         @if($vehicleDetails->model_year)
                                      <td>{{$vehicleDetails->model_year}}</td>
                                        @else
                                         <td>N/A</td>
                                         @endif
                                       
                                    </tr>
                                    <tr>
                                        <th>Engine</th>
                                         @if($vehicleDetails->engine_id)
                                        <td>{{$vehicleDetails->engine_id}}</td>
                                        @else
                                         <td>N/A</td>
                                         @endif
                                       
                                    </tr>
                                    <tr>
                                        <th>Registration Number</th>
                                         @if($vehicleDetails->reg_no)
                                       <td>{{$vehicleDetails->reg_no}}</td>
                                        @else
                                         <td>N/A</td>
                                         @endif
                                       
                                    </tr>
                                    <tr>
                                        <th>License Plate</th>
                                         @if($vehicleDetails->license_plate)
                                       <td>{{$vehicleDetails->license_plate}}</td>
                                        @else
                                         <td>N/A</td>
                                         @endif
                                        
                                    </tr>
                                    <tr>
                                        <th>Transmissions</th>
                                         @if($vehicleDetails->transmission)
                                        <td>{{$vehicleDetails->transmission}}</td>
                                        @else
                                         <td>N/A</td>
                                         @endif
                                        
                                    </tr>
                                    <!--<tr>-->
                                    <!--    <th>Company Make</th>-->
                                    <!--    <td>{{$vehicleDetails->engine_id}}</td>-->
                                    <!--</tr>-->
                                    <tr>
                                        <th>Model Name</th>
                                         @if($vehicleDetails->name)
                                        <td>{{$vehicleDetails->name}}</td>
                                        @else
                                         <td>N/A</td>
                                         @endif
                                        
                                    </tr>
                                    
                                    <tr>
                                        <th>Varaint Name</th>
                                         @if($vehicleDetails->variant_id)
                                        <td>{{$vehicleDetails->variant_id}}</td>
                                        @else
                                         <td>N/A</td>
                                         @endif
                                        
                                    </tr>
                                    <tr>
                                        <th>Color</th>
                                         @if($vehicleDetails->color)
                                        <td>{{$vehicleDetails->color}}</td>
                                        @else
                                         <td>N/A</td>
                                         @endif
                                        
                                    </tr>
                                    <tr>
                                        <th>Weight</th>
                                         @if($vehicleDetails->weight)
                                         <td>{{$vehicleDetails->weight}}</td>
                                        @else
                                         <td>N/A</td>
                                         @endif
                                       
                                    </tr>
                                    <tr>
                                        <th>Price</th>
                                         @if($vehicleDetails->price)
                                        <td>{{$vehicleDetails->price}}</td>
                                        @else
                                         <td>N/A</td>
                                         @endif
                                        
                                    </tr>
                                    <tr>
                                        <th>Wheels Tries</th>
                                         @if($vehicleDetails->wheels_tires)
                                        <td>{{$vehicleDetails->wheels_tires}}</td>
                                        @else
                                         <td>N/A</td>
                                         @endif
                                        
                                    </tr>
                                    <tr>
                                        <th>Provider</th>
                                         @if($vehicleDetails->provider)
                                        <td>{{$vehicleDetails->provider}}</td>
                                        @else
                                         <td>N/A</td>
                                         @endif
                                       
                                    </tr>
                                    <tr>
                                        <th>Cover</th>
                                         @if($vehicleDetails->cover)
                                        <td>{{$vehicleDetails->cover}}</td>
                                        @else
                                         <td>N/A</td>
                                         @endif
                                        
                                    </tr>
                                    <tr>
                                        <th>Owner Current</th>
                                         @if($vehicleDetails->owner_current)
                                        <td>{{$vehicleDetails->owner_current}}</td>
                                        @else
                                         <td>N/A</td>
                                         @endif
                                        
                                    </tr>
                                    <tr>
                                        <th>Ownership</th>
                                        @if($vehicleDetails->ownership)
                                        <td>{{$vehicleDetails->ownership}}</td>
                                        @else
                                         <td>N/A</td>
                                         @endif
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td>@if($vehicleDetails->status == '0')<label class="badge badge-danger">In-Active</label>@else<label class="badge badge-success">Active</label>@endif</td>
                                    </tr>
                                    <!--<tr>-->
                                    <!--    <th>Vehicle Image</th>-->
                                    <!--    <td> <img class="viewproduct_img" src="{{ asset('assets/serviceprovider/img/car1.png') }}"></td>-->
                                    <!--</tr>-->
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
                                         @if($vehicleDetails->userid)
                                        <td>{{$vehicleDetails->userid}}</td>
                                        @else
                                         <td>N/A</td>
                                         @endif
                                   </tr>
                                    <tr>
                                        <th>Email</th>
                                       @if($vehicleDetails->email)
                                        <td>{{$vehicleDetails->email}}</td>
                                        @else
                                         <td>N/A</td>
                                         @endif
                                    </tr>
                                    <tr>
                                        <th>Phone Number</th>
                                      @if($vehicleDetails->phonenum)
                                        <td>{{$vehicleDetails->phonenum}}</td>
                                        @else
                                         <td>N/A</td>
                                         @endif
                                    </tr>
                                    <tr>
                                        <th>Country</th>
                                          @if($vehicleDetails->userState)
                                        <td>{{$vehicleDetails->userState}}</td>
                                        @else
                                         <td>N/A</td>
                                         @endif
                                    </tr>
                                    <tr>
                                        <th>Address</th>
                                          @if($vehicleDetails->userAddress)
                                        <td>{{$vehicleDetails->userAddress}}</td>
                                        @else
                                         <td>N/A</td>
                                         @endif
                                    </tr>
                                    <tr>
                                        <th> Image</th>
                                          @if($vehicleDetails->image)
                                         <td> <img class="viewproduct_img" src="{{$vehicleDetails->image}}"></td>
                                        @else
                                       
                                        <td> <img class="viewproduct_img" style="height: 66px;
    width: 70px;" src="https://cdn-icons-png.flaticon.com/512/21/21104.png"></td>
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