<?php include('inc/header.php') ?>
<?php include('inc/sidebar2.php') ?>   
<div class="page-wrapper">
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
								<img class="rounded-circle img-thumbnail" src="assets/img/profiles/avatar-03.jpg"/>
								<label  for="user-img">Upload Picture</label>
								<input  id="user-img" name="user-img" style="display:none" type="file">
							</div>
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
											<input type="text" class="form-control" value="John">
										</div>
									</div>
								</div>
								<div class="col-xl-6">
									<div class="form-group row">
										<label class="col-lg-12 col-form-label">Last Name</label>
										<div class="col-lg-12">
											<input type="text" class="form-control" value="Smith">
										</div>
									</div>
								</div>
								<div class="col-xl-6">
									<div class="form-group row">
										<label class="col-lg-12 col-form-label">Email Address</label>
										<div class="col-lg-12">
											<input type="email" class="form-control" value="johnsmith@gamil.com">
										</div>
									</div>
								</div>
								<div class="col-xl-6">
									<div class="form-group row">
										<label class="col-lg-12 col-form-label">Phone Number</label>
										<div class="col-lg-12">
											<input type="tel" class="form-control" value="+123456789">
										</div>
									</div>
								</div>
								<div class="col-xl-6">
									<div class="form-group row">
										<label class="col-lg-12 col-form-label">Address</label>
										<div class="col-lg-12">
											<input type="text" class="form-control" value="31 Avenew Road">
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
				<div class="card">
					<div class="card-body">
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
									<tr>
										<td class="text-nowrap">
											Requests
										</td>
										<td class="text-nowrap"><input class="permission_checkbox" type="checkbox" name="permission" disabled></td>
										<td class="text-nowrap"><input class="permission_checkbox" type="checkbox" name="permission"></td>
										<td class="text-nowrap"><input class="permission_checkbox" type="checkbox" name="permission" checked></td>
									</tr> 
									<tr>
										<td class="text-nowrap">
											Orders
										</td>
										<td class="text-nowrap"><input class="permission_checkbox" type="checkbox" name="permission" checked></td>
										<td class="text-nowrap"><input class="permission_checkbox" type="checkbox" name="permission"></td>
										<td class="text-nowrap"><input class="permission_checkbox" type="checkbox" name="permission"></td>
									</tr> 
									<tr>
										<td class="text-nowrap">
											Products
										</td>
										<td class="text-nowrap"><input class="permission_checkbox" type="checkbox" name="permission"></td>
										<td class="text-nowrap"><input class="permission_checkbox" type="checkbox" name="permission" checked></td>
										<td class="text-nowrap"><input class="permission_checkbox" type="checkbox" name="permission"></td>
									</tr> 
									<tr>
										<td class="text-nowrap">
											Services
										</td>
										<td class="text-nowrap"><input class="permission_checkbox" type="checkbox" name="permission" checked></td>
										<td class="text-nowrap"><input class="permission_checkbox" type="checkbox" name="permission"></td>
										<td class="text-nowrap"><input class="permission_checkbox" type="checkbox" name="permission" checked></td>
									</tr>  
								</tbody>
							</table>
						</div>
						<div class="text-right">
							<button type="submit" class="btn btn-primary">Save</button>
						</div>					
					</div>			
				</div>
			</div>
		</div>
	</div>
</div>
<?php include('inc/footer.php') ?>