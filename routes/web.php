<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

// Login, Register, Logout and Dashboard Portal

Route::controller(AuthController::class)->group(function() {
    Route::get('/register', 'register')->name('auth.register');
    Route::post('/store', 'store')->name('auth.store');
    Route::get('/login', 'login')->name('auth.login');
    Route::post('/authentication', 'authentication')->name('auth.authentication');
    Route::post('/logout', 'logout')->name('auth.logout');
    Route::get('/dashboard', 'dashboard')->name('auth.dashboard')->middleware('auth');
});


Route::get('/', function () {
    return view('welcome');
});
