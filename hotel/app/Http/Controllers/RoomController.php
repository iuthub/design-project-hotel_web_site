<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;
use App\Image;
class RoomController extends Controller {
	//
	public function show(Request $request, $id = null) {
		$room = Room::find($id);
		$abstractImages=Image::where('room_id', '=' ,$id)->get('url_path');
		$images = collect(json_decode($abstractImages, true));
		// $images=explode("\"", $abstractImages);
		return view('hotel.oneroom')->with(['room' => $room, 'images'=>collect($images),]);
	}
}
