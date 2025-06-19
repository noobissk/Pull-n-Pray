<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\WebpageController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/home.html', [WebpageController::class, 'index'])->name('index');

// Registration
Route::get('/auth/register', [\App\Http\Controllers\AuthController::class, 'showRegister'])->name('register');
Route::post('/auth/register', [\App\Http\Controllers\AuthController::class, 'register'])->name('register.store');

// Login
Route::get('/auth/login', [\App\Http\Controllers\AuthController::class, 'showLogin'])->name('login');
Route::post('/auth/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login.store');

// Logout
Route::post('/auth/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');


Route::get('/menu/index', [MenuController::class, 'index']);