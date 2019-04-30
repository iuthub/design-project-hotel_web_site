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
Route::get('/bar', function () {
	return view('bar/main');
});
Route::get('show/{id}', [
	'uses' => 'RoomController@show',
	'as' => 'show',
]);
Route::get('order/{id}', [
	'uses' => 'OrderController@orderProcess',
	'as' => 'order',
])->middleware('auth');
Route::group(['prefix' => 'admin'], function () {

});
Auth::routes();
Route::get('profile', 'UserController@profile');
Route::post('profile', 'UserController@update_avatar');

Route::get('/home', 'HomeController@index')->name('home');
