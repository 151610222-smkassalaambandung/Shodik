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

Route::get('/produk', function () {
	$a = App\produk::all();
	$w = App\pengguna::all();
	$c = App\pengaturan::all();
    return $a .'<br><br>' .$w .'<br><br>'. $c;
});

Route::get('/pengguna', function () {
	$b = App\pengguna::all();
    return $b;
});

Route::get('/pengaturan', function () {
	$c = App\pengaturan::all();
    return $c;
});

Route::get('/test','MyController@percobaan');
Route::get('/test2','MyController@percobaan2');
Route::get('/test3','MyController@percobaan3');
Route::get('/test4','MyController@percobaan4');
Route::get('/test5','MyController@percobaan5');
Route::get('/test6','MyController@percobaan6');
Route::get('/test7','MyController@percobaan7');

Route::get('/{data?}/{data2}','MyController@latihan');
   

