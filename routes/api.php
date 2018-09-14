<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('province/[id]', function($id){
	return Provinsi::find($id);
});
	

Route::get('city/{id}', function($id) {
    return Kota::find($id);
});

Route::get('login','API\UserController@login');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
