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

Route::get('try', function(){
    return response([1,2,3], 200);
});


Route::post('login', 'Account\LoginController@login');
Route::post('signup', 'Account\LoginController@signup');

Route::group(['middleware' => 'auth:api'], function() {
    Route::get('logout', 'Account\LoginController@logout');
    Route::get('user', 'Account\LoginController@user');
});

Route::get('/res', function(){
    return [1,2,3];
} );

