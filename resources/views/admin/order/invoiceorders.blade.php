@extends('admin.layouts.app1')
@section('title', 'Invoice')
@section('head')
<style>
   .card-table .table td, .card-table .table th
   {
          padding: 12px 0.75rem;
   }
</style>
@endsection
@section('content')
   <div class="content container-fluid addorder">
        <div class="page-header">
                <div class="row">
                    <div class="col">
                       <h3 class="page-title d-flex align-items-center">Invoice #1002</h3>
                       <h3 class="page-title d-flex align-items-center"></h3>
                       <!--<p>25 January 2022 at 10:56 am from Draft Orders</p>-->
                    </div>
                    <div class="col text-right">
                      <div class="actionMore d-flex align-items-center justify-content-end">
                          <a href="{{route('admin.orders')}}" class="btn btn-primary mr-2">Back</a>
                      </div>
                    </div>
                </div>
          </div>
        <div class="row">
             <div class="col-md-12">
                <div class="card card-table hideborder" style="overflow:visible">
                   <div class="card-body p-2 py-3 px-4">
                        <div class="d-flex justify-content-between align-items-center">
                             <!--<h3 class="mb-0 text-danger">Invoice #1002</h3>-->
                           </div>
                              <div class="viewBox table-responsive pt-3">
                                 <table class="table">
                                    <tbody>
                                        <tr>
                                            <th>Order Id</th>
                                            <td class="text-center "> </td>
                                            <td class="text-right pr-0" >#3456</td>
                                       </tr>
                                        <tr>
                                            <th>Customer Name</th>
                                            <td class="text-center "> </td>
                                            <td class="text-right pr-0" >John Smith</td>
                                       </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td class="text-center "> </td>
                                            <td class="text-right pr-0" >JohnSmith@yopmail.com</td>
                                        </tr>
                                         <tr>
                                            <th>Vehicle Name</th>
                                            <td class="text-center "> </td>
                                            <td class="text-right pr-0" >Mercedes-Benz</td>
                                        </tr>
                                        <tr>
                                            <th>Price</th>
                                            <td class="text-center "> </td>
                                            <td class="text-right pr-0">$12,880.00</td>
                                        </tr>
                                         <tr>
                                            <th>Date</th>
                                            <td class="text-center "> </td>
                                            <td class="text-right pr-0">09 December 2021</td>
                                        </tr>
                                         <tr>
                                            <th>Delivery Address</th>
                                            <td class="text-center "> </td>
                                            <td class="text-right pr-0" >1688 St Matthews Ave, Winnipeg, MB R3H 0A2, Canada</td>
                                        </tr>
                                        <tr>
                                            <th>Status</th>
                                            <td class="text-center "> </td>
                                            <td class="text-right pr-0" ><label class="badge badge-success">Active</label>
                                            
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Image</th>
                                            <td class="text-center "> </td>
                                            <td class="text-right pr-0"> <img class="viewproduct_img" src="{{ asset('assets/serviceprovider/img/logo.png') }}"></td>
                                        </tr>
                                       <tr>
                                          <td class="text-left pl-0"> Subtotal </td>
                                          <td class="text-center "> 2 items </td>
                                          <td class="text-right pr-0"> K 8,100.00 </td>
                                       </tr>
                                       <tr>
                                          <td class="text-left pl-0"> Tax </td>
                                          <td class="text-center "> VAT 16% </td>
                                          <td class="text-right pr-0"> K 1,280.00 </td>
                                       </tr>
                                       <tr>
                                          <th class="text-left pl-0"> Total </th>
                                          <th class="text-right pr-0" colspan="2"> K 9,380.00 </th>
                                       </tr>
                                       <tr>
                                          <td class="text-left pl-0"> Paid by customer </td>
                                          <td class="text-right pr-0" colspan="2"> K 0.00 </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                              <hr class="mt-0 pt-2" />
                            <div class="row">
                                <div class="col-md-11" >
                                    <a href="#" class="btn btn-primary"  >
                				         <i class="fas fa-download"></i> Download
                                    </a>
                                </div>
                                <div class="text-right pr-0" > 
                                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#Admin_review-popup">
                    				    <i class="fas fa-print"></i> Print
                                    </a> 
                                </div>
                            </div>
                        </div>
                   </div>
                </div>
             </div>
   </div>
<div class="modal fade" id="Admin_review-popup" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Print Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-table">
                            <div class="card-body addpad">
                                <div class="viewBox">
                                   <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <th> Subtotal </th>
                                                <td> K 8,100.00 </td>
                                            </tr>
                                            <tr>
                                                <th> Tax </th>
                                                <td>K 1,280.00 </td>
                                            </tr>
                                            <tr>
                                                <th> Total  </th>
                                                <td> K 9,380.00 </td>
                                            </tr>
                                            <tr>
                                                <th> Paid by customer </th>
                                                <td> K 0.00 </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-primary" data-dismiss="modal">Print</button>
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
       </div>
    </div>
</div>
@endsection

