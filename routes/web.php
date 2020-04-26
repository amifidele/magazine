<?php

Route::get('', 'PagesController@index');
Route::get('article/create', 'ArticleController@create');
Route::post('article/', 'ArticleController@store');
Route::get('article/{article}', 'ArticleController@show');
Route::post('comment/', 'CommentController@store');
Route::get('category/{category}', 'CategoryController@show');

