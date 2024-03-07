@extends('serviceprovider.layouts.app')
@section('title', 'Products')
@section('content')

 <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
   <div class="content container-fluid add-product-page">
      <div class="page-header">
         <div class="row">
            <div class="col">
               <h3 class="page-title">Add Product</h3>
            </div>
            <div class="col-auto text-right">
               <a class="btn btn-secondary" href="{{route('seller.search_product')}}">
                  Back
               </a>
            </div>
         </div>
        
      </div> 
	   <form method="POST" id="product_form" name="product_form"  enctype="multipart/form-data" action="{{route('seller.save_product')}}">
      <div class="row">
         <div class="col-md-8">
            <div class="card mb-4"> 
               <div class="card-body">
                     <div class="row">
					 
						<div class="col-lg-12 mb-3">
										 <div class="form-group">
										  <label class="col-form-label">Product Type  </label>
										   <select name="status" id="status" class="my-select form-control">
								   
                                    <option  data-display="Select a category" >Select a category</option>
                                    <option value="Parts ">Parts</option>
                                    <option value="Accessories ">Accessories </option>
                                 </select>
										</div>
									</div>
						<div class="col-xl-12">
                            <div class="form-group">
                              <label class="col-form-label">Title</label>
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
								<div class="checkbox">
                                    <label class="mb-3" for="chkphyprdct">
                                       <input type="checkbox" name="checkbox" id="chkphyprdct"> This is a physical product 
                                    </label>
                                 </div> 
								 
								 <div class="row" id="chkprdctwgt" style="display: none">
									<div class="col-lg-6">
										 <div class="form-group">
										  <label class="col-form-label">Brand  </label>
										   <input type="text" id="" class="form-control" name="" value="">
										</div>
									</div>
									<div class="col-lg-6">
										 <div class="form-group">
										  <label class="col-form-label">Condition  </label>
										   <select name="status" id="status" class="my-select form-control">
								   
                                    <option value="Used">Used</option>
                                    <option value="New">New</option>
                                    <option value="Pre-owned">Pre-owned</option>
                                 </select>
										</div>
									</div>
								 </div>
						</div>
                     </div>
               </div>
            </div>
			
			 <div class="card mb-4">
               <div class="card-body">
					<h4 class="cardTitle">Offer</h4>
                    <div class="row">
							<div class="col-md-6">
								<div class="form-group row">
								  <label class="col-lg-12 col-form-label">Format </label>
								   <div class="col-lg-12">
									 <select name="status" id="status" class="my-select form-control">
										<option value="Fixed Price">Fixed Price</option>
										<option value="Auction">Auction</option>
										<option value="Hire Purchase">Hire Purchase</option>
									 </select>
								  </div>
							    </div>
							</div>
							<div class="col-md-6">
								<div class="form-group row">
								  <label class="col-lg-12 col-form-label">Price </label>
								   <div class="col-lg-12">
									 <input type="text" id="" class="form-control" name="" value="">
								  </div>
							    </div>
							</div>
							<div class="col-md-6">
								<div class="form-group row">
								  <label class="col-lg-12 col-form-label">Discount & Type </label>
								   <div class="col-lg-12">
									 <select name="status" id="status" class="my-select form-control">
										<option value="Fixed Price">35% off up to $ 99.00 </option>
										<option value="Auction">15% off up to $ 199.00</option>
									 </select>
								  </div>
							    </div>
							</div>
							
							<div class="col-md-6">
								<div class="form-group row">
								  <label class="col-lg-12 col-form-label">Usage Unit </label>
								   <div class="col-lg-12">
									 <input type="text" id="" class="form-control" name="" value="">
								  </div>
							    </div>
							</div>
							
							<div class="col-md-12">
								<div class="checkbox">
                                    <label class="mb-3">
                                       <input type="checkbox" name="checkbox"> Charge tax on this product. 
                                    </label>
                                 </div> 
							</div>
						 
						 </div>
               </div>
            </div>
			
			
			 <div class="card mb-4">
               <div class="card-body">
					<h4 class="cardTitle">Inventory</h4>
					 <div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  <label>SKU </label>
								   <input type="text" id="" class="form-control" name="" value="">
							    </div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  <label class="">Product Code </label>
								  <input type="text" id="" class="form-control" name="" value="">
							    </div>
							</div>
							
							<div class="col-md-12">
								<div class="checkbox">
                                    <label class="mb-3" for="chkphyprdct1">
                                       <input type="checkbox" name="checkbox" id="chkphyprdct1"> Track quantity
                                    </label>
                                 </div> 
								 <div class="inventry-quantity-row" id="chkprdctwgt1" style="display: none">
									 <div class="row" >
									<div class="col-lg-6">
										 <div class="form-group">
										  <label class="col-form-label">Location  </label>
										   <input type="text" id="" class="form-control" name="" value="">
										</div>
									</div>
									
									<div class="col-lg-6">
										 <div class="form-group">
										  <label class="col-form-label">Quantity  </label>
										   <input type="number" id="" class="form-control" name="" value="0">
										</div>
									</div>
									
								 </div>
								 </div>
								
						</div>
						  
						 </div> 
				</div>
			</div>
			
			 <div class="card mb-4">
               <div class="card-body">
					<h4 class="cardTitle">Shipping </h4>
					 <div class="row">
							
							<div class="col-md-12 mt-2">
								<div class="checkbox">
                                    <label class="mb-3" for="chkphyprdct2">
                                       <input type="checkbox" name="checkbox" id="chkphyprdct2"> I will ship this product
                                    </label>
                                 </div> 
								 <div class="shipping-row" id="chkprdctwgt2" style="display: none">
								 <div class="row">
									<div class="col-lg-12">
										 <div class="shipping-descriptions">
										     <label class="mb-3 d-block" for="shipcheckbox2">
                                                <input type="checkbox" name="checkbox" id="shipcheckbox2"> I will ship this item myself (Merchant Fulfilled).
                                            </label>
										    <label class="d-block" for="shipcheckbox3">
                                                <input type="checkbox" name="checkbox" id="shipcheckbox3"> Roadsmart will ship and provide customer service (Fulfilled by Roadsmart)
                                            </label>
										 </div>
									</div>
									
									<div class="col-lg-6 mt-3">
										 <div class="form-group">
										  <label class="col-form-label">Weight  </label>
										    <div class="weight_field"> 
										        <input type="number" id="" class="form-control weightcount" name="" value="">
										        <input type="text" id="" class="form-control weight_control" name="" value="Kg">
										    </div>
										</div>
									</div>
									
								 </div>
								 </div>
						</div>
						  
						 </div> 
				</div>
			</div>
			 <div class="card mb-4">
               <div class="card-body">
					<h4 class="cardTitle">Options </h4>
					<div class="row mt-3">
							<div class="col-md-12">
								<div class="checkbox">
                                    <label class="mb-2" for="chkprdctoptions">
                                       <input type="checkbox" name="checkbox" id="chkprdctoptions"> This product has options, like size or color
                                    </label>
                                 </div> 
							</div>
							<div class="col-md-12 chkprdctopts" id="chkprdctopts" style="display: none">
								<div class="chkprdctopts-repeat ">
									<div class="row">
									<div class="col-lg-12 mb-3">
										<div class="form-group ">
										  <label>Option name </label>
										   <select name="status" id="" class="my-select form-control">
											<option value="Size">Size</option>
											<option value="Color">Color</option>
											<option value="Material">Material</option>
											<option value="Style">Style</option>
										 </select>
										 <button type="button" id="" class="btn btn-primary clone-remove" name="" value=""><i  class="fa fa-trash"></i></button>
										</div>
									</div>
									
									<div class="col-lg-12">
										<div class="form-group">
											  <label>Option values </label>
											   <input type="text" id="" class="form-control" name="" value="">
										</div>
									</div>
									</div>
									</div>
									<div class="chkprdctopts-output"></div>
									<div class="addmoreoption-row">
										<button type="button" id="" class="btn btn-primary clone-btn" name="" value="">Add More Option</button> 
									</div>
									
								
								   
								
							</div>
							
							
						 </div>
				</div>
			</div>
			 <div class="card mb-4">
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
			
			
			 <div class="card mb-4">
               <div class="card-body fitmentCarbody">
					<div class="d-flex justify-content-between mb-3 align-items-center">
						<h4 class="cardTitle mb-0">Fitment Details</h4>
						<a id="fitmentAdd" class="fitmentAdd btn btn-primary" href="javascript:void(0);"> <i class="fa fa-plus"></i> Add</a>
					</div>
					
					 <!--div class="row">
						<div class="col-lg-12">
							<div class="form-group">
								<div class="inline field">
                                    <select name="vehicles[]" multiple="" class="label ui selection fluid dropdown" id="all-vehicles">
                                       <option value="" disabled <?php if(old('vehicles') == '') echo 'selected'; ?>>Select Vehicle</option>
                                       <option value="1" <?php if(old('vehicles') == '1') echo 'selected'; ?>>Hundai Verna</option>
                                       <option value="2" <?php if(old('vehicles') == '2') echo 'selected'; ?>>Hundai Careta</option>
                                       <option value="3" <?php if(old('vehicles') == '3') echo 'selected'; ?>>Toyota Fortuner</option>
                                       <option value="4" <?php if(old('vehicles') == '4') echo 'selected'; ?>>Maruti Suzuki Swift</option>
                                       <option value="5" <?php if(old('vehicles') == '5') echo 'selected'; ?>>Audi Q7</option>
                                       <option value="6" <?php if(old('vehicles') == '6') echo 'selected'; ?>>BMW 525</option>
                                    </select>
                                 </div>
							</div>
						</div>
					</div-->
					
					    <div class="viewBox fitmentTable table-responsive pt-3 product-add-table">
						<div class="fitmentTablerepeat">
                     <table class="table">
                        <tbody>
                           <tr>
							  
                              <th class="text-center"> Make </th>
                              <th class="text-center "> Model </th>
                              <th class="text-center "> Year </th>
							   <th class="text-center "> Submodel  </th>
							   <th class="text-center "> Variant  </th>
                              <th class="text-center"> Engine </th>
                           </tr>
                           <tr>
						     
                              <td class="text-left  pl-0">
								  <select name="status" id="status" class="my-select form-control">
										<option value="2020">2020</option>
										<option value="2021">2021</option>
									 </select>
							  </td>
                              <td class="text-center">
								  <select name="status" id="status" class="my-select form-control">
										<option value="2020">2020</option>
										<option value="2021">2021</option>
									 </select>
                              </td>
							  
                              <td>
                                  <select name="status" id="status" class="my-select form-control">
										<option value="2020">2020</option>
										<option value="2021">2021</option>
									 </select>
                              </td>
							  
							   <td class="text-center">
                                <select name="vehicle" class="my-select  form-control">
								   <option value="">Rarger </option>
								   <option value="">Audi</option>
								</select>
                              </td>
							  
							   <td>
                                  <select name="status" id="status" class="my-select form-control">
										<option value="330i">330</option>
										<option value="840i">840</option>
									 </select>
                              </td>
							  
							  <td>
                                  <select name="status" id="status" class="my-select form-control">
										<option value="330i">330i</option>
										<option value="840i">840i</option>
									 </select> 
                              </td>
							  
                             
                           </tr>
                           
                        </tbody> 
                     </table>
					 </div>
					 <div class="fitmentTable-output">
					 
					 </div>
                  </div>
               
					
			   </div>
			    
			 </div>
			  <div class="text-left mt-4 mb-4">
                        <!--button type="submit" class="btn btn-primary product-save-btn">Save</button-->
                        <button type="button" class="btn btn-primary product-save-btn">Request</button>
                     </div>
			
         </div>
		 
		 <div class="col-md-4">
            <div class="card mb-4">
               <div class="card-body">
					<h4 class="cardTitle">Product Status</h4>
					 <div class="row">
							<div class="col-md-12">
								<div class="form-group">
								   <select name="status" id="status" class="my-select form-control">
										<option value="Active">Active</option>
										<option value="Draft">Draft</option>
									 </select>
							    </div>
								
							</div>
							<div class="mt-3 col-md-12">
								<p>This product will be hidden from all sales channels.</p>
							</div>
					</div>
					
						
					
					<div class="card-checklists">
					
						<h4 class="cardTitle mb-4">Sales Channels</h4>
						
						<div class="channel-select-lists">
							<label for="channel-select-all" class="channel-select-all">
                                       <input class="mr-2" type="checkbox" id="channel-select-all" name="">Select All
                                    </label> 
					
						<div class="form-group">
								   <label for="onlinestore">
                                       <input class="mr-2" type="checkbox" name="" id="onlinestore">Online Store
                                    </label>
							    </div>
								<div class="form-group">
								   <label for="marketplace">
                                       <input class="mr-2" type="checkbox" name="" id="marketplace">Service Marketplace 

                                    </label>
							    </div>
						</div>
						
						
					</div>
			   </div>
			 </div>
			 
			 
			 <div class="card mb-4">
               <div class="card-body">
					<h4 class="cardTitle">Product Organization </h4>
					 <div class="row">
							<div class="col-md-12 mb-3">
								<div class="form-group">
								  <label class="col-form-label">Type   </label>
								   <select name="status" id="status" class="my-select form-control">
										<option value="Break Pad">Break Pad</option>
										<option value="Rotor Replacement">Rotor Replacement</option>
									 </select>
							    </div>
							</div>
							
							<div class="col-md-12">
								<div class="form-group">
								  <label class="col-form-label">Vendor   </label>
							     <input type="text" id="" class="form-control" name="" value="">
							    </div>
							</div>
							
							
							<div class="col-md-12 mb-3">
								<div class="form-group">
								  <label class="col-form-label">Bundle    </label>
								   <select name="" id="" class="my-select form-control">
										<option value="Bundle">Bundle</option>
										<option value="Bundle 2">Bundle 2</option>
									 </select>
							    </div>
							</div>
							
							<div class="col-md-12">
								<div class="form-group">
								  <label class="col-form-label">Tags    </label>
								    <div class="chat-search">
									 <div class="input-group">
										<input type="text" id="exist-values" class="tagged form-control px-3" data-removeBtn="true" placeholder="Add Tags">
									 </div>
								  </div>
							    </div>
							</div>
							
					</div>
			   </div>
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