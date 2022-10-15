<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\UsernameController;
use App\Http\Controllers\DetailTrxController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\DashboardController;



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

Route::get('/',[IndexController::class,'index']);
Route::get('/index',[IndexController::class,'index']);


/*BARANG*/
Route::get('/barang',[BarangController::class,'alert']);
Route::post('/barang/tambah',[BarangController::class,'tambahBarang']);
Route::get('/barang/tambahbarang',[BarangController::class,'input']);
Route::get('/barang/hapus/{id}',[BarangController::class,'hapusBarang']);
Route::get('/barang/edit/{id}',[BarangController::class,'editBarang']);
Route::post('/barang/edit/{id}',[BarangController::class,'edit']);



/*USERNAME*/
Route::get('/username',[UsernameController::class,'username']);
Route::post('/username/tambah',[UsernameController::class,'tambahUsername']);
Route::post('/username/tambahusername',[UsernameController::class,'input']);
Route::get('/username/hapus/{id}',[UsernameController::class,'hapusUsername']);
Route::get('/username/edit/{id}',[UsernameController::class,'editUsername']);
Route::post('/username/edit/{id}',[UsernameController::class,'edit']);


/*DETAIL*/
Route::get('/detail',[DetailTrxController::class,'detail']);
Route::post('/detail/tambah',[DetailTrxController::class,'tambahDetail']);
Route::get('/detail/tambahdetail',[DetailTrxController::class,'input']);
Route::get('/detail/hapus/{id}',[DetailTrxController::class,'hapusDetail']);
Route::get('/detail/edit/{id}',[DetailTrxController::class,'editDetail']);
Route::post('/detail/edit/{id}',[DetailTrxController::class,'edit']);


/*TRANSAKSI*/
Route::get('/transaksi',[TransaksiController::class,'transaksi']);
Route::post('/transaksi/tambah',[TransaksiController::class,'tambahTransaksi']);
Route::get('/transaksi/tambahtransaksi',[TransaksiController::class,'input']);
Route::get('/transaksi/hapus/{id}',[TransaksiController::class,'hapusTransaksi']);
Route::get('/transaksi/edit/{id}',[TransaksiController::class,'editTransaksi']);
Route::post('/transaksi/edit/{id}',[TransaksiController::class,'edit']);

/*DASHBOARD*/
Route::get('/dashboard',[DashboardController::class,'dashboard']);
