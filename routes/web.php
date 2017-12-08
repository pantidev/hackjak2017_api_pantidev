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
	//var_dump($data);
	foreach ($data as $item) {
		$item["namaTempat"] = cekRPTRA($item->IdLokasi);
    }
    
	// var_dump($data);
    return view('laporan')->with(['data'=>$data]);
});
function cekRPTRA($id) {
    $json = file_get_contents('http://api.jakarta.go.id/ruang-publik/rptra');
    $obj = json_decode($json);
    $tampung = "";
    foreach($obj->data as $item)
    {
        if($item->id == $id)
        {
            $tampung = $item->nama_rptra;
        }
    }
    return $tampung;
}