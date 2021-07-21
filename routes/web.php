<?php


Route::get('/', 'WebController@home')->name('home');
Route::get('/curso', 'WebController@course')->name('course');
Route::get('/blog', 'WebController@blog')->name('blog');
Route::get('/blog/{uri}', 'WebController@article')->name('article');
Route::get('/contato', 'WebController@contact')->name('contact');
