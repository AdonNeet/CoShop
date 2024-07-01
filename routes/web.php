<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

// Landing Page
Route::get('/',[FrontendController::class,'home'])->name('home');

// Login
Route::get('/login',[AuthController::class,'login'])->name('login');
// Register
Route::get('/register',[AuthController::class,'register'])->name('register');
Route::post('/register',[AuthController::class,'register']);

// Dashboard
// Route::prefix('admin')->group(function() {
Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
Route::get('/daftar_akun', [BackendController::class, 'show_account'])->name('akun.show');
Route::get('/daftar_pengguna/{role}', [BackendController::class, 'show_user'])->name('pengguna.show');
Route::get('/transaksi/{jenis}', [BackendController::class, 'show_tran'])->name('tran.show');
Route::get('/daftar_produk', [BackendController::class, 'show_product'])->name('produk.show');


// Rute untuk admin
// Route::prefix('admin')->middleware('role:admin')->group(function () {
    // Route::get('/daftar_pengguna/{role}', [BackendController::class, 'show_user'])->name('pengguna.show');
    // Route::get('/produk', [BackendController::class, 'showProduk']);
    // Route::get('/pesanan', [BackendController::class, 'showPesanan']);
    // Route::get('/pengiriman', [BackendController::class, 'showPengiriman']);
// });

// Rute untuk penjual
// Route::prefix('penjual')->middleware('role:pembeli')->group(function () {
    // Route::get('/produk', [BackendController::class, 'showProduk']);
    // Route::get('/pesanan', [BackendController::class, 'showPesanan']);
    // Route::get('/pembayaran', [BackendController::class, 'showPesanan']);
// });

// Rute untuk ekspedisi
// Route::prefix('ekspedisi')->middleware('role:ekspedisi')->group(function () {
    // Route::get('/pengiriman', [BackendController::class, 'showPengiriman']);
// });











// // ===== CRUD =====
// Route::get('/article',[ArticleController::class,'index'])->name('article.index');
// // Read
// Route::get('/article/read/{id}',[ArticleController::class,'detail'])->name('article.detail');
// // Create
// Route::get('/article/create',[ArticleController::class,'create'])->name('article.create');
// Route::post('/article/create/process',[ArticleController::class,'store'])->name('article.store');
// // Update
// Route::get('/article/edit/{id}',[ArticleController::class,'edit'])->name('article.edit');
// // proses update
// Route::put('/article/update/{id}',[ArticleController::class,'update'])->name('article.update');
// // Delete
// Route::delete('/article/delete/{id}',[ArticleController::class,'destroy'])->name('article.delete');

// // });