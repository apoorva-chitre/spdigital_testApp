<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Video;


class VideosController extends Controller
{

    public function index() {

    	$videos = Video::latest()->get();

    	return view('videos.index', compact('videos'));
    }


    public function show(Video $video) {

    	return view('videos.show', compact('video'));
    }
    

    public function create() {


    	return view('videos.create');

    }

    public function store() {


    	$this->validate(request(), [

    		'title' => 'required'

    	]);


    	Video::create ( [

    		'title' => request('video-title')

    	]);

    	return redirect('/');

    }
}
