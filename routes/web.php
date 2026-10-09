php artisan make:controller DashboardController<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\StudentController;

Route::get('/home', function () {
    return view('home');
});

Route::get('/admin/dashboard', [DashboardController::class, 'index'])
    ->name('admin.dashboard');

Route::get('/admin/about', [AboutController::class, 'index'])
    ->name('admin.about');

Route::get('/admin/student', [StudentController::class, 'index'])
    ->name('admin.student');

// require __DIR__.'/dashboardurl.php';
