<?php

use App\Video;


Route::get('/', 'VideosController@index'); 

Route::get('/videos/create' , 'VideosController@create');

Route::get('/videos/{video}' , 'VideosController@show');

Route::post('/videos', 'VideosController@store');