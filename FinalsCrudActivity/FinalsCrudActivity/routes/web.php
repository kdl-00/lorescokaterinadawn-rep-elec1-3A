<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

// Public routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Protected routes
Route::middleware(['isLoggedIn'])->group(function () {

    Route::get('/settings', [AuthController::class, 'settings'])->name('settings');
    Route::post('/settings', [AuthController::class, 'updateSettings']);

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/logs', function () {
        $logs = DB::table('logs')->get();
        return view('logs', compact('logs'));
    })->name('logs');
});
