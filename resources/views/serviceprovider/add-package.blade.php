@extends('serviceprovider.layouts.app')
@section('title', 'Add Package')
@section('content')
   <div class="content container-fluid">
      <div class="page-header">
         <div class="row">
            <div class="col">
               <h3 class="page-title">Add Package</h3>
            </div>
            <div class="col-auto text-right">
               <a class="btn btn-secondary" href="{{route('seller.packages')}}">
               Back
               </a>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12">
            <div class="card">
               <div class="card-body">
                  <!-- <h4 class="card-title">Password Settings</h4> -->
                  <form action="#">
                     <div class="row">
                        <div class="col-xl-6">
                           <div class="form-group row">
                              <label class="col-lg-12 col-form-label">Package Title</label>
                              <div class="col-lg-12">
                                 <input type="text" class="form-control">
                              </div>
                           </div>
                        </div>
            <div class="col-xl-6">
                           <div class="form-group row">
                              <label class="col-lg-12 col-form-label">Vehicles </label>
                              <div class="col-lg-12">
                                

                                  <div class="inline field">
                                     <select name="Vehicles" multiple="" class="label ui selection fluid dropdown">
                                       <option value="">Select Option</option>
                                       <option value="1">Hundai Verna</option>
                                       <option value="2">Hundai Careta</option>
                                       <option value="3">Toyota Fortuner</option>
                                       <option value="4">Maruti Suzuki Swift</option>
                                       <option value="5">Audi Q7</option>
                                       <option value="6">BMW 525</option>
                                     </select>
                                   </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-6">
                           <div class="form-group row">
                              <label class="col-lg-12 col-form-label">Services</label>
                              <div class="col-lg-12">
                                

                                  <div class="inline field">
                                     <select name="skills" multiple="" class="label ui selection fluid dropdown">
                                       <option value="">Select Option</option>
                                       <option value="1">Brake Safety Inspection</option>
                                       <option value="2">Pad and Motar Replacement</option>
                                       <option value="3">Pad Replacement</option>
                                       <option value="4">Shoe Replacement</option>
                                       <option value="5">Clean and Adjust </option>
                                       <option value="6">Other</option>
                                     </select>
                                   </div>
                              </div>
                           </div>
                        </div>
                          <div class="col-xl-6">
                           <div class="form-group row">
                              <label class="col-lg-12 col-form-label">Product</label>
                              <div class="col-lg-12">
                                

                                  <div class="inline field">
                                     <select name="skills" multiple="" class="label ui selection fluid dropdown">
                                       <option value="">Select Option</option>
                                       <option value="1">Brake Safety Inspection</option>
                                       <option value="2">Pad and Motar Replacement</option>
                                       <option value="3">Pad Replacement</option>
                                       <option value="4">Shoe Replacement</option>
                                       <option value="5">Clean and Adjust </option>
                                       <option value="6">Other</option>
                                     </select>
                                   </div>
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
                              <label class="col-lg-12 col-form-label">Status</label>
                              <div class="col-lg-12">
                                 <select name="Status" id="Status" class="my-select form-control">
                                    <option value="Active">Active</option>
                                    <option value="Inactive">Inactive</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="text-left">
                        <button type="submit" class="btn btn-primary">Submit</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
@endsection
@section('scripts')
<script type="text/javascript" src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.4.2/bootstrap-tagsinput.min.js"></script>
<script type="text/javascript">
   $(document).ready(function () {
     $('#taginpt').tagsinput({
       trimValue: true,
       confirmKeys: [13, 44, 32],
       focusClass: "my-focus-class"
     });
   
     $(".bootstrap-tagsinput input")
       .on("focus", function () {
         $(this).closest(".bootstrap-tagsinput").addClass("has-focus");
       })
       .on("blur", function () {
         $(this).closest(".bootstrap-tagsinput").removeClass("has-focus");
       });
     });
   
   $(document).ready(function () {
     $(".bootstrap-tagsinput input").addClass('form-control');
   });
   
   
</script>
@endsection