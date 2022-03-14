<?php

use App\Http\Controllers\ApiControllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiControllers\ContentController;
use App\Http\Controllers\ApiControllers\MovieController;
use App\Http\Controllers\ApiControllers\QuoteController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('logged-in', [AuthController::class, 'checkAuth']);

Route::get('/random-movie', [ContentController::class, 'index'])->name('random.movie');

Route::get('/all-data', [ContentController::class, 'allData'])->name('all.data')->middleware('auth:sanctum');

//CRUD
Route::post('/add-movie', [MovieController::class, 'create'])->name('create.movie')->middleware('auth:sanctum');
Route::post('/edit-movie', [MovieController::class, 'edit'])->name('edit.movie')->middleware('auth:sanctum');
Route::delete('/delete-movie/{id}', [MovieController::class, 'delete'])->name('delete.movie')->middleware('auth:sanctum');

Route::post('/add-quote', [QuoteController::class, 'create'])->name('create.quote')->middleware('auth:sanctum');
Route::post('/edit-quote', [QuoteController::class, 'edit'])->name('edit.quote')->middleware('auth:sanctum');
Route::delete('delete-quote/{id}', [QuoteController::class, 'delete'])->name('delete.quote')->middleware('auth:sanctum');
