<?php

Route::get('category/view', 'DashboardController@categories');

Route::get('', 'PagesController@index');
Route::get('article/create', 'ArticleController@create');
Route::post('article/', 'ArticleController@store');
Route::get('article/{article}', 'ArticleController@show');
Route::post('comment/', 'CommentController@store');
Route::get('category/{category}', 'CategoryController@show');
Route::get('all/articles', 'DashboardController@articles');
Route::post('category', 'CategoryController@store');

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-user')->group(function(){
    Route::resource('users', 'UsersController', ['except' => ['show', 'create', 'store'] ]);
});

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('home');

