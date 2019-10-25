<?php



Route::get('/', 'ProfileController@index');

Auth::routes();

Route::resource('/profile','ProfileController');

Route::resource('/product','ProductsController');

// Proteccion de rutas

Route::group(['middleware' => 'auth'], function () {
    Route::get('new-product', function () {
        return view('products/products-new-form');
    });
});
