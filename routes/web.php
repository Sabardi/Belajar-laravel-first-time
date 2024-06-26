<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

// Cara mengakses controller di dalam folder
use App\Http\Controllers\admin\AdminController;

// memanggil controller collection
use App\Http\Controllers\ColectionController;


Route::get('/Dashboard',[App\Http\Controllers\DashboardController::class, 'index']);
Route::get('/tester',[App\Http\Controllers\DashboardController::class, 'tester']);
Route::get('/tampil',[App\Http\Controllers\DashboardController::class, 'tampil'])->name('Mahasiswa');
Route::get('/dosen',[App\Http\Controllers\DashboardController::class, 'tampilDosen'])->name('Dosen');
Route::get('/galery',[App\Http\Controllers\DashboardController::class, 'tampilGalery'])->name('Galery');

// Cara mengakses controller di dalam folder
Route::get('/adminIndex',[App\Http\Controllers\admin\AdminController::class, 'tampil'])->name('Mahasiswa');
Route::get('/adminDosen',[App\Http\Controllers\admin\AdminController::class, 'tampilDosen'])->name('Dosen');
Route::get('/adminGalery',[App\Http\Controllers\admin\AdminController::class, 'tampilGalery'])->name('Galery');
Route::get('/cobaClass',[App\Http\Controllers\admin\AdminController::class, 'cobaClas']);

// Cara Pembuatan Collection
Route::get('/satu',[App\Http\Controllers\ColectionController::class, 'colectionSatu']);
Route::get('/dua',[App\Http\Controllers\ColectionController::class, 'colectionDua']);
Route::get('/tiga',[App\Http\Controllers\ColectionController::class, 'colectionTiga']);
Route::get('/empat',[App\Http\Controllers\ColectionController::class, 'colectionEmpat']);
Route::get('/lima',[App\Http\Controllers\ColectionController::class, 'colectionLima']);
Route::get('/enam',[App\Http\Controllers\ColectionController::class, 'colectionEnam']);
