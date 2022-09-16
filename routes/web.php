<?php

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
//     return view('welcome');
// });




//home or single auth routes========================================
Route::get('/', function () {
	return view('frontEnd.home.homeContent');
});
//frontend routes========================================
// Route::get('/','FrontEndController@index');

Route::post('store/newslater','Frontend\FrontendController@StoreNewslater')->name('store.newslater');



Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');



//Admin Route
Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth','admin']],function(){
	Route::get('dashboard', 'DashboardController@index')->name('dashboard');

	//CATEGORY CRUD------
	Route::get('categories', 'Category\CategoryController@category')->name('categories');
	Route::post('store/category','Category\CategoryController@storecategory')->name('store.category');
	Route::get('delete/category/{id}','Category\CategoryController@DeleteCategory');
	Route::get('edit/category/{id}','Category\CategoryController@EditCategory');
	Route::post('update/category/{id}','Category\CategoryController@UpdateCategory');

	//BRAND CRUD------
	Route::get('brands', 'Category\CategoryController@brand')->name('brands');
	Route::post('store/brand','Category\CategoryController@storebrand')->name('store.brand');
	Route::get('delete/brand/{id}','Category\CategoryController@DeleteBrand');
	Route::get('edit/brand/{id}','Category\CategoryController@EditBrand');
	Route::post('update/brand/{id}','Category\CategoryController@UpdateBrand');

	//SUB-CATEGORY CRUD------
	Route::get('sub/category', 'Category\CategoryController@subcategories')->name('sub.categories');
	Route::post('store/subcat','Category\CategoryController@storesubcat')->name('store.subcategory');
	Route::get('delete/subcategory/{id}','Category\CategoryController@DeleteSubCat');
	Route::get('edit/subcategory/{id}','Category\CategoryController@EditSubCat');
	Route::post('update/subcategory/{id}','Category\CategoryController@UpdateSubCat');

	//COUPON------
	Route::get('coupon', 'Coupon\CouponController@Coupon')->name('coupon');
	Route::post('store/coupon','Coupon\CouponController@StoreCoupon')->name('store.coupon');
	Route::get('delete/coupon/{id}','Coupon\CouponController@DeleteCoupon');
	Route::get('edit/coupon/{id}','Coupon\CouponController@EditCoupon');
	Route::post('update/coupon/{id}','Coupon\CouponController@UpdateCoupon');

	//NEWSLATER------
	Route::get('newslater', 'Newslater\NewslaterController@Newslater')->name('newslater');
	Route::get('delete/newslater/{id}','Newslater\NewslaterController@DeleteNewslater');

	//PRODUCT------
	Route::get('add/product', 'Product\ProductController@AddProduct')->name('add.product');
	Route::post('store/product', 'Product\ProductController@Store')->name('store.product');
	Route::get('all/product', 'Product\ProductController@AllProduct')->name('all.product');
	Route::get('inactive/product/{id}', 'Product\ProductController@Inactive');
	Route::get('active/product/{id}', 'Product\ProductController@Active');
	Route::get('delete/product/{id}','Product\ProductController@DeleteProduct');
	Route::get('view/product/{id}','Product\ProductController@ViewProduct');
	Route::get('edit/product/{id}','Product\ProductController@EditProduct');
	Route::post('update/product/withoutphoto/{id}','Product\ProductController@UpdateProductWithoutPhoto');
	Route::post('update/product/photo/{id}','Product\ProductController@UpdateProductPhoto');

	//get sub cate by ajax
	Route::get('get/subcategory/{category_id}','Product\ProductController@GetSubcat');


	//Post-Category CRUD------
	Route::get('post/category', 'Blog\PostController@PostCategory')->name('post.category');
	Route::post('store/post/category','Blog\PostController@StorePostCategory')->name('store.post.category');
	Route::get('delete/post/category/{id}','Blog\PostController@DeletePostCategory');
	Route::get('edit/post/category/{id}','Blog\PostController@EditPostCategory');
	Route::post('update/post/category/{id}','Blog\PostController@UpdatePostCategory');

	//POST CRUD------
	Route::get('add/post', 'Blog\PostController@create')->name('add.blogpost');
	Route::post('store/post', 'Blog\PostController@StorePost')->name('store.post');
	Route::get('all/post', 'Blog\PostController@index')->name('all.blogpost');
	Route::get('delete/post/{id}','Blog\PostController@DeletePost');
	Route::get('edit/post/{id}','Blog\PostController@EditPost');
	Route::post('update/post/{id}','Blog\PostController@UpdatePost');

	//admin order routes
	Route::get('pending/order', 'Order\OrderController@NewOrder')->name('neworder');
	Route::get('view/order/{id}', 'Order\OrderController@ViewOrder');
	Route::get('payment/accept/{id}', 'Order\OrderController@PaymentAccept');
	Route::get('payment/cancel/{id}', 'Order\OrderController@PaymentCancel');

	Route::get('accept/payment', 'Order\OrderController@AcceptPaymentOrder')->name('accept.payment');
	Route::get('progress/payment','Order\OrderController@ProgressPaymentOrder')->name('progress.payment');
	Route::get('success/payment', 'Order\OrderController@SuccessPaymentOrder')->name('success.payment');
	Route::get('cancel/payment', 'Order\OrderController@CancelPaymentOrder')->name('cancel.order');

	Route::get('delevery/progress/{id}', 'Order\OrderController@DeleveryProgress');
	Route::get('delevery/done/{id}', 'Order\OrderController@DeleveryDone');

	//Seo Route
	Route::get('seo', 'Seo\SeoController@Seo')->name('seo');
	Route::post('update/seo','Seo\SeoController@UpdateSeo')->name('update.seo');

	//All Reports
	Route::get('today/order','Report\ReportController@TodayOrder')->name('today.order');
	Route::get('today/delevered','Report\ReportController@TodayDelevered')->name('today.delevered');
	Route::get('this/month','Report\ReportController@ThisMonth')->name('this.month');
	Route::get('search/report','Report\ReportController@SearchReport')->name('search.report');

	Route::post('search/byyear', 'Report\ReportController@searchByYear')->name('search.by.year');
	Route::post('search/bymonth', 'Report\ReportController@searchByMonth')->name('search.by.month');
	Route::post('search/bydate', 'Report\ReportController@searchByDate')->name('search.by.date');

	//Child Admin Role
	Route::get('create/child/admin','UserRole\AdminController@CreateAdmin')->name('create.admin');
	Route::post('store/child/admin','UserRole\AdminController@StoreAdmin')->name('store.child.admin');
	Route::get('all/child/admin','UserRole\AdminController@AllChildAdmin')->name('all.child.admin');
	Route::get('delete/child/admin/{id}', 'UserRole\AdminController@DeleteChildAdmin');
	Route::get('edit/child/admin/{id}', 'UserRole\AdminController@EditChildAdmin');
	Route::post('update/child/admin', 'UserRole\AdminController@UpdateChildAdmin')->name('update.child.admin');

	//Site Setting
	Route::get('site/setting','Settings\SiteSettingController@SiteSetting')->name('site.setting');
	Route::post('update/site/setting','Settings\SiteSettingController@UpdateSiteSetting')->name('update.site.setting');
		//Database Backup
		Route::get('database/backup','Settings\SiteSettingController@DatabaseBackup')->name('database.backup');
		Route::get('database/backup/now','Settings\SiteSettingController@BackupNow')->name('backup.now');
		Route::get('delete/database/{getFilename}','Settings\SiteSettingController@DeleteDatabase');
		Route::get('download/database/{getFilename}','Settings\SiteSettingController@DownloadDatabase');

	//Return Order
	Route::get('request/return/order','Order\ReturnOrderController@Request')->name('request.return.order');
	Route::get('/approve/return/order/{id}', 'Order\ReturnOrderController@ApproveReturn');
	Route::get('all/approve/return', 'Order\ReturnOrderController@AllApproveReturn')->name('all.approve.return');

	//Stock Management
	Route::get('product/stock/management','Order\ReturnOrderController@Stock')->name('product.stock');




});














//Author Route
Route::group(['as'=>'author.','prefix'=>'author','namespace'=>'Author','middleware'=>['auth','author']],function(){
	Route::get('dashboard', 'DashboardController@index')->name('dashboard');



});







//User Profile Route
Route::group(['as'=>'user.','prefix'=>'user','namespace'=>'User','middleware'=>['auth','user']],function(){
	Route::get('profile', 'DashboardController@index')->name('profile')->middleware('verified');
	Route::get('logout', 'DashboardController@logout')->name('logout')->middleware('verified');
	Route::get('password/change', 'DashboardController@changePassword')->name('password.change')->middleware('verified');
	Route::post('password/update', 'DashboardController@updatePassword')->name('password.update')->middleware('verified');
	Route::get('edit/profile/pic/{id}', 'DashboardController@editProfilePic')->middleware('verified');
	Route::post('update/profile/pic/{id}', 'DashboardController@updateProfilePic')->middleware('verified');
	
	Route::get('view/order/{id}', 'DashboardController@ViewOrder');

	Route::get('success/order/list', 'ReturnOrderController@SuccessList')->name('success.orderlist');
	Route::get('request/return/order/{id}','ReturnOrderController@RequestReturn');


});

//Wishlists
Route::get('user/add/wishlist/{id}','Frontend\WishlistController@AddWishlist');
Route::get('user/wishlist/','Frontend\WishlistController@AllWishlist')->name('user.wishlist');
Route::get('remove/wishlist/item/{id}/{product_name}','Frontend\WishlistController@removeWishlistitem');

//Cart by Ajax
Route::get('user/add/to/cart/{id}','Frontend\CartController@AddCart');
Route::get('user/cart/check','Frontend\CartController@Check');

//Sociallite Route
Route::get('/auth/redirect/{provider}', 'Frontend\SocialController@redirect');
Route::get('/callback/{provider}', 'Frontend\SocialController@callback');

//Product Details
Route::get('/product/details/{id}/{product_name}', 'Frontend\ProductController@ProductView');

//Add to Cart from product_details.blade.php
Route::post('/cart/product/add/{id}', 'Frontend\ProductController@AddCart');

//cart
Route::get('products/cart','Frontend\CartController@showCart')->name('show.cart');
Route::get('remove/cart/item/{rowId}','Frontend\CartController@removeCartitem');
Route::post('update/cart/item','Frontend\CartController@UpdateCartitem')->name('update.cartitem');
Route::get('cart/product/view/{id}','Frontend\CartController@ViewProduct');
Route::post('insert/into/cart/','Frontend\CartController@InsertCart')->name('insert.into.cart');

//checkout
Route::get('user/checkout/','Frontend\CartController@Checkout')->name('user.checkout')->middleware('verified');
Route::post('user/apply/coupon/','Frontend\CartController@Coupon')->name('apply.coupon');
Route::get('coupon/remove/','Frontend\CartController@CouponRemove')->name('coupon.remove');

//blog.roustes
Route::get('blog/post/','Frontend\BlogController@blog')->name('blog.post');
Route::get('blog/post/single/{id}','Frontend\BlogController@blogSingle')->name('blog.post.single');

Route::get('language/bangla','Frontend\BlogController@Bangla')->name('language.bangla');
Route::get('language/english','Frontend\BlogController@English')->name('language.english');

//payment methods
Route::get('payment/page/','Frontend\PaymentController@PaymentPage')->name('payment.step');
Route::post('user/payment/process/','Frontend\PaymentController@Payment')->name('payment.process');
//stripe
Route::post('user/stripe/charge/','Frontend\PaymentController@StripeCharge')->name('stripe.charge');

//all products show
Route::get('/products/{id}', 'Frontend\ProductController@productsView');

//My Order Tracking
Route::post('order/tracking', 'Frontend\FrontendController@OrderTracking')->name('order.tracking');

//Search
Route::post('product/search', 'Frontend\FrontendController@ProductSearch')->name('product.search');





