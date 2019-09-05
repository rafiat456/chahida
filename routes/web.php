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

Route::get('/', 'IndexController@index')->name('home');

Route::get('/shop', 'ShopController@index')->name('shop');
/*Route::get('/shop/{slug}','ShopController@show')->name('shop.show');*/
Route::get('/shop/{category?}', 'SearchController@index')->where('category', '.*')->name('searchprice');
/*Route::post('/shop/price-searching','SearchController@Price')->name('searchprice');*/
Route::get('/contact', function () {
    return view('contact');
})->name('contact');



Route::group(['middleware' => ['auth']], function() {
  

});

Route::group(['middleware' => 'auth'], function () {

      Route::get('/checkout', function () {
        dd('12');
    return view('checkout');
})->name('checkout');
    
});

/*user register*/

Route::get('/register','UsersController@registrationForm')->name('register');
Route::get('/register/verification/{token}','UsersController@verification')->name('register_verify');
Route::post('/register','UsersController@store')->name('resister_store');

/*login */
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login','UsersController@checklogin')->name('login_action');


Route::get('/cart','CartController@index')->name('cart.index');
Route::post('/cart','CartController@store')->name('cart.store');
Route::get('/cart/empty','CartController@empty')->name('cart.empty');
Route::delete('/cart/{id}','CartController@destroy')->name('cart.destroy');


Route::get('/checkout','CartController@checkout')->name('checkout');


Route::get('/logout', 'UsersController@logout');
Route::get('/order', function () {
    return view('order');
})->name('order');

Route::get('/success', function () {
	if (Session::get('success') != "") {
		return view('success');
	}else{
		return redirect('/');
	}
    
})->name('success');
