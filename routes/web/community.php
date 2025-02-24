<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Community\DashboardController;

Route::middleware('auth')->controller(DashboardController::class)->group(function () {
    Route::get('/comunity/dashboard', 'index')->name('dashboard');
});
