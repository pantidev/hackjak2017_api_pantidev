<?php

use Illuminate\Http\Request;
use App\Lapor;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('lapor', 'LaporController');

Route::get('total-aduan', function(){
    return Lapor::count();
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

