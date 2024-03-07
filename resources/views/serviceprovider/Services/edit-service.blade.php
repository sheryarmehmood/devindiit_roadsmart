@extends('serviceprovider.layouts.app')
@section('title', 'Edit Service')
@section('content')
  <div class="content container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col">
          <h3 class="page-title">Edit Service</h3>
        </div>
        <div class="col-auto text-right">
                  <a class="btn btn-secondary" href="services-provider.php">
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
                           <div class="form-group row " onsubmit="return false;">
                              <label class="col-lg-12 col-form-label">Category</label>
                              <div class="col-lg-12">
                                 <select name="category" id="category" class="my-select form-control">
                                    <option value="select">Select Option</option>
                                    <option value="Wheels" selected="">Wheels</option>
                                    <option value="Cleaning">Cleaning</option>
                                    <option value="Dainting">Dainting</option>
                                    <option value="Painting">Painting</option>
                                 </select>
                              </div>
                           </div>
                        </div>
 <div class="col-xl-6">
                           <div class="form-group row">
                              <label class="col-lg-12 col-form-label">Sub Category</label>
                              <div class="col-lg-12">
                                 <select name="Status" id="Status" class="my-select form-control">
                                    <option value="select">Select Option</option>
                                    <option value="Brakes">Brakes</option>
                                    <option value="Electrical" selected>Electrical</option>
                                    <option value="Engine">Engine</option>
                                    <option value="Exhaust">Exhaust</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                         <div class="col-xl-6">
                           <div class="form-group row">
                              <label class="col-lg-12 col-form-label">Service Type</label>
                              <div class="col-lg-12">
                                

                                  <div class="inline field">
                                     <select name="skills" multiple="" class="label ui selection fluid dropdown">
                                       <option value="">Select Option</option>
                                       <option value="1"selected>Brake Safety Inspection</option>
                                       <option value="2" selected>Pad and Motar Replacement</option>
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
<input type="text" class="form-control" value="$62">
</div>
</div>
</div>
 <div class="col-xl-6">
                           <div class="form-group row">
                              <label class="col-lg-12 col-form-label">Compatible Vehicle</label>
                              <div class="col-lg-12">
                                 <input type="text" class="form-control" value="BMW X3">
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-6">
                           <div class="form-group row">
                              <label class="col-lg-12 col-form-label">Brand</label>
                              <div class="col-lg-12">
                                 <input type="text" class="form-control" value="BMW">
                              </div>
                           </div>
                        </div>
<div class="col-xl-6">
<div class="form-group row">
<label class="col-lg-12 col-form-label">Vendor Name</label>
<div class="col-lg-12">
<input type="text" class="form-control" value="John Smith">
</div>
</div>
</div>
<div class="col-xl-6">
<div class="form-group row">
<label class="col-lg-12 col-form-label">Status</label>
<div class="col-lg-12">
 <select name="Status" id="Status" class="form-control">
  <option value="Active">Active</option>
  <option value="Inactive">Inactive</option>
</select>
</div>
</div>
</div>
<div class="col-xl-12">
<div class="form-group row">
<div class="col-lg-12">
  <label class="fileupload" for="uploadimg">
                        <i class="fa fa-upload"></i>
                        <h3>Image Upload</h3>
                     </label>
<input type="file" id="uploadimg" class="form-control" style="display: none;">
</div>
<div class="formimg">
                        <img src="{{ asset('assets/serviceprovider/img/engine.jpg') }}">
                        <i class="fa fa-trash"></i>
                     </div>
</div>
</div>

</div>
<div class="text-left">
<button type="submit" class="btn btn-success">Save</button>
</div>
</form></div>



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