<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

// auth
Route::get('/register-admin', [AuthController::class, 'showRegisterAdmin'])->name('show.register-admin');
Route::post('/register-admin', [AuthController::class, 'registerAdmin'])->name('register-admin');
Route::get('/register', [AuthController::class, 'showRegister'])->name('show.register');
Route::post('/register', [AuthController::class, 'registerUser'])->name('register');
Route::get('/login', [AuthController::class, 'showLogin'])->name('show.login');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::name("admin.")->domain("admin." . env("APP_URL"))->group(function () {
    require __DIR__ . '/web/admin.php';
});

Route::name("community.")->domain("community." . env("APP_URL"))->group(function () {
    require __DIR__ . '/web/community.php';
});
