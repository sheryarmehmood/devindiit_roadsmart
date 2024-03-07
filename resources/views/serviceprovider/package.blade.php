@extends('serviceprovider.layouts.app')
@section('title', 'Package')
@section('content')
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Packages</h3>
                </div>
                <div class="col-auto text-right">
                  <a class="btn btn-primary" href="{{route('seller.add_package')}}">
                        Add New Package
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card ordertabstableitems">
                    <div class="card-body px-4 pt-2">
                        <div class="table-responsive">
                            <div class="dt-bootstrap4 no-footer">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table class="table table-hover table-center mb-0">
                                            <thead>
                                                <tr role="row">
                                                    <th>#</th>
                                                    <th>Package Name</th>
                                                    <th>Vehicles</th>
                                                    <th>Total Items</th>
                                                    <th>Price</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1">1</td>
                                                    <td>
                                                        <a href="#">
                                                            Standard
                                                        </a>
                                                    </td>
                                                    <td>Hundai Careta, Toyota Fortuner, Audi Q7...</td>
                                                    <td>3</td>
                                                    <td>$25</td>
                                                    
                                                    <td>
                                                        <div class="status-toggle">
                                                            <input id="service_1" class="check" type="checkbox">
                                                            <label for="service_1" class="checktoggle">checkbox</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                         <a href="{{route('seller.edit_package')}}" class="btn btn-sm bg-success-light">
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
                                                            Premium
                                                        </a>
                                                    </td>
                                                    <td>Hundai Careta, Toyota Fortuner, Audi Q7...</td>
                                                    <td>5</td>
                                                    <td>$50</td>
                                                    
                                                    <td>
                                                        <div class="status-toggle">
                                                            <input id="service_2" class="check" type="checkbox" checked="">
                                                            <label for="service_2" class="checktoggle">checkbox</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="{{route('seller.edit_package')}}" class="btn btn-sm bg-success-light">
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
                                                            Professional
                                                        </a>
                                                    </td>
                                                    <td>Hundai Careta, Toyota Fortuner, Audi Q7...</td>
                                                    <td>2</td>
                                                    <td>$45</td>
                                                    
                                                    <td>
                                                        <div class="status-toggle">
                                                            <input id="service_3" class="check" type="checkbox">
                                                            <label for="service_3" class="checktoggle">checkbox</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="{{route('seller.edit_package')}}" class="btn btn-sm bg-success-light">
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
                                                            Beginner
                                                        </a>
                                                    </td>
                                                    <td>Hundai Careta, Toyota Fortuner, Audi Q7...</td>
                                                    <td>6</td>
                                                    <td>$14</td>
                                                    
                                                    <td>
                                                        <div class="status-toggle">
                                                            <input id="service_4" class="check" type="checkbox" checked="">
                                                            <label for="service_4" class="checktoggle">checkbox</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="{{route('seller.edit_package')}}" class="btn btn-sm bg-success-light">
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
