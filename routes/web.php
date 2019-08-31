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
Route::get('/shop/{slug}','ShopController@show');
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

Route::get('/cart', function () {
    return view('cart');
})->name('cart')->middleware('auth');



Route::get('/logout', 'UsersController@logout');
Route::get('/order', function () {
    return view('order');
})->name('order');

Route::get('/success', function () {
    return view('success');
})->name('success');
