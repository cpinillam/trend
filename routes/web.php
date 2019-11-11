<?php



Route::get('/', 'SiteController@index');

Auth::routes();

Route::resource('/profile','ProfileController');


Route::resource('/product','ProductsController');


Route::get('/product/{product}/', 'ProductsController@show')->middleware('points');

// Proteccion de rutas

Route::group(['middleware' => 'auth'], function () {
    Route::get('new-product', function () {
        return view('products/products-new-form');
    });
});
