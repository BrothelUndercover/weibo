<?php

Route::get('/', 'StaticPagesController@home')->name('home');
Route::get('/help', 'StaticPagesController@help')->name('help');
Route::get('/about', 'StaticPagesController@about')->name('about');

//注册页面
Route::get('signup','UsersController@create')->name('signup');

//登录注册
Route::get('login','SessionsCotroller@create')->name('login');
Route::post('login','SessionsCotroller@store')->name('login');
Route::delete('logout','SessionsCotroller@destroy')->name('logout');

Route::resource('users','UsersController');
