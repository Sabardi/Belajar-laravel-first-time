<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

// Cara mengakses controller di dalam folder
use App\Http\Controllers\admin\AdminController;

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


