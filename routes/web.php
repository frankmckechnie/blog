<?php


Route::get('/home', 'PostsController@index');

Route::get('/', 'PostsController@index')->name('home');

Route::post('/posts', 'PostsController@store');

Route::get('/posts/create', 'PostsController@create');

Route::get('/posts/{post}', 'PostsController@show');


Route::post('/posts/{post}/comments', 'CommentsController@store');


// show register view
Route::get('/register', 'RegistrationController@create');

// register userr
Route::post('/register',  'RegistrationController@store');

Route::get('/login', 'SessionsController@create')->name('login');

Route::post('/login', 'SessionsController@store');


Route::get('/logout', 'SessionsController@destory');