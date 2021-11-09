<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [MovieController::class, 'index']); // მთავარი გვერდი

Route::get('/{RandomMovie:slug}', [MovieController::class, 'show']);  // კონკრეტული ფილმის ციტატები

Route::get('/admin/movie', [AdminController::class, 'index']);  // ადმინ პანელი
