<?php

namespace App;


class Video extends Model

{

	public function likes() {

		return $this->hasMany(Like::class);
	}

	public function user() {

		return $this->belongsTo(User::class);
	}

	public function tags() {

		$this->belongsToMany(Tag::class);
	}

	public function locations() {

		$this->hasOne(Location::class);
	}
    
}
