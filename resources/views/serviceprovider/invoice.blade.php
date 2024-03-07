<?php include('inc/header.php') ?>
<?php include('inc/sidebar.php') ?>
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Invoices</h3>
                </div>
            </div>
        </div>

        <div class="row">
                    <div class="col-md-12 d-flex">
                        <div class="card card-table flex-fill">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-center">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Client Name</th>
                                                <th>Service Name</th>
                                                 <th>Pending Amount</th>
                                                <th>Status</th>                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-nowrap">
                                                    #3456
                                                </td>
                                                <td class="text-nowrap">John Smith</td>
                                                <td>Repairs</td>
                                                <td>
                                                    $62
                                                </td>
                                                <td><label class="badge badge-danger">Pending</label></td>
                                            </tr>
                                              <tr>
                                                <td class="text-nowrap">
                                                    #3457
                                                </td>
                                                <td class="text-nowrap">Nancy Olson</td>
                                                <td>Parts</td>
                                                <td>
                                                    $51
                                                </td>
                                                <td><label class="badge badge-success">Completed</label></td>
                                            </tr>
                                              <tr>
                                                <td class="text-nowrap">
                                                    #3458
                                                </td>
                                                <td class="text-nowrap">Roland Storey</td>
                                                <td>Insurance</td>
                                                <td>
                                                    $112
                                                </td>
                                                <td><label class="badge badge-danger">Pending</label></td>
                                            </tr>
                                              <tr>
                                                <td class="text-nowrap">
                                                    #3459
                                                </td>
                                                <td class="text-nowrap">Smith John</td>
                                                <td>Brakes</td>
                                                <td>
                                                    $87
                                                </td>
                                                <td><label class="badge badge-success">Completed</label></td>
                                            </tr>
                                              <tr>
                                                <td class="text-nowrap">
                                                    #3460
                                                </td>
                                                <td class="text-nowrap">John Doe</td>
                                                <td>Tyre</td>
                                                <td>
                                                    $201
                                                </td>
                                                <td><label class="badge badge-danger">Pending</label></td>
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
<div class="modal fade" id="convert-popup" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
            <div class="modal-body">
               <div class="convert-cont">
                  <p>Are you sure you wants to convert this estimate to order ?</p>
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-success">Yes</button>
               <button type="button" class="btn btn-danger">No</button>
            </div>
         </div>
      </div>
   </div>

    <?php include('inc/footer.php') ?>
