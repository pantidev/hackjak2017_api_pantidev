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

Route::get('/tawuran',function(){
	$json = file_get_contents('http://api.jakarta.go.id/ruang-publik/tawuran');
	$obj = json_decode($json);
	foreach ($obj->data as $key) {
		$key->latitude = $key->location->latitude;
		$key->longitude = $key->location->longitude;
		unset($key->location);
	}
	echo json_encode($obj);
});