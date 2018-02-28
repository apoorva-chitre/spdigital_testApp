<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Video;


class VideosController extends Controller
{

    public function index() {

    	$videos = Video::all();

    	return view('videos.index', compact('videos'));
    }


    public function show(Video $video) {

    	return view('videos.show', compact('video'));
    }
    
}
