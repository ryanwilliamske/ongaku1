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
 Route::get('/admins', function () {
     $user = Auth::user();
     if($user != null){
         if(($user->role_id)==1){
             return redirect('http://ongaku.io/admin');
         }else{
             return view('noaccess');
         }
     }else{
         return view('auth.login');
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

//Route::get('/remove-item',
//    function (){
//
//    });

Route::any('buy','OrdersController@store');
Route::any('search','CatalogueController@search');
//    function (){
//    $search = Input::get('search');
//    $catalogue = \App\Catalogue::where('productName','LIKE','%'.$search.'%')->get();
//    if(count($catalogue)>0){
//        return view('products.searchview')->withDetails($catalogue)->withQuery($search);
//    }else{
//        return view('products.searchview')->with('alert','Not found, try again');
//    }
//});

Route::resource('product','CatalogueController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
