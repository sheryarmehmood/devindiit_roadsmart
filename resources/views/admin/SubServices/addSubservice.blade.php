@extends('admin.layouts.app1')
@section('title', 'Add Service')
@section('content')

<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
<div class="content container-fluid add-product-page">
	<div class="page-header">
		<div class="row">
			<div class="col">
				<h3 class="page-title">Add Sub Service</h3>
			</div>
			<div class="col-auto text-right">
				<a class="btn btn-primary addorder" href="{{URL::previous()}}">
					Back
				</a>
			</div>
		</div>

	</div>
	<form method="POST" id="add_service" name="add_service" action="{{route('admin.saveSubService')}}">
	@csrf
		<div class="row">
			<div class="col-md-12">
				<div class="card mb-4">
					<div class="card-body">
						<div class="row">
							<div class="col-xl-12">
								<div class="form-group">
									<label class="col-form-label">Service Name</label>
									<input type="text" id="" class="form-control" name="name" value="">
								</div>
							</div>
							<div class="col-lg-12 ">
								<div class="form-group">
									<label class="col-form-label">Parent Service</label>
									<select name="service_id" id="service_category" class="my-select form-control">

										<option data-display="Select a category">Select a Service</option>
										@foreach($services as $service)
										<option value="{{$service->id}}">{{$service->service_name}} , Seller -- {{$service->sellers}}</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="col-xl-12">
								<div class="form-group">
									<label class="col-form-label">Description</label>
									<textarea class="w-100" id="summernote" name="service_details"></textarea>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label class="col-form-label">Price</label>
									<input type="text" id="service_charges" class="form-control" name="price" value="">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group row">
									<label class="col-lg-12 col-form-label">Brand Name</label>
									<div class="col-lg-12">
										<input type="text" id="brand_name" class="form-control" name="brand_name" value="">
									</div>
								</div>
							</div>
							<div class="col-xl-6">
								<div class="form-group">
									<label class="col-form-label">Status </label>
									<select name="status" id="service_status" class="my-select form-control">
										<option value="1">Available</option>
										<option value="0">Unavailble</option>
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