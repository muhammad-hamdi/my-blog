<?php

Route::get('', 'HomeController')->name('home');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');

Route::resource('posts', 'PostController');