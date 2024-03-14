@extends('serviceprovider.layouts.app')
@section('title', 'Order Detail')
@section('content')
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Order Details</h3>
                </div>
                 <div class="col text-right">
                   <a href="{{route('orders')}}" class="btn btn-primary">Back</a>
                </div>
               
            </div>
        </div>
      
<div class="row">
                <div class="col-md-3">
                    <div class="service-image-detail new-desig">
                        <img src="{{ asset('assets/serviceprovider/img/user.jpg') }}">
                        <h5>John Smith</h5>
            <p> john@example.com </p>
                    </div>
                </div>
               <div class="col-md-9">
                   <div class="card card-table">
                       <div class="card-body">
                           <div class="viewBox">
                               <table class="table table-bordered">
                                   <tbody>
                                    <tr>
                                       <th> Scheduled Date </th>
                                       <td> 02/12/2021</td>
                                   </tr>
                                    <tr>
                                       <th> Order Id </th>
                                       <td> #3456</td>
                                   </tr>
                                   <tr>
                                       <th> Service Type</th>
                                       <td> Brakes Safety Inspection</td>
                                   </tr>
                                   <tr>
                                       <th> Location </th>
                                       <td> 17.8 mi- 4610 E Los Angeles Awe Unit A, Simi Valley </td>
                                   </tr>
                                    <!--tr>
                                       <th> Rating </th>
                                       <td> <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i> </td>
                                   </tr>
                                   <tr>
                                       <th> Comments </th>
                                       <td> Great Service ! </td>
                                   </tr-->
                                   <tr>
                                       <th> Phone Number</th>
                                       <td> +123456789 </td>
                                   </tr>
                                   <tr>
                                       <th> Status </th>
                                       <td> Pending </td>
                                   </tr>
                                   <tr>
                                       <th style="color:#c9343a;"> Total Price </th>
                                       <td style="color:#c9343a;"><strong> $62.00 </strong></td>
                                   </tr>
                               </tbody></table>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
      <div class="row">
                  <div class="col-md-12 d-flex">
                        <div class="card card-table flex-fill">
                            <div class="card-body">
                <h4 class="serc-ttl"> Services Included </h4>
                                <div class="table-responsive">
                                    <table class="table table-center">
                                        <thead>
                                            <tr>
                        <th>Name</th>
                                                <th>Service Type</th>
                                                <th>Type</th>
                                                <th>Price</th>
                                                <th>Brand</th>
                                                <th>Compatible Vehicles</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-nowrap">
                                                   Ceat Tyres
                                                </td>
                                                <td class="text-nowrap">Break Safety Inspection..</td>
                                                <td><label class="badge bg-info-light">Product</label></td>
                                                <td>$ 40.00</td>
                                                <td>Ceat India</td>
                                                <td>
                                                    Hundai, Honda, Maruti
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-nowrap">
                                                   Electrical
                                                </td>
                                                <td class="text-nowrap">Lighting Inspection..</td>
                                                <td><label class="badge bg-warning-light">Service</label></td>
                                                <td>$ 14.00</td>
                                                <td>James Electrical</td>
                                                <td>
                                                    Hundai, Honda, Maruti
                                                </td>
                                            </tr>
                      <tr>
                                                <td class="text-nowrap">
                                                   Exhaust
                                                </td>
                                                <td class="text-nowrap">Engine Inspection..</td>
                                                <td><label class="badge bg-info-light">Product</label></td>
                                                <td>$ 420.00</td>
                                                <td>Hundai Motors</td>
                                                <td>
                                                    Hundai, Honda, Maruti
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-nowrap">
                                                   Cleaning Services
                                                </td>
                                                <td class="text-nowrap">Cleaning Inspection..</td>
                                                <td><label class="badge bg-warning-light">Service</label></td>
                                                <td>$ 24.00</td>
                                                <td>Cleaning</td>
                                                <td>
                                                    Hundai, Honda, Maruti
                                                </td>
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