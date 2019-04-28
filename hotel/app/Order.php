<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model {
	//
	public function room() {
		$this->belongsTo('App\Room');
	}
}
