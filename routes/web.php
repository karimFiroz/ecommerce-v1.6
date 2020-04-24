<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/','SiteController@index')->name('index');

Route::get('/products','SiteController@products')->name('home');

Route::get('/product','SiteController@product')->name('product');
Route::get('/show','SiteController@show')->name('show');

Route::get('/home','SiteController@home');

Route::get('/contact','SiteController@contact')->name('contact');

Route::post('/form','SiteController@formHandler');
/*

Route::group(['prefix'=>'admin'], function(){
    Route::get('/','AdminSiteController@index')->name('admin.index');
Route::get('/product/create','AdminSiteController@product_store')->name('admin.product.store');
});
*/

Route::group(['prefix'=>'admin'], function(){
    Route::get('/','AdminSiteController@index')->name('admin.index');
    Route::get('/product/create','AdminSiteController@product_create')->name('admin.product.create');
Route::Post('/product/create','AdminSiteController@product_store')->name('admin.product.store');
});


