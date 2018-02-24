<?php

Route::get('', 'HomeController')->name('home');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');

Route::resource('posts', 'PostController');

Route::resource('categories', 'CategoryController');

Route::post('posts/{post}/comments', 'CommentController@store')->name('comments.store');

Route::post('/comments/{comment}/replies', 'ReplyController@store')->name('replies.store');
