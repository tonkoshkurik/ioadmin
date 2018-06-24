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

//Route::get('/', 'PageController@index')->name('index');


Route::get('kontakty', 'PageController@contacts');
Route::get('reviews', 'PageController@reviews');
Route::get('shop', 'PageController@shop');
Route::post('checkout', 'OrderController@checkout');
//Route::post('checkout', 'OrderController@checkout');
Route::get('checkout', 'PageController@checkout');
Route::get('checkout/order/{id}', 'OrderController@order');

Route::get('product/{slug}', 'PageController@product');

Route::get('blog', 'BlogController@index');

Route::get('blog/{slug}', 'BlogController@category');
Route::get('blog/post/{slug}', 'BlogController@post');
Route::post('blog/{post}/comment', 'BlogController@addcomment');



Route::get('{page}/{subs?}', ['uses' => 'PageController@index'])
  ->where(['page' => '^((?!admin).)*$', 'subs' => '.*']);