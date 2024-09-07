<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\ContohController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\BarangMasuk2Controller;
use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;


Route::get('/', [DashboardController::class, 'index']);
// untuk login
route::get('/login', [LoginController::class, 'loginindex']);
route::post('/loginproses', [LoginController::class, 'loginproses']);
route::get('/logout', [LoginController::class, 'logout']);
// untuk user
route::get('/user', [UserController::class, 'index']);
route::get('/user/tambah', [UserController::class, 'create']);
route::post('/user/simpan', [UserController::class, 'store']);
route::get('/user/{id}/show', [UserController::class, 'show']);
route::post('/user/{id}/update', [UserController::class, 'update']);
route::get('/user/{id}/delete', [UserController::class, 'destroy']);

// untuk barang
route::get('/barang', [BarangController::class, 'index']);
route::get('/barang/tambah', [BarangController::class, 'create']);
route::post('/barang/simpan', [BarangController::class, 'store']);
route::get('/barang/{id}/show', [BarangController::class, 'show']);
route::post('/barang/{id}/update', [BarangController::class, 'update']);
route::get('/barang/{id}/delete', [BarangController::class, 'destroy']);
// untuk jenis
route::get('/jenis', [JenisController::class, 'index']);
route::get('/jenis/tambah', [JenisController::class, 'create']);
route::post('/jenis/simpan', [JenisController::class, 'store']);
route::get('/jenis/{id}/show', [JenisController::class, 'show']);
route::post('/jenis/{id}/update', [JenisController::class, 'update']);
route::get('/jenis/{id}/delete', [JenisController::class, 'destroy']);
// untuk supplier
route::get('/supplier', [SupplierController::class, 'index']);
route::get('/supplier/tambah', [SupplierController::class, 'create']);
route::post('/supplier/simpan', [SupplierController::class, 'store']);
route::get('/supplier/{id}/show', [SupplierController::class, 'show']);
route::post('/supplier/{id}/update', [SupplierController::class, 'update']);
route::get('/supplier/{id}/delete', [SupplierController::class, 'destroy']);
// untuk Barang Masuk
route::get('/barang_masuk', [BarangMasuk2Controller::class, 'index']);
route::get('/barang_masuk/tambah', [BarangMasuk2Controller::class, 'create']);
route::post('/barang_masuk/simpan', [BarangMasuk2Controller::class, 'store']);
route::get('/barang_masuk/{id}/show', [BarangMasuk2Controller::class, 'show']);
route::get('/barang_masuk/report', [BarangMasuk2Controller::class, 'report']);
route::post('/barang_masuk/{id}/update', [BarangMasuk2Controller::class, 'update']);
route::get('/barang_masuk/{id}/delete', [BarangMasuk2Controller::class, 'destroy']);

// untuk Barang Keluar
route::get('/barang_keluar', [BarangKeluarController::class, 'index']);
route::get('/barang_keluar/tambah', [BarangKeluarController::class, 'create']);
route::post('/barang_keluar/simpan', [BarangKeluarController::class, 'store']);
route::get('/barang_keluar/report', [BarangKeluarController::class, 'report']);
route::get('/barang_keluar/{id}/show', [BarangKeluarController::class, 'show']);
route::post('/barang_keluar/{id}/update', [BarangKeluarController::class, 'update']);
route::get('/barang_keluar/{id}/delete', [BarangKeluarController::class, 'destroy']);


// route::get('/barang_keluar', [BarangKeluar2Controller::class, 'index']);
// route::get('/barang_keluar/tambah', [BarangKeluar2Controller::class, 'create']);
// route::post('/barang_keluar/simpan', [BarangKeluar2Controller::class, 'store']);
// route::get('/barang_keluar/{id}/show', [BarangKeluar2Controller::class, 'show']);
// route::post('/barang_keluar/{id}/update', [BarangKeluar2Controller::class, 'update']);
// route::get('/barang_keluar/{id}/delete', [BarangKeluar2Controller::class, 'destroy']);


route::get('/contoh/tambah', [ContohController::class, 'create']);
route::post('/contoh/simpan', [ContohController::class, 'store']);