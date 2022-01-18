<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\SessionController;
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


Route::get('/', [MovieController::class, 'index'])->name('homepage'); 
Route::get('/{RandomMovie:slug}', [MovieController::class, 'show'])->name('list');  


// login form only for guest
Route::get('admin/login', [SessionController::class, 'ShowLogin'])->name('admin.login')->middleware('guest');  


//admin
Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::group(['prefix' => 'movie'], function () {
        Route::get('', [AdminController::class, 'index'])->name('admin.movies');  
        Route::get('create', [AdminController::class, 'create'])->name('movie.create'); 
        Route::post('', [AdminController::class, 'store'])->name('movie.store');  
        Route::delete('{movie}', [AdminController::class, 'MovieDestroy'])->name('movie.delete'); 
        Route::get('edit/{movie}', [AdminController::class, 'MovieEdit'])->name('movie.edit'); 
        Route::patch('update/{movie}', [AdminController::class, 'MovieUpdate'])->name('movie.update');  
    });

    Route::group(['prefix' => 'quote'], function () {
        Route::get('', [AdminController::class, 'QuoteIndex'])->name('admin.quotes');  
        Route::get('create', [AdminController::class, 'QuoteCreate'])->name('quote.create'); 
        Route::post('create', [AdminController::class, 'StoreQuote'])->name('quote.store');  
        Route::delete('{quote}', [AdminController::class, 'QuoteDestroy'])->name('quote.delete'); 
        Route::get('edit/{quote}', [AdminController::class, 'QuoteEdit'])->name('quote.edit'); 
        Route::patch('update/{quote}', [AdminController::class, 'QuoteUpdate'])->name('quote.update');
    });
});


Route::post('admin/page', [SessionController::class, 'store'])->name('session.login'); 
Route::post('admin/logout', [SessionController::class, 'destroy'])->name('session.logout'); 