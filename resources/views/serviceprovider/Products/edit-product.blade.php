@extends('serviceprovider.layouts.app')
@section('title', 'Edit Products')
@section('content')
   <div class="content container-fluid">
      <div class="page-header">
         <div class="row">
            <div class="col">
               <h3 class="page-title">Edit Product</h3>
            </div>
            <div class="col-auto text-right">
               <a class="btn btn-secondary" href="{{route('seller.products')}}">
               Back
               </a>
            </div>
         </div>
      </div>
      <div id="response">
                              @if(Session::has('message'))
                              <div class="alert alert-success alert-dismissable">
                                 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                 {{ Session::get('message') }}
                              </div>
                              @endif
                              @if(Session::has('error'))
                              <div class="alert alert-danger alert-dismissable">
                                 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                 {{ Session::get('error') }}
                              </div>
                              @endif
                              @if ($errors->any())
                              <div class="alert alert-danger">
                                 <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                 </ul>
                              </div>
                              @endif
                           </div>
      <div class="row">
         <div class="col-md-12">
            <div class="card">
               <div class="card-body">
                  <form method="POST" id="product_form" name="product_form"  enctype="multipart/form-data" action="{{route('seller.update_product')}}">
                     @csrf
                     <input type="hidden" name="product_id" id="product_id" value="{{$getDetails->id}}"> 
                     <div class="row">
                        <div class="col-xl-6">
                           <div class="form-group row " onsubmit="return false;">
                              <label class="col-lg-12 col-form-label">Product Name</label>
                              <div class="col-lg-12">
                                <input type="text" id="product_name" name="product_name" class="form-control" value="{{$getDetails->product_name}}">
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-6">
                           <div class="form-group row " onsubmit="return false;">
                              <label class="col-lg-12 col-form-label">Vendor Name</label>
                              <div class="col-lg-12">
                                <input type="text" id="vendor_name" name="vendor_name" class="form-control" value="{{$getDetails->vendor}}">
                              </div>
                           </div>
                        </div>
                  <div class="col-xl-6">
                           <div class="form-group row " onsubmit="return false;">
                              <label class="col-lg-12 col-form-label">Brand Name</label>
                              <div class="col-lg-12">
                                <input type="text" id="brand_name" name="brand_name" class="form-control" value="{{$getDetails->brand_name}}">
                              </div>
                           </div>
                        </div>
                  <div class="col-xl-6">
                           <div class="form-group row " onsubmit="return false;">
                              <label class="col-lg-12 col-form-label">SKU</label>
                              <div class="col-lg-12">
                                <input type="text" id="sku_no" name="sku_no" class="form-control" value="{{$getDetails->SKU}}">
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-12">
                           <div class="form-group row">
                              <label class="col-lg-12 col-form-label">Description</label>
                              <div class="col-lg-12">
                                <textarea class="form-control" name="description" id='description'>{{$getDetails->description }}</textarea>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-6">
                           <div class="form-group row">
                              <label class="col-lg-12 col-form-label"> Purchase Price</label>
                              <div class="col-lg-12">
                                 <input type="number" class="form-control" id="cost_price" name="cost_price" value="{{$getDetails->purchase_price}}">
                              </div>
                           </div>
                        </div>
                  <div class="col-xl-6">
                           <div class="form-group row">
                              <label class="col-lg-12 col-form-label"> Selling Price</label>
                              <div class="col-lg-12">
                                 <input type="text" class="form-control"  id="selling_price" name="selling_price" value="{{$getDetails->sale_price}}">
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-6">
                           <div class="form-group row " onsubmit="return false;">
                              <label class="col-lg-12 col-form-label">Discount</label>
                              <div class="col-lg-12">
                                  <input type="number" id="discount" class="form-control" name="discount" value="{{$getDetails->discount}}">
                              </div>
                           </div>
                        </div>
                  <div class="col-xl-6">
                           <div class="form-group row " onsubmit="return false;">
                              <label class="col-lg-12 col-form-label">Tyre Size <small class="text-danger"> (For tire products only*) </small></label>
                              <div class="col-lg-12">
                                 <input type="text" id="tyre_size" name="tyre_size" class="form-control" value="{{$getDetails->tyre_size}}">
                              </div>
                           </div>    
                        </div>
                  <div class="col-xl-6">
                           <div class="form-group row">
                              <label class="col-lg-12 col-form-label">Compatible Vehicles </label>
                              <div class="col-lg-12">
                                 <div class="inline field">
                                    <select name="vehicles[]" multiple="" class="label ui selection fluid dropdown" id="vehicles">
                                       <option value="" disabled <?php if(old('vehicles') == '') echo 'selected'; ?>>Select Option</option>
                                       <option value="1" <?php if($getDetails->compatible_vehicle == '1') echo 'selected'; ?>>Hundai Verna</option>
                                       <option value="2" <?php if($getDetails->compatible_vehicle == '2') echo 'selected'; ?>>Hundai Careta</option>
                                       <option value="3" <?php if($getDetails->compatible_vehicle == '3') echo 'selected'; ?>>Toyota Fortuner</option>
                                       <option value="4" <?php if($getDetails->compatible_vehicle == '4') echo 'selected'; ?>>Maruti Suzuki Swift</option>
                                       <option value="5" <?php if($getDetails->compatible_vehicle == '5') echo 'selected'; ?>>Audi Q7</option>
                                       <option value="6" <?php if($getDetails->compatible_vehicle == '6') echo 'selected'; ?>>BMW 525</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-6">
                     <div class="form-group row">
                        <label class="col-lg-12 col-form-label">Location</label>
                        <div class="col-lg-12">
                           <textarea class="form-control" name="location" id='location'>{{$getDetails->location}}</textarea>
                        </div>
                     </div>
                        </div>
                        <div class="col-xl-6">
                           <div class="form-group row">
                              <label class="col-lg-12 col-form-label">Status</label>
                              <div class="col-lg-12">
                                 <select name="status" id="status" class="my-select form-control">
                                    <option value="instock" <?php if($getDetails->stock_status == 'instock') echo 'selected'; ?>>In Stock</option>
                                    <option value="outofstock" <?php if($getDetails->stock_status == 'outofstock') echo 'selected'; ?>>Out Of Stock</option>
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
                                 <input  id="uploadimg" name="uploadimg" style="display:none" type="file" accept=".png, .jpg, .jpeg">
                              </div>
                              <?php
                                 $image =  asset('/assets/serviceprovider/img/product/'.$getDetails->image); 
                              ?>
                              @if($image != Null)
                              <div class="formimg">
                                 <img id ="imagePreview" src="{{$image}}">
                                 <i class="fa fa-trash deleteimg"></i>
                              </div>
                              @else
                              <div class="formimg" style="display: none;">
                                 <img id ="imagePreview" src="{{$image}}">
                                 <i class="fa fa-trash deleteimg"></i>
                              </div>
                              @endif
                           </div>
                        </div>
                     </div>
                     <div class="text-left">
                        <button type="submit" class="btn btn-primary">Save</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
@endsection

@section('scripts')
<script>
   $(function(){
$('#uploadimg').on('change', function() {
    var file = $(this).get(0).files;
    var reader = new FileReader();
    reader.readAsDataURL(file[0]);
    reader.addEventListener("load", function(e) {
    var image = e.target.result;
    $(".formimg").css("display","block");
    // $('.formimg').style.display = "block";
      $("#imagePreview").attr('src', image);
   });
      });

$('.deleteimg').on('click',function(){
   $("#imagePreview").attr('src', '');
   $(".formimg").css("display","none");
});
   });

    $(function() {
    $("form[name='product_form']").validate({
    // Specify validation rules
    rules: {
    product_name: {
        required: true,
      },
      vendor_name: {
        required: true,
      },
      brand_name: {
        required: true,
      },
      sku_no:{
         required: true
      }, 
      description: {
        required: true,
      },
      cost_price:{
         required:true,
      },
      selling_price:{
         required:true,
      },
      vehicles:{
         required:true,
      },
      location:{
         required:true,
      }
    },
    // Specify validation error messages
    messages: {
      product_name:{
         required: "<strong>Please enter product name</strong>",
      },
      vendor_name:{
         required: "<strong>Please enter vendor name</strong>",
      },
      brand_name: {
          required: "<strong>Please enter brand brand name</strong>",
      },
      sku_no:{
         required: "<strong>Please enter stock keeping unit(sku)</strong>",
        },
      description: {
        required: "<strong>Please enter description about product</strong>",
      },
      cost_price:{
         required:"<strong>Please enter purchase price</strong>",
      },
      vehicles:{
         required:"<strong>Please select compatible vehicles</strong>",
      },
      selling_price:{
         required:"<strong>Please enter selling price</strong>",
      },
      location:{
         required:"<strong>Please enter location</strong>"
      }
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });
});
</script>
@endsection
