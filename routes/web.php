<?php

Route::get('', 'PagesController@index');
// Route::get('', 'CategoryController@main_article');
Route::get('article/create', 'ArticleController@create');
Route::post('article/', 'ArticleController@store');
Route::get('article/{article}', 'ArticleController@show');
Route::post('comment/', 'CommentController@store');
Route::get('category/{category}', 'CategoryController@show');


Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('home');
