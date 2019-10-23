<?php



Route::get('/', 'ProfileController@index');

/* Route::get('/', function () {
    return view('welcome');
}); */

Auth::routes();

Route::resource('/profile','ProfileController');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/new-product', function () {
    return view('products/products-new-form');
});

Route::resource('/product','ProductsController');


Route::get('/', 'ProfileController@index');
