@extends('serviceprovider.layouts.app')
@section('title', 'Inventory')
@section('content')
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Inventory</h3>
                </div>
                <div class="col-auto text-right">
                    <a class="btn btn-primary" href="{{route('seller.add_product')}}">
                        Add Product
                    </a>
                </div>
            </div>
        </div>
		<div class="row">
			<div class="col-md-12">
				<div class="card ordertabstableitems">
					<div class="card-body px-4 pt-2">
						<div class="table-responsive">
							<table class="table table-hover table-center mb-0 datatable">
								<thead>
									<tr>
										<th>#</th>
										<th>Product Name</th>
										<th>Description</th>
										<th>Status</th>
										<th>Price</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>
											<h2 class="table-avatar">
											<a href="#" class="avatar avatar-sm mr-2">
												<img class="avatar-img rounded-circle" alt="" src="{{ asset('assets/serviceprovider/img/engine.jpg') }}">
											</a>
											<a href="#">Engine</a>
											</h2>
										</td>
										<td class="text-wrap" width="30%">Lorem ipsum dolor sit amet, consectetur adipiscing elit..</td>
										<td><label class="badge badge-success">In Stock</label></td>
										<td>$62</td>
										<td>
											<a href="{{route('seller.view_product')}}" class="btn btn-sm bg-info-light">
												<i class="far fa-eye mr-1"></i> View
											</a>
											<a href="{{route('seller.edit_product')}}" class="btn btn-sm bg-success-light">
												<i class="fas fa-edit"></i> Edit
											</a>
											<a href="#" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#delete-popup">
												<i class="fas fa-trash-alt"></i> Delete
											</a></td>
										</tr>
										<tr>
										<td>1</td>
										<td>
											<h2 class="table-avatar">
											<a href="#" class="avatar avatar-sm mr-2">
												<img class="avatar-img rounded-circle" alt="" src="{{ asset('assets/serviceprovider/img/engine.jpg') }}">
											</a>
											<a href="#">Wheels</a>
											</h2>
										</td>
										<td class="text-wrap" width="30%">Lorem ipsum dolor sit amet, consectetur adipiscing elit..</td>
										<td><label class="badge badge-danger">Out Of Stock</label></td>
										<td>$62</td>
										<td>
											<a href="{{route('seller.view_product')}}" class="btn btn-sm bg-info-light">
												<i class="far fa-eye mr-1"></i> View
											</a>
											<a href="{{route('seller.edit_product')}}" class="btn btn-sm bg-success-light">
												<i class="fas fa-edit"></i> Edit
											</a>
											<a href="#" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#delete-popup">
												<i class="fas fa-trash-alt"></i> Delete
											</a></td>
										</tr>
										<tr>
										<td>1</td>
										<td>
											<h2 class="table-avatar">
											<a href="#" class="avatar avatar-sm mr-2">
												<img class="avatar-img rounded-circle" alt="" src="{{ asset('assets/serviceprovider/img/engine.jpg') }}">
											</a>
											<a href="#">Tyres</a>
											</h2>
										</td>
										<td class="text-wrap" width="30%">Lorem ipsum dolor sit amet, consectetur adipiscing elit..</td>
										<td><label class="badge badge-success">In Stock</label></td>
										<td>$62</td>
										<td>
											<a href="{{route('seller.view_product')}}" class="btn btn-sm bg-info-light">
												<i class="far fa-eye mr-1"></i> View
											</a>
											<a href="{{route('seller.edit_product')}}" class="btn btn-sm bg-success-light">
												<i class="fas fa-edit"></i> Edit
											</a>
											<a href="#" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#delete-popup">
												<i class="fas fa-trash-alt"></i> Delete
											</a></td>
										</tr>
										<tr>
										<td>1</td>
										<td>
											<h2 class="table-avatar">
											<a href="#" class="avatar avatar-sm mr-2">
												<img class="avatar-img rounded-circle" alt="" src="{{ asset('assets/serviceprovider/img/engine.jpg') }}">
											</a>
											<a href="#">Gear</a>
											</h2>
										</td>
										<td class="text-wrap" width="30%">Lorem ipsum dolor sit amet, consectetur adipiscing elit..</td>
										<td><label class="badge badge-danger">Out Of Stock</label></td>
										<td>$62</td>
										<td>
											<a href="{{route('seller.view_product')}}" class="btn btn-sm bg-info-light">
												<i class="far fa-eye mr-1"></i> View
											</a>
											<a href="{{route('seller.edit_product')}}" class="btn btn-sm bg-success-light">
												<i class="fas fa-edit"></i> Edit
											</a>
											<a href="#" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#delete-popup">
												<i class="fas fa-trash-alt"></i> Delete
											</a></td>
										</tr>
										<tr>
										<td>1</td>
										<td>
											<h2 class="table-avatar">
											<a href="#" class="avatar avatar-sm mr-2">
												<img class="avatar-img rounded-circle" alt="" src="{{ asset('assets/serviceprovider/img/engine.jpg') }}">
											</a>
											<a href="#">Alloys</a>
											</h2>
										</td>
										<td class="text-wrap" width="30%">Lorem ipsum dolor sit amet, consectetur adipiscing elit..</td>
										<td><label class="badge badge-success">In Stock</label></td>
										<td>$62</td>
										<td>
											<a href="{{route('seller.view_product')}}" class="btn btn-sm bg-info-light">
												<i class="far fa-eye mr-1"></i> View
											</a>
											<a href="{{route('seller.edit_product')}}" class="btn btn-sm bg-success-light">
												<i class="fas fa-edit"></i> Edit
											</a>
											<a href="#" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#delete-popup">
												<i class="fas fa-trash-alt"></i> Delete
											</a></td>
										</tr>

								</tbody>
							</table>
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
   </div>
   @endsection
   @section('scripts')
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>	
  @endsection