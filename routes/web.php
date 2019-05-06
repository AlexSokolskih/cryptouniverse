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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/products',  'ProductController@index')->name('products');
    Route::get('/bid/{product}', 'BidController@create')->name('bid');
    Route::post('/bid', 'BidController@store')->name('savebid');


    Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
        Route::get('/product', 'ProductController@adminIndex' )->name('adminproducts');
        Route::get('newproduct', function ()    {
            return view('admin.newproduct');
        })->name('newproduct');
        Route::post('newproduct', 'ProductController@store')->name('newproduct');


        Route::get('deleteproduct/{product}', 'ProductController@destroy')->name('deleteproduct');
        Route::get('/editproduct/{product}', 'ProductController@edit')->name('editproduct');
        Route::post('/editproduct/{product}', 'ProductController@update')->name('updateproduct');

        Route::get('/bids', 'BidController@index')->name('bids');

    });


});