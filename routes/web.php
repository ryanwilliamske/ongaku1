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

Route::get('/about', function () {
    return view('about');
});
Route::get('/add-item', function () {
    return view('products.additem');
});
Route::get('/', function () {
    return view('home');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/profile', function () {
    return view('profile');
});



Route::get('/add-to-cart/{id}',
 'CatalogueController@addToCart');



Route::resource('product','CatalogueController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
