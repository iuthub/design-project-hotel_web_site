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

Route::get('/', function () {
	return view('hotel/index');
});
Route::get('/blog', function () {
	return view('blog/main');
})->name('blog.index');
Route::group(['prefix' => 'admin'], function() {
    // Route::get('', [
    //     'uses' => 'PostController@getAdminIndex',
    //     'as' => 'admin.index'
    // ]);
    Route::get('create', [
        'uses' => 'PostController@getAdminCreate',
        'as' => 'admin.create'
    ]);
    
    Route::post('create', [
        'uses' => 'PostController@postAdminCreate',
        'as' => 'admin.create'
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