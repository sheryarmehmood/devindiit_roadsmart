@extends('serviceprovider.layouts.app')
@section('title', 'Products')
@section('content')
    <div class="content container-fluid">
        
    <div class="card  flex-fill mt-4">
					<div class="search-products-form">
						<h5>To begin adding products</h5>
						<h1>Find your products in </br> RoadSmart’s catalogue</h1>
						<form>
							<div class="form-group">
                               <div class="input-group">
								<input type="text" class="form-control" id="" placeholder="Product name, UPC, EAN, ISBN or ASIN">
								<a href="javascript:void();" class="search-product-list-btn"> <i class="fa fa-search"></i></a>
							  </div>
                           </div>
						    <p class="additional-links">
								<a class="add-new-product" href="{{route('seller.not_addedon_product')}}"> Add a product not sold on Roadsmart</a>
								<!---a class="add-new-product" href="{{route('seller.addedon_product')}}"> Add a product sold on Roadsmart</a--->
							</p>
						</form>
						 
					</div>
					
					<div class="serched-product-lists" style="display:none;width:100%;">
						      <div class="card-body">
                        <div class="table-responsive"> 
                            <table class="table table-center">
                                <tbody>
                                    <tr>
										<td class="productTitle">Break Pad and Rotor </td>
										<td>Product Code: XX123</td>
                                        <td class="productOffer">Offers : <a href="javascript:void(0);" class="sidebar-toggler"> 23 used and new </a> </td>
                                        <td>
											<div class="search-product-actions">
												 <div class="product-condition">
													<select name="status"  class="form-control">
														<option value="" disabled selected>Select a condition</option>
														<option value="Used">Used</option>
														<option value="New">New</option>
														<option value="Pre-owned">Pre-owned</option>
													 </select> 
												 </div>
												 <a  href="{{route('seller.addedon_product')}}" class="btn btn-primary">Sell this product</a>
											</div>
										</td>
                                     
                                    </tr>   
									
									 <tr>
										<td class="productTitle">Break Pad and Rotor </td>
										<td>Product Code: XX123</td>
                                           <td class="productOffer">Offers : <a href="javascript:void(0);" class="sidebar-toggler"> 23 used and new </a> </td>
                                        <td>
											<div class="search-product-actions">
												 <div class="product-condition">
													<select name="status"  class="form-control">
														<option value="" disabled selected>Select a condition</option>
														<option value="Used">Used</option>
														<option value="New">New</option>
														<option value="Pre-owned">Pre-owned</option>
													 </select> 
												 </div>
												 <a  href="{{route('seller.addedon_product')}}" class="btn btn-primary">Sell this product</a>
											</div>
										</td>
                                     
                                    </tr>  
									
									 <tr>
										<td class="productTitle">Break Pad and Rotor</td>
										<td>Product Code: XX123</td>
                                           <td class="productOffer">Offers : <a href="javascript:void(0);" class="sidebar-toggler"> 23 used and new </a> </td>
                                        <td>
											<div class="search-product-actions">
												 <div class="product-condition">
													<select name="status"  class="form-control">
														<option value="" disabled selected>Select a condition</option>
														<option value="Used">Used</option>
														<option value="New">New</option>
														<option value="Pre-owned">Pre-owned</option>
													 </select> 
												 </div>
												<a  href="{{route('seller.addedon_product')}}" class="btn btn-primary">Sell this product</a>
											</div>
										</td>
                                     
                                    </tr>  
									
									 <tr>
										<td class="productTitle">Break Pad and Rotor </td>
										<td>Product Code: XX123</td>
                                         <td class="productOffer">Offers : <a href="javascript:void(0);" class="sidebar-toggler"> 23 used and new </a> </td>
                                        <td>
											<div class="search-product-actions">
												 <div class="product-condition">
													<select name="status"  class="form-control">
														<option value="" disabled selected>Select a condition</option>
														<option value="Used">Used</option>
														<option value="New">New</option>
														<option value="Pre-owned">Pre-owned</option>
													 </select> 
												 </div>
												 <a  href="{{route('seller.addedon_product')}}" class="btn btn-primary">Sell this product</a>
											</div>
										</td>
                                     
                                    </tr>  
									
                                </tbody>
                            </table>
                        </div>
                    </div> 
              
					</div>
                    <!---div class="card-body px-4 pt-2">
					<a class="btn btn-primary addorder ml-3" href="{{route('seller.addedon_product')}}">
                        Add Product
                    </a>
                    
                   
				  </div---> 
                </div>
            
       	
        </div>
    </div>
	
	<div class="v-sidebar-wrapper">
   <div class="v-sidebar">
      <div class="v-sidebar-header">
         <button id="sidebar-close-btn"><i class="fa fa-times fa-2x"></i></button>
      </div>
	  <div class="v-sidebar-product-info">
			<h2>Break Pad and Rotor</h2>
			<h4>K 290.00</h4>
	  </div>
	  
	   <div class="v-sidebar-offsers">
	   
		 <div class="v-sidebar-offsers-items">
			<div class="offsers-items-tp">
				<h5 class="offerPrice">K 199.00</h5> 
				<div class="offerpercentage"> 35% off up to $ 99.00</div>
			</div>
			<div class="offsers-items-btm">
				<h6>Shipping From <p>1688 St Matthews Ave, Winnipeg, MB R3H 0A2, Canada</p></h6>
				<h6>Sold By  
					<p>Smart Store <br>
					<span>4.1 <i class="fa fa-star" aria-hidden="true"></i> (362 ratings)</span>  <br>
					<span>72% positive over the last 12 months</span> 
					</p>
				</h6>
			</div>
			
			 <a  href="#" class="btn btn-primary">Apply</a>
			 
		 </div>
		 
		  <div class="v-sidebar-offsers-items">
			<div class="offsers-items-tp">
				<h5 class="offerPrice">K 169.00</h5> 
				<div class="offerpercentage"> 50% off up to $ 99.00</div>
			</div>
			<div class="offsers-items-btm">
				<h6>Shipping From <p>1688 St Matthews Ave, Winnipeg, MB R3H 0A2, Canada</p></h6>
				<h6>Sold By  
					<p>Smart Store <br>
					<span>4.1 <i class="fa fa-star" aria-hidden="true"></i> (362 ratings)</span>  <br>
					<span>72% positive over the last 12 months</span> 
					</p>
				</h6>
			</div>
			 <a  href="#" class="btn btn-primary">Apply</a>
		 </div>
		 
		
			
	   </div>
     
   </div>
   <div class="v-sidebar-fade">
   </div>
   </div>
   
   
   @endsection
   @section('scripts')
  
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script>
 
$(".search-product-list-btn").click(function(){
  $(".serched-product-lists").show('500');
}); 
    
	$('.sidebar-toggler').click(function () {
   $('.v-sidebar-wrapper').toggleClass('sidebar-control', 500);
   $('.v-sidebar-fade').fadeIn(500);
   $('body').addClass('openSidebar');
});
$('#sidebar-close-btn').click(function () {
   $('.v-sidebar-wrapper').toggleClass('sidebar-control', 500);
   $('.v-sidebar-fade').fadeOut(500);
   $('body').removeClass('openSidebar');
});

</script>
 
   @endsection