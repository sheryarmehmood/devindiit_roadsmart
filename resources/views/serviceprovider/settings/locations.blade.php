<?php include('inc/header.php') ?>
<?php include('inc/sidebar2.php') ?>
<style>
    .table-responsive
    {
        padding: 0 20px;
    }
</style>
<div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Locations</h3>
                    </div>
                    <div class="col-auto text-right">
                        <a class="btn btn-primary" href="add-locations.php">
                            Add New
                        </a>                
                        <a class="btn btn-secondary" href="index.php">Back</a>
                    </div>              
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 d-flex">
                    <div class="card card-table flex-fill pt-2 pb-0">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-center">
                                    <thead>
                                        <tr>
                                            <th>Serial No.</th>
                                            <th>Country</th>
                                            <th>Address</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Canada</td>
                                            <td class="text-nowrap">123 Lorem Ipsum, Toronto, ON, Canada</td>
                                            <td><label class="badge badge-success">Active</label></td>
                                            <td>
                                                <a href="edit-locations.php" class="btn bg-warning-light ">
                                                    <i class="fas fa-edit"></i> Edit
                                                </a>
                                                <a href="javascript:void(0)" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#delete-popup">
                                                    <i class="fas fa-trash-alt"></i> Delete
                                                </a>                                                    
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Canada</td>
                                            <td class="text-nowrap">123 Lorem Ipsum, Ottawa, ON, Canada</td>
                                            <td><label class="badge badge-success">Active</label></td>
                                            <td>
                                                <a href="edit-locations.php" class="btn bg-warning-light ">
                                                    <i class="fas fa-edit"></i> Edit
                                                </a>
                                                <a href="javascript:void(0)" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#delete-popup">
                                                    <i class="fas fa-trash-alt"></i> Delete
                                                </a>                                                    
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Canada</td>
                                            <td class="text-nowrap">456 Lorem Ipsum, Montreal, Canada</td>
                                            <td><label class="badge badge-danger">Inactive</label></td>
                                            <td>
                                                <a href="edit-locations.php" class="btn bg-warning-light ">
                                                    <i class="fas fa-edit"></i> Edit
                                                </a>
                                                <a href="javascript:void(0)" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#delete-popup">
                                                    <i class="fas fa-trash-alt"></i> Delete
                                                </a>                                                    
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Canada</td>
                                            <td class="text-nowrap">Suite 101-1124 Lorem Ipsum, Vancouver, Canada</td>
                                            <td><label class="badge badge-danger">Inactive</label></td>
                                            <td>
                                                <a href="edit-locations.php" class="btn bg-warning-light ">
                                                    <i class="fas fa-edit"></i> Edit
                                                </a>
                                                <a href="javascript:void(0)" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#delete-popup">
                                                    <i class="fas fa-trash-alt"></i> Delete
                                                </a>                                                    
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Canada</td>
                                            <td class="text-nowrap">2237 Lorem Ipsum, Manitoba, Canada</td>
                                            <td><label class="badge badge-success">Active</label></td>
                                            <td>
                                                <a href="edit-locations.php" class="btn bg-warning-light ">
                                                    <i class="fas fa-edit"></i> Edit
                                                </a>
                                                <a href="javascript:void(0)" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#delete-popup">
                                                    <i class="fas fa-trash-alt"></i> Delete
                                                </a>                                                    
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
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>   
    <?php include('inc/footer.php') ?>
