<?php



Route::get('/', 'SiteController@vista');

Auth::routes();

Route::resource('/profile','ProfileController');


Route::resource('/product','ProductsController');
Route::resource('/order','OrderController');

//
Route::get('/order/{product}/checkout','OrderController@checkout');
Route::get('/product/{product}/', 'ProductsController@show')->middleware('points');
Route::get('/checkout/{product}/', 'OrderController@checkout')->middleware('auth');

// Proteccion de rutas

Route::group(['middleware' => 'auth'], function () {
    Route::get('new-product', function () {
        return view('products/products-new-form');
    });

   
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
