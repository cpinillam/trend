<?php



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/new-product', function () {
    return view('products/products-new-form');
});

Route::resource('/product','ProductsController');
