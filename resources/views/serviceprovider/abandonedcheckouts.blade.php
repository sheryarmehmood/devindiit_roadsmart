@extends('serviceprovider.layouts.app')
@section('title', 'Abondonedcheckouts')

@section('content')
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Abandoned Checkouts</h3>
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
                        <label>Search</label>
                        <input class="form-control" placeholder="Search Order" type="text">
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
        <div class="row">
            <div class="col-md-12 d-flex">
                <div class="card card-table flex-fill">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-center datatable">
                                <thead>
                                    <tr>
                                        <th>Checkout</th>
                                        <th>Date</th>
                                        <th>Placed by</th>
                                        <th>Email Status</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#1578565242</td>
                                        <td>Thursday, 4:10pm</td>
                                        <td>Martin</td>
                                        <td><label class="badge bg-success-light">Sent</label></td>
                                        <td>$434.00</td>
                                    </tr>
                                    <tr>
                                        <td>#1578565555</td>
                                        <td>Friday, 4:10pm</td>
                                        <td>David</td>
                                        <td><label class="badge bg-danger-light">Not Sent</label></td>
                                        <td>$434.00</td>
                                    </tr>
                                    <tr>
                                        <td>#1578565242</td>
                                        <td>Thursday, 4:10pm</td>
                                        <td>Martin</td>
                                        <td><label class="badge bg-success-light">Sent</label></td>
                                        <td>$434.00</td>
                                    </tr>
                                    <tr>
                                        <td>#1578565555</td>
                                        <td>Friday, 4:10pm</td>
                                        <td>David</td>
                                        <td><label class="badge bg-danger-light">Not Sent</label></td>
                                        <td>$434.00</td>
                                    </tr>
                                    <tr>
                                        <td>#1578565242</td>
                                        <td>Thursday, 4:10pm</td>
                                        <td>Martin</td>
                                        <td><label class="badge bg-success-light">Sent</label></td>
                                        <td>$434.00</td>
                                    </tr>
                                    <tr>
                                        <td>#1578565555</td>
                                        <td>Friday, 4:10pm</td>
                                        <td>David</td>
                                        <td><label class="badge bg-danger-light">Not Sent</label></td>
                                        <td>$434.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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