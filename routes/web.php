<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\CivicController;
use App\Http\Controllers\UserController;
use Illuminate\Routing\RouteRegistrar;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// })->name('home');

// tampilan user
Route::get('/', [UserController::class, 'index'])->name('home');
Route::get('/admin/logout', [UserController::class, 'logout'])->middleware('auth')->name('logoutAdmin');
Route::get('/tim', [UserController::class, 'tampilTim'])->name('tampilTim');
Route::get('/about', [UserController::class, 'tampilAbout'])->name('tampilAbout');
Route::get('/berita/all', [UserController::class, 'tampilAllBerita'])->name('tampilAllBerita');

// tampilan admin
Route::get('/login', [UserController::class, 'tampil'])->name('login');
Route::post('/login/admin', [UserController::class, 'login'])->name('loginAdmin');
Route::get('/home', [UserController::class, 'tampilHome'])->name('tampilHome');
Route::get('/admin/berita', [BeritaController::class, 'tampilBerita'])->name('tampilBerita');

// berita
Route::get('/admin/berita/tambah', [BeritaController::class, 'tampilFormTambah'])->name('tampilFormTambah');
Route::post('/admin/berita/tambahBerita', [BeritaController::class, 'tambahBerita'])->name('tambahBerita')->middleware('auth');
Route::get('/berita/{id}', [UserController::class, 'tampilBeritaById'])->name('tampilBeritaById');
Route::get('/admin/berita/{id}', [BeritaController::class, 'tampilFormEdit'])->name('tampilFormEdit')->middleware('auth');
Route::post('/admin/berita/{id}/edit', [BeritaController::class, 'editBerita'])->name('editBerita')->middleware('auth');
Route::get('/admin/berita/{id}/hapus', [BeritaController::class, 'hapusBerita'])->name('hapusBerita')->middleware('auth');

// civic edu
Route::get('/civic-edu', [CivicController::class, 'tampil'])->name('tampilCivic');
// Route::get('/')
