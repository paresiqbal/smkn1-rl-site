<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardControllerm;


Route::get('/admin/dashboard', [DashboardControllerm::class, 'index'])->name('dashboard');
