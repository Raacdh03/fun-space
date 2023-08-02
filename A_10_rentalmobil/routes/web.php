<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/mobil', 'MobilController@index');
Route::get('/mobil/tambah', 'MobilController@tambah');
Route::post('/mobil/simpan', 'MobilController@simpan');
Route::get('/mobil/edit/{idmobil}', 'MobilController@edit');
Route::put('/mobil/update/{idmobil}', 'MobilController@update');
Route::get('/mobil/hapus/{idmobil}', 'MobilController@delete');

Route::get('/pelanggan', 'PelangganController@index');
Route::get('/pelanggan/tambah', 'PelangganController@tambah');
Route::post('/pelanggan/simpan', 'PelangganController@simpan');
Route::get('/pelanggan/edit/{idpelanggan}', 'PelangganController@edit');
Route::put('/pelanggan/update/{idpelanggan}', 'PelangganController@update');
Route::get('/pelanggan/hapus/{idpelanggan}', 'PelangganController@delete');

Route::get('/pinjam', 'PinjamController@index');
Route::get('/pinjam/tambah', 'PinjamController@tambah');
Route::post('/pinjam/simpan', 'PinjamController@simpan');
Route::get('/pinjam/edit/{idpelanggan}', 'PinjamController@edit');
Route::post('/pinjam/update/{idpelanggan}', 'PinjamController@update');
Route::get('/pinjam/hapus/{idpelanggan}', 'PinjamController@delete');
