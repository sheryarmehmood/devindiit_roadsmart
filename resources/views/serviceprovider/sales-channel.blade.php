<?php include('inc/header.php') ?>
<?php include('inc/sidebar2.php') ?>
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Sales Channels</h3>
                </div>
                <div class="col-auto text-right">
                    <a class="btn btn-primary" href="javascript:void(0)" data-toggle="modal" data-target="#add-store-popup">
                        Add New
                    </a>
                    <a class="btn btn-secondary" href="index.php">Back</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body pt-2 pb-0">
                        <div class="table-responsive">
                            <div class="dt-bootstrap4 no-footer">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table class="table table-hover table-center mb-0">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc" colspan="1">Serial No.</th>
                                                    <th class="sorting" colspan="1">Domain Name</th>
                                                    <th class="sorting" colspan="1">Website Link</th>
                                                    <th class="sorting" colspan="1">Status</th>
                                                    <th class="sorting" colspan="1">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1">1</td>
                                                    <td>
                                                        <a href="javascript:void:(0)">
                                                            Amazon
                                                        </a>
                                                    </td>
                                                    <td><a href="javascript:void:(0)">https://www.amazon.in/</a></td>
                                                    <td>
                                                        <div class="status-toggle">
                                                            <input id="service_1" class="check" type="checkbox">
                                                            <label for="service_1" class="checktoggle">checkbox</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)" class="btn btn-sm bg-success-light" data-toggle="modal" data-target="#edit-store-popup">
                                                            <i class="fas fa-edit"></i> Edit
                                                        </a>
                                                        <a href="javascript:void(0)" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#delete-popup">
                                                            <i class="fas fa-trash-alt"></i> Delete
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td class="sorting_1">2</td>
                                                    <td>
                                                        <a href="javascript:void:(0)">
                                                            Flipkart
                                                        </a>
                                                    </td>
                                                    
                                                    <td><a href="javascript:void:(0)">https://www.flipkart.com/</a></td>
                                                    <td>
                                                        <div class="status-toggle">
                                                            <input id="service_2" class="check" type="checkbox" checked="">
                                                            <label for="service_2" class="checktoggle">checkbox</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)" class="btn btn-sm bg-success-light" data-toggle="modal" data-target="#edit-store-popup">
                                                            <i class="fas fa-edit"></i> Edit
                                                        </a>
                                                        <a href="javascript:void(0)" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#delete-popup">
                                                            <i class="fas fa-trash-alt"></i> Delete
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1">3</td>
                                                    <td>
                                                        <a href="javascript:void:(0)">
                                                            Myntra
                                                        </a>
                                                    </td>
                                                    
                                                    <td><a href="javascript:void:(0)">https://www.myntra.com/</a></td>
                                                    <td>
                                                        <div class="status-toggle">
                                                            <input id="service_3" class="check" type="checkbox">
                                                            <label for="service_3" class="checktoggle">checkbox</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)" class="btn btn-sm bg-success-light" data-toggle="modal" data-target="#edit-store-popup">
                                                            <i class="fas fa-edit"></i> Edit
                                                        </a>
                                                        <a href="javascript:void(0)" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#delete-popup">
                                                            <i class="fas fa-trash-alt"></i> Delete
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td class="sorting_1">4</td>
                                                    <td>
                                                        <a href="javascript:void:(0)">
                                                            Snapdeal
                                                        </a>
                                                    </td>
                                                    
                                                    <td><a href="javascript:void:(0)">https://www.snapdeal.com/</a></td>
                                                    <td>
                                                        <div class="status-toggle">
                                                            <input id="service_4" class="check" type="checkbox" checked="">
                                                            <label for="service_4" class="checktoggle">checkbox</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)" class="btn btn-sm bg-success-light" data-toggle="modal" data-target="#edit-store-popup">
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
                                <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 10 of 12 entries</div>
                                    </div>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" class="page-link">Previous</a></li>
                                                <li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" class="page-link">1</a></li>
                                                <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" class="page-link">2</a></li>
                                                <li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" class="page-link">Next</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
    <div class="modal online_store_modal fade" id="add-store-popup" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <h1 class="main_head">Add Sales Channels</h1>
                    <div class="form-group">
                        <label>Domain Name</label>
                        <input class="form-control" type="text" placeholder="Enter Domain Name">
                    </div>
                    <div class="form-group">
                        <label>Website Link</label>
                        <input class="form-control" type="link" placeholder="Enter Website Link">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select name="Status" class="my-select form-control">
                            <option value="select">Select Status</option>
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                        </select>
                    </div>                  
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
   </div>
    <div class="modal online_store_modal fade" id="edit-store-popup" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <h1 class="main_head">Edit Sales Channels</h1>
                    <div class="form-group">
                        <label>Domain Name</label>
                        <input class="form-control" type="text" placeholder="Enter Domain Name" value="Amazon">
                    </div>
                    <div class="form-group">
                        <label>Website Link</label>
                        <input class="form-control" type="link" placeholder="Enter Website Link" value="https://www.amazon.in/">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select name="Status" class="my-select form-control">
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                        </select>
                    </div>                  
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
   </div>

<?php include('inc/footer.php') ?>
