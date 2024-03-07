<?php include('inc/header.php') ?>
<?php include('inc/sidebar.php') ?>
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Marketplace Orders</h3>
                </div>
                <div class="col-auto text-right">
                    <a class="btn btn-white filter-btn" href="javascript: void(0);" id="filter_search">
                        <i class="fas fa-filter"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="card filter-card" id="filter_inputs">
            <div class="card-body pb-0">
                <form>
                    <div class="row filter-row">
                        <div class="col-sm-6 col-md-3">
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="form-group">
                                <label>From Date</label>
                                <div class="cal-icon">
                                    <input class="form-control datetimepicker" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="form-group">
                                <label>To Date</label>
                                <div class="cal-icon">
                                    <input class="form-control datetimepicker" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="form-group">
                                <button class="btn btn-primary btn-block" type="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div id="exTab1" class="container">
            <ul  class="nav nav-pills nav-tabs menu-tabs">
                <li class="nav-item active">
                    <a class="nav-link" href="#1a" data-toggle="tab">Upcoming Orders</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="#2a" data-toggle="tab">Past Orders</a>
            </li>
        </ul>
        <div class="tab-content clearfix">
            <div class="tab-pane active" id="1a">
                <div class="row">
                    <div class="col-md-12 d-flex">
                        <div class="card card-table flex-fill">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-center">
                                        <thead>
                                            <tr>
                                                <th>Order Id</th>
                                                <th>Product Name</th>
                                                <th>Client Name</th>
                                                <th>Type</th>
                                                <th>Address</th>
                                                 <th>Date</th>
                                                  <th>Time</th>
                                                <th>Phone Number</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-nowrap">
                                                    #3456
                                                </td>
                                                <td class="text-nowrap">Engine</td>
                                                <td>John Smith</td>
                                                 <td><label class="badge bg-info-light">Product</label></td>
                                                <td>
                                                    Usa , Florida
                                                </td>
                                                <td>10 Dec 2021</td>
                                                <td>11:28 am</td>
                                                <td>
                                                    +123456789
                                                </td>
                                                <th>
                                                    <a href="marketplace-detail.php" class="btn bg-primary-light">View</a> 
                                                    <button class="btn bg-success-light">Accept</button> 
                                                    <button class="btn bg-danger-light">Reject</button>
                                                </th>
                                            </tr>
                                            <tr>
                                                <td class="text-nowrap">
                                                #3456</td>
                                                <td class="text-nowrap">Wheels</td>
                                                <td>John Smith</td>
                                                 <td><label class="badge bg-info-light">Product</label></td>
                                                <td>
                                                    Usa , Florida
                                                </td>
                                                <td>10 Dec 2021</td>
                                                <td>11:28 am</td>
                                                <td>
                                                    +123456789
                                                </td>
                                                <th>
                                                    <a href="marketplace-detail.php" class="btn bg-primary-light">View</a> 
                                                    <button class="btn bg-success-light">Accept</button> 
                                                    <button class="btn bg-danger-light">Reject</button>
                                                </th>
                                            </tr>
                                            <tr>
                                                <td class="text-nowrap">
                                                    #3456
                                                </td>
                                                <td class="text-nowrap">Tyres</td>
                                                <td>John Smith</td>
                                                 <td><label class="badge bg-info-light">Product</label></td>
                                                <td>
                                                    Usa , Florida
                                                </td>
                                                <td>10 Dec 2021</td>
                                                <td>11:28 am</td>
                                                <td>
                                                    +123456789
                                                </td>
                                                <th>
                                                    <a href="marketplace-detail.php" class="btn bg-primary-light">View</a> 
                                                    <button class="btn bg-success-light">Accept</button> 
                                                    <button class="btn bg-danger-light">Reject</button>
                                                </th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="tab-pane" id="2a">
                <div class="row">
                    <div class="col-md-12 d-flex">
                        <div class="card card-table flex-fill">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-center">
                                        <thead>
                                            <tr>
                                                <th>Order Id</th>
                                                <th>Product Name</th>
                                                <th>Client Name</th>
                                                <th>Type</th>
                                                <th>Price</th>
                                                <th>Date</th>
                                                <th>Time</th>
                                                <th>Phone Number</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-nowrap">
                                                    #3456
                                                </td>
                                                <td class="text-nowrap">Gear</td>
                                                <td>John Smith</td>
                                                <td><label class="badge bg-info-light">Product</label></td>
                                               <td>$62</td>
                                               <td>10 Dec 2021</td>
                                                <td>11:28 am</td>
                                                <td>
                                                    +123456789
                                                </td>
                                                 <td>
                                                    <label class="badge badge-warning">Completed</label>
                                                </td>
                                                <td> <a href="order-detail.php" class="btn btn-sm bg-info-light">
                                                    <i class="far fa-eye mr-1"></i> View
                                                </a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-nowrap">
                                                #3456</td>
                                                <td class="text-nowrap">Alloys</td>
                                                <td>John Smith</td>
                                                <td><label class="badge bg-info-light">Product</label></td>
                                                <td>$62</td>
                                                <td>10 Dec 2021</td>
                                                <td>11:28 am</td>
                                                <td>
                                                    +123456789
                                                </td>
                                                 <td>
                                                    <label class="badge badge-success">In Progress</label>
                                                </td>
                                                <td> <a href="order-detail.php" class="btn btn-sm bg-info-light">
                                                    <i class="far fa-eye mr-1"></i> View
                                                </a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-nowrap">
                                                    #3456
                                                </td>
                                                <td class="text-nowrap">Engine</td>
                                                <td>John Smith</td>
                                                <td><label class="badge bg-info-light">Product</label></td>
                                               <td>$62</td>
                                               <td>10 Dec 2021</td>
                                                <td>11:28 am</td>
                                                <td>
                                                    +123456789
                                                </td>
                                                 <td>
                                                    <label class="badge badge-dark">Pending</label>
                                                </td>
                                                <td> <a href="order-detail.php" class="btn btn-sm bg-info-light">
                                                    <i class="far fa-eye mr-1"></i> View
                                                </a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<?php include('inc/footer.php') ?>