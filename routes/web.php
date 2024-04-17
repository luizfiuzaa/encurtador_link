<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// INDEX
Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('site.index');
Route::get('/redirect', [App\Http\Controllers\IndexController::class, 'redirect'])->name('site.redirect');

// ACCOUNT
Route::get('/register', [App\Http\Controllers\AccountController::class, 'register'])->name('site.register');
Route::get('/recover', [App\Http\Controllers\AccountController::class, 'recover'])->name('site.recover');
Route::get('/login', [App\Http\Controllers\AccountController::class, 'login'])->name('site.login');
Route::get('/logout', [App\Http\Controllers\AccountController::class, 'logout'])->name('site.logout');



// APP
Route::prefix('/app')->group(function () {
    // LINK
    Route::get('/generate', [App\Http\Controllers\LinkController::class, 'generate'])->name('app.generate');
    Route::get('/remove', [App\Http\Controllers\LinkController::class, 'remove'])->name('app.remove');
    Route::get('/list', [App\Http\Controllers\LinkController::class, 'list'])->name('site.list');
});
