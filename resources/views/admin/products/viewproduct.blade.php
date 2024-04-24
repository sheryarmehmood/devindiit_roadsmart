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
                        <h4 class="card-title">{{$product->product_name}}</h4>
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
                                    <td>{{$product->category->product_category_name ?? ''}}</td>
                                </tr>
                                <tr>
                                    <th>Product Name</th>
                                    <td>{{$product->product_name}}</td>
                                </tr>
                                <tr>
                                    <th>Inventory </th>
                                    <td>{{$product->quantity}} in stock</td>
                                </tr>
                                <tr>
                                    <th>Brand</th>
                                    <td>{{$product->BrandName->name ?? ''}}</td>
                                </tr>
                                <tr>
                                    <th>Description </th>
                                    <td>{{$product->description}}</td>
                                </tr>
                                <tr>
                                    <th>Purchase price </th>
                                    <td>{{$product->purchase_price}}</td>
                                </tr>
                                <tr>
                                    <th>Sale price </th>
                                    <td>{{$product->sale_price}}</td>
                                </tr>
                                <tr>
                                    <th>SKU</th>
                                    <td>{{$product->sale_price}}</td>
                                </tr>
                                <tr>
                                    <th>Location </th>
                                    <td>{{$product->location}}</td>
                                </tr>
                                <tr>
                                    <th>Compatible vehicle </th>
                                    <td>{{$product->CompatibleVehicle->name ?? ''}}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td class="text-nowrap"><label class="badge 
                                        @if($product->stock_status == 'InStock')
                                        badge-success
                                         @else 
                                         badge-danger
                                         @endif 
                                          ">{{$product->stock_status}}</label></td>
                                </tr>
                                <tr>
                                    <th>Image</th>
                                    <td><img class="viewproduct_img" src="{{ asset('images/' . $product->image) }}"></td>
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