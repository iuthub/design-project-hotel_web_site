<?php

namespace App\Http\Controllers;

use App\Order;
use App\Room;
use Cookie;
use Illuminate\Http\Request;

class MainController extends Controller {
	public function getIndex() {
		return view('hotel.index');
	}
	public function searchAvailableRooms(Request $request) {
		$arrivalDate = $request->get('arrival');
		$departureDate = $request->get('departure');
		$adults = $request->get('sellist1');
		$children = $request->get('sellist2');
		Cookie::queue(cookie('arrival', $arrivalDate, $minute = 10));
		Cookie::queue(cookie('departure', $departureDate, $minute = 10));
		$busyRooms = Order::where([
			['arrival', '>=', $arrivalDate],
			['departure', '<=', $departureDate],
		])->distinct()->get('room_number');
		$availableRooms = Room::whereNotIn('room_number', $busyRooms)->get();
		return view('hotel.availables', ['availableRooms' => $availableRooms]
		);
	}
}
