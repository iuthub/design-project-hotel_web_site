<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;  
use App\Order;
use App\Room;
use Auth;
use Cookie;

class OrderController extends Controller {
	public function orderProcess($roomNo = null) {
		$userId = Auth::user()->id;
		$currentRoom = Room::where('room_number', '=', $roomNo)->get('id');
		$arrival = Cookie::get('arrival');
		$departure = Cookie::get('departure');
		$order = new Order([
			'user_id' => $userId,
			'room_number' => $roomNo,
			'arrival' => $arrival,
			'departure' => $departure,
		]);
		$order->save();
		return view('partials.infos')->with('success', 'You have ordered successfully!');
	}
}
