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

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/shop', 'ShopController@index')->name('shop');
Route::get('/shop/{slug}','ShopController@show');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');


/*user register*/

Route::get('/register','UsersController@registrationForm')->name('register');
Route::post('/register','UsersController@store')->name('resister_store');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/item', function () {
    return view('item');
})->name('item');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('/order', function () {
    return view('order');
})->name('order');

Route::get('/success', function () {
    return view('success');
})->name('success');
