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
	$data =  app('App\Http\Controllers\LaporController')->total();
    return view('welcome',['data'=>$data]);
});
Route::get('/laporan', function () {
	$data =  app('App\Http\Controllers\LaporController')->latestTen();
    return view('laporan')->with(['data'=>$data]);
});

