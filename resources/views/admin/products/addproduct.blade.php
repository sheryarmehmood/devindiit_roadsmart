@extends('admin.layouts.app1')
@section('title', 'Edit Products')
@section('content')

 <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
   <div class="content container-fluid add-product-page">
      <div class="page-header">
         <div class="row">
            <div class="col">
               <h3 class="page-title">Add Product</h3>
            </div>
            <div class="col-auto text-right">
               <a class="btn btn-secondary" href="{{route('admin.product')}}">
                  Back
               </a>
            </div>
         </div>
        
      </div> 
	   <form method="POST" id="product_form" name="product_form"  enctype="multipart/form-data" action="{{route('seller.save_product')}}">
      <div class="row">
         <div class="col-md-12">
            <div class="card mb-4"> 
               <div class="card-body">
                     <div class="row">
                        <div class="col-xl-12">
                            <div class="form-group">
                              <label class="col-form-label">Product Name</label>
                               <input type="text" id="" class="form-control" name="" value="">
                           </div>
                        </div>
						<div class="col-lg-12 ">
							<div class="form-group">
							    <label class="col-form-label">Product Category </label>
							    <select name="status" id="status" class="my-select form-control">
                                    <option  data-display="Select a category" >Select a category</option>
                                    <option value="Parts ">Parts</option>
                                    <option value="Accessories ">Accessories </option>
                                </select>
							</div>
						</div>
						<div class="col-xl-12">
                            <div class="form-group">
                              <label class="col-form-label">Make</label>
                               <input type="text" id="" class="form-control" name="" value="">
                           </div>
                        </div>
                        <div class="col-md-12">
								<div class="form-group">
								  <label class="col-form-label">Vendor   </label>
							     <input type="text" id="" class="form-control" name="" value="">
							    </div>
						</div>
                        <div class="col-xl-12">
                            <div class="form-group">
                              <label class="col-form-label">Brand Name</label>
                               <input type="text" id="" class="form-control" name="" value="">
                           </div>
                        </div>
						
						<div class="col-xl-12">
                            <div class="form-group">
                              <label class="col-form-label">Description   </label>
                               <textarea id="summernote">Break Pad and Rotor</textarea>
                           </div>
                        </div>
                        <div class="col-md-12">
							<div class="form-group">
								  <label class="col-form-label">Purchase Price </label>
							     <input type="text" id="" class="form-control" name="" value="">
						    </div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								  <label class="col-form-label">Sale Price</label>
							     <input type="text" id="" class="form-control" name="" value="">
							    </div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
							  <label class="col-form-label">SKU</label>
							    <div class="chat-search">
								 <div class="input-group">
									<input type="text" id="exist-values" class="tagged form-control px-3" data-removeBtn="true" placeholder="Add Tags">
								 </div>
							  </div>
						    </div>
						</div>
					    <div class="col-md-6">
							<div class="form-group row">
								  <label class="col-lg-12 col-form-label">Tyre Size</label>
								   <div class="col-lg-12">
									 <input type="text" id="" class="form-control" name="" value="">
								  </div>
						    </div>
						</div>
						<div class="col-md-6">
							<div class="form-group row">
							  <label class="col-lg-12 col-form-label">Quantity </label>
							   <div class="col-lg-12">
								 <input type="text" id="" class="form-control" name="" value="">
							  </div>
						    </div>
						</div>
						<div class="col-md-6">
							<div class="form-group row">
							  <label class="col-lg-12 col-form-label">Location</label>
							    <div class="col-lg-12">
								 <input type="text" id="" class="form-control" name="" value="">
							    </div>
						    </div>
						</div>
						<div class="col-md-6">
							<div class="form-group row">
							  <label class="col-lg-12 col-form-label">Compatible vehicle </label>
							   <div class="col-lg-12">
								 <input type="text" id="" class="form-control" name="" value="">
							  </div>
						    </div>
						</div>
						<div class="col-md-6">
							<div class="form-group row">
							  <label class="col-lg-12 col-form-label"> Model Year </label>
							   <div class="col-lg-12">
								 <input type="text" id="" class="form-control" name="" value="">
							  </div>
						    </div>
						</div>
						<div class="col-xl-6">
                        	<div class="form-group">
                        	    <label class="col-form-label">Status </label>
							   <select name="status" id="status" class="my-select form-control">
									<option value="Active">In a Stock</option>
									<option value="Draft">Out of Stock</option>
								 </select>
						    </div>
						</div>
                    </div>
               </div>
            </div>
			<!--<div class="card mb-4">-->
   <!--             <div class="card-body">-->
			<!--		<h4 class="cardTitle">Seller </h4>-->
   <!--                 <div class="row">-->
			<!--			<div class="col-md-6">-->
			<!--				<div class="form-group row">-->
			<!--				  <label class="col-lg-12 col-form-label">Interior Color</label>-->
			<!--				   <div class="col-lg-12">-->
			<!--					 <input type="text" id="" class="form-control" name="" value="">-->
			<!--				  </div>-->
			<!--			    </div>-->
			<!--			</div>-->
			<!--			<div class="col-md-6">-->
			<!--				<div class="form-group row">-->
			<!--				  <label class="col-lg-12 col-form-label">Exterior Color </label>-->
			<!--				   <div class="col-lg-12">-->
			<!--					 <input type="text" id="" class="form-control" name="" value="">-->
			<!--				  </div>-->
			<!--			    </div>-->
			<!--			</div>-->
			<!--			<div class="col-md-6">-->
			<!--				<div class="form-group row">-->
			<!--				  <label class="col-lg-12 col-form-label">Sub Category  </label>-->
			<!--				   <div class="col-lg-12">-->
			<!--					 <select name="status" id="status" class="my-select form-control">-->
			<!--						<option value="Fixed Price">35% off up to $ 99.00 </option>-->
			<!--						<option value="Auction">15% off up to $ 199.00</option>-->
			<!--					 </select>-->
			<!--				  </div>-->
			<!--			    </div>-->
			<!--			</div>-->
			<!--			<div class="col-md-6">-->
			<!--				<div class="form-group row">-->
			<!--				  <label class="col-lg-12 col-form-label">Engine</label>-->
			<!--				   <div class="col-lg-12">-->
			<!--					 <input type="text" id="" class="form-control" name="" value="">-->
			<!--				  </div>-->
			<!--			    </div>-->
			<!--			</div>-->
			<!--			<div class="col-md-6">-->
			<!--				<div class="form-group row">-->
			<!--				  <label class="col-lg-12 col-form-label">Fuel</label>-->
			<!--				   <div class="col-lg-12">-->
			<!--					 <input type="text" id="" class="form-control" name="" value="">-->
			<!--				  </div>-->
			<!--			    </div>-->
			<!--			</div>-->
			<!--			<div class="col-md-6">-->
			<!--				<div class="form-group row">-->
			<!--				  <label class="col-lg-12 col-form-label">Condition</label>-->
			<!--				   <div class="col-lg-12">-->
			<!--					 <input type="text" id="" class="form-control" name="" value="">-->
			<!--				  </div>-->
			<!--			    </div>-->
			<!--			</div>-->
			<!--			<div class="col-md-6">-->
			<!--				<div class="form-group row">-->
			<!--				  <label class="col-lg-12 col-form-label">Transmission</label>-->
			<!--				   <div class="col-lg-12">-->
			<!--					 <input type="text" id="" class="form-control" name="" value="">-->
			<!--				  </div>-->
			<!--			    </div>-->
			<!--			</div>-->
						
			<!--			<div class="col-md-6">-->
			<!--				<div class="form-group row">-->
			<!--				  <label class="col-lg-12 col-form-label">Stock Number</label>-->
			<!--				   <div class="col-lg-12">-->
			<!--					 <input type="text" id="" class="form-control" name="" value="">-->
			<!--				  </div>-->
			<!--			    </div>-->
			<!--			</div>-->
			<!--			<div class="col-md-6">-->
			<!--				<div class="form-group row">-->
			<!--				  <label class="col-lg-12 col-form-label">Milege</label>-->
			<!--				   <div class="col-lg-12">-->
			<!--					 <input type="text" id="" class="form-control" name="" value="">-->
			<!--				  </div>-->
			<!--			    </div>-->
			<!--			</div>-->
			<!--			<div class="col-md-6">-->
			<!--				<div class="form-group row">-->
			<!--				  <label class="col-lg-12 col-form-label">Body Type</label>-->
			<!--				   <div class="col-lg-12">-->
			<!--					 <input type="text" id="" class="form-control" name="" value="">-->
			<!--				  </div>-->
			<!--			    </div>-->
			<!--			</div>-->
			<!--			<div class="col-md-6">-->
			<!--				<div class="form-group row">-->
			<!--				  <label class="col-lg-12 col-form-label">Engine Type</label>-->
			<!--				   <div class="col-lg-12">-->
			<!--					 <input type="text" id="" class="form-control" name="" value="">-->
			<!--				  </div>-->
			<!--			    </div>-->
			<!--			</div>-->
			<!--			<div class="col-md-6">-->
			<!--				<div class="form-group row">-->
			<!--				  <label class="col-lg-12 col-form-label">Brand Name</label>-->
			<!--				   <div class="col-lg-12">-->
			<!--					 <input type="text" id="" class="form-control" name="" value="">-->
			<!--				  </div>-->
			<!--			    </div>-->
			<!--			</div>-->
			<!--			<div class="col-md-6">-->
			<!--				<div class="form-group row">-->
			<!--				  <label class="col-lg-12 col-form-label">Views</label>-->
			<!--				   <div class="col-lg-12">-->
			<!--					 <input type="text" id="" class="form-control" name="" value="">-->
			<!--				  </div>-->
			<!--			    </div>-->
			<!--			</div>-->
			<!--			<div class="col-md-6">-->
			<!--				<div class="form-group row">-->
			<!--				  <label class="col-lg-12 col-form-label">Popular</label>-->
			<!--				   <div class="col-lg-12">-->
			<!--					 <input type="text" id="" class="form-control" name="" value="">-->
			<!--				  </div>-->
			<!--			    </div>-->
			<!--			</div>-->
			<!--			<div class="col-md-6">-->
			<!--				<div class="form-group row">-->
			<!--				  <label class="col-lg-12 col-form-label">Featured</label>-->
			<!--				   <div class="col-lg-12">-->
			<!--					 <input type="text" id="" class="form-control" name="" value="">-->
			<!--				  </div>-->
			<!--			    </div>-->
			<!--			</div>-->
			<!--			<div class="col-md-6">-->
			<!--				<div class="form-group row">-->
			<!--				  <label class="col-lg-12 col-form-label">Image</label>-->
			<!--				   <div class="col-lg-12">-->
			<!--					 <input type="file" id="" class="form-control" name="" value="">-->
			<!--				  </div>-->
			<!--			    </div>-->
			<!--			</div>-->
			<!--		</div>-->
   <!--             </div>-->
   <!--         </div>-->
			<!--<div class="card mb-12">-->
   <!--            <div class="card-body">-->
			<!--		<h4 class="cardTitle">Inventory</h4>-->
			<!--		 <div class="row">-->
			<!--				<div class="col-md-6">-->
			<!--					<div class="form-group">-->
			<!--					  <label>SKU </label>-->
			<!--					   <input type="text" id="" class="form-control" name="" value="">-->
			<!--				    </div>-->
			<!--				</div>-->
			<!--				<div class="col-md-6">-->
			<!--					<div class="form-group">-->
			<!--					  <label class="">Product Code </label>-->
			<!--					  <input type="text" id="" class="form-control" name="" value="">-->
			<!--				    </div>-->
			<!--				</div>-->
							
			<!--				<div class="col-md-12">-->
			<!--					<div class="checkbox">-->
   <!--                                 <label class="mb-3" for="chkphyprdct1">-->
   <!--                                    <input type="checkbox" name="checkbox" id="chkphyprdct1"> Track quantity-->
   <!--                                 </label>-->
   <!--                              </div> -->
			<!--					 <div class="inventry-quantity-row" id="chkprdctwgt1" style="display: none">-->
			<!--						 <div class="row" >-->
			<!--						<div class="col-lg-6">-->
			<!--							 <div class="form-group">-->
			<!--							  <label class="col-form-label">Location  </label>-->
			<!--							   <input type="text" id="" class="form-control" name="" value="">-->
			<!--							</div>-->
			<!--						</div>-->
									
			<!--						<div class="col-lg-6">-->
			<!--							 <div class="form-group">-->
			<!--							  <label class="col-form-label">Quantity  </label>-->
			<!--							   <input type="number" id="" class="form-control" name="" value="0">-->
			<!--							</div>-->
			<!--						</div>-->
									
			<!--					 </div>-->
			<!--					 </div>-->
								
			<!--			</div>-->
						  
			<!--			 </div> -->
			<!--	</div>-->
			<!--</div>-->
			<div class="card col-12">
                <div class="card-body">
					<h4 class="cardTitle">Media  </h4>
    				<div class="row">
						<div class="col-lg-12">
							<div class="form-group mb-0">
								 <label class="fileupload" for="uploadimg">
                                    <i class="fa fa-upload"></i>
                                    <h3>Image Upload</h3>
                                 </label>
                                 <input  id="uploadimg" name="uploadimg" style="display:none" type="file" accept=".png, .jpg, .jpeg">
							</div>
                              <div class="formimg" style="display: none;">
                                 <img id ="imagePreview" src="assets/img/engine.jpg">
                                 <i class="fa fa-trash deleteimg"></i>
                              </div>   
                        </div>
					</div> 
				</div>
			</div>
			<div class="text-right mt-4 mb-4">
                <button type="submit" class="btn btn-primary product-save-btn">Save</button>
            </div>
         </div>
      </div>
	   </form>
   </div>
	   @endsection
   @section('scripts')
   
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script>
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


$(function () {
        $("#chkphyprdct1").click(function () {
            if ($(this).is(":checked")) {
                $("#chkprdctwgt1").show();
            } else {
                $("#chkprdctwgt1").hide();
            }
        }); 
    }); 



$(function () {
        $("#chkphyprdct2").click(function () {
            if ($(this).is(":checked")) {
                $("#chkprdctwgt2").show();
            } else {
                $("#chkprdctwgt2").hide();
            }
        }); 
    });

$(function() {
  $('#all-vehicles').change(function(){
    $('.fitmentTable').show();
  });
});
$(document).ready(function(){
  $("#fitmentAdd").click(function(){
    $(".fitmentTable").show();
  });
});   
   
   $("#channel-select-all").click(function() {
	$(".channel-select-lists input[type=checkbox]").prop("checked", $(this).prop("checked"));
});

$(".channel-select-lists input[type=checkbox]").click(function() {
	if (!$(this).prop("checked")) {
		$("#channel-select-all").prop("checked", false);
	}
});
   

</script>


<script>

$('textarea#summernote').summernote({
        placeholder: '',
        tabsize: 2,
        height: 100,
  toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'italic', 'underline', 'clear']],
        // ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],
        //['fontname', ['fontname']],
       // ['fontsize', ['fontsize']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['height', ['height']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'hr']],
        //['view', ['fullscreen', 'codeview']],
        ['help', ['help']]
      ],
      });

</script>

   @endsection