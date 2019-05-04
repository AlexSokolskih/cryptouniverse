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
    Route::get('/products',  'ProductController@index');


    Route::group(['prefix' => 'admin'], function () {
        Route::get('/product', function ()    {
            return view('admin.product');
        });
        Route::get('newproduct', function ()    {
            return view('admin.newproduct');
        })->name('newproduct');
        Route::post('newproduct', 'ProductController@store')->name('newproduct');
    });


});