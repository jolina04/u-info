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

//Route::view('/login', 'account.login');

Route::any('/login', function(){
   return 'not authenticated';
})->name('login');

Route::any('/add', 'Account\LoginController@add');
Route::any('/do', 'Account\LoginController@doAwesome');

Route::fallback(function () {
    return 'You can do it with God!';
});

/*
 * sample use of view routing
 * Route::view('/login', 'account.login', ['name'=>'jolina']);
 */
