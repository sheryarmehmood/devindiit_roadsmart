@extends('admin.layouts.app1')
@section('title', 'Products')

@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

<div class="content container-fluid customer-list-page">
    <div class="page-header">
        <div class="row">
            <div class="col">
                <h3 class="page-title">
                    <div class="d-flex titleSelect align-items-center">
                        Products
                    </div>
                </h3>
            </div>
            <div class="col-auto text-right all-product-right">
                <div class="actionMore d-flex align-items-center">
                    <a class="btn btn-primary addorder" href="{{route('admin.addproduct')}}">
                        Add product
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div id="response">
        @if(Session::has('message'))
        <div class="alert alert-success alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{ Session::get('message') }}
        </div>
        @endif
        @if(Session::has('error'))
        <div class="alert alert-danger alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{ Session::get('error') }}
        </div>
        @endif
        @if($errors->has('error_card'))
        <div class="alert alert-danger alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{ $errors->first('error_card') }}
        </div>
        @endif
    </div>
    <div class="card card-table flex-fill ordertabstableitems">
        <div class="card-header">
            <h4 class="card-title">products</h4>
        </div>
        <div class="card-body px-4 pt-2">
            <table class="table table-center datatable" id="productTableList">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>product</th>
                        <th>Category</th>
                        <th>Brand Name</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($Products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>
                            <img class="viewproduct_img_listing" src="
                            @if($product->image != '')
                            {{ asset('images/' . $product->image) }}
                            @else 
                            {{ asset('images/product-placeholder.jpg') }}
                            @endif
                            ">
                            {{$product->product_name}}
                        </td>
                        <td>{{$product->category->product_category_name ?? ''}}</td>
                        <td>{{$product->BrandName->name ?? ''}}</td>
                        <td>{{$product->sale_price}}</td>
                        <td><label class="badge w-100 d-flex align-items-center justify-content-center py-2
                                        @if($product->stock_status == 'InStock')
                                        badge-success
                                         @else 
                                         badge-danger
                                         @endif 
                                          ">{{$product->stock_status}}</label></td>
                        <td>
                            <a href="{{ route('admin.viewproduct', $product->id) }}" class="btn btn-sm bg-info-light"><i class="far fa-eye mr-1"></i> View</a>
                            <a href="{{ route('admin.editproduct', $product->id) }}" class="btn btn-sm bg-success-light"><i class="fas fa-edit"></i> Edit</a>
                            <button class="btn btn-sm btn-danger delete_product" data-toggle="modal" data-target="#delete-popup" data-product-id="{{$product->id}}"><i class="fas fa-trash-alt"></i> Delete</button>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
<div class="modal fade" id="delete-popup" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="delete-cont">
                    <p>Are you sure you want to delete this item?</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" id="confirm-delete">Delete</button>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    $(document).ready(function() {
        var table = $('#productTableList').DataTable({
            fixedHeader: true,
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('.delete_product').click(function() {
            var productId = $(this).data('product-id');
            $('#delete-popup').modal('show');
            $('#confirm-delete').data('product-id', productId);
        });

        $('#confirm-delete').click(function() {
            var productId = $(this).data('product-id');
            $('#delete-popup').modal('hide');
            window.location.href = "{{ url('admin/delete_product') }}/" + productId;
        });
    });
</script>
@endsection