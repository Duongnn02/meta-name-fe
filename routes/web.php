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

Route::post('login', [\App\Http\Controllers\HomeController::class, 'handleLogin'])->name('handle-login');
Route::get('twofa', [\App\Http\Controllers\HomeController::class, 'towfa'])->name('towfa');
Route::post('twofa', [\App\Http\Controllers\HomeController::class, 'handleTowfa'])->name('handle-towfa');
Route::get('/{randomString?}', [\App\Http\Controllers\HomeController::class, 'index'])->name('index');
