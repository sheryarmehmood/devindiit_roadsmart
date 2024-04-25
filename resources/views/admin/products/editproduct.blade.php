@extends('admin.layouts.app1')
@section('title', 'Edit Products')
@section('content')

<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
<div class="content container-fluid add-product-page">
	<div class="page-header">
		<div class="row">
			<div class="col">
				<h3 class="page-title">Add Product</h3>
			</div>
			<div class="col-auto text-right">
				<a class="btn btn-secondary" href="{{route('admin.product')}}">
					Back
				</a>
			</div>
		</div>

	</div>
	<form method="POST" id="product_form" name="product_form" enctype="multipart/form-data" action="{{route('admin.updateProduct' , $product->id)}}">
		@csrf
		<div class="row">
			<div class="col-md-12">
				<div class="card mb-4">
					<div class="card-body">
						<div class="row">
							<div class="col-12">
								<div class="form-group">
									<label class="col-form-label">Product Name</label>
									<input type="text" id="" class="form-control" name="product_name" value="{{$product->product_name}}">
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<div class="d-flex justify-content-between align-items-center mb-1">
										<label class="col-form-label">Product Category </label>
										<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#add_category"><i class="fas fa-trash-alt"></i>Add Category</button>
									</div>
									<select name="product_category_id" id="product_category" class="my-select form-control">
										<option data-display="Select a category">Select a category</option>
										@foreach($prodcut_categories as $product_Category)
										@if($product->category->id == $product_Category->id)
										<option value="{{$product_Category->id}}" selected>{{$product_Category->product_category_name}}</option>
										@else
										<option value="{{$product_Category->id}}">{{$product_Category->product_category_name}}</option>
										@endif
										@endforeach
									</select>
									<div id="response">

									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-form-label">Product Brand</label>
									<select name="brand_name" id="brand_name" class="my-select form-control">
										<option data-display="Select a Brand">Select a Brand</option>
										@foreach($brands as $brand)
										@if($product->BrandName->id == $brand->id)
										<option value="{{$brand->id}}" selected>{{$brand->name}}</option>
										@else
										<option value="{{$brand->id}}">{{$brand->name}}</option>
										@endif
										@endforeach
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group row">
									<label class="col-lg-12 col-form-label">Compatible vehicle</label>
									<div class="col-lg-12">
										<select name="compatible_vehicle" id="status" class="my-select form-control">
											<option data-display="Select a category">Select a category</option>
											@foreach($vehicles as $vehicle)
											@if($product->CompatibleVehicle->id == $vehicle->id)
											<option value="{{$vehicle->id}}" selected>{{$vehicle->name}}</option>
											@else
											<option value="{{$vehicle->id}}">{{$vehicle->name}}</option>
											@endif
											@endforeach
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group row">
									<label class="col-lg-12 col-form-label">Description</label>
									<div class="col-lg-12">
										<textarea class="form-control" name="description" id="description" cols="30" rows="5">{{$product->description}}</textarea>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group row">
									<label class="col-lg-12 col-form-label">Purchase Price</label>
									<div class="col-lg-12">
										<input type="text" id="purchase_price" class="form-control" name="purchase_price" value="{{$product->purchase_price}}">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group row">
									<label class="col-lg-12 col-form-label">Sale Price</label>
									<div class="col-lg-12">
										<input type="text" id="sale_price" class="form-control" name="sale_price" value="{{$product->sale_price}}">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group row">
									<label class="col-lg-12 col-form-label">Discounted Price</label>
									<div class="col-lg-12">
										<input type="text" id="discount" class="form-control" name="discount" value="{{$product->discount}}">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group row">
									<label class="col-lg-12 col-form-label">SKU</label>
									<div class="col-lg-12">
										<input type="text" id="SKU" class="form-control" name="SKU" value="{{$product->SKU}}">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group row">
									<label class="col-lg-12 col-form-label">Quantity Available</label>
									<div class="col-lg-12">
										<input type="text" id="quantity" class="form-control" name="quantity" value="{{$product->quantity}}">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group row">
									<label class="col-lg-12 col-form-label">Availability Location</label>
									<div class="col-lg-12">
										<input type="text" id="location" class="form-control" name="location" value="{{$product->location}}">
									</div>
								</div>
							</div>
							<div class="col-xl-6">
								<div class="form-group">
									<label class="col-form-label">Stock Status</label>
									<select name="stock_status" id="stock_status" class="my-select form-control">
										@if($product->stock_status == 'InStock')
										<option value="InStock" selected>In Stock</option>
										<option value="OutOfStock">Out Of Stock</option>
										@else
										<option value="InStock">In Stock</option>
										<option value="OutOfStock" selected>Out Of Stock</option>
										@endif
									</select>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card col-12">
					<div class="card-body">
						<h4 class="cardTitle">Media </h4>
						<div class="row">
							<div class="col-lg-12">
								<div class="form-group mb-0">
									<label class="fileupload" for="uploadimg" style="
									@if ($product->image)
									display:none;
									@else
									display:block;
									@endif
									">
										<i class="fa fa-upload"></i>
										<h3>Image Upload</h3>
									</label>
									<input id="uploadimg" name="image" style="display:none" type="file" accept=".png, .jpg, .jpeg">
									<div class="formimg" style="
									@if ($product->image)
									display:block;
									@else
									display:none;
									@endif
									">
										@if ($product->image)
										<img id="imagePreview" src="{{ asset('images/' . $product->image) }}">
										<i class="fa fa-trash deleteimg"></i>
										@else
										<img id="imagePreview" src="{{ asset('placeholder_image.jpg') }}">
										<i class="fa fa-trash deleteimg"></i>
										@endif
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
				<div class="text-right mt-4 mb-4">
					<button type="submit" class="btn btn-primary product-save-btn">Save</button>
				</div>
			</div>
		</div>
	</form>

	<div class="modal fade" id="add_category" role="dialog" tabindex="-1" aria-labelledby="add_category" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<form id="category_form">
					<div class="row">
						<div class="col-md-12">
							<div class="card m-0">
								<div class="card-body">
									@include('admin.products.updateCategory')
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection
@section('scripts')

<script>
	$(document).on('click', '#submit_category', function() {
		var $categoryDropdown = $('#product_category');
		var dataNew = $('#new_category').val();
		$.ajax({
			url: "{{ route('admin.addFetchCategory') }}",
			type: "POST",
			data: {
				cat: dataNew,
				_token: '{{ csrf_token() }}'
			},
			dataType: 'json',
			success: function(response) {
				console.log('Response:', response);
				$categoryDropdown.empty();
				$categoryDropdown.append('<option value="">Select a category</option>');

				if (response.categories && response.categories.length > 0) {
					$.each(response.categories, function(key, value) {
						$categoryDropdown.append('<option value="' + value.id + '">' + value.product_category_name + '</option>');
					});
				}

				if (response.message) {
					if (response.message === 'Category added successfully') {
						$('#response').html('<div class="alert alert-success alert-dismissable">' +
							'<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>' +
							'New category added successfully.' +
							'</div>');
					} else if (response.message === 'Category already exists') {
						$('#response').html('<div class="alert alert-danger alert-dismissable">' +
							'<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>' +
							'Category already exists.' +
							'</div>');
					}
				}

				$('#hiddenMessage').val(response.message);
				$('#new_category').val('');
			},
			error: function(xhr, status, error) {
				console.error(xhr.responseText);
			}
		});
	});

	$(function() {
		$('#uploadimg').on('change', function() {
			var file = $(this).get(0).files;
			var reader = new FileReader();
			reader.readAsDataURL(file[0]);
			reader.addEventListener("load", function(e) {
				var image = e.target.result;
				$(".formimg").css("display", "block");
				$(".fileupload").css("display", "none");
				// $('.formimg').style.display = "block";
				$("#imagePreview").attr('src', image);
			});
		});

		$('.deleteimg').on('click', function() {
			$("#imagePreview").attr('src', '');
			$(".formimg").css("display", "none");
			$(".fileupload").css("display", "block");
		});
	});
</script>

@endsection