<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\File;

use Illuminate\Support\Facades\Storage;

use App\Video;



class VideosController extends Controller
{

    public function __construct() {

        $this->middleware('auth')->except(['index','show']);


    }

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

    public function store(request $request) {


    	$this->validate($request, [

    		'video_title' => 'required',
            'video_file' => 'required',
            'thumb_img' => 'required' 

    	]);

       
       if($request->hasfile('video_file')) {

            $vid_file = $request->file('video_file');
            $vid_name = time().$vid_file->getClientOriginalName();

           $vid_file->move(public_path().'/videos', $vid_name); 
   
       }


       if($request->hasfile('thumb_img')) {

            $thumb_img = $request->file('thumb_img');
            $thumb_img_name = time().$thumb_img->getClientOriginalName();

            $thumb_img->move(public_path().'/thumbnails', $thumb_img_name); 

       }

    	$video = new Video();

        $video->title = $request->get('video_title');

        $video->user_id = auth()->id();

        $video->videoURL = $vid_name;

        $video->thumbURL = $thumb_img_name;

        $video->save();


    	return redirect('/');

    }
}
