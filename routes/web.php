<?php

use App\Http\Controllers\mahasiswaController as mahasiswa;
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


Route::get('/', [mahasiswa::class,'index']);
Route::get('/tambah', [mahasiswa::class,'kumis']);
Route::post('/tambah',[mahasiswa::class,'kirim']);
Route::get('/edit/{id}',[mahasiswa::class,'edit']);
Route::put('/edit/{id}',[mahasiswa::class,'update']);
Route::delete('/hapus/{id}',[mahasiswa::class,'hapus']);
