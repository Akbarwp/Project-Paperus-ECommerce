<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SalesController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('portofolio', [HomeController::class, 'portofolio'])->name('portofolio');
Route::get('toko', [HomeController::class, 'toko'])->name('toko');
Route::get('custom', [HomeController::class, 'index'])->name('custom');
Route::get('tentang-kami', [HomeController::class, 'aboutUs'])->name('tentang-kami');

Route::get('toko/{slug}', [HomeController::class, 'produk'])->name('toko.produk');
Route::post('toko/{slug}', [SalesController::class, 'keranjang'])->name('toko.produk.keranjang');
Route::put('toko/{slug}', [SalesController::class, 'beliSekarang'])->name('toko.produk.beliSekarang');

Route::get('cart', [SalesController::class, 'cart'])->name('cart');
Route::post('cart', [SalesController::class, 'pembayaran'])->name('pembayaran');
Route::put('cart', [SalesController::class, 'ubahJml'])->name('ubahJml');
Route::delete('cart', [SalesController::class, 'hapusItem'])->name('hapusItem');

Route::get('profil', [HomeController::class, 'profil'])->name('profil');
Route::post('profil', [HomeController::class, 'updateProfil'])->name('profil.update');