<?php include('inc/header.php') ?>
<?php include('inc/sidebar2.php') ?>   
<div class="page-wrapper">
   <div class="content container-fluid">
      <div class="page-header">
         <div class="row">
            <div class="col">
            <h3 class="page-title">Payments</h3>
            </div>
            <div class="col-auto text-right">
            <a class="btn btn-secondary" href="index.php">Back</a>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12">
            <div class="card">
            <div class="card-body">
               <div class="payment_check_div">
                  <label class="payment-checkbox">
                     <input type="checkbox">
                     <span class="checkmark"></span>Mobile Money
                  </label> 
                  <label class="payment-checkbox">
                     <input type="checkbox">
                     <span class="checkmark"></span>Visa
                  </label> 
                  <label class="payment-checkbox">
                     <input type="checkbox">
                     <span class="checkmark"></span>Payment On Delivery
                  </label>
                  <label class="payment-checkbox">
                     <input type="checkbox" checked="checked">
                     <span class="checkmark"></span>Bank Detail
                  </label>          
               </div>            
                  <form>
                     <div class="row">
                        <div class="col-xl-12">
                           <div class="form-group row">
                              <label class="col-lg-12 col-form-label">Bank Name</label>
                              <div class="col-lg-12">
                                 <input type="text" class="form-control">
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-6">
                           <div class="form-group row">
                              <label class="col-lg-12 col-form-label">Account Number</label>
                              <div class="col-lg-12">
                                 <input type="text" class="form-control">
                              </div>
                           </div>
                           <div class="form-group row">
                              <label class="col-lg-12 col-form-label">IFSC Code</label>
                              <div class="col-lg-12">
                                 <input type="text" class="form-control">
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-6">
                           <div class="form-group row">
                              <label class="col-lg-12 col-form-label">Confirm Account Number</label>
                              <div class="col-lg-12">
                                 <input type="text" class="form-control">
                              </div>
                           </div>
                           <div class="form-group row">
                              <label class="col-lg-12 col-form-label">Account Holder Name</label>
                              <div class="col-lg-12">
                                 <input type="tel" class="form-control">
                              </div>
                           </div>
                        </div>
                     </div>
                  </form>
                  <div class="text-left">
                     <button type="submit" class="btn btn-primary">Save</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php include('inc/footer.php') ?>