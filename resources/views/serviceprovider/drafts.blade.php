@extends('serviceprovider.layouts.app')
@section('title', 'Drafts')

@section('content')
   <div class="content container-fluid">
      <div class="page-header">
         <div class="row">
            <div class="col">
               <h3 class="page-title">Draft</h3>
            </div>
            <div class="col-auto text-right">
               <a href="{{route('seller.add_order')}}" class="btn btn-primary addorder ml-3">
               Create Order
               </a>
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
      <div id="exTab1" class="">
         <ul  class="nav nav-pills nav-tabs menu-tabs">
            <li class="nav-item active"><a class="nav-link" href="#1a" data-toggle="tab">All</a> </li>
            <li class="nav-item"><a class="nav-link" href="#2a" data-toggle="tab">Open and invoice sent</a> </li>
            <li class="nav-item"><a class="nav-link" href="#3a" data-toggle="tab">Open</a> </li>
            <li class="nav-item"><a class="nav-link" href="#4a" data-toggle="tab">Invoice sent</a> </li>
            <li class="nav-item"><a class="nav-link" href="#5a" data-toggle="tab">Completed</a> </li>
         </ul>
         <div class="tab-content clearfix">
            <div class="tab-pane active" id="1a">
               <div class="row ordertabstableitems ">
                  <div class="col-md-12 d-flex">
                     <div class="card card-table flex-fill">
                        <div class="card-body">
                           <div class="table-responsive">
                              <table class="table table-center datatable">
                                 <thead>
                                    <tr>
                                       <th></th>
                                       <th>Draft Order</th>
                                       <th>Date</th>
                                       <th>Customer</th>
                                       <th>Status</th>
                                       <th>Total</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td>#D3</td>
                                       <td>31 minustes ago</td>
                                       <td>---</td>
                                       <td><label class="badge badge-success">Completed</label></td>
                                       <td>K9,380.00</td>
                                       <td>
                                          <a href="{{route('seller.view_draft')}}" class="btn btn-sm bg-info-light">
                                             <i class="far fa-eye mr-1"></i> View
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td>#D3</td>
                                       <td>31 minustes ago</td>
                                       <td>---</td>
                                       <td><label class="badge badge-success">Completed</label></td>
                                       <td>K9,380.00</td>
                                       <td>
                                          <a href="{{route('seller.view_draft')}}" class="btn btn-sm bg-info-light">
                                             <i class="far fa-eye mr-1"></i> View
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td>#D3</td>
                                       <td>31 minustes ago</td>
                                       <td>---</td>
                                       <td><label class="badge badge-success">Completed</label></td>
                                       <td>K9,380.00</td>
                                       <td>
                                          <a href="{{route('seller.view_draft')}}" class="btn btn-sm bg-info-light">
                                             <i class="far fa-eye mr-1"></i> View
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td>#D3</td>
                                       <td>31 minustes ago</td>
                                       <td>---</td>
                                       <td><label class="badge badge-success">Completed</label></td>
                                       <td>K9,380.00</td>
                                       <td>
                                          <a href="{{route('seller.view_draft')}}" class="btn btn-sm bg-info-light">
                                             <i class="far fa-eye mr-1"></i> View
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td>#D3</td>
                                       <td>31 minustes ago</td>
                                       <td>---</td>
                                       <td><label class="badge badge-success">Completed</label></td>
                                       <td>K9,380.00</td>
                                       <td>
                                          <a href="{{route('seller.view_draft')}}" class="btn btn-sm bg-info-light">
                                             <i class="far fa-eye mr-1"></i> View
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
            <div class="tab-pane" id="2a">
               <div class="row ordertabstableitems ">
                  <div class="col-md-12 d-flex">
                     <div class="card card-table flex-fill">
                        <div class="card-body">
                           <div class="table-responsive">
                              <table class="table table-center datatable">
                                 <thead>
                                    <tr>
                                       <th></th>
                                       <th>Draft Order</th>
                                       <th>Date</th>
                                       <th>Customer</th>
                                       <th>Status</th>
                                       <th>Total</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td>#D3</td>
                                       <td>31 minustes ago</td>
                                       <td>---</td>
                                       <td><label class="badge badge-success">Completed</label></td>
                                       <td>K9,380.00</td>
                                    </tr>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td>#D3</td>
                                       <td>31 minustes ago</td>
                                       <td>---</td>
                                       <td><label class="badge badge-success">Completed</label></td>
                                       <td>K9,380.00</td>
                                    </tr>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td>#D3</td>
                                       <td>31 minustes ago</td>
                                       <td>---</td>
                                       <td><label class="badge badge-success">Completed</label></td>
                                       <td>K9,380.00</td>
                                    </tr>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td>#D3</td>
                                       <td>31 minustes ago</td>
                                       <td>---</td>
                                       <td><label class="badge badge-success">Completed</label></td>
                                       <td>K9,380.00</td>
                                    </tr>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td>#D3</td>
                                       <td>31 minustes ago</td>
                                       <td>---</td>
                                       <td><label class="badge badge-success">Completed</label></td>
                                       <td>K9,380.00</td>
                                    </tr>
                                  
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tab-pane" id="3a">
               <div class="row ordertabstableitems ">
                  <div class="col-md-12 d-flex">
                     <div class="card card-table flex-fill">
                        <div class="card-body">
                           <div class="table-responsive">
                              <div class="table-responsive">
                              <table class="table table-center datatable">
                                 <thead>
                                    <tr>
                                       <th></th>
                                       <th>Draft Order</th>
                                       <th>Date</th>
                                       <th>Customer</th>
                                       <th>Status</th>
                                       <th>Total</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td>#D3</td>
                                       <td>31 minustes ago</td>
                                       <td>---</td>
                                       <td><label class="badge badge-success">Completed</label></td>
                                       <td>K9,380.00</td>
                                    </tr>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td>#D3</td>
                                       <td>31 minustes ago</td>
                                       <td>---</td>
                                       <td><label class="badge badge-success">Completed</label></td>
                                       <td>K9,380.00</td>
                                    </tr>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td>#D3</td>
                                       <td>31 minustes ago</td>
                                       <td>---</td>
                                       <td><label class="badge badge-success">Completed</label></td>
                                       <td>K9,380.00</td>
                                    </tr>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td>#D3</td>
                                       <td>31 minustes ago</td>
                                       <td>---</td>
                                       <td><label class="badge badge-success">Completed</label></td>
                                       <td>K9,380.00</td>
                                    </tr>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td>#D3</td>
                                       <td>31 minustes ago</td>
                                       <td>---</td>
                                       <td><label class="badge badge-success">Completed</label></td>
                                       <td>K9,380.00</td>
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
            <div class="tab-pane" id="4a">
               <div class="row ordertabstableitems ">
                  <div class="col-md-12 d-flex">
                     <div class="card card-table flex-fill">
                        <div class="card-body">
                           <div class="table-responsive">
                              <div class="table-responsive">
                              <table class="table table-center datatable">
                                 <thead>
                                    <tr>
                                       <th></th>
                                       <th>Draft Order</th>
                                       <th>Date</th>
                                       <th>Customer</th>
                                       <th>Status</th>
                                       <th>Total</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td>#D3</td>
                                       <td>31 minustes ago</td>
                                       <td>---</td>
                                       <td><label class="badge badge-success">Completed</label></td>
                                       <td>K9,380.00</td>
                                    </tr>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td>#D3</td>
                                       <td>31 minustes ago</td>
                                       <td>---</td>
                                       <td><label class="badge badge-success">Completed</label></td>
                                       <td>K9,380.00</td>
                                    </tr>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td>#D3</td>
                                       <td>31 minustes ago</td>
                                       <td>---</td>
                                       <td><label class="badge badge-success">Completed</label></td>
                                       <td>K9,380.00</td>
                                    </tr>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td>#D3</td>
                                       <td>31 minustes ago</td>
                                       <td>---</td>
                                       <td><label class="badge badge-success">Completed</label></td>
                                       <td>K9,380.00</td>
                                    </tr>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td>#D3</td>
                                       <td>31 minustes ago</td>
                                       <td>---</td>
                                       <td><label class="badge badge-success">Completed</label></td>
                                       <td>K9,380.00</td>
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
            <div class="tab-pane" id="5a">
               <div class="row ordertabstableitems ">
                  <div class="col-md-12 d-flex">
                     <div class="card card-table flex-fill">
                        <div class="card-body">
                           <div class="table-responsive">
                              <div class="table-responsive">
                              <table class="table table-center datatable">
                                 <thead>
                                    <tr>
                                       <th></th>
                                       <th>Draft Order</th>
                                       <th>Date</th>
                                       <th>Customer</th>
                                       <th>Status</th>
                                       <th>Total</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td>#D3</td>
                                       <td>31 minustes ago</td>
                                       <td>---</td>
                                       <td><label class="badge badge-success">Completed</label></td>
                                       <td>K9,380.00</td>
                                    </tr>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td>#D3</td>
                                       <td>31 minustes ago</td>
                                       <td>---</td>
                                       <td><label class="badge badge-success">Completed</label></td>
                                       <td>K9,380.00</td>
                                    </tr>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td>#D3</td>
                                       <td>31 minustes ago</td>
                                       <td>---</td>
                                       <td><label class="badge badge-success">Completed</label></td>
                                       <td>K9,380.00</td>
                                    </tr>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td>#D3</td>
                                       <td>31 minustes ago</td>
                                       <td>---</td>
                                       <td><label class="badge badge-success">Completed</label></td>
                                       <td>K9,380.00</td>
                                    </tr>
                                    <tr>
                                       <td style="width:20px"><input type="checkbox" name="type" value=""></td>
                                       <td>#D3</td>
                                       <td>31 minustes ago</td>
                                       <td>---</td>
                                       <td><label class="badge badge-success">Completed</label></td>
                                       <td>K9,380.00</td>
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
         </div>
      </div>
   </div>
@endsection
@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

@endsection