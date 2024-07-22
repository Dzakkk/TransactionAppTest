<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\SalesDetController;
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

Route::get('/test', function () {
    return view('layouts.about');
});

Route::get('/', [SalesController::class, 'dashboard'])->name('data');

Route::get('/barang', [BarangController::class, 'barang'])->name('barang');
Route::post('/barang/tambah/', [BarangController::class, 'tambah_barang'])->name('tambah_barang');
Route::delete('/barang/{id}/delete/', [BarangController::class, 'delete'])->name('barang.delete');
Route::put('/barang/{id}/update/', [BarangController::class, 'update'])->name('barang.edit');

Route::get('/customer', [CustomerController::class, 'customer'])->name('customer');
Route::post('/customer/tambah/', [CustomerController::class, 'tambah_customer'])->name('tambah_customer');
Route::delete('/customer/{id}/delete/', [CustomerController::class, 'delete'])->name('customer.delete');
Route::put('/customer/{id}/update/', [CustomerController::class, 'update'])->name('customer.edit');

Route::get('/daftar/transaksi', [SalesController::class, 'transaksi'])->name('transaksi.data');

Route::get('/transaksi', [SalesDetController::class, 'transaksi_new'])->name('transaksi');
Route::post('/transaksi/new/', [SalesDetController::class, 'transaction'])->name('transaksi.new');

Route::get('/search', [SalesController::class, 'search'])->name('search');
Route::get('/about', [SalesController::class, 'about'])->name('about');

Route::fallback(function (){
    return response()->view('layouts.notfound', [], 404);
});