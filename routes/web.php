<?php

use Illuminate\Support\Facades\Route;


Route::name("admin.")->domain("admin." . env("APP_URL"))->group(function () {
    require __DIR__ . '/web/admin.php';
});

Route::name("users.")->domain("freelancer." . env("APP_URL"))->group(function () {
    require __DIR__ . '/web/user.php';
});

Route::get('/', function () {
    return view('welcome');
});
