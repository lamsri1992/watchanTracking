<?php

use Illuminate\Support\Facades\Route;

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
    return view('dashboard');
});

Route::group(['prefix' => 'tracking'], function () {
	Route::get('/', function () { return view('tracking.index'); });
	Route::get('/create_orderslist', function () { return view('tracking.create'); });
	Route::get('/1', function () { return view('tracking.show'); });
    Route::post('/createOrder','OrderListController@createOrder')->name('tracking.createOrder');
});
