<?php

use App\Http\Controllers\ApiControllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiControllers\ContentController;
use App\Http\Controllers\ApiControllers\MovieController;

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
Route::post('/add-movie', [MovieController::class, 'create'])->name('create.movie');
