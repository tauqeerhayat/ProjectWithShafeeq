<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Auth;
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


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register-user', [RegisterController::class, 'store'])->name('register-user');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login-user', [LoginController::class, 'store'])->name('login-user');

Route::view('/recover-password', 'auth.recoverPassword');
