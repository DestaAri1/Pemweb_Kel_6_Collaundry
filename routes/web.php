<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PemesananController;
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
    return view('main');
});

Route::get('/main', [BlogController::class, 'home'])->name('main');

Route::get('/main/harga', [BlogController::class, 'price'])->name('harga');

Route::get('/main/promo', [BlogController::class, 'service'])->name('servis');

Route::get('/main/tentang', [BlogController::class, 'tentang'])->name('tentang');

Route::get('/main/pemesanan', [BlogController::class, 'pemesanan'])->name('pemesanan');

Auth::routes();

Route::get('/admin', [HomeController::class, 'index'])->name('home');

Route::get('/admin/promo', [HomeController::class, 'promo'])->name('admin.promo');

Route::get('/admin/rekap_pemesanan', [HomeController::class, 'rekap'])->name('admin.rekap');

Route::post('add_promo', [HomeController::class, 'add_promo'])->name('addpromo');

Route::resource('promo', PromoController::class);

Route::resource('kategori', KategoriController::class);

Route::resource('produk', ProdukController::class);

Route::resource('pemesanan', PemesananController::class);

Route::get('/admin/kategori', [HomeController::class, 'kategori'])->name('kategori');

Route::get('/admin/produk', [HomeController::class, 'produk'])->name('admin.produk');

Route::post('add_pesan', [BlogController::class, 'add_pesan'])->name('add_pesan');

Route::get('image/{filename}', 'HomeController@displayImage')->name('image.displayImage');

