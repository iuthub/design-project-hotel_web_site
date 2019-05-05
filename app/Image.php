<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //
    public function room(){
    	$this->belongsTo('App\Room');
    }
}
