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
    return view('login');
});

Route::post('/login','LoginController@index');
Route::get('/logout','LoginController@logout');

Route::get('/gpass','GantiPassController@index');
Route::post('/gpass/confirm','GantiPassController@gpass');

Route::get('/verifikasi','VerifikasiController@index');
Route::post('/verifikasi/sending','VerifikasiController@sending');


Route::get('/lupapass','LupaPassController@index');
Route::post('/lupapass/sending','LupaPassController@kirim');

Route::get('/registrasi','RegistrasiController@index');
Route::post('/registrasi/buatakun','RegistrasiController@buatakun');

Route::get('/rekomend','RekomendasiController@index');
Route::get('/rekomend/result','RekomendasiController@result');