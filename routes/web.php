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

Route::get('email', 'HomeController@email')->name('email');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', 'Auth\LoginController@logout');
Route::group(['prefix' => 'admin', 'middleware' => ['web', 'auth']], function () {

    Route::group(['prefix'=>'category'],function(){
    Route::resource('categories', 'CategoriesController');
    Route::resource('products', 'ProductController');
    Route::get('ajaxEdit/{id}','CategoriesController@ajaxEdit')->name('edit');
    });

    Route::group(['prefix'=>'order'],function(){
    Route::get('order', 'OrderController@index')->name('order');
    Route::get('detail', 'OrderController@detail')->name('detail');
    Route::post('ship', 'OrderController@ship')->name('ship');
    Route::post('done', 'OrderController@done')->name('done');
    });

    Route::group(['prefix'=>'user'],function(){
     Route::resource('user', 'UserController');
    });

});
Route::get('/', 'PageController@index')->name('index');

Route::get('categoryPage/{id}', 'PageController@getCategoryPage')->name('categoryPage');
Route::get('productDetail/{id}', 'PageController@getProductDetail')->name('productDetail');
