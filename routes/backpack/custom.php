<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web', config('backpack.base.middleware_key', 'admin')],
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
 CRUD::resource('review', 'ReviewCrudController');
 CRUD::resource('comment', 'CommentCrudController');

  CRUD::resource('mainslider', 'MainSliderCrudController');
  CRUD::resource('shopslider', 'ShopSliderCrudController');
  CRUD::resource('product', 'ProductCrudController');
  CRUD::resource('productcategory', 'ProductCategoryCrudController');
//  CRUD::resource('article', 'ArticleCrudController');
//  CRUD::resource('category', 'CategoryCrudController');
//  CRUD::resource('tag', 'TagCrudController');
}); // this should be the absolute last line of this file


 Route::group(['prefix' => config('backpack.base.route_prefix', 'admin'),
 'middleware' => ['web', config('backpack.base.middleware_key', 'admin')],
 'namespace' => 'App\Http\Controllers\Admin'],
 function () {
   // Backpack\NewsCRUD
   CRUD::resource('article', 'ArticleCrudController');
   CRUD::resource('category', 'CategoryCrudController');
   CRUD::resource('tag', 'TagCrudController');
 });
