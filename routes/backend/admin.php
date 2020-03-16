<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Controllers\CustomerController;

// All route names are prefixed with 'admin.'.
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('view-list', [CustomerController::class, 'index'])->name('view-cust');
