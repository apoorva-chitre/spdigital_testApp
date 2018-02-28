<?php

use App\Video;


Route::get('/', 'VideosController@index'); 

Route::get('/{video}' , 'VideosController@show');

