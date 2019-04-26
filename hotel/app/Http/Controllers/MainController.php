<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller {
	public function getIndex() {
		return view('hotel.index');
	}
	public function searchAvaialableRooms(Request $request) {

	}
}
