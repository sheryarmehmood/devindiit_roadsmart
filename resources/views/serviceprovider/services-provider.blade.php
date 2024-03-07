@extends('serviceprovider.layouts.app')
@section('title', 'Service Provider')
@section('content')
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Services Marketplace</h3>
                </div>
                <div class="col-auto text-right">
                  <a class="btn btn-primary" href="{{'seller.add_service'}}">
                        Add New Service
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body pt-2 pb-0">
                        <div class="table-responsive">
                            <div class="dt-bootstrap4 no-footer">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table class="table table-hover table-center mb-0">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc" colspan="1">#</th>
                                                    <th class="sorting" colspan="1">Service Name</th>
                                                    <th class="sorting" colspan="1">Service Type</th>
                                                    <th class="sorting" colspan="1">Price</th>
                                                    <th class="sorting" colspan="1">Status</th>
                                                    <th class="sorting" colspan="1">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1">1</td>
                                                    <td>
                                                        <a href="#">
                                                            Brakes
                                                        </a>
                                                    </td>
                                                    <td>Break Safety Inspection..</td>
                                                    <td>$25</td>
                                                    
                                                    <td>
                                                        <div class="status-toggle">
                                                            <input id="service_1" class="check" type="checkbox">
                                                            <label for="service_1" class="checktoggle">checkbox</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                         <a href="{{route('seller.view_service')}}" class="btn btn-sm bg-info-light">
                                                            <i class="far fa-eye mr-1"></i> View
                                                        </a>
                                                         <a href="{{route('seller.edit_service')}}" class="btn btn-sm bg-success-light">
                                                            <i class="fas fa-edit"></i> Edit
                                                        </a>
                                                        <a href="#" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#delete-popup">
                                                            <i class="fas fa-trash-alt"></i> Delete
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td class="sorting_1">2</td>
                                                    <td>
                                                        <a href="#">
                                                            Electrical
                                                        </a>
                                                    </td>
                                                    
                                                    <td>Lighting..</td>
                                                    <td>$50</td>
                                                    
                                                    <td>
                                                        <div class="status-toggle">
                                                            <input id="service_2" class="check" type="checkbox" checked="">
                                                            <label for="service_2" class="checktoggle">checkbox</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="{{route('seller.view_service')}}" class="btn btn-sm bg-info-light">
                                                            <i class="far fa-eye mr-1"></i> View
                                                        </a>
                                                        <a href="{{route('seller.edit_service')}}" class="btn btn-sm bg-success-light">
                                                            <i class="fas fa-edit"></i> Edit
                                                        </a>
                                                        <a href="#" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#delete-popup">
                                                            <i class="fas fa-trash-alt"></i> Delete
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1">3</td>
                                                    <td>
                                                        <a href="#">
                                                            Engine
                                                        </a>
                                                    </td>
                                                    
                                                    <td>Other..</td>
                                                    <td>$45</td>
                                                    
                                                    <td>
                                                        <div class="status-toggle">
                                                            <input id="service_3" class="check" type="checkbox">
                                                            <label for="service_3" class="checktoggle">checkbox</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="{{route('seller.view_service')}}" class="btn btn-sm bg-info-light">
                                                            <i class="far fa-eye mr-1"></i> View
                                                        </a>
                                                        <a href="{{route('seller.edit_service')}}" class="btn btn-sm bg-success-light">
                                                            <i class="fas fa-edit"></i> Edit
                                                        </a>
                                                        <a href="#" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#delete-popup">
                                                            <i class="fas fa-trash-alt"></i> Delete
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td class="sorting_1">4</td>
                                                    <td>
                                                        <a href="#">
                                                            Exhaust
                                                        </a>
                                                    </td>
                                                    
                                                    <td>Replacement..</td>
                                                    <td>$14</td>
                                                    
                                                    <td>
                                                        <div class="status-toggle">
                                                            <input id="service_4" class="check" type="checkbox" checked="">
                                                            <label for="service_4" class="checktoggle">checkbox</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="{{route('seller.view_service')}}" class="btn btn-sm bg-info-light">
                                                            <i class="far fa-eye mr-1"></i> View
                                                        </a>
                                                        <a href="{{route('seller.edit_service')}}" class="btn btn-sm bg-success-light">
                                                            <i class="fas fa-edit"></i> Edit
                                                        </a>
                                                        <a href="#" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#delete-popup">
                                                            <i class="fas fa-trash-alt"></i> Delete
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1">5</td>
                                                    <td>
                                                        <a href="#">
                                                            Air Conditioner
                                                        </a>
                                                    </td>
                                                    
                                                    <td>Service..</td>
                                                    <td>$100</td>
                                                    
                                                    <td>
                                                        <div class="status-toggle">
                                                            <input id="service_5" class="check" type="checkbox" checked="">
                                                            <label for="service_5" class="checktoggle">checkbox</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="{{route('seller.view_service')}}" class="btn btn-sm bg-info-light">
                                                            <i class="far fa-eye mr-1"></i> View
                                                        </a>
                                                        <a href="{{route('seller.edit_service')}}" class="btn btn-sm bg-success-light">
                                                            <i class="fas fa-edit"></i> Edit
                                                        </a>
                                                        <a href="#" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#delete-popup">
                                                            <i class="fas fa-trash-alt"></i> Delete
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td class="sorting_1">6</td>
                                                    <td>
                                                        <a href="#">
                                                            Steering & Supension
                                                        </a>
                                                    </td>
                                                    
                                                    <td>Shoe Replacement..</td>
                                                    <td>$80</td>
                                                    
                                                    <td>
                                                        <div class="status-toggle">
                                                            <input id="service_6" class="check" type="checkbox">
                                                            <label for="service_6" class="checktoggle">checkbox</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="{{route('seller.view_service')}}" class="btn btn-sm bg-info-light">
                                                            <i class="far fa-eye mr-1"></i> View
                                                        </a>
                                                        <a href="{{route('seller.edit_service')}}" class="btn btn-sm bg-success-light">
                                                            <i class="fas fa-edit"></i> Edit
                                                        </a>
                                                        <a href="#" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#delete-popup">
                                                            <i class="fas fa-trash-alt"></i> Delete
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1">7</td>
                                                    <td>
                                                        <a href="#">
                                                            Interior Designing
                                                        </a>
                                                    </td>
                                                    
                                                    <td>Clean and adjust..</td>
                                                    <td>$5</td>
                                                    
                                                    <td>
                                                        <div class="status-toggle">
                                                            <input id="service_7" class="check" type="checkbox" checked="">
                                                            <label for="service_7" class="checktoggle">checkbox</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="{{route('seller.view_service')}}" class="btn btn-sm bg-info-light">
                                                            <i class="far fa-eye mr-1"></i> View
                                                        </a>
                                                        <a href="{{route('seller.edit_service')}}" class="btn btn-sm bg-success-light">
                                                            <i class="fas fa-edit"></i> Edit
                                                        </a>
                                                        <a href="#" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#delete-popup">
                                                            <i class="fas fa-trash-alt"></i> Delete
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td class="sorting_1">8</td>
                                                    <td>
                                                        <a href="#">
                                                            Brakes
                                                        </a>
                                                    </td>
                                                    
                                                    <td>Other..</td>
                                                    <td>$75</td>
                                                    
                                                    <td>
                                                        <div class="status-toggle">
                                                            <input id="service_8" class="check" type="checkbox" checked="">
                                                            <label for="service_8" class="checktoggle">checkbox</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="{{route('seller.view_service')}}" class="btn btn-sm bg-info-light">
                                                            <i class="far fa-eye mr-1"></i> View
                                                        </a>
                                                        <a href="{{route('seller.edit_service')}}" class="btn btn-sm bg-success-light">
                                                            <i class="fas fa-edit"></i> Edit
                                                        </a>
                                                        <a href="#" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#delete-popup">
                                                            <i class="fas fa-trash-alt"></i> Delete
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1">9</td>
                                                    <td>
                                                        <a href="#">
                                                            Wheels
                                                        </a>
                                                    </td>
                                                    
                                                    <td>Painting..</td>
                                                    <td>$500</td>
                                                    
                                                    <td>
                                                        <div class="status-toggle">
                                                            <input id="service_9" class="check" type="checkbox" checked="">
                                                            <label for="service_9" class="checktoggle">checkbox</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="{{route('seller.view_service')}}" class="btn btn-sm bg-info-light">
                                                            <i class="far fa-eye mr-1"></i> View
                                                        </a>
                                                        <a href="{{route('seller.edit_service')}}" class="btn btn-sm bg-success-light">
                                                            <i class="fas fa-edit"></i> Edit
                                                        </a>
                                                        <a href="#" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#delete-popup">
                                                            <i class="fas fa-trash-alt"></i> Delete
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td class="sorting_1">10</td>
                                                    <td>
                                                        <a href="#">
                                                            Cleaning Services
                                                        </a>
                                                    </td>
                                                    
                                                    <td>Other..</td>
                                                    <td>$150</td>
                                                    
                                                    <td>
                                                        <div class="status-toggle">
                                                            <input id="service_10" class="check" type="checkbox" checked="">
                                                            <label for="service_10" class="checktoggle">checkbox</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="{{route('seller.view_service')}}" class="btn btn-sm bg-info-light">
                                                            <i class="far fa-eye mr-1"></i> View
                                                        </a>
                                                         <a href="{{route('seller.edit_service')}}" class="btn btn-sm bg-success-light">
                                                            <i class="fas fa-edit"></i> Edit
                                                        </a>
                                                        <a href="#" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#delete-popup">
                                                            <i class="fas fa-trash-alt"></i> Delete
                                                        </a>

                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 10 of 12 entries</div>
                                    </div>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" class="page-link">Previous</a></li>
                                                <li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" class="page-link">1</a></li>
                                                <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" class="page-link">2</a></li>
                                                <li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" class="page-link">Next</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<div class="modal fade" id="delete-popup" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
            <div class="modal-body">
               <div class="delete-cont">
                  <p>Are you sure you want to delete this item ?</p>
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
               <button type="button" class="btn btn-danger">Delete</button>
            </div>
         </div>
      </div>
   </div>

@endsection
