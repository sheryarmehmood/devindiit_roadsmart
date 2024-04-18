@extends('admin.layouts.app1')
@section('title', 'Add Service')
@section('content')

<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">

<div class="content container-fluid add-product-page">
	<div class="page-header">
		<div class="row">
			<div class="col">
				<h3 class="page-title">Edit Service</h3>
			</div>
			<div class="col-auto text-right">
				<a class="btn btn-secondary" href="{{route('admin.product')}}">
					Back
				</a>
			</div>
		</div>
	</div>
	<form method="POST" id="add_service" name="add_service" action="{{ route('admin.updateSubService', $service->id) }}">
	@csrf
		<div class="row">
			<div class="col-md-12">
				<div class="card mb-4">
					<div class="card-body">
						<div class="row">
							<div class="col-xl-12">
								<div class="form-group">
									<label class="col-form-label">Service Name</label>
									<input type="text" id="" class="form-control" name="service_name" value="{{$service->service_name}}">
								</div>
							</div>
							<div class="col-lg-12 ">
								<div class="form-group">
									<label class="col-form-label">Service Category</label>
									<select name="service_category" id="service_category" class="my-select form-control">
										<option data-display="Select a category">{{$service->service_category}}</option>
										@foreach($categories as $category)
										<option value="{{$category->id}}">{{$category->category_name}}</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="col-lg-12 ">
								<div class="form-group">
									<label class="col-form-label">Service Seller</label>
									<select name="sellers" id="sellers" class="my-select form-control">

										<option data-display="Select a provider"> @foreach($sellers as $seller) @if($seller->id == $service->sellers) {{$seller->first_name}} {{$seller->last_name}} @endif @endforeach</option>
										@foreach($sellers as $seller)
										<option value="{{$seller->id}}">{{$seller->first_name}} {{$seller->last_name}}</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="col-xl-12">
								<div class="form-group">
									<label class="col-form-label">Description</label>
									<textarea class="w-100" id="summernote" name="service_details">{{$service->service_details}}</textarea>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label class="col-form-label">Price</label>
									<input type="text" id="service_charges" class="form-control" name="service_charges" value="{{$service->service_charges}}">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group row">
									<label class="col-lg-12 col-form-label">Location</label>
									<div class="col-lg-12">
										<input type="text" id="service_location" class="form-control" name="service_location" value="{{$service->service_location}}">
									</div>
								</div>
							</div>
							<div class="col-xl-6">
								<div class="form-group">
									<label class="col-form-label">Status </label>
									<select name="service_status" id="service_status" class="my-select form-control">
										@if($service->service_status)
										<option value="1" selected>Available</option>
										<option value="0">Unavailble</option>
										@else 
										<option value="1" >Available</option>
										<option value="0" selected>Unavailble</option>
										@endif
									</select>
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
</div>
@endsection