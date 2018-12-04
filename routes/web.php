<?php

use App\Task;
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

Route::get('/', function () {
    return view('page1');
});

 Route::get('gallery', function()
    {
        return View::make('gallery');
    }); 

 

Route::get('/tasks', function () {

	


	$tasks = Task::all();
    return view('tasks.index', compact('tasks'));
});


Route::get('/tasks/{task}', function ($id) {

	$task = Task::find($id);
    

    return view('tasks.show', compact('task'));
});
   


Route::view('/thankyou', 'thankyou');




Route::get('/userProfile' , 'usr_profController@index');
Route::get('/register' , 'RegisterController@index');
Route::get('/login' , 'LoginController@index');
Route::get('/verify' , 'VerificationController@index');
Route::view('/products','products');
Route::view('/product','product');

 

Route::get('/shop', 'ShopController@index')->name('shop.index');
Route::get('/shop/{product}', 'ShopController@show')->name('shop.show');
Route::get('/search', 'ShopController@search')->name('search');
Route::get('/search-algolia', 'ShopController@searchAlgolia')->name('search-algolia');
Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart/{product}', 'CartController@store')->name('cart.store');
Route::patch('/cart/{product}', 'CartController@update')->name('cart.update');
Route::delete('/cart/{product}', 'CartController@destroy')->name('cart.destroy');
Route::post('/cart/switchToSaveForLater/{product}', 'CartController@switchToSaveForLater')->name('cart.switchToSaveForLater');

Route::delete('/saveForLater/{product}', 'SaveForLaterController@destroy')->name('saveForLater.destroy');
Route::post('/saveForLater/switchToCart/{product}', 'SaveForLaterController@switchToCart')->name('saveForLater.switchToCart');





Route::post('/coupon', 'CouponsController@store')->name('coupon.store');
Route::delete('/coupon', 'CouponsController@destroy')->name('coupon.destroy');

Route::get('/checkout', 'CheckoutController@index')->name('checkout.index')->middleware('auth');
Route::post('/checkout', 'CheckoutController@store')->name('checkout.store');
Route::post('/paypal-checkout', 'CheckoutController@paypalCheckout')->name('checkout.paypal');

Route::get('/guestCheckout', 'CheckoutController@index')->name('guestCheckout.index');


Route::get('/thankyou', 'ConfirmationController@index')->name('confirmation.index');






 
Auth::routes();
Route::get('activate/{token}', 'Auth\RegisterController@activate')
    ->name('activate');




Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user', 'usr_profController@index')->name('userProfile');


Route::get('login/{provider}', 'Auth\SocialAccountController@redirectToProvider');
Route::get('login/{provider}/callback', 'Auth\SocialAccountController@handleProviderCallback');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});



Route::middleware('auth')->group(function () {
    Route::get('/my-profile', 'UsersController@edit')->name('users.edit');
    Route::patch('/my-profile', 'UsersController@update')->name('users.update');

    Route::get('/my-orders', 'OrdersController@index')->name('orders.index');
    Route::get('/my-orders/{order}', 'OrdersController@show')->name('orders.show');
});
