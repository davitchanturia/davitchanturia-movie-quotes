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

//admin
Route::get('/admin/movie', [AdminController::class, 'index']);  // ადმინ პანელი
Route::get('/admin/movie/create', [AdminController::class, 'create']); // ადმინის მიერ ფილიმის დასამატებელი ფორმის გამოტანა
Route::post('/admin/movie', [AdminController::class, 'store']);  // ფილმის დამატება

Route::get('/admin/quote/create', [AdminController::class, 'QuoteCreate']);  //ციტატების დასამატებელი ფორის გამოტანა
Route::post('/admin/quote/create', [AdminController::class, 'StoreQuote']);  //ციტატის შექმნა