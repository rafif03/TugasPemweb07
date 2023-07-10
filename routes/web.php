<?php

use App\Http\Controllers\JenisPelangganController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\TagihanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Middleware\Authenticate;
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
    return view('welcome');
});

Route::group(['middleware' => ['KhususAdmin', 'auth']], function() {
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users/create', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/edit/{id}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
});
Route::group(['middleware' => ['auth', 'KhususPetugas']], function() {
    Route::get('/tagihan', [TagihanController::class, 'index'])->name('tagihan.index');
    Route::get('/tagihan/create', [TagihanController::class, 'create'])->name('tagihan.create');
    Route::post('/tagihan/create', [TagihanController::class, 'store'])->name('tagihan.store');
    Route::get('/tagihan/edit/{id}', [TagihanController::class, 'edit'])->name('tagihan.edit');
    Route::put('/tagihan/edit/{id}', [TagihanController::class, 'update'])->name('tagihan.update');
    Route::delete('/tagihan/{id}', [TagihanController::class, 'destroy'])->name('tagihan.destroy');
});
Route::group(['middleware' => ['auth', 'KhususAdmin']], function() {
    Route::get('/pelanggan', [PelangganController::class, 'index'])->name('pelanggan.index');
    Route::get('/pelanggan/create', [PelangganController::class, 'create'])->name('pelanggan.create');
    Route::post('/pelanggan/create', [PelangganController::class, 'store'])->name('pelanggan.store');
    Route::get('/pelanggan/edit/{id}', [PelangganController::class, 'edit'])->name('pelanggan.edit');
    Route::put('/pelanggan/edit/{id}', [PelangganController::class, 'update'])->name('pelanggan.update');
    Route::delete('/pelanggan/{id}', [PelangganController::class, 'destroy'])->name('pelanggan.destroy');
});
Route::group(['middleware' => ['auth', 'KhususAdmin']], function() {
    Route::get('/kasir', [KasirController::class, 'index'])->name('kasir.index');
    Route::get('/kasir/create', [KasirController::class, 'create'])->name('kasir.create');
    Route::post('/kasir/create', [KasirController::class, 'store'])->name('kasir.store');
    Route::get('/kasir/edit/{id}', [KasirController::class, 'edit'])->name('kasir.edit');
    Route::put('/kasir/edit/{id}', [KasirController::class, 'update'])->name('kasir.update');
    Route::delete('/kasir/{id}', [KasirController::class, 'destroy'])->name('kasir.destroy');
});
Route::group(['middleware' => ['auth', 'KhususAdmin']], function() {
    Route::get('/petugas', [PetugasController::class, 'index'])->name('petugas.index');
    Route::get('/petugas/create', [PetugasController::class, 'create'])->name('petugas.create');
    Route::post('/petugas/create', [PetugasController::class, 'store'])->name('petugas.store');
    Route::get('/petugas/edit/{id}', [PetugasController::class, 'edit'])->name('petugas.edit');
    Route::put('/petugas/edit/{id}', [PetugasController::class, 'update'])->name('petugas.update');
    Route::delete('/petugas/{id}', [PetugasController::class, 'destroy'])->name('petugas.destroy');
});
Route::group(['middleware' => ['auth', 'KhususAdmin']], function() {
    Route::get('/jenis', [JenisPelangganController::class, 'index'])->name('jenis.index');
    Route::get('/jenis/create', [JenisPelangganController::class, 'create'])->name('jenis.create');
    Route::post('/jenis/create', [JenisPelangganController::class, 'store'])->name('jenis.store');
    Route::get('/jenis/edit/{id}', [JenisPelangganController::class, 'edit'])->name('jenis.edit');
    Route::put('/jenis/edit/{id}', [JenisPelangganController::class, 'update'])->name('jenis.update');
    Route::delete('/jenis/{id}', [JenisPelangganController::class, 'destroy'])->name('jenis.destroy');
});
Route::group(['middleware' => ['auth', 'KhususKasir']], function() {
    Route::get('/pelunasan', [TagihanController::class, 'pelunasanindex'])->name('pelunasan.index');
    Route::get('/pelunasan/edit/{id}', [TagihanController::class, 'pelunasanedit'])->name('pelunasan.edit');
    Route::put('/pelunasan/edit/{id}', [TagihanController::class, 'pelunasanupdate'])->name('pelunasan.update');
});
Route::group(['middleware' => ['auth', 'KhususPelanggan']], function() {
Route::get('/tagihansaya', [TagihanController::class, 'tagihansayaindex'])->name('tagihansaya.index');
});

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('ceklogin');
Route::get('/register', [LoginController::class, 'regist'])->name('register');
Route::post('/register', [LoginController::class, 'register'])->name('save');

Route::get('/dasboardadmin', function(){
    return view('dasboardadmin');
})->middleware('KhususAdmin')->name('dasboardadmin');
Route::get('/dasboardpetugas', function(){
    return view('dasboardpetugas');
})->middleware('KhususPetugas')->name('dasboardpetugas');
Route::get('/dasboardkasir', function(){
    return view('dasboardkasir');
})->middleware('KhususKasir')->name('dasboardkasir');
Route::get('/dasboardpelanggan', function(){
    return view('dasboardpelanggan');
})->middleware('KhususPelanggan')->name('dasboardpelanggan');
Route::get('/dasboardguest', function(){
    return view('dasboardguest');
})->middleware('auth')->name('dasboardguest');