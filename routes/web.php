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
    return view('welcome');
});

Route::get('/users','UserController@allUsers');
Route::get('/stations','StationController@allStations');
Route::post('/findStation','StationController@findStation');



Route::post('/login','UserController@login');
Route::post('/newOrder','OrderController@newOrder');
Route::post('/updateOrder','OrderController@updateOrder');
Route::post('/lastOrder','OrderController@lastOrder');
Route::post('/allOrdersByStation','OrderController@allOrdersByStation');