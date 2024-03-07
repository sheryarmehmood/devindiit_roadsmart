@extends('serviceprovider.layouts.app2')
@section('title', 'Users and Permissions')
@section('content')
	<div class="content container-fluid">
		<div class="page-header">
			<div class="row">
				<div class="col">
					<h3 class="page-title">Edit Users Permissions</h3>
				</div>
				<div class="col-auto text-right">			
					<a class="btn btn-secondary" href="users-permissions.php">Back</a>
				</div>				
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="profile_user">
					<div class="card">
					<div class="card-body text-center">
							<div class="user-image">
								<?php
								if($getDetails->avatar != Null){
									$image =  asset('/assets/serviceprovider/img/seller/' .$getDetails->avatar); 
								}else{
									$image =  asset('/assets/serviceprovider/img/seller/default.jpg');
								}
                               ?>
							<img class="rounded-circle img-thumbnail" src="{{$image}}" id="imagePreview"/>
                        <label  for="avatar">Upload Picture</label>
                        <input  id="avatar" name="avatar" style="display:none" type="file" accept=".png, .jpg, .jpeg">
							</div>
							<span class="form-text text-muted">Allowed file types: png, jpg,jpeg.</span>
						</div>
					</div>
				</div>
			</div>	  
			<div class="col-md-8">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Basic Info</h4>
						<form>
							<div class="row">
								<div class="col-xl-6">
									<div class="form-group row">
										<label class="col-lg-12 col-form-label">First Name</label>
										<div class="col-lg-12">
											<input type="text" class="form-control" value="{{$getDetails->first_name}}" id="first_name" name="first_name">
										</div>
									</div>
								</div>
								<div class="col-xl-6">
									<div class="form-group row">
										<label class="col-lg-12 col-form-label">Last Name</label>
										<div class="col-lg-12">
											<input type="text" class="form-control" value="{{$getDetails->last_name}}" id="last_name" name="last_name">
										</div>
									</div>
								</div>
								<div class="col-xl-6">
									<div class="form-group row">
										<label class="col-lg-12 col-form-label">Email Address</label>
										<div class="col-lg-12">
											<input type="email" class="form-control" value="{{$getDetails->email}}" id="email" name="email">
										</div>
									</div>
								</div>
								<div class="col-xl-6">
									<div class="form-group row">
										<label class="col-lg-12 col-form-label">Phone Number</label>
										<div class="col-lg-12">
											<input type="tel" class="form-control" value="{{$getDetails->phone_number}}" id="phone_number" name="phone_number">
										</div>
									</div>
								</div>
								<div class="col-xl-6">
									<div class="form-group row">
										<label class="col-lg-12 col-form-label">Address</label>
										<div class="col-lg-12">
											<input type="text" class="form-control" value="{{$getDetails->address1}}" name="address1" id="address1">
										</div>
									</div>
								</div>
								<div class="col-xl-6">
									<div class="form-group row">
										<label class="col-lg-12 col-form-label">Country</label>
										<div class="col-lg-12">
											<select name="Country" class="form-control">
												<option value="USA">USA</option>
												<option value="Canada">Canada</option>
												<option value="Australia">Australia</option>
												<option value="Australia">India</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-xl-6">
									<div class="form-group row">
										<label class="col-lg-12 col-form-label">State</label>
										<div class="col-lg-12">
											<input type="text" class="form-control" value="Florida">
										</div>
									</div>
								</div>
								<div class="col-xl-6">
									<div class="form-group row">
										<label class="col-lg-12 col-form-label">City</label>
										<div class="col-lg-12">
											<input type="text" class="form-control" value="Mexico">
										</div>
									</div>
								</div>
								<div class="col-xl-6">
									<div class="form-group row">
										<label class="col-lg-12 col-form-label">Zip Code</label>
										<div class="col-lg-12">
											<input type="text" class="form-control" value="236636">
										</div>
									</div>
								</div>
								<div class="col-xl-6">
									<div class="form-group row">
										<label class="col-lg-12 col-form-label">Status</label>
										<div class="col-lg-12">
											<select name="Status" class="form-control">
												<option value="Active">Active</option>
												<option value="Inactive">Inactive</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<br>
							<h4 class="card-title">Permissions</h4>
						<div class="table-responsive">
							<table class="table table-center">
								<thead>
									<tr>
										<th>Title</th>
										<th>Add</th>
										<th>Edit</th>
										 <th>Delete</th>                                               
									</tr>
								</thead>
								<tbody>
									<?php 
									foreach ($permissionsList as $key => $perm_sec) {
									?> 
                                    <tr> 
									    <td class="text-nowrap">
											{{ucfirst($key)}}
										</td>
										<?php 
								          foreach ($perm_sec as $keyIn => $child) {
								          ?>
										<td class="text-nowrap">
											<label class="checkbox checkbox-outline checkbox-theme">
									            <input class="permission_checkbox" type="checkbox" name="permissions[]" id="permissions" value="{{ $child['id'] }}" />
									            <span></span>
									            <!-- {{  ucfirst($child['value']) }} -->
									        </label>
										</td>
										<?php }?>
									</tr> 
									<?php }?>
								</tbody>
							</table>
						</div>
						</form>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Password Settings</h4>
						<form>
							<div class="row">
								<div class="col-xl-12">
								   <div class="form-group row">
										<label class="col-lg-12 col-form-label">Current Password</label>
										<div class="col-lg-12">
											<input type="password" class="form-control">
										</div>
								   </div>
								</div>
								<div class="col-xl-6">
								   <div class="form-group row">
										<label class="col-lg-12 col-form-label">New Password</label>
										<div class="col-lg-12">
											<input type="password" class="form-control">
										</div>
								   </div>
								</div>
								<div class="col-xl-6">
								   <div class="form-group row">
										<label class="col-lg-12 col-form-label">Confirm New Password</label>
										<div class="col-lg-12">
											<input type="password" class="form-control">
										</div>
								   </div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection