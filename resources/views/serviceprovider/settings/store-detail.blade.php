@extends('serviceprovider.layouts.app2')
@section('title', 'Store Detail')
@section('content')
   <div class="content container-fluid">
      <div class="page-header">
         <div class="row">
            <div class="col">
            <h3 class="page-title">Store Details</h3>
            </div>
         <div class="col-auto text-right">
            <a class="btn btn-secondary" href="{{route('seller.index')}}">Back</a>
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
                              <label class="col-lg-12 col-form-label">Store Name</label>
                              <div class="col-lg-12">
                                 <input type="text" class="form-control" value="Smart Store">
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-6">
                           <div class="form-group row">
                              <label class="col-lg-12 col-form-label">Email Address</label>
                              <div class="col-lg-12">
                                 <input type="text" class="form-control" value="smartstore@gamil.com">
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-6">
                           <div class="form-group row">
                              <label class="col-lg-12 col-form-label">Phone Number</label>
                              <div class="col-lg-12">
                                 <input type="tel" class="form-control" value="+123456789">
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-6">
                           <div class="form-group row">
                              <label class="col-lg-12 col-form-label">Address</label>
                              <div class="col-lg-12">
                                 <input type="text" class="form-control" value="31 Avenew Road">
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-6">
                           <div class="form-group row">
                              <label class="col-lg-12 col-form-label">Country</label>
                              <div class="col-lg-12">
                                 <input type="text" class="form-control" value="USA">
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-6">
                           <div class="form-group row">
                              <label class="col-lg-12 col-form-label">State</label>
                              <div class="col-lg-12">
                                 <input type="text" class="form-control" value="Florida">
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-6">
                           <div class="form-group row">
                              <label class="col-lg-12 col-form-label">City</label>
                              <div class="col-lg-12">
                                 <input type="text" class="form-control" value="Mexico">
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-6">
                           <div class="form-group row">
                              <label class="col-lg-12 col-form-label">Zip Code</label>
                              <div class="col-lg-12">
                                 <input type="text" class="form-control" value="236636">
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-6">
                           <div class="form-group row">
                              <label class="col-lg-12 col-form-label">Opening Hours</label>
                              <div class="col-lg-12">
                        <input type="time" class="form-control" value="">
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-6">
                           <div class="form-group row">
                              <label class="col-lg-12 col-form-label">Closing Hours</label>
                              <div class="col-lg-12">
                        <input type="time" class="form-control" value="">
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
@endsection