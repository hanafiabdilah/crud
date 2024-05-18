<?php

use App\Http\Controllers\BarangController;
use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/barang', [BarangController::class, 'index'])->name('barang');
Route::get('/barang/tambah', [BarangController::class, 'create'])->name('tambah-barang');
Route::post('/barang/tambah', [BarangController::class, 'store'])->name('store-barang');
Route::get('/barang/edit/{id}', [BarangController::class, 'edit'])->name('edit-barang');
Route::put('/barang/edit/{id}', [BarangController::class, 'update'])->name('update-barang');
Route::delete('/barang/{id}', [BarangController::class, 'delete'])->name('delete-barang');