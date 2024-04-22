@extends('admin.layouts.app1')
@section('title', 'Edit Bundle Service')
@section('content')

<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
<div class="content container-fluid add-product-page">
	<div class="page-header">
		<div class="row">
			<div class="col">
				<h3 class="page-title">Add Bundle</h3>
			</div>
			<div class="col-auto text-right">
				<a class="btn btn-primary addorder" href="{{URL::previous()}}">
					Back
				</a>
			</div>
		</div>

	</div>
	<form method="POST" id="add_service" name="add_service" action="{{route('admin.updatebundleservice', $bundle->id)}}">
		@csrf
		<div class="row">
			<div class="col-md-12">
				<div class="card mb-4">
					<div class="card-body">
						<div class="row">
							<div class="col-xl-12">
								<div class="form-group">
									<label class="col-form-label">Bundle Name</label>
									<input type="text" id="" class="form-control" name="name" value="{{$bundle->name}}">
								</div>
							</div>
							<div class="col-12 services-selector">
								<div class="row service-row align-items-end">
									<div class="col-lg-5">
										<div class="form-group">
											<label class="col-form-label">Select Service</label>
											<select name="services[]" class="my-select form-control service-dropdown">
												<option data-display="Select a category" value="">Select a Service</option>
												@foreach($services as $service)
												<option value="{{$service->id}}">{{$service->service_name}}</option>
												@endforeach
											</select>
										</div>
									</div>
									<div class="col-lg-5">
										<div class="form-group">
											<label class="col-form-label">Select Sub Service</label>
											<select name="sub_services[]" class="my-select form-control sub-service-dropdown">
											</select>
										</div>
									</div>
									<div class="col-lg-2">
										<div class="form-group d-flex align-items-end" style="gap:5px;">
											<!-- <button type="button" class="btn btn-danger remove-row">-</button> -->
											<button type="button" class="btn btn-success add-row">+</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-12">
								<div class="form-group">
									<label class="col-form-label">Description</label>
									<textarea class="w-100" id="summernote" name="service_details">{{$bundle->description}}</textarea>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label class="col-form-label">Price</label>
									<input type="text" id="service_charges" class="form-control" name="service_charges" value="{{$bundle->price}}">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group row">
									<label class="col-lg-12 col-form-label">Location</label>
									<div class="col-lg-12">
										<input type="text" id="service_location" class="form-control" name="service_location" value="{{$bundle->bundle_image}}">
									</div>
								</div>
							</div>
							<div class="col-xl-6">
								<div class="form-group">
									<label class="col-form-label">Status </label>
									<select name="service_status" id="service_status" class="my-select form-control">
									@if($bundle->status)
										<option value="1" selected>Available</option>
										<option value="0">Unavailble</option>
										@else 
										<option value="1" >Available</option>
										<option value="0" selected>Unavailble</option>
										@endif
									</select>
								</div>
							</div>
							<!-- Hidden input field to hold JSON data -->
							<input type="hidden" id="json_data_input" name="Services_json">
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

@section('scripts')
<script>
	$(document).ready(function() {
		// Function to collect data from service selector rows
		function collectDataFromRows() {
			var jsonData = sample = [];
			$('.service-row').each(function(index) {
				
				var serviceCategory = $(this).find('.service-dropdown').val();
				console.log(serviceCategory);
				var subServiceCategory = $(this).find('.sub-service-dropdown').val();
				if (serviceCategory !== null || subServiceCategory !== null) {
					
					jsonData.push(['services' , serviceCategory , 'Subservices', subServiceCategory]); 
					// jsonData.push(['Subservices', subServiceCategory]); 
					console.log(jsonData);
				}
			});
			return jsonData; 
		}

		// AJAX request when service dropdown changes
		$(document).on('change', '.service-dropdown', function() {
			var $subServiceDropdown = $(this).closest('.service-row').find('.sub-service-dropdown');
			if ($subServiceDropdown.children().length === 0) {
				var idService = $(this).val();
				$subServiceDropdown.html('');
				$.ajax({
					url: "{{ route('admin.fetchsubservices') }}",
					type: "POST",
					data: {
						Service_id: idService,
						_token: '{{ csrf_token() }}'
					},
					dataType: 'json',
					success: function(res) {
						$subServiceDropdown.append('<option value="">-- Select Sub Service --</option>');
						$.each(res.services, function(key, value) {
							$subServiceDropdown.append('<option value="' + value.id + '">' + value.name + '</option>');
						});
					}
				});
			}
		});

		// Update JSON data when service selector rows change
		$(document).on('change', '.service-dropdown, .sub-service-dropdown', function() {
			var jsonData = collectDataFromRows();
			$('#json_data_input').val(JSON.stringify(jsonData));
		});

		// Initial JSON data on page load
		var initialData = collectDataFromRows();
		$('#json_data_input').val(JSON.stringify(initialData));

		// Submit form
		$('#add_service').submit(function() {
			var jsonData = collectDataFromRows();
			$('#json_data_input').val(JSON.stringify(jsonData));
		});

		// Add row
		$(document).on('click', '.add-row', function() {
			var newRowHtml = `
            <div class="row service-row align-items-end">
                <div class="col-lg-5">
                    <div class="form-group">
                        <label class="col-form-label">Select Service</label>
                        <select name="services[]" class="my-select form-control service-dropdown">
                            <option data-display="Select a category" value="">Select a Service</option>
                            @foreach($services as $service)
                                <option value="{{$service->id}}">{{$service->service_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="form-group">
                        <label class="col-form-label">Select Sub Service</label>
                        <select name="sub_services[]" class="my-select form-control sub-service-dropdown">
                        </select>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="form-group d-flex align-items-end" style="gap:5px;">
                        <button type="button" class="btn btn-danger remove-row">-</button>
                        <button type="button" class="btn btn-success add-row">+</button>
                    </div>
                </div>
            </div>
        `;
			$('.services-selector').append(newRowHtml);
		});

		// Remove row
		$(document).on('click', '.remove-row', function() {
			$(this).closest('.service-row').remove(); // Remove the closest row
			// Trigger change event to update JSON data
			$('.service-dropdown').trigger('change');
		});
	});
</script>
@endsection