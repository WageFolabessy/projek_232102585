<?php

use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/produk', [ProdukController::class,'index'])->name('produk.index');
Route::get('produk/detail_produk/{id}', [ProdukController::class,'detail_produk'])->name('produk.detail_produk');
