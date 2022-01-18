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


Route::get('/', [MovieController::class, 'index'])->name('homepage'); // მთავარი გვერდი
Route::get('/{RandomMovie:slug}', [MovieController::class, 'show'])->name('list');  // კონკრეტული ფილმის ციტატები


// login form only for guest
Route::get('admin/login', [SessionController::class, 'ShowLogin'])->name('admin.login')->middleware('guest');  // login page


//admin
Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::group(['prefix' => 'movie'], function () {
        Route::get('', [AdminController::class, 'index'])->name('admin.movies');  // ფილმების დაშბორდი
        Route::get('create', [AdminController::class, 'create'])->name('movie.create'); // ფილიმის დასამატებელი ფორმის გამოტანა
        Route::post('', [AdminController::class, 'store'])->name('movie.store');  // ფილმის დამატება
        Route::delete('{movie}', [AdminController::class, 'MovieDestroy'])->name('movie.delete');  //ფილმის წაშლა
        Route::get('edit/{movie}', [AdminController::class, 'MovieEdit'])->name('movie.edit');  //ფილმის დაედითება
        Route::patch('update/{movie}', [AdminController::class, 'MovieUpdate'])->name('movie.update');  // ფილმის განახლება
    });

    Route::group(['prefix' => 'quote'], function () {
        Route::get('', [AdminController::class, 'QuoteIndex'])->name('admin.quotes');  //ციტატების დაშბორდი
        Route::get('create', [AdminController::class, 'QuoteCreate'])->name('quote.create');  //ციტატების დასამატებელი ფორის გამოტანა
        Route::post('create', [AdminController::class, 'StoreQuote'])->name('quote.store');  //ციტატის დამატება
        Route::delete('{quote}', [AdminController::class, 'QuoteDestroy'])->name('quote.delete');  //ციტატის წაშლა
        Route::get('edit/{quote}', [AdminController::class, 'QuoteEdit'])->name('quote.edit'); //ციტატის დაედითება
        Route::patch('update/{quote}', [AdminController::class, 'QuoteUpdate'])->name('quote.update');  //ციტატის განახლება
    });
});


Route::post('admin/page', [SessionController::class, 'store'])->name('session.login');  //login functionality
Route::post('admin/logout', [SessionController::class, 'destroy'])->name('session.logout'); //logout

// Route::get('lang/{lang}', [LangController::class, 'change'])->name('language.switch');  //ენის ცვლილება
