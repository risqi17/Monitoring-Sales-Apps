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

Route::get('/', 'FrontController@index');
Route::get('/upload', 'FrontController@uploadBarang');
Route::post('/proses/upload', 'FrontController@prosesUploadBarang');
Route::get('/transaksi', 'FrontController@transaksiOnline');
Route::post('/proses/simpan', 'FrontController@simpanTransaksi');
Route::get('/laporan', 'FrontController@laporanTransaksi');
Route::get('/hapus/transaksi/{id}', 'FrontController@hapusTransaksi');

Route::get('/belanja', 'BelanjaController@index');
Route::post('/belanja/kategori', 'BelanjaController@cari');
