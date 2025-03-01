<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ImageUploadController;
use App\Http\Controllers\Admin\NewsController;

Route::middleware('auth')->controller(DashboardController::class)->group(function () {
    Route::get('/admin/dashboard', 'index')->name('dashboard');
});

Route::middleware('auth')->controller(NewsController::class)->group(function () {
    Route::get('/admin/news', 'showNews')->name('show.news');
    Route::get('/admin/create-news', 'showStoreNews')->name('show.create-news');
    Route::post('/admin/create-news', 'storeNews')->name('store.news');
});

Route::post('/upload/image', [ImageUploadController::class, 'uploadImage'])->name('upload.image');
