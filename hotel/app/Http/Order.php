<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model {
	//
	protected $fillable = ['room_number', 'arrival', 'departure'];
	public function room() {
		$this->belongsTo('App\Room');
	}
}
