<?php

use App\Video;


Route::get('/', 'VideosController@index')->name('home'); 

Route::get('/videos/create' , 'VideosController@create');

Route::get('/videos/{video}' , 'VideosController@show');

Route::post('/videos', 'VideosController@store');

Route::post('/videos/{video}/likes', 'LikesController@store');


Route::get('/register', 'RegistrationController@create');

Route::post('/register', 'RegistrationController@store');


Route::get('/login', 'SessionsController@create')->name('login');

Route::post('/login', 'SessionsController@store');

Route::get('/logout', 'SessionsController@destroy');

Route::get('videos/tags/{tag}', 'TagsController@index');