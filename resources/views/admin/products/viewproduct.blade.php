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
                    <div class="card  flex-fill mt-4">
                        <div class="search-products-form">
                            <h5>To begin adding products</h5>
                            <h1>Find your products in <br> RoadSmart’s catalogue</h1>
                            <form>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="" placeholder="Product name, UPC, EAN, ISBN or ASIN">
                                        <a href="javascript:void();" class="search-product-list-btn"> <i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                                <p class="additional-links">
                                    <a class="add-new-product" href="http://127.0.0.1:8000/seller/not-addedon-product"> Add a product not sold on Roadsmart</a>
                                    <!---a class="add-new-product" href="http://127.0.0.1:8000/seller/added-on-product"> Add a product sold on Roadsmart</a--->
                                </p>
                            </form>

                        </div>

                        <div class="serched-product-lists" style="display:none;width:100%;">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-center">
                                        <tbody>
                                            <tr>
                                                <td class="productTitle">Break Pad and Rotor </td>
                                                <td>Product Code: XX123</td>
                                                <td class="productOffer">Offers : <a href="javascript:void(0);" class="sidebar-toggler"> 23 used and new </a> </td>
                                                <td>
                                                    <div class="search-product-actions">
                                                        <div class="product-condition">
                                                            <select name="status" class="form-control">
                                                                <option value="" disabled="" selected="">Select a condition</option>
                                                                <option value="Used">Used</option>
                                                                <option value="New">New</option>
                                                                <option value="Pre-owned">Pre-owned</option>
                                                            </select>
                                                        </div>
                                                        <a href="http://127.0.0.1:8000/seller/added-on-product" class="btn btn-primary">Sell this product</a>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td class="productTitle">Break Pad and Rotor </td>
                                                <td>Product Code: XX123</td>
                                                <td class="productOffer">Offers : <a href="javascript:void(0);" class="sidebar-toggler"> 23 used and new </a> </td>
                                                <td>
                                                    <div class="search-product-actions">
                                                        <div class="product-condition">
                                                            <select name="status" class="form-control">
                                                                <option value="" disabled="" selected="">Select a condition</option>
                                                                <option value="Used">Used</option>
                                                                <option value="New">New</option>
                                                                <option value="Pre-owned">Pre-owned</option>
                                                            </select>
                                                        </div>
                                                        <a href="http://127.0.0.1:8000/seller/added-on-product" class="btn btn-primary">Sell this product</a>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td class="productTitle">Break Pad and Rotor</td>
                                                <td>Product Code: XX123</td>
                                                <td class="productOffer">Offers : <a href="javascript:void(0);" class="sidebar-toggler"> 23 used and new </a> </td>
                                                <td>
                                                    <div class="search-product-actions">
                                                        <div class="product-condition">
                                                            <select name="status" class="form-control">
                                                                <option value="" disabled="" selected="">Select a condition</option>
                                                                <option value="Used">Used</option>
                                                                <option value="New">New</option>
                                                                <option value="Pre-owned">Pre-owned</option>
                                                            </select>
                                                        </div>
                                                        <a href="http://127.0.0.1:8000/seller/added-on-product" class="btn btn-primary">Sell this product</a>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td class="productTitle">Break Pad and Rotor </td>
                                                <td>Product Code: XX123</td>
                                                <td class="productOffer">Offers : <a href="javascript:void(0);" class="sidebar-toggler"> 23 used and new </a> </td>
                                                <td>
                                                    <div class="search-product-actions">
                                                        <div class="product-condition">
                                                            <select name="status" class="form-control">
                                                                <option value="" disabled="" selected="">Select a condition</option>
                                                                <option value="Used">Used</option>
                                                                <option value="New">New</option>
                                                                <option value="Pre-owned">Pre-owned</option>
                                                            </select>
                                                        </div>
                                                        <a href="http://127.0.0.1:8000/seller/added-on-product" class="btn btn-primary">Sell this product</a>
                                                    </div>
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
@endsection