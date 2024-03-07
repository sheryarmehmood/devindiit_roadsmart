@extends('serviceprovider.layouts.app')
@section('title', 'Reviews')
@section('content')
<link  rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" >

   <div class="content container-fluid">
      <div class="page-header">
         <div class="row">
            <div class="col">
               <h3 class="page-title">Review & Ratings</h3>
            </div>
            
         </div>
      </div>
       <div id="exTab2" class="container">
            <ul  class="nav nav-pills nav-tabs menu-tabs">
                <li class="nav-item active">
                    <a class="nav-link" href="#product-tab" data-toggle="tab">Order Reviews</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="#services-tab" data-toggle="tab">Seller Reviews</a>
            </li>
        </ul>
        <div class="tab-content clearfix">
            <div class="tab-pane active" id="product-tab">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="card">
                           <div class="card-body pb-0 pt-2">
                              <div class="table-responsive">
                                 <div class="row">
                                    <div class="col-sm-12">
                                       <table class="table table-hover table-center" id="ratings_table">
                                          <thead>
                                             <tr>
                                                <th style='padding-bottom: 12px'>ID</th>
                                                <th style='padding-bottom: 12px'>Date</th>
                                                <th style='padding-bottom: 12px'>User</th>
                                                <th style='padding-bottom: 12px'>Order ID</th>
                                                <th style='padding-bottom: 12px'>Ratings</th>
                                                <th style='padding-bottom: 12px'>Comments</th>
                                                <th style='padding-bottom: 12px'>Action</th>
                                             </tr>
                                          </thead>
                                          <tbody id="order_reviewListing">
                                        
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
            <div class="tab-pane" id="services-tab">
              <div class="row">
                     <div class="col-md-12">
                        <div class="card">
                           <div class="card-body pb-0 pt-2">
                              <div class="table-responsive">
                                 <div class="row">
                                    <div class="col-sm-12">
                                       <table class="table table-hover table-center" id="seller_table">
                                          <thead>
                                             <tr>
                                                <th>ID</th>
                                                <th>Date</th>
                                                <th>User</th>
                                                <th>Ratings</th>
                                                <th>Comments</th>
                                                <th>Action</th>
                                             </tr>
                                          </thead>
                                          <tbody id="seller_reviewListing">
                                              
                                            
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
            </div>
        </div>
    
   </div>

<div class="modal fade" id="order_review-popup" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title">Review Details</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <div class="row">
               <div class="col-md-12">
                  <div class="card-table">
                     <div class="card-body addpad">
                        <div class="viewBox">
                           <table class="table table-bordered">
                              <tbody>
                                 <tr>
                                    <th> Date </th>
                                    <td> <p id="orderReview_date"></p></td>
                                 </tr>
                                 <tr>
                                    <th> User </th>
                                    <td>  <p id="orderReview_user"></p>
                                 </tr>
                                 <tr>
                                    <th> Order Id </th>
                                    <td> <p id="orderReview_orderId"></p> </td>
                                 </tr>
                                 <tr>
                                    <th> Ratings  </th>
                                    <td><p id="orderReview_rating"></p></td>
                                 </tr>
                                 <tr>
                                    <th> Comments </th>
                                    <td><p id="orderReview_review"></p></td>
                                 </tr>
                              </tbody></table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="review-details-body">
                  
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
            </div>
         </div>
      </div>
   </div>

<div class="modal fade" id="Seller_review-popup" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title">Review Details</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <div class="row">
               <div class="col-md-12">
                  <div class="card-table">
                     <div class="card-body addpad">
                        <div class="viewBox">
                           <table class="table table-bordered">
                              <tbody>
                                 <tr>
                                    <th> Date </th>
                                    <td> <p id="sellerReview_date"></p></td>
                                 </tr>
                                 <tr>
                                    <th> User </th>
                                    <td> 
                                    <p id="sellerReview_user"></p>
                                    <!--<span class="table-avatar">-->
                                    <!--   <a href="#" class="avatar avatar-sm mr-2">-->
                                    <!--      <img class="avatar-img rounded-circle" alt="" src="{{ asset('assets/serviceprovider/img/customer/user-04.jpg') }}">-->
                                    <!--   </a>-->
                                    <!--   <a href="javascript:void(0);">Ricardo Lung</a>-->
                                    <!--</span>-->
                                    </td>
                                 </tr>
                                 <!--<tr>-->
                                 <!--   <th> Service Type </th>-->
                                 <!--   <td> Brake Safety </td>-->
                                 <!--</tr>-->
                                 <tr>
                                    <th> Ratings  </th>
                                    <td> 
                                    <p id="sellerReview_rating"></p>
                                    <!--<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i> 4.5-->
                                    </td>
                                 </tr>
                                 <tr>
                                    <th> Comments </th>
                                    <td> <p id="sellerReview_review"></p></td>
                                 </tr>
                              </tbody></table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="review-details-body">
                  
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
            </div>
         </div>
      </div>
   </div>
   
   <!--delete popup start-->

   <div class="modal fade" id="delete-popup" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<input type="hidden" name="storeid" id ="storeid"/>
      <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
            <div class="modal-body">
               <div class="delete-cont">
                  <p>Are you sure you want to delete this item ?</p>
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
               <button type="button" class="btn btn-danger" id="confirm">Delete</button>
            </div>
         </div>
      </div>
   </div>
   
      <div class="modal fade" id="delete-seller-popup" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<input type="hidden" name="storeid" id ="storeid"/>
      <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
            <div class="modal-body">
               <div class="delete-cont">
                  <p>Are you sure you want to delete this item ?</p>
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
               <button type="button" class="btn btn-danger" id="confirm1">Delete</button>
            </div>
         </div>
      </div>
   </div>
   
   <!--delete popup end-->
@endsection
@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
 
<script type="text/javascript" src="https://cdn.datatables.net/1.10.8/js/jquery.dataTables.min.js" "></script>

<script type="text/javascript">
    $(document).ready(function(e)
    {   
        var oTable = $('#ratings_table').DataTable(
        {
            "sDom": "<'row'<'col-sm-12'tr>>" +
                    "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
            bDestroy: true,
            processing: true,
            serverSide: true,
            ajax: { 
                url: '{{Route("seller.get_orderListing")}}', 
                data : function (d) {
                    d.name = $('input[name=name]').val();
                    d.status = $('select[name=status]').val();
                    // d.daterange = $('input[name=daterange]').val();
                }
            },
            ordering: true,
            button: false,
            scrollX: true,
            scrollCollapse: true,
			autoWidth: false,
            oLanguage: {
                sEmptyTable: 'No records found!!',
            },
            
            columns: [    
                         {
                            data: 'id',
                            name: 'Id'
                        },
                        {
                            data: 'created_at',
                            name: 'Date'
                        },
                        {
                            data: 'user_id',
                            name: 'User'
                        },
                        {
                            data: 'order_id',
                            name: 'Order Id'
                        },
                        {
                            data: 'rating',
                            name: 'Rating'
                        },
                        {
                            data: 'review',
                            name: 'Comments'
                        },
                        {
                            data: 'action',
                            name: 'Action',
                            orderable: false
                        }
                    ]
        });
            oTable.order([0,'desc']).draw();
            
            
              $(document).on('click', '.view_review', function(e){
             var productid = $(this).attr('data-reviewId');
            $('#storeid').text(productid);
            $.ajax({
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              url: '{{ route("seller.getViewOrder") }}',
              type: 'POST',
              data: {
                id: productid
              },
              success: function(response) {
                $.each(response.store_data, function(i, d) {
                    // $date = d.created_at;
                    //  $newDate = \Carbon\Carbon::createFromFormat('d M,Y', $date)
                    // ->format('d M,Y');
                  $('#orderReview_date').text(d.updated_at);
                  $('#orderReview_user').text(d.user_id);
                  $('#orderReview_orderId').text(d.order_id);
                  $('#orderReview_rating').text(d.rating);
                  $('#orderReview_review').text(d.review);
                  
                });
               
                // $('#edit-store-popup').modal('show');
              }
           
        });
 });
       

          $(document).on('click', '.delete_review', function(e){
            var productid = $(this).attr('data-reviewId');
            $('#storeid').val(productid);
            // $('#delete-popup').modal('show');
        });

         $(document).on('click', '#confirm', function(e){  
        var deleted_id = $('#storeid').val();
        $.ajax({
          url: '{{Route("seller.delete_review")}}',
          type: 'POST',
          data : {
                  '_token': "{{ csrf_token() }}",
                  'id' : deleted_id
              },
              success:function(response)
		        {
		            console.log(response.code);
		           if(response.code==200)
		           {
			               Swal.fire({
			           	   	title: 'Success',
			           	   	text: response.message,
			           	   	icon: "success",
			           	   	showConfirmButton: false,
			           	   });
                          location.reload();
		           }
		           else
		           {
		               Swal.fire('Error',response.message, "error");
		           }
		        },error:function(errorResponse)
		        {
		           if(errorResponse.status == 401)
		           {
		             location.reload();
		           }
		        }
        
        });
      });

    
     });
</script>

<script type="text/javascript" src="https://cdn.datatables.net/1.10.8/js/jquery.dataTables.min.js" "></script>


<script type="text/javascript">
    $(document).ready(function(e)
    {   
        var sellerTable = $('#seller_table').DataTable(
        {
            "sDom": "<'row'<'col-sm-12'tr>>" +
                    "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
            bDestroy: true,
            processing: true,
            serverSide: true,
            ajax: { 
                url: '{{Route("seller.get_sellerListing")}}', 
                data : function (d) {
                    d.name = $('input[name=name]').val();
                    d.status = $('select[name=status]').val();
                    // d.daterange = $('input[name=daterange]').val();
                }
            },
            ordering: true,
            button: false,
            scrollX: true,
            scrollCollapse: true,
			autoWidth: false,
            oLanguage: {
                sEmptyTable: 'No records found!!',
            },
            
            columns: [    
                         {
                            data: 'id',
                            name: 'Id'
                        },
                        {
                            data: 'created_at',
                            name: 'Date'
                        },
                        {
                            data: 'user_id',
                            name: 'User'
                        },
                        {
                            data: 'rating',
                            name: 'Rating'
                        },
                        {
                            data: 'comments',
                            name: 'Comments'
                        },
                        {
                            data: 'action',
                            name: 'Action',
                            orderable: false
                        }
                    ]
        });
            sellerTable.order([0,'desc']).draw();
            
             $(document).on('click', '.view_sellerReview', function(e){
             var productid = $(this).attr('data-reviewId');
            $('#storeid').text(productid);
            $.ajax({
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              url: '{{ route("seller.getSellerViewOrder") }}',
              type: 'POST',
              data: {
                id: productid
              },
              success: function(response) {
                $.each(response.store_data, function(i, d) {
                    // $date = d.created_at;
                    //  $newDate = \Carbon\Carbon::createFromFormat('d M,Y', $date)
                    // ->format('d M,Y');
                  $('#sellerReview_date').text(d.updated_at);
                  $('#sellerReview_user').text(d.user_id);
                  $('#sellerReview_rating').text(d.rating);
                  $('#sellerReview_review').text(d.comments);
                  
                });
               
                // $('#edit-store-popup').modal('show');
              }
           
        });
 });

       
  $(document).on('click', '.delete_sellerReview', function(e){
            var productid = $(this).attr('data-reviewId');
            $('#storeid').val(productid);
            // $('#delete-popup').modal('show');
        });

         $(document).on('click', '#confirm1', function(e){  
        var deleted_id = $('#storeid').val();
        $.ajax({
          url: '{{Route("seller.delete_sellerReview")}}',
          type: 'POST',
          data : {
                  '_token': "{{ csrf_token() }}",
                  'id' : deleted_id
              },
              success:function(response)
		        {
		            console.log(response.code);
		           if(response.code==200)
		           {
			               Swal.fire({
			           	   	title: 'Success',
			           	   	text: response.message,
			           	   	icon: "success",
			           	   	showConfirmButton: false,
			           	   });
                          location.reload();
		           }
		           else
		           {
		               Swal.fire('Error',response.message, "error");
		           }
		        },error:function(errorResponse)
		        {
		           if(errorResponse.status == 401)
		           {
		             location.reload();
		           }
		        }
        
        });
      });

    
     });
</script>
@endsection
