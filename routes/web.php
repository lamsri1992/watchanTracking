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
	Route::get('/','OrderListController@index')->name('tracking.index');
	Route::get('/createOrderList', function () { return view('tracking.create'); });
	Route::get('/{id}','OrderListController@show')->name('tracking.show');
    Route::post('/createOrder','OrderListController@createOrder')->name('tracking.createOrder');
});

Route::group(['prefix' => 'drugOrder'], function () {
	Route::get('/','DrugOrderController@index')->name('drug.index');
	Route::get('/createDrugOrder', function () { return view('drug.create'); });
	Route::get('/{id}','DrugOrderController@show')->name('drug.show');
	Route::get('/discharge/{id}','DrugOrderController@discharge')->name('drug.discharge');
    Route::post('/createOrder','DrugOrderController@createOrder')->name('drug.createOrder');
	Route::post('/uploadFile', 'DrugOrderController@upload');
	Route::post('/messageNote', 'DrugOrderController@messageNote');
	Route::post('/fileDelete', 'DrugOrderController@delete')->name('drug.fileDelete');
});

Route::group(['prefix' => 'store'], function () {
	Route::get('/', function () { return view('store.index'); });
});