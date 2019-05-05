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
		return redirect()->route('main.index');
	}
	public function cancelOrder($orderNo=null){
		$order=Order::find($orderNo);
		$order->delete();
		return redirect()->back();
	}
}
