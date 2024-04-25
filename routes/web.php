<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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

Route::get('/', function () {
    return view('welcome');
});

 // Register
//Route::get('register', [AuthController::class, 'register'])->name('register');
//Route::post('register', [AuthController::class, 'register'])->name('register');
Route::match(["get","post"],'register', [AuthController::class, 'register'])->name('register');

// Login
//Route::get('login', [AuthController::class, 'login'])->name('login');
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'accses'])->name('login.accses');

// Dashboard
Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

// Profile
//Route::get('profile', [AuthController::class, 'profile'])->name('profile');
Route::match(["get","post"],'profile', [AuthController::class, 'profile'])->name('profile');
// Logout
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

