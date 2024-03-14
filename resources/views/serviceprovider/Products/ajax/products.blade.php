<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-body">
									<div class="table-responsive">
										<!--begin: Datatable-->
											<table class="table table-hover table-center mb-0 datatable" id="product_table">
											        <thead>
											            <tr>
											                <th title="Field #1">ID</th>
											                <th title="Field #2">Product Name</th>
											                <th title="Field #3" width="30%">Description</th>
											                <th title="Field #4">Status</th>
											                <th title="Field #5">Price</th>
											                <th>Action</th>
											            </tr>
											        </thead>
											        <tbody id="product_tableListing">
											            
											        </tbody>
											</table>
                    <!--end: Datatable-->
									</div>
								</div>
							</div>
						</div>
					</div>

					<script type="text/javascript">
    $(document).ready(function(e){      
	    var oTable = $('#product_table').DataTable({
	    	"sDom": "<'row'<'col-sm-12'tr>>" +
	                "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
	        bDestroy: true,
		    processing: true,
		    serverSide: true,
		    ajax: { 
		    	url: '{{Route("seller.get_productListing")}}', 
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
			language: {
                'paginate': {
                        'previous': '<i class="fas fa-angle-left"></i>',
                        'next': '<i class="fas fa-angle-right"></i>'
                    }
        },
		    oLanguage: {
	            sEmptyTable: 'No records found!!',
	        },
	        
		    columns: [     
		                {
		                    data: 'id',
		                    name: 'ID'
		                },
		                {
		                    data: 'product_name',
		                    name: 'Product Name'
		                },
		                {
		                    data: 'description',
		                    name: 'Description'
		                },
		                {
		                    data: 'stock_status',
		                    name: 'Status'
		                },
		                {
		                    data: 'sale_price',
		                    name: 'Price'
		                },
		                {
		                    data: 'action',
		                    name: 'Action',
	                        orderable: false
		                }
		            ]
				
	    });

	      $(document).on('click', '.delete_product', function(e){
    		var productid = $(this).attr('data-productid');
    		$('#productid').val(productid);
    		$('#delete-popup').modal('show');
  		});

	     $(document).on('click', '#confirm', function(e){  
	    var deleted_id = $('#productid').val();
	    $.ajax({
	      url: '{{Route("seller.delete_product")}}',
	      type: 'POST',
	      data : {
	              '_token': "{{ csrf_token() }}",
	              'deleted_id' : deleted_id
	          },
	      success: function(response) {
	          if ($.isEmptyObject(response.error)) {
	              window.location.href = "{{route('seller.products')}}";
	              $(window).scrollTop(0);
	          } else {
	              printErrorMsg(response.error);
	          }
	        }
	    });
	  });
     });
</script>