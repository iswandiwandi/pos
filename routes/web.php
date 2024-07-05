<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
  //  return view('welcome');
// });

Route::get('/', [LoginController::class, 'index']);
Route::get('register' , [\App\Http\Controllers\LoginController::class, 'register']);
Route::post('actionRegister' , [\App\Http\Controllers\LoginController::class, 'actionRegister'])->name('actionRegister');
Route::post('actionLogin' , [LoginController::class, 'actionLogin'])->name('actionLogin');

Route::resource('home' , \App\Http\Controllers\HomeController::class);
Route::resource('category' , \App\Http\Controllers\CategoryController::class);
Route::resource('barang' , \App\Http\Controllers\BarangController::class);
Route::resource('namadokter' , \App\Http\Controllers\NamadokterController::class);