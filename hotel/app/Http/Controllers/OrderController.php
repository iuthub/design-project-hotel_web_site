<?php

namespace App\Http\Controllers;

use App\Order;
use App\Room;
use Cookie;

class OrderController extends Controller {
	public function orderProcess($roomNo = null) {
		$currentRoom = Room::where('room_number', '=', $roomNo)->get('id');
		$arrival = Cookie::get('arrival');
		$departure = Cookie::get('departure');
		$order = new Order([
			'room_number' => $roomNo,
			'arrival' => $arrival,
			'departure' => $departure,
		]);
		$order->save();
		return view('partials.infos')->with('success', 'You have ordered successfully!');
	}
}
