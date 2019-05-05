<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', [
	'uses' => 'MainController@getIndex',
	'as' => 'main.index',
]);
Route::get('/check', [
	'uses' => 'MainController@searchAvailableRooms',
	'as' => 'check',
]);
Route::get('show/{id}', [
	'uses' => 'RoomController@show',
	'as' => 'show',
]);
Route::get('order/{id}', [
	'uses' => 'OrderController@orderProcess',
	'as' => 'order',
])->middleware('auth');
Route::get('order/cancel/{id}', [
	'uses' => 'OrderController@cancelOrder',
	'as' => 'order.cancel',
])->middleware('auth');
//Pages without controllers
Route::get('/bar', function () {
	return view('bar/main');
})->name('bar');
Route::get('amenities', function(){
	return view('bar.main');
})->name('amenities');
Route::get('rooms', function(){
	return view('hotel.rooms');
})->name('rooms');
//END OF Pages without controllers
Auth::routes();
Route::get('profile', 'UserController@profile');
Route::post('profile', 'UserController@update_avatar');

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
