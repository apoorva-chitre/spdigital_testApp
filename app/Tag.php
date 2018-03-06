<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //

    public function videos() {

    	return $this->belongsToMany(Video::class);

    }

    public function getRouteKeyName() {


    	return 'name';
    }
}
