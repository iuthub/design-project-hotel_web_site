<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Order;
class UserController extends Controller
{
    public function profile(){
    	$user=Auth::user();
        $orders=Order::where('user_id', '=', $user->id)->get();
    	return view('auth/profile', [
            'user'=>$user,
            'orders'=>$orders,
    ]);
    }
    public function update_avatar(Request $request){
    	$request->validate([
    		 'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',]);
    	$user=Auth::user();
    	$avatarName=$user->id.'_avatar'.time().'.'.request()->avatar->getClientOriginalExtension();
    	$request->avatar->storeAs('public/avatars', $avatarName);
    	$user->avatar=$avatarName;
    	$user->save();
    	return back()->with('success', 'You have successfully uploaded image.');   
    }
}
