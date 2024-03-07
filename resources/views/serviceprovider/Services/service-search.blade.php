@extends('serviceprovider.layouts.app')
@section('title', 'Add Services')
@section('content')
    <div class="content container-fluid">
        
    <div class="card  flex-fill mt-4">
					<div class="search-products-form">
						<h5>To begin adding services</h5>
						<h1>Find your services in </br> RoadSmart’s catalogue</h1>
						<form>
							<div class="form-group">
                               <div class="input-group">
								<input type="text" class="form-control" id="" placeholder="">
								<a href="javascript:void();" class="search-product-list-btn"> <i class="fa fa-search"></i></a>
							  </div>
                           </div>
						    <p class="additional-links">
								<a class="add-new-product" href="{{route('seller.not_addedon_service')}}"> Add a service not available on Roadsmart</a>
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
										<td class="productTitle">Break Pad and Rotor Replacement </td>
                                       
                                        
										<td class="productOffer">Body Parts</td>
                                        <td>
											<div class="search-product-actions">
												
												  <a  href="{{route('seller.add_service')}}" class="btn btn-primary">Add this services</a>
											</div> 
										</td>
                                     
                                    </tr> 

<tr>
										<td class="productTitle">Alternator</td>
                                       
                                        
										<td class="productOffer">Electrical</td>
                                        <td>
											<div class="search-product-actions">
												
												  <a  href="{{route('seller.add_service')}}" class="btn btn-primary">Add this services</a>
											</div> 
										</td>
                                     
                                    </tr> 

<tr>
										<td class="productTitle">Piston Rod or Connecting Rod </td>
                                       
                                        
										<td class="productOffer">Engine</td>
                                        <td>
											<div class="search-product-actions">
												
												 <a  href="{{route('seller.add_service')}}" class="btn btn-primary">Add this services</a>
											</div> 
										</td>
                                     
                                    </tr> 									
									
									 
									
                                </tbody>
                            </table>
                        </div>
                    </div> 
              
					</div>
                   
                </div>
            
       	
        </div>
    </div>
	
	
   
   @endsection
   @section('scripts')
  
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script>
$(".search-product-list-btn").click(function(){
  $(".serched-product-lists").show('500');
});
</script>
 
   @endsection