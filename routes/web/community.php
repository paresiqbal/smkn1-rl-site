<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Community\DashboardController;

Route::get('/comunity/dashboard', [DashboardController::class, 'index'])->name('dashboard');
