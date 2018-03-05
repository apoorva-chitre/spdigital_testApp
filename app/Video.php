<?php

namespace App;


class Video extends Model

{

	public function likes() {

		return $this->hasMany(Like::class);
	}
    
}
