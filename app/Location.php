<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    //

    public function videos() {

    	$this->belongsTo(Video::class);
    }
}
