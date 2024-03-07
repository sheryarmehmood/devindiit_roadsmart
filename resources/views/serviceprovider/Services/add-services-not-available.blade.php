@extends('serviceprovider.layouts.app')
@section('title', 'Services')
@section('content')
   <div class="content container-fluid">
      <div class="page-header">
         <div class="row">
            <div class="col">
               <h3 class="page-title">Add Services</h3>
            </div>
            <div class="col-auto text-right">
               <a class="btn btn-secondary" href="{{route('seller.service_search')}}">
                  Back
               </a>
            </div>
         </div>
        
      </div>
      <div class="row">
         <div class="col-md-12">
            <div class="card">
               <div class="card-body">
                  <form method="POST" id="product_form" name="product_form"  enctype="multipart/form-data" action="">
                    
                     <div class="row">
						<div class="col-xl-6">
                            <div class="form-group row">
                              <label class="col-lg-12 col-form-label">Service Type </label>
                              <div class="col-lg-12">
                                 <select name="status" id="status" class="my-select form-control">
								
                                    <option value="cartrucks">Cars & Trucks</option>
                                    <option value="parts">Parts & Accessories</option>
                                 </select>
                              </div>
                           </div>
                        </div>
						
						<div class="col-xl-6">
                            <div class="form-group row">
                              <label class="col-lg-12 col-form-label">Service Category  </label>
                              <div class="col-lg-12">
                                 <select placeholder="Select Option" name="status" id="status" class="my-select form-control">
                                    <option value="body">Body Parts	</option>
                                    <option value="engines">Engines</option>
                                    <option value="Suspension">Suspension </option>
                                    <option value="Electricals">Electricals  </option>
                                    <option value="Other">Other  </option>
                                 </select>
                              </div>
                           </div>
                        </div>
						
						
						 
					  
					  
                     </div>   
                     <div class="text-left mb-4">
                        <a href="{{route('seller.services')}}" class="btn btn-primary ">Save</a>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
	   @endsection
   @section('scripts')
   
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script>

$(function () {
        $("#chkphyprdct").click(function () {
            if ($(this).is(":checked")) {
                $("#chkprdctwgt").show();
            } else {
                $("#chkprdctwgt").hide();
            }
        });
    });
	
	
	$(function () {
        $("#chkprdctoptions").click(function () {
            if ($(this).is(":checked")) {
                $("#chkprdctopts").show();
            } else {
                $("#chkprdctopts").hide();
            }
        });
    });
   

$(".chkprdctopts").on("click", ".clone-remove", function () {
  $(".clone-remove")
    .closest(".chkprdctopts")
    .find(".chkprdctopts-repeat")
    .not(":first")
    .last()
    .remove();
});
$(".chkprdctopts").on("click", ".clone-btn", function () {
  $(".clone-btn")
    .closest(".chkprdctopts")
    .find(".chkprdctopts-repeat")
    .first()
    .clone()
    .appendTo(".chkprdctopts-output");
});


   
</script>

   @endsection