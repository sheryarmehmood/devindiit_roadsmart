<?php include('inc/header.php') ?>
<?php include('inc/sidebar2.php') ?>   
<div class="page-wrapper">
	<div class="content container-fluid">
		<div class="page-header">
			<div class="row">
				<div class="col">
					<h3 class="page-title">Add Location</h3>
				</div>
				<div class="col-auto text-right">			
					<a class="btn btn-secondary" href="locations.php">Back</a>
				</div>				
			</div>
		</div>
		<div class="row">  
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<form>
							<div class="row">
								<div class="col-xl-6">
									<div class="form-group row">
										<label class="col-lg-12 col-form-label">Address</label>
										<div class="col-lg-12">
											<input type="text" class="form-control" placeholder="Enter Address">
										</div>
									</div>
								</div>
								<div class="col-xl-6">
									<div class="form-group row">
										<label class="col-lg-12 col-form-label">Country</label>
										<div class="col-lg-12">
											<select name="Country" class="form-control">
												<option>Select Country</option>
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
											<input type="text" class="form-control" placeholder="Enter State">
										</div>
									</div>
								</div>
								<div class="col-xl-6">
									<div class="form-group row">
										<label class="col-lg-12 col-form-label">City</label>
										<div class="col-lg-12">
											<input type="text" class="form-control" placeholder="Enter City">
										</div>
									</div>
								</div>
								<div class="col-xl-6">
									<div class="form-group row">
										<label class="col-lg-12 col-form-label">Zip Code</label>
										<div class="col-lg-12">
											<input type="text" class="form-control" placeholder="Enter Zip Code">
										</div>
									</div>
								</div>
								<div class="col-xl-6">
									<div class="form-group row">
										<label class="col-lg-12 col-form-label">Status</label>
										<div class="col-lg-12">
											<select name="Status" class="form-control">
												<option>Select Status</option>
												<option value="Active">Active</option>
												<option value="Inactive">Inactive</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="text-right">
								<button type="submit" class="btn btn-primary">Save</button>
							</div>								
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include('inc/footer.php') ?>