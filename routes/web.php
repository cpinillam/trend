<?php



Route::get('/', 'SiteController@index');

Auth::routes();

Route::resource('/profile','ProfileController');


Route::resource('/product','ProductsController');
Route::post('/order','OrderController@createNewOrder');
Route::resource('/order','OrderController');
/* Route::get('issue-card/{msg}', function ($msg) {
    return view('errors/illustrated-layout');
}); */

//Route::view('issue-card/{msg}', 'errors/illustrated-layout', ['msg' => '$msg']);
Route::get('issue-card/{msg?}', function ($msg) {
    return view('errors/illustrated-layout')->with('msg', $msg);
});

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


