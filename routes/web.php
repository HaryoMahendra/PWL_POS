<?php

use App\Http\Controllers\KategoriController;  
use App\Http\Controllers\LevelController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route; 


Route::get('/', [WelcomeController::class, 'index']);

Route::get('/level', [LevelController::class, 'index']);
Route::get('/kategori/create', [KategoriController::class, 'create']);  
Route::post('/kategori', [KategoriController::class, 'store']);
Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit']);
Route::get('/kategori', [KategoriController::class, 'index']);

Route::group(['prefix' => 'user'], function () {
    Route::get('/', [UserController::class, 'index']);  //menampilkan halaman awal user
    Route::post('/list', [UserController::class, 'list']);  //menampilkan data user dalam benttuk json untuk datatables
    Route::get('/create', [UserController::class, 'create']); //menampilkan halaman form tambah user
    Route::post('/', [UserController::class, 'store']); //menyimpan data user baru
    Route::get('/{id}', [UserController::class, 'show']);   //menampilkan detail user    
    Route::get('/{id}/edit', [UserController::class,'edit']); //menampilkan halaman form edit user
    Route::put('/{id}', [UserController::class, 'update']); //menyimppan perubahan data user
    Route::delete('/{id}', [UserController::class, 'destroy']); //menghapus data user
});

Route::group(['prefix' => 'level'], function () {
    Route::get('/', [LevelController::class, 'index']);  //menampilkan halaman awal user
    Route::post('/list', [LevelController::class, 'list']);  //menampilkan data user dalam benttuk json untuk datatables
    Route::get('/create', [LevelController::class, 'create']); //menampilkan halaman form tambah user
    Route::post('/', [LevelController::class, 'store']); //menyimpan data user baru
    Route::get('/{id}', [LevelController::class, 'show']);   //menampilkan detail user    
    Route::get('/{id}/edit', [LevelController::class,'edit']); //menampilkan halaman form edit user
    Route::put('/{id}', [LevelController::class, 'update']); //menyimppan perubahan data user
    Route::delete('/{id}', [LevelController::class, 'destroy']); //menghapus data user
});