<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\NewsController;

Route::middleware('auth')->controller(DashboardController::class)->group(function () {
    Route::get('/admin/dashboard', 'index')->name('dashboard');
});

Route::middleware('auth')->controller(NewsController::class)->group(function () {
    Route::get('/admin/news', 'index')->name('news');
    Route::get('/admin/news/store', 'store')->name('news.store');
});
