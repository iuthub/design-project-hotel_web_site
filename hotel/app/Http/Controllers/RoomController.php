<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;

class RoomController extends Controller {
	//
	public function show(Request $request, $id = null) {
		$room = Room::find($id);
		return view('hotel.room')->with(['room' => $room]);
	}
}
