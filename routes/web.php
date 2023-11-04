<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('index', [
        'title' => 'Home'
    ]);
});

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/dataPeserta', [DashboardController::class, 'dataPeserta'])->middleware('auth');
Route::get('/buktiPembayaran', [DashboardController::class, 'buktiPembayaran'])->middleware('auth');

// Session 
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [UserController::class, 'authenticate']);

// logout
Route::post('/logout', [UserController::class, 'logout']);

// register
Route::get('/daftar', [UserController::class, 'register'])->middleware('guest');
Route::post('/daftar', [UserController::class, 'store']);
