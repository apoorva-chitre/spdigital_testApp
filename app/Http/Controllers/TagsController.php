<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tag;

class TagsController extends Controller
{
    

    public function index(Tag $tag) {


    	$videos = $tag->videos;

    	return view('videos.index', compact('videos'));

    }
}

