<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// auth
Route::get('/register', [])->name('show.register');
Route::get('/login', [])->name('show.login');


Route::name("admin.")->domain("admin." . env("APP_URL"))->group(function () {
    require __DIR__ . '/web/admin.php';
});

Route::name("community.")->domain("community." . env("APP_URL"))->group(function () {
    require __DIR__ . '/web/user.php';
});
