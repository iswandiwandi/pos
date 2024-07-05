<?php



use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

// Route::get('/' , function () {
 //   return view( 'login' );
//   });

Route::get('/' , [\App\Http\Controllers\LoginController::class, 'index']);
