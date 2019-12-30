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

//邮件激活账号
Route::get('signup/confirm/{token}','UsersController@confirmEmail')->name('confirm_email');

//用户重设密码
Route::get('password/reset','Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');//重置密码的邮箱发送页面
Route::post('password/email','Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');//邮箱发送重设链接
Route::get('password/reset/{token}','Auth\ResetPasswordController@showResetForm')->name('password.reset');//密码更新页面
Route::post('password/reset','Auth\ResetPasswordController@reset')->name('password.update'); //执行密码更新操作

//微博相关的操作
Route::resource('statuses','StatusesController',['only' => ['store','destroy']]);
