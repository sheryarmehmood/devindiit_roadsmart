@extends('admin.layouts.app1')
@section('title', 'Invoice')
@section('head')
<style>
.checked {
  color: orange;
  
}
body{
    margin-top:10px;
    background:#eee;    
}
   
</style>
@endsection
@section('content')
   <div class="content container-fluid addorder">
        <div class="page-header">
            <div class="row">
                <div class="col">
                   <h3 class="page-title d-flex align-items-center">Estimate Details</h3>
                </div>
                <div class="col text-right">
                  <div class="actionMore d-flex align-items-center justify-content-end">
                      <a href="{{route('admin.viewquotes')}}" class="btn btn-primary mr-2">Back</a>
                  </div>
                </div>
            </div>
        </div>
        <div class="row">
             <div class="col-md-12">
                <div class="card card-table hideborder" style="overflow:visible">
                   <div class="card-body p-2 py-3 px-4">
                       <div class="container bootdey">
                            <div class="row invoice row-printable">
                                <div class="col-md-10">
                                    
                                    <div class="panel panel-default plain" id="dash_0">
                                        <div class="panel-body p30">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="invoice-logo" style='margin-top: 15px'>
                                                    <img width="100" src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Invoice logo">
                                                    </div>
                                                </div>
                                                </br>
                                                <div class="col-lg-12" style='margin-top: 15px'>
                                                    <div class="invoice-details mt25">
                                                        <div class="well">
                                                            <ul class="list-unstyled mb0">
                                                                <li style='font-size:15px'>John</li>
                                                                <li style='margin-top: 5px'>
                                                                    <span class="fa fa-star checked"></span>
                                                                    <span class="fa fa-star checked"></span>
                                                                    <span class="fa fa-star checked"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                </li>
                                                                <li style='margin-top: 5px'>17.8 mi - sector-15 </li>
                                                                <li style=' font-weight:bold; color: #c9343a; font-size:20px; margin-top: 5px;'>K 59.99</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="invoice-to mt25">
                                                        <ul class="list-unstyled">
                                                            <li style='font-size: 18px; font-weight:bold'><strong>Services</strong></li>
                                                            </br>
                                                            <li style='font-size: 16px; font-weight: 900; '>Vehicle Finance</li>
                                                            <li style='font-size: 13px;'>Mercedes-Benz  <i class="fas fa-circle " style='font-size:8px ' ></i> MH-05-89900 </li>
                                                            </br>
                                                            <li style='font-size: 16px;font-weight: 900;'>Repair Finance</li>
                                                           <li style='font-size: 13px; '>Mercedes-Benz  <i class="fas fa-circle " style='font-size:8px ' ></i> MH-05-89900 </li>
                                                        </ul>
                                                    </div>
                                                    <div class="requestmain_tab" id="exTab1">
                                                         <ul  class="nav nav-pills nav-tabs menu-tabs">
                                                            <li class="nav-item"> 
                                                                <a class="nav-link active" href="#allrequest"  data-toggle="tab"> Estimate</a>
                                                            </li>
                                            			</ul>
                                                    </div>
                                                    <div class="col-md-12">
                                					    <div class="vehicle_collapse" id="accordion3">
                                						    <table class="table">
                                							    <tbody>
                                								    <tr>
                                									    <td colspan="2" class="text-left pl-0 pr-0">
                                										    <div class="d-flex justify-content-between">
                                										    	<p>Vehicle Finance</p>
                                										    	<p>K 1,000.00</p>
                                										    </div>
                                                                            <div class="requestdetail_info">
                                                                                <div class="Request_card">
                                                                                    <div class="Request_header border-0">
                                                                                        <a class="Requestlink_btn py-0 collapsed" href="#vehicleone" data-toggle="collapse" ></a>
                                                                                    </div>
                                                                                    </br>
                                                                                    <div id="vehicleone" class="collapse pt-3"  data-parent="#accordion3">
                                                                                        <div class="Request_body table-responsive border-top">
                                                                                            <table class="table">
                                                                                                <thead>
                                                                                                    <tr>
                                                                                                        <th>Description</th>
                                                                                                        <th>Type</th>
                                                                                                        <th>Qty</th>
                                                                                                        <th>Amount</th>
                                                                                                        <th>Total</th>
                                                    												</tr>	
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td>Tune Up</td>
                                                                                                        <td>Labour</td>
                                                                                                        <td>1</td>
                                                                                                        <td>K 800</td>
                                                                                                        <td>K 800</td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td>Spark Plugs</td>
                                                                                                        <td>Part</td>
                                                                                                        <td>4</td>
                                                                                                        <td>K 150</td>
                                                                                                        <td>K 600</td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>										
                                									    </td>
                                							    	</tr>
                                							    
                                								    <tr>
                                								        <td colspan="2" class="text-left pl-0 pr-0">
                                										    <div class="d-flex justify-content-between">
                                										    	<p>Repair Finance</p>
                                										    	<p>K 2,000.00</p>
                                										    </div>
                                                                            <div class="requestdetail_info">
                                                                                <div class="Request_card">
                                                                                    <div class="Request_header border-0">
                                                                                        <a class="Requestlink_btn py-0 collapsed" href="#vehicletwo" data-toggle="collapse"></a>
                                                                                    </div>
                                                                                    </br>
                                                                                    <div id="vehicletwo" class="collapse pt-3" data-parent="#accordion3">
                                                                                        <div class="Request_body table-responsive border-top">
                                                                                            <table class="table">
                                                                                                <thead>
                                                                                                    <tr>
                                                                                                        <th>Description</th>
                                                                                                        <th>Type</th>
                                                                                                        <th>Qty</th>
                                                                                                        <th>Amount</th>
                                                                                                        <th>Total</th>
                                                    												</tr>	
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td>Tune Up</td>
                                                                                                        <td>Labour</td>
                                                                                                        <td>1</td>
                                                                                                        <td>K 800</td>
                                                                                                        <td>K 800</td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td>Spark Plugs</td>
                                                                                                        <td>Part</td>
                                                                                                        <td>4</td>
                                                                                                        <td>K 150</td>
                                                                                                        <td>K 600</td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>										
                                									    </td>
                                								    </tr>
                                							    </tbody>
                                						    </table>
                                					    </div>                  
                                					</div>
                                                    <div class="invoice-items">
                                                        <div class="table-responsive" style="overflow: hidden; outline: none;" tabindex="0">
                                                            <table class="table ">
                                                                <tfoot>
                                                                    <tr>
                                                                        <th colspan="2" class="text-left">Sub Total:</th>
                                                                        <td class="text-right">k 3,000.00</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th colspan="2" class="text-left">20% VAT:</th>
                                                                        <td class="text-right">k 200.00</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th colspan="2" class="text-left">Credit:</th>
                                                                        <td class="text-right">k 00.00 </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th colspan="2" class="text-left">Total:</th>
                                                                        <td class="text-right">k 3,200.00</td>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Send Message</button>
                                                        <button class="btn btn-sm bg-success-light"><i class="fas fa-check"></i> Accept </button>
            											<button class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i> Reject </button>
                                                    </div>
                                                </div>
                                                
                                                <!-- col-lg-12 end here -->
                                            </div>
                                            <!-- End .row -->
                                        </div>
                                    </div>
                                    <!-- End .panel -->
                                </div>
                                <!-- col-lg-12 end here -->
                            </div>
                        </div>
                   </div>
                </div>
             </div>
   </div>
@endsection

