<?php

namespace App;


class Like extends Model
{
    public function video() {

    	return $this->belongsTo(Video::class);
    }


    public function user() {

    	return $this->belongsTo(User::class);
    }
}
