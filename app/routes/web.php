<?php
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/


Route::prefix('admin')->group(function(){
    Route::get('/2fa', 'Check2faController@Index')->name('check2fa');

    Route::post('/manage/login', 'Auth\AdminLoginController@login')->name('admin.login.submit'); 
    Route::get('/login', 'Auth\AdminLoginController@showLogin')->name('admin-login');

    Route::middleware(['check2fa', 'auth:admin'])->group(function(){ 
    Route::get('/index', 'AdminController@index')->name('admin.index');
    Route::get('/', 'AdminController@index')->name('admin.index');
    Route::resource('/category', 'CategoryController');
    Route::resource('/product', 'ProductController'); 

    Route::post('/product/status/{id}', 'ProductController@status')->name('product.status');

    Route::post('/product/delete/{id}', 'ProductController@delete')->name('product.delete');

    Route::get('/product/variation/{id}', 'ProductController@variation')->name('product.variation'); 
    Route::get('/variation/edit/{id}', 'ProductController@variationEdit')->name('variation.edit');  
    Route::post('/variation/update/{id}', 'ProductController@variationUpdate');  
    Route::get('/orders', 'AdminController@Order')->name('admin.orders');
    Route::get('/orders/details/{id}', 'AdminController@OrderDetails')->name('admin.order-details');
    Route::get('/transactions', 'AdminController@Transactions')->name('admin.transctions');
    Route::get('/transaction/details/{id}', 'AdminController@transactionDetails')->name('admin.transactions-details');
    Route::get('/order/shipping/{id}', 'AdminController@Shipping')->name('admin.shipping');
    Route::get('/order/status/{id}', 'AdminController@status')->name('order.status');
    Route::post('/status/update/{id}', 'AdminController@updateStatus');
    Route::get('/users', 'AdminController@Users')->name('admin.users');
    Route::get('/admin/users/order/{id}', 'AdminController@userOrders')->name('admin.user-orders');
    Route::get('/admin/users/transaction/{id}', 'AdminController@userTransactions')->name('admin.user-transactions');
    Route::get('/designs/download/{id}', 'AdminController@getDownloads')->name('design.download');
    Route::post('/users/notification', 'AdminController@pushNotify');
    Route::get('/users/notify', 'AdminController@notify')->name('admin.notify');
    Route::get('/notify/{id}', 'AdminController@updateNotify')->name('update.admin-notify');
    Route::get('analytics', 'AdminController@Analytical')->name('admin.analytical');
    Route::get('/profile', 'AdminController@adminProfile')->name('admin.profile');
    Route::post('/profile/update', 'AdminController@updateProfile');
    Route::post('/notification/clear', 'AdminController@AdminNotify_clear');
    Route::get('/add/menu', 'PagesController@AddMenu')->name('admin.addMenu');
    Route::post('/add/create/', 'PagesController@createMenu');
    Route::get('/menu/index/', 'PagesController@MenuIndex')->name('admin.MenuIndex');
    Route::get('/menu/edit/{id}', 'PagesController@EditMenu')->name('menuEdit');
    Route::post('/menu/update/{id}', 'PagesController@updateMenu');


    // Route::get('/slider/index', 'SliderController@SliderIndex')->name('slider.index');
    // Route::get('/slider/create', 'SliderController@CreateSlider')->name('slider.create');
    // Route::post('/slider/store', 'SliderController@StoreSlider');
    // Route::get('/slider/delete/{id}', 'SliderController@DeleteSlider')->name('slider.delete');

    Route::get('/website/settings/sliders/index', 'SliderController@Index')->name('slider.index');
    Route::get('/website/settings/sliders/create', 'SliderController@Create')->name('admin.sliderCreate');
    Route::post('/website/settings/sliders/store', 'SliderController@Store')->name('admin.sliderStore');
    Route::get('/website/settings/sliders/edit/{id}', 'SliderController@Edit')->name('admin.sliderEdit');
    Route::post('/website/settings/sliders/update/{id}', 'SliderController@Update')->name('admin.sliderUpdate');
    Route::get('/website/settings/sliders/delete/{id}', 'SliderController@Delete')->name('admin.sliderDelete');
    Route::get('/website/settings/sliders/activate/{id}', 'SliderController@Activate')->name('admin.sliderActivate');
    Route::get('/website/settings/sliders/deactivate/{id}', 'SliderController@Deactivate')->name('admin.sliderDeactivate');


    Route::get('/news/index', 'NewsController@Index')->name('admin.news.index');
    Route::get('/news/create/', 'NewsController@Create')->name('admin.news.create');
    Route::post('/news/store', 'NewsController@Store');
    Route::get('/news/edit/{id}', 'NewsController@Edit')->name('admin.edit.news');
    Route::post('/news/update/{id}', 'NewsController@Update');
    Route::post('/news/status/{id}', 'NewsController@status')->name('news.status');
    Route::get('/subcategory/index/{id}', 'SubcategoryController@index')->name('index.subcat');
    Route::get('/subcategory/create/{id}', 'SubcategoryController@create')->name('create.subcat');
    Route::get('/subcategory/edit/{id}', 'SubcategoryController@edit')->name('edit.subcat');
    Route::post('/subcategory/update/{id}', 'SubcategoryController@update')->name('update.subcat');
    Route::post('/subcategory/store/{id}', 'SubcategoryController@store');
    Route::get('/projects', 'AdminController@ProjectIndex')->name('admin.project.index');
    Route::get('/project/create', 'AdminController@ProjectCreate')->name('admin.project.create');
    Route::post('/project/store', 'AdminController@ProjectStore');
    Route::get('/project/delete/{id}', 'AdminController@ProjectDelete')->name('admin.project.delete');
    Route::post('/update/rates', 'AdminController@ExchangeRate')->name('updateDollarRate');

        Route::get('/website/settings/index', 'SettingsController@Index')->name('admin.settings.index');
        Route::get('/website/settings/socials', 'SettingsController@Socials')->name('admin.settings.socials');
        Route::get('/website/settings/about', 'SettingsController@Abouts')->name('admin.settings.abouts');
        Route::post('/website/settings/update/socials', 'SettingsController@UpdateSocials')->name('admin.settings.updateSocials');
        Route::post('/website/settings/update/settings', 'SettingsController@UpdateSettings')->name('admin.settings.updateSettings');

});
}); 




Auth::routes();
Route::get('/', 'HomeController@index')->name('index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/products/details/{id}', 'HomeController@productDetails')->name('product-details'); 
Route::get('/cart/{id}', 'CartController@add')->name('carts.add');
//Route::post('/carts/add/', 'CartController@addToCart')->name('carts.add');

Route::resource('/carts', 'CartController');
Route::get('/delete/{id}', 'CartController@destroy')->name('carts.delete');
Route::post('updatecart', 'CartController@updateQuantity')->name('cart.updatequantity');
Route::resource('/products', 'ProductController');
Route::get('pages/{slug}', 'PagesController@Pages')->name('pages');
Route::get('/page/search', 'HomeController@search')->name('search');
Route::get('/category/{id}', 'HomeController@Categories')->name('user.category'); 
Route::post('/add-review/{id}', 'HomeController@Addreview');
Route::get('news/details/{id}', 'PagesController@newsDetails')->name('news.details');
Route::get('/user/checkout', 'CheckoutController@guest')->name('user.checkoutout');
 
//Route::resource('/checkout', 'CheckoutController');
Route::post('/checkout', 'CheckoutController@store')->name('checkout.store');
Route::get('/checkout', 'CheckoutController@index')->name('checkout.index');
//Color
Route::get('/filter-color', 'HomeController@filterColor')->name('filterColor');
//Size
Route::get('/filter-size', 'HomeController@filterSize')->name('filterSize');
//Payment
Route::post('/pay/checkout', 'PaymentController@initiatePayCheckout')->name('pay.checkout');
Route::get('success', 'PaymentController@handlePaymentSuccess')->name('payment.success');
Route::get('error', 'PaymentController@errorpayment')->name('payment.cancel');
 
Route::middleware('auth')->group( function(){
Route::post('/newaddress', 'CheckoutController@modal');
Route::post('/checkouts', 'CheckoutController@Add'); 



//Route::resource('/checkout', 'CheckoutController')->middleware('auth');
Route::get('/payment/{trxref}', 'CheckoutController@verify')->name('verify.pay');
//Route::post('/checkout/payments', 'CheckoutController@storeOrder');//

Route::get('/address/checkout', 'CheckoutController@addNew')->name('checkout.addNew');
// Route::get('/confirm/payment/{id}','CheckoutController@verify')->name('confirm.payment'); 
Route::post('/confirm/payment/','CheckoutController@verify')->name('confirm.payment'); 


Route::get('user/orders', 'HomeController@myOrders')->name('users.orders');
Route::get('user/transactions', 'HomeController@myTransactions')->name('user.transactions');
Route::get('/users/order/details/{id}', 'HomeController@OrderDetails')->name('users.order-details');
Route::post('/users/account/details', 'HomeController@updateDetails')->name('update.user-details');
Route::get('/user/details', 'HomeController@UserDetails')->name('user.account.details');
Route::get('/user/notify', 'HomeController@notifications')->name('user.notification');
Route::get('/user/notify/delete/{id}', 'HomeController@notificationDel')->name('notify.delete');
Route::get('/user/recent/views', 'HomeController@recentViews')->name('users.recentViews');
Route::get('/user/addresses', 'HomeController@UserAddress')->name('users.address');
Route::get('/user/account', 'HomeController@Account')->name('users.account');
Route::get('/update-address/{id}', 'HomeController@UpdateShip')->name('users.update-address');
Route::post('/address/store/{id}', 'HomeController@Shipping');
Route::get('/user-address', 'HomeController@userAddress')->name('users.user-address');
Route::get('/add-address', 'HomeController@createAddresss')->name('users.add-address');
Route::get('/address/delete/{id}', 'HomeController@AddressDelete')->name('address.delete');
Route::get('/aboutus', 'HomeController@about')->name('aboutus');
Route::get('/privacypolicy', 'HomeController@privacypolicy')->name('privacypolicy');

});

