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

Route::get('blog', 'BlogController@index');

Route::get('blog/{page}', 'BlogController@index');
Route::get('blog/post/{slug}', 'BlogController@post');
Route::post('blog/{post}/comment', 'BlogController@addcomment');

Route::get('{page}/{subs?}', ['uses' => 'PageController@index'])
  ->where(['page' => '^((?!admin).)*$', 'subs' => '.*']);