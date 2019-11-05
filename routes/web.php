<?php
use Illuminate\Support\Facades\Auth;
//$user = Auth::user();
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

Route::get('/explore', function () {
    return view('explore');
});
 Route::get('/admins', function () {
     $user = Auth::user();
     if($user != null){
         if(($user->role_id)==1){
             return redirect('http://ongaku.io/admin');
         }else{
             return view('noaccess');
         }
     }else{
         return redirect('http://ongaku.io/admin');
     }
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/companies', function () {
    $user = Auth::user();
    if($user != null){
        if(($user->role_id) == 3){
            return view('companies.home');
        }else{
            return view('noaccess');
        }
    }else{
        return view('auth.login');
    }

});
Route::get('/companies/sell', function () {
    $user = Auth::user();
    if($user != null){
        if(($user->role_id) == 3){
            return view('companies.sell');
        }else{
            return view('noaccess');
        }
    }else{
        return view('auth.login');
    }

});

Route::get('/profile', function () {
    return view('profile');
});


Route::get('/add-to-cart/{id}',
 'CatalogueController@addToCart');
Route::get('/clear-cart', function (){
    session()->forget('cart');
    return redirect()->back()->with('error', 'Cart Cleared');
});


// payment
Route::get('pay','OrdersController@stkpush');

//Ongaku companies delete item
Route::get('/delete-item/{id}',
 'CatalogueController@destroy');

// buy
Route::any('buy','OrdersController@store');

//search
Route::any('search','CatalogueController@search');


Route::get('/delete-item-cart/{id}',
    'CatalogueController@deleteFromCart');

Route::get('/add-item-cart/{id}',
    'OrdersController@plusOne');
Route::get('/remove-item-cart/{id}',
    'OrdersController@minusOne');


Route::resource('product','CatalogueController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/company/{id}', 'CompanyController@index');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
