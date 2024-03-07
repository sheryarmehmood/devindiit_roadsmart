@extends('serviceprovider.layouts.app')

@section('title', 'Quotation')
@section('content') 

    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Requests</h3>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 d-flex">
                <div class="card card-table flex-fill">
                    <div class="card-body px-4 pt-3 pb-2">
                        <div class="table-responsive">
                            <table class="table table-center">
                                <thead>
                                    <tr>
                                        <th>Order Id</th>
                                        <th>Order Type</th>
                                        <th>Vehicle</th>
                                        <th>Customer</th>
                                         <th>Amount</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-nowrap">
                                            #3456
                                        </td>
                                        <td class="text-nowrap">Repairs</td>
                                        <td>BMW X3</td>
                                        <td><a href="#" class="avatar avatar-sm mr-2">
                                     <img class="avatar-img rounded-circle" alt="" src="{{ asset('assets/serviceprovider/img/customer/user-05.jpg') }}">
                                  </a> John Smith</td>
                                        <td>
                                            $62
                                        </td>
                                        <td><label class="badge badge-danger">Pending</label></td>
                                        <td>
                                            <a href="{{route('seller.view_quotation')}}" class="btn bg-primary-light ">
                                                <i class="fas fa-eye"></i> view
                                            </a>
                                            <a href="{{route('seller.edit_quotation')}}" class="btn bg-warning-light ">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                            <button class="btn bg-success-light" data-toggle="modal" data-target="#convert-popup"> <i class="fas fa-sync-alt"></i> Convert</button> 
                                            
                                        </td>
                                    </tr>
                                      <tr>
                                        <td class="text-nowrap">
                                            #3456
                                        </td>
                                        <td class="text-nowrap">Repairs</td>
                                        <td>BMW X3</td>
                                        <td><a href="#" class="avatar avatar-sm mr-2">
                                     <img class="avatar-img rounded-circle" alt="" src="{{ asset('assets/serviceprovider/img/customer/user-04.jpg') }}">
                                  </a> John Smith</td>
                                        <td>
                                            $62
                                        </td>
                                        <td><label class="badge badge-success">Completed</label></td>
                                        <td>
                                            <a href="{{route('seller.view_quotation')}}" class="btn bg-primary-light ">
                                                <i class="fas fa-eye"></i> view
                                            </a>
                                            <a href="{{route('seller.edit_quotation')}}" class="btn bg-warning-light ">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                            <button class="btn bg-success-light" data-toggle="modal" data-target="#convert-popup"> <i class="fas fa-sync-alt"></i> Convert</button> 
                                            
                                        </td>
                                    </tr>
                                      <tr>
                                        <td class="text-nowrap">
                                            #3456
                                        </td>
                                        <td class="text-nowrap">Repairs</td>
                                        <td>BMW X3</td>
                                        <td><a href="#" class="avatar avatar-sm mr-2">
                                     <img class="avatar-img rounded-circle" alt="" src="{{ asset('assets/serviceprovider/img/customer/user-03.jpg') }}">
                                  </a> John Smith</td>
                                        <td>
                                            $62
                                        </td>
                                        <td><label class="badge badge-danger">Pending</label></td>
                                        <td>
                                            <a href="{{route('seller.view_quotation')}}" class="btn bg-primary-light ">
                                                <i class="fas fa-eye"></i> view
                                            </a>
                                            <a href="{{route('seller.edit_quotation')}}" class="btn bg-warning-light ">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                            <button class="btn bg-success-light" data-toggle="modal" data-target="#convert-popup"> <i class="fas fa-sync-alt"></i> Convert</button> 
                                            
                                        </td>
                                    </tr>
                                      <tr>
                                        <td class="text-nowrap">
                                            #3456
                                        </td>
                                        <td class="text-nowrap">Repairs</td>
                                        <td>BMW X3</td>
                                        <td><a href="#" class="avatar avatar-sm mr-2">
                                     <img class="avatar-img rounded-circle" alt="" src="{{ asset('assets/serviceprovider/img/customer/user-02.jpg') }}">
                                  </a> John Smith</td>
                                        <td>
                                            $62
                                        </td>
                                        <td><label class="badge badge-success">Completed</label></td>
                                        <td>
                                            <a href="{{route('seller.view_quotation')}}" class="btn bg-primary-light ">
                                                <i class="fas fa-eye"></i> view
                                            </a>
                                            <a href="{{route('seller.edit_quotation')}}" class="btn bg-warning-light ">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                            <button class="btn bg-success-light" data-toggle="modal" data-target="#convert-popup"> <i class="fas fa-sync-alt"></i> Convert</button> 
                                            
                                        </td>
                                    </tr>
                                      <tr>
                                        <td class="text-nowrap">
                                            #3456
                                        </td>
                                        <td class="text-nowrap">Repairs</td>
                                        <td>BMW X3</td>
                                        <td><a href="#" class="avatar avatar-sm mr-2">
                                     <img class="avatar-img rounded-circle" alt="" src="{{ asset('assets/serviceprovider/img/customer/user-01.jpg') }}">
                                  </a> John Smith</td>
                                        <td>
                                            $62
                                        </td>
                                        <td><label class="badge badge-danger">Pending</label></td>
                                        <td>
                                            <a href="{{route('seller.view_quotation')}}" class="btn bg-primary-light ">
                                                <i class="fas fa-eye"></i> view
                                            </a>
                                            <a href="{{route('seller.edit_quotation')}}" class="btn bg-warning-light ">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                            <button class="btn bg-success-light" data-toggle="modal" data-target="#convert-popup"> <i class="fas fa-sync-alt"></i> Convert</button> 
                                            
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
    
<div class="modal fade" id="convert-popup" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
            <div class="modal-body">
               <div class="convert-cont">
                  <p>Are you sure you wants to convert this estimate to order ?</p>
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-success">Yes</button>
               <button type="button" class="btn btn-danger">No</button>
            </div>
         </div>
      </div>
   </div>

   @endsection
