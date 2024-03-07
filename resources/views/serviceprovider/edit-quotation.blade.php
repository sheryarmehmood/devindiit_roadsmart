@extends('serviceprovider.layouts.app')
@section('title', 'Edit Quotation')
@section('content')
   <div class="content container-fluid">
       <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Edit Quotation</h3>
                </div>
                 <div class="col text-right">
                   <a href="{{route('seller.quotation')}}" class="btn btn-primary">Back</a>
                </div>
               
            </div>
        </div>
      <div class="row">
                <div class="col-md-3">
                    <div class="service-image-detail new-desig">
                        <img src="{{ asset('assets/serviceprovider/img/user.jpg') }}">
                        <h5>John Smith</h5>
                  <p> john@example.com </p>
                        <button class="btn bg-primary-light"><a href="{{route('seller.messages')}}"><i class="far fa-comment-dots"></i> Chat</a></button>
                    </div>
                </div>
               <div class="col-md-9">
                   <div class="card card-table addpad">
                       <div class="card-body">
                           <div class="viewBox">
                               <table class="table table-bordered">
                                   <tbody>
                                    <tr>
                                       <th> Order Id </th>
                                       <td> #3456</td>
                                   </tr>
                                    <tr>
                                       <th> Order Type </th>
                                       <td> Repair</td>
                                   </tr>
                                   <tr>
                                       <th> Vehicle</th>
                                       <td> BMW x3</td>
                                   </tr>
                                   <tr>
                                       <th> Customer </th>
                                       <td> John Smith</td>
                                   </tr>
                                   <tr>
                                       <th> Amount</th>
                                       <td> $62.00 </td>
                                   </tr>
                                   <tr>
                                       <th> Status </th>
                                       <td> Pending </td>
                                   </tr>
                               </tbody></table>
                           </div>
                       </div>
                   </div>
               </div>

           </div>
   </div>

   <div class="content container-fluid">
      <div class="page-header">
         <div class="row">
            <div class="col">
               <h3 class="page-title">Itemized Estimate</h3>
            </div>
            <!--div class="col-auto text-right">
               <a class="btn btn-primary" data-toggle="modal" data-target="#add-estimate-popup">
               Add New
               </a>
            </div-->
         </div>
      </div>
      <div class="row">
         <div class="col-md-12">
            <div class="card estimate-table">
               <div class="card-body ">
                  <div class="table-responsive">
                                    <table class="table table-center">
                                        <thead>
                                            <tr>
                                                <th>Description</th>
                                                <th>Type</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                                <th>Amount</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                   <h4>Wheel alignments</h4>
                                                   <p><strong>Notes:</strong> Check new tyres</p>
                                                </td>
                                                <td><label class="badge bg-success-light">Product</label></td>
                                                <td>1 set</td>
                                                <td>$63</td>
                                                <td>zmw 5000</td>
                                                <td><a class="btn bg-info-light " data-toggle="modal" data-target="#edit-estimate-popup">
                                          <i class="fas fa-edit"></i> Edit
                                       </a></td>
                                            </tr>
                                           
                                            
                                        </tbody>
                                    </table>
                                </div>
                             </div>
                          </div>
                          <div class="card estimate-table">
                             <div class="card-body ">
                                  <div class="table-responsive">
                                    <table class="table table-center">
                                        <thead>
                                            <tr>
                                                <th>Description</th>
                                                <th>Type</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                                <th>Amount</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                   <h4>Road brake pads</h4>
                                                   <p><strong>Notes:</strong> Check new tyres</p>
                                                </td>
                                                <td><label class="badge bg-danger-light">Service</label></td>
                                                <td>1 set</td>
                                                <td>$63</td>
                                                <td>zmw 5000</td>
                                                <td><a class="btn bg-info-light " data-toggle="modal" data-target="#edit-estimate-popup">
                                          <i class="fas fa-edit"></i> Edit
                                       </a></td>
                                            </tr>
                                           
                                            
                                        </tbody>
                                    </table>
                                </div>
                             </div>
                          </div>
                          <div class="card estimate-table">
                             <div class="card-body">
                                  <div class="table-responsive">
                                    <table class="table table-center">
                                        <thead>
                                            <tr>
                                                <th>Description</th>
                                                <th>Type</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                                <th>Amount</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                   <h4>Wheel alignments</h4>
                                                   <p><strong>Notes:</strong> Check new tyres</p>
                                                </td>
                                                <td><label class="badge bg-success-light">Product</label></td>
                                                <td>1 set</td>
                                                <td>$63</td>
                                                <td>zmw 5000</td>
                                                <td><a class="btn bg-info-light " data-toggle="modal" data-target="#edit-estimate-popup">
                                          <i class="fas fa-edit"></i> Edit
                                       </a></td>
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

<div class="modal fade" id="add-estimate-popup" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
             <h3 class="modal-title">Add Itemized Estimate</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            </div>
            <div class="modal-body">
               <form action="#">
                     <div class="row edit-quote">
                        <div class="col-xl-12">
                           <div class="form-group row " onsubmit="return false;">
                              <label class="col-lg-12 col-form-label">Description</label>
                              <div class="col-lg-12">
                                <textarea class="form-control" id="Description"></textarea>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-6">
                           <div class="form-group row">
                              <label class="col-lg-12 col-form-label">Type </label>
                                 <div class="col-lg-12">
                                 <select class="my-select form-control" id="type">
                                 <option value="Select Option">Select Option</option>
                                   <option value="Service">Service</option>
                                   <option value="Product">Product</option>
                                </select>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-6">
                           <div class="form-group row">
                              <label class="col-lg-12 col-form-label">Quantity</label>
                             <div class="col-lg-12">
                                <select class="my-select form-control" id="Quantity">
                                 <option value="Select Option">Select Option</option>
                                   <option value="1 Set">1 Set</option>
                                   <option value="2 Set">2 Set</option>
                                   <option value="3 Set">3 Set</option>
                                   <option value="4 Set">4 Set</option>
                                   <option value="5 Set">5 Set</option>
                                </select>
                              </div>
                           </div>
                        </div>
                          <div class="col-xl-6">
                           <div class="form-group row">
                              <label class="col-lg-12 col-form-label">Price</label>
                            <div class="col-lg-12">
                                 <input type="text" class="form-control">
                              </div>
                           </div>
                        </div>
                       
                        <div class="col-xl-6">
                           <div class="form-group row">
                              <label class="col-lg-12 col-form-label">Amount</label>
                              <div class="col-lg-12">
                                 <input type="text" class="form-control">
                              </div>
                           </div>
                        </div>
                     </div>
                  </form>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-primary">Add</button>
               <button type="button" class="btn btn-dark" data-dismiss="modal">Cancel</button>
            </div>
         </div>
      </div>
   </div>

   <div class="modal fade" id="edit-estimate-popup" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
            <div class="modal-header">
             <h3 class="modal-title">Edit Itemized Estimate</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            </div>
            <div class="modal-body">
               <form action="#">
                     <div class="row edit-quote">
                        <div class="col-xl-12">
                           <div class="form-group row " onsubmit="return false;">
                              <label class="col-lg-12 col-form-label">Description</label>
                              <div class="col-lg-12">
                                <textarea class="form-control" id="Description">Wheel alignments</textarea>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-6">
                           <div class="form-group row">
                              <label class="col-lg-12 col-form-label">Type </label>
                                 <div class="col-lg-12">
                                <select class="my-select form-control" id="type">
                                 <option value="Select Option">Select Option</option>
                                   <option value="Service" selected>Service</option>
                                   <option value="Product">Product</option>
                                </select>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-6">
                           <div class="form-group row">
                              <label class="col-lg-12 col-form-label">Quantity</label>
                             <div class="col-lg-12">
                                <select class="my-select form-control" id="Quantity">
                                 <option value="Select Option">Select Option</option>
                                   <option value="1 Set" selected>1 Set</option>
                                   <option value="2 Set">2 Set</option>
                                   <option value="3 Set">3 Set</option>
                                   <option value="4 Set">4 Set</option>
                                   <option value="5 Set">5 Set</option>
                                </select>
                              </div>
                           </div>
                        </div>
                          <div class="col-xl-6">
                           <div class="form-group row">
                              <label class="col-lg-12 col-form-label">Price</label>
                            <div class="col-lg-12">
                                 <input type="text" class="form-control" value="$63">
                              </div>
                           </div>
                        </div>
                       
                        <div class="col-xl-6">
                           <div class="form-group row">
                              <label class="col-lg-12 col-form-label">Amount</label>
                              <div class="col-lg-12">
                                 <input type="text" class="form-control" value="zmw 5000">
                              </div>
                           </div>
                        </div>
                     </div>
                  </form>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-success">Save</button>
               <button type="button" class="btn btn-dark" data-dismiss="modal">Cancel</button>
            </div>
         </div>
      </div>
   </div>
@endsection