<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//   return redirect('/web');
// });


Route::get('/', function () {
  return view('welcome');
});


//Route::group([ 'middleware' =>  ['api', 'cors']], function() {
 
Route::post('apis/rejectEstimate', [ApiController::class, 'rejectEstimate']);
Route::post('apis/acceptEstimate', [ApiController::class, 'acceptEstimate']);
Route::post('apis/GetCancelServiceRequest', [ApiController::class, 'GetCancelServiceRequest']);
Route::post('apis/MakeSearch', [ApiController::class, 'MakeSearch']);
Route::post('apis/getVehicleDetailsByLicensePlate', [ApiController::class, 'getVehicleDetailsByLicensePlate']);
Route::post('apis/getVehicleForRenewInsurance', [ApiController::class, 'getVehicleForRenewInsurance']);
Route::post('apis/getVehicleForBuyInsurance', [ApiController::class, 'getVehicleForBuyInsurance']);
Route::post('apis/getTermCondition', [ApiController::class, 'getTermCondition']);
Route::post('apis/updateAddress', [ApiController::class, 'updateAddress']);
Route::post('apis/getaddressbyId', [ApiController::class, 'getaddressbyId']);
Route::post('apis/deleteAddress', [ApiController::class, 'deleteAddress']);
Route::post('apis/addAddress', [ApiController::class, 'addAddress']);
Route::post('apis/getMyAddress', [ApiController::class, 'getMyAddress']);
Route::post('apis/declinePayment', [ApiController::class, 'declinePayment']);
Route::post('apis/yourorder2', [ApiController::class, 'yourorder2']);
Route::post('apis/vehicelId', [ApiController::class, 'vehicelId']);
Route::post('apis/PayForRequestService', [ApiController::class, 'PayForRequestService']);
Route::post('apis/bookAppointment', [ApiController::class, 'bookAppointment']);
Route::post('apis/getestimationDetailsById', [ApiController::class, 'getestimationDetailsById']);
Route::post('apis/EstimationsList', [ApiController::class, 'EstimationsList']);
Route::post('apis/quoteSeenupdate', [ApiController::class, 'quoteSeenupdate']);
Route::post('apis/getQuotes', [ApiController::class, 'getQuotes']);
Route::post('apis/SocialLogin', [ApiController::class, 'SocialLogin']);
Route::post('apis/wishlist', [ApiController::class, 'wishlist']);
Route::post('apis/getservicebyvehicleid', [ApiController::class, 'getservicebyvehicleid']);
Route::post('apis/addsellerChat', [ApiController::class, 'addsellerChat']);
Route::post('apis/inspection', [ApiController::class, 'inspection']);
Route::post('apis/getAllInbox', [ApiController::class, 'getAllInbox']);
Route::post('apis/addNewMsg', [ApiController::class, 'addNewMsg']);
Route::post('apis/getMessages', [ApiController::class, 'getMessages']);
Route::post('apis/getSeller', [ApiController::class, 'getSeller']);
Route::post('apis/notifications', [ApiController::class, 'notifications']);
Route::post('apis/resetPassword', [ApiController::class, 'resetPassword']);
Route::post('apis/getSellerProductWithCategories', [ApiController::class, 'getSellerProductWithCategories']);
Route::post('apis/getCategoriesSellers', [ApiController::class, 'getCategoriesSellers']);
Route::post('apis/getSellerProfile', [ApiController::class, 'getSellerProfile']);
Route::post('apis/updateDefaultVehicle', [ApiController::class, 'updateDefaultVehicle']);
Route::post('apis/deleteRequest', [ApiController::class, 'deleteRequest']);
Route::post('apis/getMakesAll', [ApiController::class, 'getMakesAll']);
Route::post('apis/UpdateVehicleDetails', [ApiController::class, 'UpdateVehicleDetails']);
Route::post('apis/getrelaTedProducts', [ApiController::class, 'getrelaTedProducts']);
Route::post('apis/getVehicleDetails', [ApiController::class, 'getVehicleDetails']);
Route::post('apis/getMakesData', [ApiController::class, 'getMakesData']);
Route::post('apis/GetServiceRequestsWithId', [ApiController::class, 'GetServiceRequestsWithId']);
Route::post('apis/HomePageSearch', [ApiController::class, 'HomePageSearch']);
Route::post('apis/getVehicles', [ApiController::class, 'getVehicles']);
Route::post('apis/GetServiceRequests', [ApiController::class, 'GetServiceRequests']);
Route::post('apis/SendServiceRequest', [ApiController::class, 'SendServiceRequest']);
Route::post('apis/getMyServiceRequests', [ApiController::class, 'getMyServiceRequests']);
Route::post('apis/getMyServiceRequestsNew', [ApiController::class, 'getMyServiceRequestsNew']);
Route::post('apis/CancelServiceRequest', [ApiController::class, 'CancelServiceRequest']);
Route::post('apis/getMyServiceRequestsById', [ApiController::class, 'getMyServiceRequestsById']);
Route::post('apis/getSellerEstimates', [ApiController::class, 'getSellerEstimates']);
Route::post('apis/GetAllQuckLinks', [ApiController::class, 'GetAllQuckLinks']);
Route::post('apis/GetALlServices', [ApiController::class, 'GetALlServices']);
Route::post('apis/GetServicesByCat', [ApiController::class, 'GetServicesByCat']);
Route::post('apis/myorders', [ApiController::class, 'myorders']);
Route::post('apis/getProfile', [ApiController::class, 'getProfile']);
Route::post('apis/updateProfile', [ApiController::class, 'updateProfile']);
Route::post('apis/yourOrders', [ApiController::class, 'yourOrders']);
Route::post('apis/GetPopularSearches', [ApiController::class, 'GetPopularSearches']);
Route::post('apis/SaveServiceSarch', [ApiController::class, 'SaveServiceSarch']);
Route::post('apis/GetMyServices', [ApiController::class, 'GetMyServices']);
Route::post('apis/brokerAgent', [ApiController::class, 'brokerAgent']);
Route::post('apis/GetSubServices', [ApiController::class, 'GetSubServices']);
Route::post('apis/GetHomePageData', [ApiController::class, 'GetHomePageData']);
Route::post('apis/getDummyProducts', [ApiController::class, 'getDummyProducts']);
Route::post('apis/getBrandsAll', [ApiController::class, 'getBrandsAll']);
Route::post('apis/VerifyOtp', [ApiController::class, 'VerifyOtp']);
Route::post('apis/forgotPass', [ApiController::class, 'forgotPass']);
Route::post('apis/getPartsSearch', [ApiController::class, 'getPartsSearch']);
Route::post('apis/placeorder', [ApiController::class, 'placeorder']);
Route::post('apis/RequestCarFinance', [ApiController::class, 'RequestCarFinance']);
Route::post('apis/DecreaseQuantityFRomCart', [ApiController::class, 'DecreaseQuantityFRomCart']);
Route::post('apis/deleteItemFromCart', [ApiController::class, 'deleteItemFromCart']);
Route::post('apis/UpdateQuoteRequest', [ApiController::class, 'UpdateQuoteRequest']);
Route::post('apis/GetRequestDetails', [ApiController::class, 'GetRequestDetails']);
Route::post('apis/AddQuoteRequest', [ApiController::class, 'AddQuoteRequest']);
Route::post('apis/getCart', [ApiController::class, 'getCart']);
Route::post('apis/AddToCart', [ApiController::class, 'AddToCart']);
Route::post('apis/ContactUs', [ApiController::class, 'ContactUs']);
Route::post('apis/SignupUser', [ApiController::class, 'SignupUser']);
Route::post('apis/resendMail', [ApiController::class, 'resendMail']);
Route::get('apis/verify-email/{id?}', [ApiController::class, 'verifyEmail']);
Route::post('apis/getProductDetails', [ApiController::class, 'getProductDetails']);
Route::post('apis/MakeFavourite', [ApiController::class, 'MakeFavourite']);
Route::post('apis/getProducts', [ApiController::class, 'getProducts']);
Route::post('apis/loginUser', [ApiController::class, 'loginUser']);
Route::post('apis/getCategories', [ApiController::class, 'getCategories']);
Route::post('apis/getSubCategories', [ApiController::class, 'getSubCategories']);
Route::post('apis/getProductsForMarketplace', [ApiController::class, 'getProductsForMarketplace']);
Route::post('apis/getUserAddresses', [ApiController::class, 'getUserAddresses']);
Route::post('apis/rejectQuotations', [ApiController::class, 'rejectQuotations']);
Route::post('apis/newVehicleDetails', [ApiController::class, 'newVehicleDetails']);
Route::post('apis/addNewVehicle', [ApiController::class, 'addNewVehicle']);
Route::post('apis/deleteVehicle', [ApiController::class, 'deleteVehicle']);
Route::post('apis/vehicleDetails', [ApiController::class, 'vehicleDetails']);
Route::post('apis/orderDetailsById', [ApiController::class, 'orderDetailsById']);
Route::post('apis/getAdminVariables', [ApiController::class, 'getAdminVariables']);
Route::post('apis/addOrderReview', [ApiController::class, 'addOrderReview']);

//});

Route::get('/phpinfo', function () {
  return phpinfo();
});


Route::get('/clear', function () {
  $exitCode = Artisan::call('cache:clear');
  echo '<h1>Cache facade value cleared</h1>';
  $exitCode = Artisan::call('route:clear');
  echo '<h1>Route cache cleared</h1>';
  $exitCode = Artisan::call('view:clear');
  echo '<h1>View cache cleared</h1>';
  $exitCode = Artisan::call('config:cache');
  return '<h1>Clear Config cleared</h1>';
});






// php migrate
Route::get('/migrate', function () {
  $exitCode = Artisan::call('migrate');
  return '<h1>Migration Done!!</h1>';
});

// DB seed to add default data to tables
Route::get('/seed', function () {
  $exitCode = Artisan::call('db:seed');
  return '<h1>DB Seeded Done!!</h1>';
});

//  rollback and re-run all of your migrations:
Route::get('/migrateseed', function () {
  $exitCode = Artisan::call('migrate:refresh --seed');
  return '<h1>migrate:refresh --seed Done!!</h1>';
});


//service provider routes starts

Auth::routes();

// seller routes starts here
  Route::namespace('App\Http\Controllers\Auth\Seller')->name('seller.')->prefix('seller')->group(function () {
      Route::get('login', 'LoginController@login')->name('login');
      Route::post('login', 'LoginController@loginseller')->name('loginseller');
      Route::get('logout', 'LoginController@logout')->name('logout');

       // Password Reset Routes...
      Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
      Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');

      //Reset Password Routes
        Route::get('/password/reset/{token}/{email?}','ResetPasswordController@showResetForm')->name('password.reset');
        Route::post('/password/reset','ResetPasswordController@reset')->name('password.update');
  });

  Route::namespace('App\Http\Controllers\seller')->name('seller.')->prefix('seller')->group(function ()
  {
    Route::get('/', 'DashboardController@index')->name('index')->middleware('auth:seller');
    Route::get('dashboard', 'DashboardController@index')->name('dashboard')->middleware('auth:seller');
    Route::get('my_profile', 'DashboardController@my_profile')->name('my_profile')->middleware('auth:seller');
    Route::post('update_profile', 'DashboardController@update_profile')->name('update_profile')->middleware('auth:seller');
    Route::post('update_password', 'DashboardController@update_password')->name('update_password')->middleware('auth:seller');

    //products route starts
      Route::get('/products', 'ProductsController@products')->name('products')->middleware('auth:seller');
      Route::get('get_productListing', 'ProductsController@get_productListing')->name('get_productListing');
      Route::get('tabs_ajax_get/{page?}', 'ProductsController@tabs_ajax_get')->name('tabs_ajax_get');
      Route::get('/add-product', 'ProductsController@add_product')->name('add_product')->middleware('auth:seller');

      Route::get('/search-product', 'ProductsController@search_product')->name('search_product')->middleware('auth:seller');
      Route::get('/added-on-product', 'ProductsController@addedon_product')->name('addedon_product')->middleware('auth:seller');
      Route::get('/not-addedon-product', 'ProductsController@not_addedon_product')->name('not_addedon_product')->middleware('auth:seller');

      Route::post('save_product', 'ProductsController@save_product')->name('save_product');
      Route::post('/delete_product', 'ProductsController@delete_product')->name('delete_product');
      Route::get('/view-product/{id?}', 'ProductsController@view_product')->name('view_product')->middleware('auth:seller');
      Route::get('/edit-product/{id?}', 'ProductsController@edit_product')->name('edit_product')->middleware('auth:seller');
      Route::post('update_product', 'ProductsController@update_product')->name('update_product');
      Route::get('/inventory', 'ProductsController@inventory')->name('inventory')->middleware('auth:seller');
      //product route ends

      //package routes starts
      Route::get('/packages', 'PackagesController@packages')->name('packages')->middleware('auth:seller');
      Route::get('/add-package', 'PackagesController@add_package')->name('add_package')->middleware('auth:seller');
      Route::get('/view-package/{id?}', 'PackagesController@view_package')->name('view_package')->middleware('auth:seller');
      Route::get('/edit-package/{id?}', 'PackagesController@edit_package')->name('edit_package')->middleware('auth:seller');
      //package routes ends

      Route::get('/calender', 'DashboardController@calender')->name('calender');
     Route::get('/messages', 'DashboardController@messages')->name('messages');
      Route::get('/quotation', 'DashboardController@quotation')->name('quotation')->middleware('auth:seller');
      Route::get('/view-quotation/{id?}', 'DashboardController@view_quotation')->name('view_quotation')->middleware('auth:seller');
      Route::get('/edit-quotation/{id?}', 'DashboardController@edit_quotation')->name('edit_quotation')->middleware('auth:seller');
      //notification routes starts
     Route::get('/notifications', 'NotificationController@notifications')->name('notifications');
     //notification routes ends
      //orders route starts
      Route::get('/orders', 'OrdersController@orders')->name('orders')->middleware('auth:seller');
      Route::get('/add-order', 'OrdersController@add_order')->name('add_order')->middleware('auth:seller');
      Route::get('/view-order/{id?}', 'OrdersController@view_order')->name('view_order')->middleware('auth:seller');
      Route::get('/edit-order/{id?}', 'OrdersController@edit_order')->name('edit_order')->middleware('auth:seller');
      Route::get('/fullfillitem', 'OrdersController@fullfill_item')->name('fullfill_item')->middleware('auth:seller');
      //orders routes ends
      //estimates routes start
      Route::get('/estimates', 'EstimatesController@estimates')->name('estimates')->middleware('auth:seller');
      Route::get('/view-estimates/{id?}', 'EstimatesController@view_estimate')->name('view_estimate')->middleware('auth:seller');
      //estimate routes ends
      //drafts routes starts
      Route::get('/drafts', 'DraftsController@drafts')->name('drafts')->middleware('auth:seller');
      Route::get('/request-draft', 'DraftsController@request_draft')->name('request_draft')->middleware('auth:seller');
      Route::get('/add-request/{id?}', 'DraftsController@add_request')->name('add_request')->middleware('auth:seller');
      Route::get('/edit-request/{id?}', 'DraftsController@edit_request')->name('edit_request')->middleware('auth:seller');
      Route::get('/view-draft-request/{id?}', 'DraftsController@view_request')->name('view_request')->middleware('auth:seller');
      Route::get('/view-draft/{id?}', 'DraftsController@view_draft')->name('view_draft')->middleware('auth:seller');
      // Route::get('/add_draft', 'DraftsController@add_draft')->name('add_draft');
      //drafts routes ends

      //abondoned checkouts starts
      Route::get('/abondonedcheckout', 'CheckoutsController@abondonedcheckout')->name('abondonedcheckout')->middleware('auth:seller');
      //abondoned checkouts ends

      //jobs routes starts
      Route::get('/jobs', 'JobsController@jobs')->name('jobs')->middleware('auth:seller');
      Route::get('/add-job', 'JobsController@add_job')->name('add_job')->middleware('auth:seller');
	  Route::get('/edit-job', 'JobsController@edit_job')->name('edit_job')->middleware('auth:seller');
	   Route::get('/job-details', 'JobsController@job_details')->name('job_details')->middleware('auth:seller');
      //jobs routes ends

      //products route starts
      Route::get('/services', 'ServicesController@services')->name('services')->middleware('auth:seller');
      Route::get('/add-service', 'ServicesController@add_service')->name('add_service')->middleware('auth:seller');
      Route::get('get_serviceListing', 'ServicesController@get_serviceListing')->name('get_serviceListing');
      Route::post('save_service', 'ServicesController@save_service')->name('save_service');
      Route::get('/view-service/{id?}', 'ServicesController@view_service')->name('view_service')->middleware('auth:seller');
      Route::get('/edit-service/{id?}', 'ServicesController@add_serviceadd_service')->name('edit_service')->middleware('auth:seller');
      Route::post('/delete_service', 'ServicesController@delete_service')->name('delete_service');
      Route::post('update_service', 'ServicesController@update_service')->name('update_service');
      Route::post('/updateservicestatus', 'ServicesController@updateservicestatus')->name('updateservicestatus');

      Route::get('/service-search', 'ServicesController@service_search')->name('service_search')->middleware('auth:seller');
      Route::get('/add-services-not-available', 'ServicesController@not_addedon_service')->name('not_addedon_service')->middleware('auth:seller');

	   Route::get('/view-offer', 'ServicesController@view_offer')->name('view_offer')->middleware('auth:seller');

	    Route::get('/services-draft', 'ServicesController@services_draft')->name('services_draft')->middleware('auth:seller');

		 Route::get('/add-offer', 'ServicesController@add_offer')->name('add_offer')->middleware('auth:seller');

		 Route::get('/edit-offer', 'ServicesController@edit_offer')->name('edit_offer')->middleware('auth:seller');
      //product route ends

        //customer route starts
      Route::get('/customers', 'CustomerController@customers')->name('customers')->middleware('auth:seller');
      Route::get('/add-customer', 'CustomerController@add_customer')->name('add_customer')->middleware('auth:seller');
      Route::get('/view-customer/{id?}', 'CustomerController@view_customer')->name('view-customer')->middleware('auth:seller');
      Route::get('/view-customer-request', 'CustomerController@view_customer_request')->name('view-customer-request')->middleware('auth:seller');
      Route::get('/view-customer-vehicles', 'CustomerController@view_customer_vehicles')->name('view-customer-vehicles')->middleware('auth:seller');
      Route::get('/view-customer-chats', 'CustomerController@view_customer_chats')->name('view-customer-chats')->middleware('auth:seller');
      Route::get('/view-customer-profile', 'CustomerController@view_customer_profile')->name('view-customer-profile')->middleware('auth:seller');
      Route::get('get_customerListing', 'CustomerController@get_customerListing')->name('get_customerListing');
      //customer route ends



      //review route starts
      
            //   order reviews start
              Route::get('/reviews', 'ReviewsController@reviews')->name('reviews')->middleware('auth:seller');
              Route::get('/get_orderListing', 'ReviewsController@get_orderListing')->name('get_orderListing')->middleware('auth:seller');
              Route::post('/getViewOrder', 'ReviewsController@getViewOrder')->name('getViewOrder');
              Route::post('/delete_orderReview', 'ReviewsController@delete_orderReview')->name('delete_orderReview');
              Route::post('/delete_review', 'ReviewsController@delete_review')->name('delete_review');
            //   order reviews ends
            
            //   seller reviews start
              Route::get('/get_sellerListing', 'ReviewsController@get_sellerListing')->name('get_sellerListing')->middleware('auth:seller');
               Route::post('/delete_sellerReview', 'ReviewsController@delete_sellerReview')->name('delete_sellerReview');
               Route::post('/getSellerViewOrder', 'ReviewsController@getSellerViewOrder')->name('getSellerViewOrder');
            //   seller reviews ends
    
      //review route ends

      //transfers routes starts
      Route::get('/transfers', 'TransferController@transfers')->name('transfers')->middleware('auth:seller');
      Route::get('/create-transfer', 'TransferController@create_transfer')->name('create_transfer')->middleware('auth:seller');
      //transfers routes ends

      //report route starts
      Route::get('/reports', 'ReportsController@reports')->name('reports')->middleware('auth:seller');
      Route::get('/marketplace-detail/{id?}', 'ReportsController@marketplace_detail')->name('marketplace_detail')->middleware('auth:seller');
      //report route ends

      //online store routes starts
      Route::get('/online-store', 'OnlineStoresController@online_store')->name('online_store')->middleware('auth:seller');
      Route::post('save_online_store', 'OnlineStoresController@save_online_store')->name('save_online_store');
      Route::get('get_storeListing', 'OnlineStoresController@get_storeListing')->name('get_storeListing')->middleware('auth:seller');
      Route::post('/delete_store', 'OnlineStoresController@delete_store')->name('delete_store');
      Route::post('/updatestatus', 'OnlineStoresController@updatestatus')->name('updatestatus');
      Route::post('/getonlinestore', 'OnlineStoresController@getonlinestore')->name('getonlinestore');
      Route::post('/update_online_store', 'OnlineStoresController@update_online_store')->name('update_online_store');
      //online store routes ends

      //store-details/settings routes starts
      Route::get('/store-details', 'SettingsController@store_details')->name('store_details')->middleware('auth:seller');
      Route::get('/user-permissions', 'SettingsController@user_permissions')->name('user_permissions')->middleware('auth:seller');
      Route::get('/add-user-permissions', 'SettingsController@add_user_permissions')->name('add_user_permissions')->middleware('auth:seller');
      Route::post('save_new_seller', 'SettingsController@save_new_seller')->name('save_new_seller')->middleware('auth:seller');
      Route::get('get_usersListing', 'SettingsController@get_usersListing')->name('get_usersListing')->middleware('auth:seller');
      Route::get('/edit-user/{id?}', 'SettingsController@edit_user')->name('edit_user')->middleware('auth:seller');
      Route::post('/delete_user', 'SettingsController@delete_user')->name('delete_user');
      //store-details/settings routes ends

  });
// seller routes ends here

//service provider routes ends


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Admin routes starts here
    Route::namespace('App\Http\Controllers\admin')->name('admin.')->prefix('admin')->group(function () {
       Route::get('login', 'AdminController@login')->name('login');
        Route::post('loginAdmin', 'LoginController@loginAdmin')->name('loginAdmin');
        Route::get('forgot_password', 'AdminController@forgot_password')->name('forgot_password');
        Route::get('reset_password', 'AdminController@reset_password')->name('reset_password');
        Route::get('logout', 'LoginController@logout')->name('logout');
        
        //Admin Profile  routes start here
        Route::get('profile', 'AdminController@profile')->name('profile');
        Route::get('global_settings', 'AdminController@global_settings')->name('global_settings');
        //Admin Profile routes end here
        
        Route::get('/', 'AdminController@dashboard')->name('dashboard')->middleware('auth:admin');
        Route::get('ordersview/{id?}', 'OrderController@ordersview')->name('ordersview');
        Route::get('user_management', 'UserController@user_management')->name('user_management');
        
        
        //Admin Customers  routes start here
        Route::get('customers', 'CustomerController@customers')->name('customers');
        Route::get('addcustomer', 'CustomerController@addcustomer')->name('addcustomer');
        Route::get('editcustomer/{id?}', 'CustomerController@editcustomer')->name('editcustomer');
        Route::get('viewcustomer/{id?}', 'CustomerController@viewcustomer')->name('viewcustomer');
        Route::get('viewcustomerrequest/{id?}', 'CustomerController@viewcustomerrequest')->name('viewcustomerrequest');
        Route::get('viewcustomervehicles/{id?}', 'CustomerController@viewcustomervehicles')->name('viewcustomervehicles');
        Route::get('viewcustomeraddorder/{id?}', 'CustomerController@viewcustomeraddorder')->name('viewcustomeraddorder');
         Route::get('get_customerListing', 'CustomerController@get_customerListing')->name('get_customerListing');
         Route::post('/delete_customer', 'CustomerController@delete_customer')->name('delete_customer');
         Route::post('post_editCustomer', 'CustomerController@post_editCustomer')->name('post_editCustomer');
         Route::post('add_newcustomer', 'CustomerController@add_newcustomer')->name('add_newcustomer');
         Route::get('customerorders/{id?}', 'CustomerController@customerorders')->name('customerorders');
         Route::get('get_customerorderListing/{id?}', 'CustomerController@get_customerorderListing')->name('get_customerorderListing');
        //Admin Customers  routes end here
        
        
        // Admin Sellers routes start here
        Route::get('sellers', 'SellerController@sellers')->name('sellers');
        Route::get('addseller', 'SellerController@addseller')->name('addseller');
        Route::get('editseller/{id?}', 'SellerController@editseller')->name('editseller');
        Route::get('viewseller/{id?}', 'SellerController@viewseller')->name('viewseller');
         Route::get('get_sellerListing', 'SellerController@get_sellerListing')->name('get_sellerListing');
         Route::post('/delete_seller', 'SellerController@delete_seller')->name('delete_seller');
        //Admin Sellers routes end here
        
        
        //Admin Manage Vehicles routes start here
        Route::get('vehicles', 'VehicleController@vehicles')->name('vehicles');
        Route::get('addvehicle', 'VehicleController@addvehicle')->name('addvehicle');
        Route::get('editvehicle/{id?}', 'VehicleController@editvehicle')->name('editvehicle');
        Route::get('viewvehicle/{id?}', 'VehicleController@viewvehicle')->name('viewvehicle');
        Route::get('get_vehicleListing', 'VehicleController@get_vehicleListing')->name('get_vehicleListing');
         Route::post('/delete_vehicle', 'VehicleController@delete_vehicle')->name('delete_vehicle');
        //Admin Manage Vehicles routes end here
        
        
        // Admin orders routes start here
        Route::get('orders', 'OrderController@orders')->name('orders');
        Route::get('invoiceorders/{id?}', 'OrderController@invoiceorders')->name('invoiceorders');
        Route::get('ordersdetails/{id?}', 'OrderController@ordersdetails')->name('ordersdetails');
        Route::get('updateorder', 'OrderController@updateorder')->name('updateorder');
        Route::get('orderrequests', 'OrderController@orderrequests')->name('orderrequests');
        Route::get('get_orderListing', 'OrderController@get_orderListing')->name('get_orderListing');
        Route::post('/delete_order', 'OrderController@delete_order')->name('delete_order');
        //Admin orders routes end here
        
        
        // Admin Payments routes start here
        Route::get('payment', 'PaymentController@payment')->name('payment');
        Route::get('payments', 'PaymentController@payments')->name('payments');
        Route::get('viewpayment', 'PaymentController@viewpayment')->name('viewpayment');
        //Admin Payments routes end here
        
        
        // Admin Quote routes start here
        Route::get('quotes', 'QuoteController@quotes')->name('quotes');
        Route::get('viewquotes ', 'QuoteController@viewquotes')->name('viewquotes');
        Route::get('requestquotesview ', 'QuoteController@requestquotesview')->name('requestquotesview');
        //Admin Quote  routes end here
        
        
        // Admin Chat Manager routes start here
        Route::get('chat', 'ChatManagerController@chat')->name('chat');
        //Admin Chat Manager  routes end here
        
        
        // Admin Products routes start here
        Route::get('product', 'ProductController@product')->name('product');
        Route::get('addproduct', 'ProductController@addproduct')->name('addproduct');
        Route::get('editproduct', 'ProductController@editproduct')->name('editproduct');
        Route::get('viewproduct', 'ProductController@viewproduct')->name('viewproduct');
        //Admin Products routes end here
        
        
        // Admin Requests routes start here
        Route::get('requests', 'RequestController@requests')->name('requests');
        Route::get('viewrequest', 'RequestController@viewrequest')->name('viewrequest');
        //Admin Requests routes end here
        
        
        // Admin orders routes start here
        Route::get('dashboard', 'AdminController@dashboard')->name('dashboard');
        Route::get('get_dashboardListing', 'DashboardController@get_dashboardListing')->name('get_dashboardListing');
        
        //Admin orders routes end here
        
        
         // Password Reset Routes...
        Route::get('password/reset', 'AdminController@forgot_password')->name('password.request');
        Route::post('password/email', 'AdminController@sendResetLinkEmail')->name('password.email');
        //Password Reset Routess end here

      //Reset Password Routes
        Route::get('/password/reset/{token}/{email?}','AdminController@showResetForm')->name('password.reset');
        Route::post('/password/reset','AdminController@showResetForm')->name('password.update');
    });
      //Reset Password Routess end here
      
      
// Admin routes ends here
///api routes





