<?php

use App\Http\Controllers\RegisteredUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;

Route::view('/', 'dashboard');
Route::view('/dashboard', 'dashboard');

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisteredUserController::class, 'create']);

    Route::get('/login', [SessionController::class, 'create'])->name('login');
});
