<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\WebpageController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/home.html', [WebpageController::class, 'index']);

Route::get('/auth/register',        [AuthController::class, 'register'])        -> name('register');
Route::get('/auth/login',           [AuthController::class, 'login'])           -> name('login');
Route::get('/auth/password-reset',  [AuthController::class, 'passwordReset'])   -> name('passwordReset');
Route::get('/auth/verification',    [AuthController::class, 'verification'])    -> name('verification');


Route::get('/menu', [MenuController::class, 'index']);
Route::get('/game', [GameController::class, 'index']);
// Route::get('/', action: function () {
    // return Inertia::render('Welcome');
// })->name('home');

// Route::get('dashboard', function () {
    // return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// require __DIR__.'/settings.php';
// require __DIR__.'/auth.php';
