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

Route::get('blog/index', [
	'uses' => 'PostController@getIndex',
	'as' => 'blog.index',
]);
Route::get('show/{id}', [
	'uses' => 'RoomController@show',
	'as' => 'show',
]);
Route::get('order/{id}', [
	'uses' => 'OrderController@orderProcess',
	'as' => 'order',
]);
Route::group(['prefix' => 'admin'], function () {
	// Route::get('', [
	//     'uses' => 'PostController@getAdminIndex',
	//     'as' => 'admin.index'
	// ]);
	Route::get('create', [
		'uses' => 'PostController@getAdminCreate',
		'as' => 'admin.create',
	]);

	Route::post('create', [
		'uses' => 'PostController@postAdminCreate',
		'as' => 'admin.create',
	]);
	// Route::get('edit/{id}', [
	//     'uses' => 'PostController@getAdminEdit',
	//     'as' => 'admin.edit'
	// ]);
	// Route::get('delete/{id}', [
	//     'uses' => 'PostController@getAdminDelete',
	//     'as' => 'admin.delete'
	// ]);
	// Route::post('edit', [
	//     'uses' => 'PostController@postAdminUpdate',
	//     'as' => 'admin.update'
	// ]);
});
Auth::routes();
Route::get('profile', 'UserController@profile');
Route::post('profile', 'UserController@update_avatar');

Route::get('/home', 'HomeController@index')->name('home');
