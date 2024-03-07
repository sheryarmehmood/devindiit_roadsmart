@extends('admin.layouts.app1')
@section('title', 'View Product')
@section('content')
    <div class="content container-fluid viewproduct_page">
        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title"> Product Detail </h3>
                </div>
                 <div class="col text-right">
                   <a href="{{route('admin.product')}}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card addpad">
                    <div class="card-body">
                        <div class="card-header">
                            <h4 class="card-title">Product Information</h4>
                        </div>
                        <div class="viewBox">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th>Id</th>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <th>Category</th>
                                        <td>Road Compliance</td>
                                    </tr>
                                    <tr>
                                        <th>Product Name</th>
                                        <td>Mud flaps, front set</td>
                                    </tr>
                                    <tr>
                                        <th>Inventory </th>
                                        <td>10 in stock</td>
                                    </tr>
                                    <tr>
                                        <th>Brand</th>
                                        <td >Marvin Daniels</td>
                                    </tr>
                                    <tr>
                                        <th>Make</th>
                                        <td>BMW</td>
                                    </tr>
                                    <tr>
                                        <th>Description </th>
                                        <td>Ullam voluptates iusUllam voluptates iusUllam voluptates iusUllam 
                                        voluptates iusUllam voluptates iusUllam voluptates iusUllam voluptates iusUllam voluptates iusUllam voluptates ius</td>
                                    </tr>
                                    <tr>
                                        <th>Purchase price </th>
                                        <td>866.00</td>
                                    </tr>
                                    <tr>
                                        <th>Sale price </th>
                                        <td>100.00</td>
                                    </tr>
                                    <tr>
                                        <th>SKU</th>
                                        <td>Nulla earum odio vol</td>
                                    </tr>
                                    <tr>
                                        <th>Vendor</th>
                                        <td >Britanney Jacobson</td>
                                    </tr>
                                    <tr>
                                        <th>Seller</th>
                                        <td >John Smith</td>
                                    </tr>
                                    <tr>
                                        <th>Tyre Size </th>
                                        <td>Qui voluptate incidu</td>
                                    </tr>
                                    <tr>
                                        <th>Quantity </th>
                                        <td>10</td>
                                    </tr>
                                    <tr>
                                        <th>Location  </th>
                                        <td>Voluptas vel nihil d</td>
                                    </tr>
                                    <tr>
                                        <th>Compatible vehicle </th>
                                        <td>2,4</td>
                                    </tr>
                                    <tr>
                                        <th>Interior Color </th>
                                        <td> Black </td>
                                    </tr>
                                    <tr>
                                        <th>Exterior Color </th>
                                        <td>Silver </td>
                                    </tr>
                                    <tr>
                                        <th>Engine </th>
                                        <td> Electrical Engines</td>
                                    </tr>
                                    <tr>
                                        <th>Fuel Type </th>
                                        <td>Petrol </td>
                                    </tr>
                                    <tr>
                                        <th>Condition </th>
                                        <td> Good </td>
                                    </tr>
                                    <tr>
                                        <th>Transmission </th>
                                        <td> Automatic </td>
                                    </tr>
                                    
                                    <tr>
                                        <th>Mileage </th>
                                        <td> 40km/l </td>
                                    </tr>
                                    <tr>
                                        <th>Brand ID</th>
                                        <td> BMW </td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td class="text-nowrap"><label class="badge badge-success">In Stock</label></td>
                                    </tr>
                                    <tr>
                                        <th>Image</th>
                                        <td> <img class="viewproduct_img" src="{{ asset('assets/serviceprovider/img/car1.png') }}"></td>
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
